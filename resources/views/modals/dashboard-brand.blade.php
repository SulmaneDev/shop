<div class="modal fade" id="add-brand">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="page-title">
                    <h4>{{ __('brand.modal.add_title') }}</h4>
                </div>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="{{ __('brand.modal.close') }}">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="edit-page-form" action="{{ route('brand.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="name" class="form-label">
                                    {{ __('brand.form.name.label') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input id="name" name="name" type="text"
                                    class="form-control name @error('name') is-invalid @enderror"
                                    placeholder="{{ __('brand.form.name.placeholder') }}">
                                @error('name') <p class="invalid-feedback">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn me-2 btn-secondary" data-bs-dismiss="modal">
                        {{ __('brand.modal.cancel') }}
                    </button>
                    <button type="submit" class="btn btn-primary">
                        {{ __('brand.modal.submit') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Delete Modal --}}
<div class="modal fade" id="delete-modal">
    <form class="delete-page-form">
        @csrf
        <button class="delete-page-submit" style="display: none"></button>
    </form>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-5">
            <div class="modal-body text-center p-0">
                <span class="rounded-circle d-inline-flex p-2 bg-danger-transparent mb-2">
                    <i class="ti ti-trash fs-24 text-danger"></i>
                </span>
                <h4 class="fs-20 text-gray-9 fw-bold mb-2 mt-1">{{ __('brand.modal.delete_title') }}</h4>
                <p class="text-gray-6 mb-0 fs-16">{{ __('brand.modal.delete_confirm') }}</p>
                <div class="d-flex justify-content-center mt-3">
                    <a class="btn me-2 btn-secondary fs-13 fw-medium p-2 px-3 shadow-none" data-bs-dismiss="modal">
                        {{ __('brand.modal.cancel') }}
                    </a>
                    <a href="javascript:void(0)" class="btn btn-primary fs-13 fw-medium p-2 px-3 submit-delete">
                        {{ __('brand.modal.confirm_delete') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
