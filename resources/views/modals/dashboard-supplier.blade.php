<div class="modal fade" id="add-supplier">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="page-title">
                    <h4>{{ __('supplier.modal.add_title') }}</h4>
                </div>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="{{ __('supplier.modal.close') }}">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="edit-page-form" action="{{ route('supplier.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        {{-- Image Upload --}}
                        <div class="col-lg-12">
                            <div class="new-employee-field">
                                <div class="profile-pic-upload mb-2">
                                    <div class="profile-pic add-image" data-topreview="art434">
                                        <span>
                                            <i data-feather="plus-circle" class="plus-down-add"></i>
                                            {{ __('supplier.form.image.placeholder') }}
                                        </span>
                                    </div>
                                    <div class="mb-0">
                                        <div class="image-upload mb-2">
                                            <input data-preview="profile-pic" name="image" id="image" class="art434 @error('image') is-invalid @enderror" type="file">
                                            <div class="image-uploads">
                                                <h4>{{ __('supplier.form.image.label') }}</h4>
                                            </div>
                                        </div>
                                        <p>{{ __('supplier.form.image.hint') }}</p>
                                    </div>
                                </div>
                                @error('image') <p class="invalid-feedback">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- Name --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('supplier.form.name.label') }} <span class="text-danger">*</span></label>
                                <input id="name" name="name" type="text" class="form-control name @error('name') is-invalid @enderror">
                                @error('name') <p class="invalid-feedback">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('supplier.form.email.label') }} <span class="text-danger">*</span></label>
                                <input id="email" name="email" type="email" class="form-control email @error('email') is-invalid @enderror">
                                @error('email') <p class="invalid-feedback">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- Phone --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="phone" class="form-label">{{ __('supplier.form.phone.label') }} <span class="text-danger">*</span></label>
                                <input id="phone" name="phone" type="text" class="form-control phone @error('phone') is-invalid @enderror" style="padding-left: 0px;">
                                @error('phone') <p class="invalid-feedback">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- Address --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="address" class="form-label">{{ __('supplier.form.address.label') }} <span class="text-danger">*</span></label>
                                <input id="address" name="address" type="text" class="form-control address @error('address') is-invalid @enderror">
                                @error('address') <p class="invalid-feedback">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- Shipping Address --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="shipping_address" class="form-label">{{ __('supplier.form.shipping_address.label') }} <span class="text-danger">*</span></label>
                                <input id="shipping_address" name="shipping_address" type="text" class="form-control shippingAddress @error('shipping_address') is-invalid @enderror">
                                @error('shipping_address') <p class="invalid-feedback">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- City --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="city" class="form-label">{{ __('supplier.form.city.label') }} <span class="text-danger">*</span></label>
                                <input id="city" name="city" type="text" class="form-control city @error('city') is-invalid @enderror">
                                @error('city') <p class="invalid-feedback">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn me-2 btn-secondary" data-bs-dismiss="modal">{{ __('supplier.modal.cancel') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('supplier.modal.submit') }}</button>
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
                <h4 class="fs-20 text-gray-9 fw-bold mb-2 mt-1">{{ __('supplier.modal.delete_title') }}</h4>
                <p class="text-gray-6 mb-0 fs-16">{{ __('supplier.modal.delete_confirm') }}</p>
                <div class="d-flex justify-content-center mt-3">
                    <a class="btn me-2 btn-secondary fs-13 fw-medium p-2 px-3 shadow-none" data-bs-dismiss="modal">
                        {{ __('supplier.modal.cancel') }}
                    </a>
                    <a href="javascript:void(0)" class="btn btn-primary fs-13 fw-medium p-2 px-3 submit-delete">
                        {{ __('supplier.modal.confirm_delete') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
