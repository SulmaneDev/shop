/**
 * Remove Bootstrap related attributes from object.
 * 
 * @param {Object} obj - The object containing data attributes.
 * @returns {Object} A new object without Bootstrap-related attributes (e.g., bs, data-bs).
 */
function removeBootstrapAttributes(obj) {
    return Object.fromEntries(Object.entries(obj).filter(([key]) => !key?.startsWith("bs") && !key?.startsWith("data-bs")));
}

/**
 * Reads the selected image file from an input and renders a preview inside the provided preview target.
 *
 * @param {jQuery} $input - The jQuery-wrapped file input element.
 * @param {jQuery} $previewTarget - The jQuery-wrapped container where the image preview will be rendered.
 */
function previewImage($input, $previewTarget) {
    const file = $input[0].files[0];

    if (file && file.type.startsWith('image/')) {
        const reader = new FileReader();

        reader.onload = function (e) {
            const $img = $('<img>')
                .attr('src', e.target.result)
                .css({
                    width: '100px',
                    height: '100px',
                    objectFit: 'cover',
                    borderRadius: '6px'
                });

            // Clear the preview container and append the new image
            $previewTarget.empty().append($img);
        };

        reader.readAsDataURL(file);
    }
}


$(document).ready(function () {

    /**
     * Reload the current page when .reload-btn is clicked.
     */
    $('.reload-btn').click(function () {
        location.reload();
    });

    $('.add-resource').click(function () {
        const form = $('.edit-page-form');
        $('.add-image').empty();
        form.find('input, select, textarea').each(function () {
            const type = $(this).attr('type');
            if (type === 'checkbox' || type === 'radio') {
                $(this).prop('checked', false);
            } else if (type === 'file') {
                $(this).val('');
                $('.add-image').empty();
            } else {
                if ($(this)?.attr('name')?.startsWith("_")) return;
                $(this).val('');
            }
        });
        form.find('[contenteditable="true"]').text('');
        form.find('select').trigger('change');
        $('.add-image').empty();
    });


    /**
     * Set up form action/method and populate input fields with data-* values when .edit-page-btn is clicked.
     * Supports images, dates, general inputs, and content text updates.
     */
    $('.edit-page-btn').click(function () {
        const form = $('.edit-page-form');
        const attrs = removeBootstrapAttributes($('.edit-page-btn').data());
        const segments = window.location.pathname.split('/').filter(Boolean);
        const basePath = '/' + segments.slice(0, 3).join('/');
        form.attr('action', `${basePath}/edit/${attrs?.id}`);

        const supplierId = attrs.supplierId;
        const customerId = attrs.customerId;

        let personKey = null;

        if (supplierId) {
            personKey = `supplier-${supplierId}`;
        } else if (customerId) {
            personKey = `customer-${customerId}`;
        }
        if (personKey && $('#select-person option[value="' + personKey + '"]').length > 0) {
            $('#select-person').val(personKey).trigger('change.select2');
        } else {
            console.warn("No matching option for", personKey);
        }



        Object.keys(attrs).forEach((key) => {
            const $el = $(`.${key}`);
            const value = attrs[key];

            if (!$el.length && !key.includes('image')) return;

            if (key.includes('image')) {
                const $previewTarget = $(`.add-image.${key}`);
                if (!$previewTarget.length) return;

                $previewTarget.empty().append(`
        <img src="${value}" alt="Image Preview" class="img-fluid"
            style="max-width: 100px; max-height: 100px; object-fit: cover; border-radius: 6px;">
    `);
                return;
            }


            if ($el.is('input[type="date"]') || $el.hasClass('datepicker')) {
                $el.val(value).trigger('change');
                return;
            }

            if ($el.is('input, textarea, select')) {
                $el.val(value).trigger('change');
            } else {
                $el.text(value);
            }
        });
        form.attr('method', "POST");
        form.append('<input type="hidden" name="_method" value="PUT">');
    });

    /**
     * Set up form action for delete confirmation based on clicked .delete-page-btn.
     * Displays a toast if the ID is missing.
     */
    $('.delete-page-btn').click(function () {
        const attrs = removeBootstrapAttributes($('.delete-page-btn').data());
        if (!attrs.id) {
            $showToast('Failed', 'Internal error: No ID provided for deletion.', 'error');
        };
        const form = $('.delete-page-form');
        form.attr('method', "POST");
        form.append(`<input type="hidden" name="_method" value="DELETE">`);
        const segments = window.location.pathname.split('/').filter(Boolean);
        const basePath = '/' + segments.slice(0, 3).join('/');
        form.attr('action', `${basePath}/delete/${attrs?.id}`);

    });

    /**
     * Trigger delete form submission when .submit-delete is clicked.
     */
    $('.submit-delete').click(function () {
        $('.delete-page-submit').click();
    });

    /**
       * When the `.add-image` element is clicked, find the associated input
       * (by class matching `data-topreview`) and trigger its file dialog.
       * Then bind image preview logic to its `change` event.
       */
    $('.add-image').on('click', function () {
        const $button = $(this);
        const inputClass = $button.data('topreview');
        const $input = $(`input.${inputClass}`);
        if (!$input.length) return;
        $button.empty();
        $input.trigger('click');


    });

    /**
     * Global listener for any file input change.
     * Ensures preview also works if the file input was triggered manually.
     */
    $('input[type="file"]').on('input change', function () {
        const $input = $(this);
        const inputClass = $input.data('preview');
        const $preview = $(`.${inputClass}`);
        if ($preview.length) {
            previewImage($input, $preview);
        }
    });

    /**
     * Show a styled Bootstrap toast.
     *
     * @param {string} title - The toast title text.
     * @param {string} message - The main body message.
     * @param {string} [variant='info'] - The toast variant (success, error, warning, info).
     */
    function $showToast(title, message, variant = 'info') {
        const $toastEl = $('#liveToast');
        const el = $toastEl[0];
        const variantClasses = ['bg-success', 'bg-danger', 'bg-warning', 'bg-info', 'text-white'];
        $toastEl.removeClass(variantClasses.join(' '));

        let bgClass = '';
        switch (variant) {
            case 'success':
                bgClass = 'bg-success text-white';
                break;
            case 'error':
                bgClass = 'bg-danger text-white';
                break;
            case 'warning':
                bgClass = 'bg-warning text-dark';
                break;
            case 'info':
            default:
                bgClass = 'bg-info text-white';
                break;
        }

        $toastEl.addClass(bgClass);
        $('.toast-title').text(title);
        $('.toast-description').text(message);
        $('.toast-time').text(Intl.DateTimeFormat('en-US', {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: true
        }).format(new Date()));

        const toast = new bootstrap.Toast(el, {
            delay: 10000,
            autohide: true
        });
        toast.show();
    }

    /**
     * If a global toast config is present, show it on page load.
     */
    if (window?.showToast && typeof (window?.showToast) === "object" && window?.showToast !== null) {
        const { title, description, variant } = window.showToast;
        $showToast(title, description, variant);
    }

});
