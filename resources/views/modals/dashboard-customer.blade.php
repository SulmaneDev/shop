<div class="modal fade" id="add-customer">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="page-title">
                    <h4>{{ __('customer.modal.add_title') }}</h4>
                </div>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="{{ __('customer.modal.close') }}">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="edit-page-form" action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">

                        {{-- CNIC Front --}}
                        <div class="col-lg-12">
                            <div class="new-employee-field">
                                <div class="profile-pic-upload mb-2">
                                    <div class="profile-pic add-image front-cnic imageFrontCnic" data-topreview="front-cnic">
                                        <span>
                                            <i data-feather="plus-circle" class="plus-down-add"></i>
                                            {{ __('customer.form.cnic_front.placeholder') }}
                                        </span>
                                    </div>
                                    <div class="mb-0">
                                        <div class="image-upload mb-2">
                                            <input name="cnic_front_image" data-preview="front-cnic" id="cnic_front_image" class="front-cnic @error('cnic_front_image') is-invalid @enderror" type="file">
                                            <div class="image-uploads">
                                                <h4>{{ __('customer.form.cnic_front.label') }}</h4>
                                            </div>
                                        </div>
                                        <p>{{ __('customer.form.cnic_front.hint') }}</p>
                                    </div>
                                </div>
                                @error('cnic_front_image') <p class="invalid-feedback">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- CNIC Back --}}
                        <div class="col-lg-12">
                            <div class="new-employee-field">
                                <div class="profile-pic-upload mb-2">
                                    <div class="profile-pic add-image back-cnic imageBackCnic" data-topreview="back-cnic">
                                        <span>
                                            <i data-feather="plus-circle" class="plus-down-add"></i>
                                            {{ __('customer.form.cnic_back.placeholder') }}
                                        </span>
                                    </div>
                                    <div class="mb-0">
                                        <div class="image-upload mb-2">
                                            <input name="cnic_back_image" id="cnic_back_image" data-preview="back-cnic" class="back-cnic @error('cnic_back_image') is-invalid @enderror" type="file">
                                            <div class="image-uploads">
                                                <h4>{{ __('customer.form.cnic_back.label') }}</h4>
                                            </div>
                                        </div>
                                        <p>{{ __('customer.form.cnic_back.hint') }}</p>
                                    </div>
                                </div>
                                @error('cnic_back_image') <p class="invalid-feedback">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- Name --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="name" class="form-label">
                                    {{ __('customer.form.name.label') }} <span class="text-danger">*</span>
                                </label>
                                <input id="name" name="name" type="text"
                                       class="form-control name @error('name') is-invalid @enderror"
                                       placeholder="{{ __('customer.form.name.placeholder') }}">
                                @error('name') <p class="invalid-feedback">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    {{ __('customer.form.email.label') }} <span class="text-danger">*</span>
                                </label>
                                <input id="email" name="email" type="email"
                                       class="form-control email @error('email') is-invalid @enderror"
                                       placeholder="{{ __('customer.form.email.placeholder') }}">
                                @error('email') <p class="invalid-feedback">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- Phone --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="phone" class="form-label">
                                    {{ __('customer.form.phone.label') }} <span class="text-danger">*</span>
                                </label>
                                <input id="phone" name="phone" type="text"
                                       class="form-control phone @error('phone') is-invalid @enderror"
                                       placeholder="{{ __('customer.form.phone.placeholder') }}">
                                @error('phone') <p class="invalid-feedback">{{ $message }}</p> @enderror
                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn me-2 btn-secondary" data-bs-dismiss="modal">
                        {{ __('customer.modal.cancel') }}
                    </button>
                    <button type="submit" class="btn btn-primary">
                        {{ __('customer.modal.submit') }}
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
                <h4 class="fs-20 text-gray-9 fw-bold mb-2 mt-1">{{ __('customer.modal.delete_title') }}</h4>
                <p class="text-gray-6 mb-0 fs-16">{{ __('customer.modal.delete_confirm') }}</p>
                <div class="d-flex justify-content-center mt-3">
                    <a class="btn me-2 btn-secondary fs-13 fw-medium p-2 px-3 shadow-none" data-bs-dismiss="modal">
                        {{ __('customer.modal.cancel') }}
                    </a>
                    <a href="javascript:void(0)" class="btn btn-primary fs-13 fw-medium p-2 px-3 submit-delete">
                        {{ __('customer.modal.confirm_delete') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
