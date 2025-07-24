@section('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('select2:close', function() {
                setTimeout(() => {
                    document.activeElement.blur();
                }, 0);
            });

        });

        function initPersonSelect2() {
            $('#select-person').select2({
                    dropdownParent: $('#add-purchase'),
                    placeholder: '-- {{ __('purchase.form.select_option') }} --',
                    allowClear: true,
                    minimumInputLength: 0,
                    width: '100%',
                    matcher: function(params, data) {
                        if ($.trim(params.term) === '') return data;

                        const term = params.term.toLowerCase();
                        const label = data.text.toLowerCase();
                        const code = $(data.element).data('code')?.toLowerCase() || '';

                        if (label.includes(term) || code.includes(term)) {
                            return data;
                        }

                        return null;
                    }
                })
                .on('select2:open', function() {
                    setTimeout(() => {
                        $('.select2-search__field').focus();
                    }, 100);
                })
                .on('keypress', function(e) {
                    if (e.which === 13) {
                        e.preventDefault();

                        const input = $('.select2-search__field').val().trim().toLowerCase();
                        const $options = $('#select-person option');

                        const matched = $options.filter(function() {
                            return ($(this).data('code') || '').toLowerCase() === input;
                        });

                        if (matched.length === 1) {
                            $('#select-person').val(matched.val()).trigger('change');
                            $('.select2-search__field').val('');
                            $('#codeAlert').addClass('d-none');
                        } else if (matched.length > 1) {
                            $('#codeAlert').text('Multiple matches found. Please select from the list.').removeClass(
                                'd-none');
                        } else {
                            $('#codeAlert').text('Invalid code. Please select from the list.').removeClass('d-none');
                        }
                    }
                });
        }

        $(document).ready(function() {
            $('#add-purchase').on('shown.bs.modal', function() {
                if (!$('#select-person').hasClass('select2-hidden-accessible')) {
                    initPersonSelect2();
                }
            });
        });
        let imeiIndex = 0;

        function addImeiRow() {
            const template = document.getElementById('imei-template').innerHTML;
            const html = template.replace(/__INDEX__/g, imeiIndex);
            $('#imeis-container').append(html);
            imeiIndex++;
        }

        function addImeiRowIfNone() {
            if ($('#imeis-container').children().length === 0) {
                addImeiRow();
            }
        }

        function findNextAvailableImeiFieldPair() {
            let available = [];
            $('#imeis-container .imei-row').each(function() {
                const imei1 = $(this).find('.imei1-input').val();
                const imei2 = $(this).find('.imei2-input').val();
                if (!imei1 || !imei2) {
                    available.push($(this));
                }
            });
            return available;
        }

        function fillImeisInEmptySlots(imeiList) {
            let remaining = [...imeiList];
            const emptyPairs = findNextAvailableImeiFieldPair();

            emptyPairs.forEach(($row) => {
                const imei1 = remaining.shift();
                const imei2 = remaining.shift();
                if (imei1) $row.find('.imei1-input').val(imei1);
                if (imei2) $row.find('.imei2-input').val(imei2);
            });

            while (remaining.length > 0) {
                addImeiRow();
                const newIndex = imeiIndex - 1;
                const imei1 = remaining.shift();
                const imei2 = remaining.shift();
                if (imei1)
                    $(`input[name="imeis[${newIndex}][imei1]"]`).val(imei1);
                if (imei2)
                    $(`input[name="imeis[${newIndex}][imei2]"]`).val(imei2);
            }
        }

        async function extractImeisFromImage(file) {
            const canvas = document.getElementById("imeiCanvas");
            const ctx = canvas.getContext("2d");

            const imageData = await new Promise((resolve) => {
                const img = new Image();
                img.src = URL.createObjectURL(file);
                img.onload = () => {
                    canvas.width = img.width;
                    canvas.height = img.height;
                    ctx.drawImage(img, 0, 0);
                    const data = ctx.getImageData(0, 0, img.width, img.height);
                    resolve(data);
                    URL.revokeObjectURL(img.src);
                };
            });

            let imeis = [];

            // Try QR
            const qrCode = jsQR(imageData.data, imageData.width, imageData.height);
            if (qrCode) {
                const qrMatches = [...qrCode.data.matchAll(/\b\d{15}\b/g)].map(m => m[0]);
                imeis = imeis.concat(qrMatches);
            }

            // OCR fallback
            const {
                data: {
                    text
                }
            } = await Tesseract.recognize(file, 'eng');
            const ocrMatches = [...text.matchAll(/\b\d{15}\b/g)].map(m => m[0]);
            imeis = imeis.concat(ocrMatches);

            return [...new Set(imeis)];
        }

        $('#processImeiImage').on('click', async function() {
            const $btn = $(this);
            const fileInput = $('#imeiImageInput');
            const file = fileInput[0].files[0];
            if (!file) return alert("Please select an image.");

            $btn.prop("disabled", true).html("Extracting...");

            try {
                const imeis = await extractImeisFromImage(file);
                if (imeis.length === 0) {
                    alert("No IMEIs found.");
                } else {
                    addImeiRowIfNone();
                    fillImeisInEmptySlots(imeis);
                }
                fileInput.val('');
            } catch (err) {
                alert("Error extracting IMEIs: " + err.message);
            } finally {
                $btn.prop("disabled", false).html(`<i class="ti ti-scan"></i> Extract IMEIs from Image`);
            }
        });
    </script>
@endsection
