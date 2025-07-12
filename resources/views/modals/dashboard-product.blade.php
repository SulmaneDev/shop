<div class="modal fade" id="add-product">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="page-title">
                    <h4>{{ __('product.modal.add_title') }}</h4>
                </div>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="{{ __('product.modal.close') }}">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="edit-page-form" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">

                        {{-- Image --}}
                        <div class="col-lg-12">
                            <div class="new-employee-field">
                                <div class="profile-pic-upload mb-2">
                                    <div class="profile-pic add-image " data-topreview="art434">
                                        <span>
                                            <i data-feather="plus-circle" class="plus-down-add"></i>
                                            {{ __('product.form.image.placeholder') }}
                                        </span>
                                    </div>
                                    <div class="mb-0">
                                        <div class="image-upload mb-2">
                                            <input name="image" id="image" class="art434 @error('image') is-invalid @enderror" type="file">
                                            <div class="image-uploads">
                                                <h4>{{ __('product.form.image.label') }}</h4>
                                            </div>
                                        </div>
                                        <p>{{ __('product.form.image.hint') }}</p>
                                    </div>
                                </div>
                                @error('image') <p class="invalid-feedback">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        

                        {{-- Name --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="name" class="form-label">
                                    {{ __('product.form.name.label') }} <span class="text-danger">*</span>
                                </label>
                                <input id="name" name="name" type="text"
                                    class="form-control name @error('name') is-invalid @enderror"
                                    placeholder="{{ __('product.form.name.placeholder') }}">
                                @error('name') <p class="invalid-feedback">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- Price --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="price" class="form-label">
                                    {{ __('product.form.price.label') }} <span class="text-danger">*</span>
                                </label>
                                <input id="price" name="price" type="text"
                                    class="form-control price @error('price') is-invalid @enderror"
                                    placeholder="{{ __('product.form.price.placeholder') }}">
                                @error('price') <p class="invalid-feedback">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- Brand --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="brand_id" class="form-label">
                                    {{ __('product.form.brand.label') }} <span class="text-danger">*</span>
                                </label>
                                <select id="brand_id" name="brand_id"
                                    class="form-select brandId @error('brand_id') is-invalid @enderror">
                                    <option value="">{{ __('product.form.brand.placeholder') }}</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                                @error('brand_id') <p class="invalid-feedback">{{ $message }}</p> @enderror
                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn me-2 btn-secondary" data-bs-dismiss="modal">
                        {{ __('product.modal.cancel') }}
                    </button>
                    <button type="submit" class="btn btn-primary">
                        {{ __('product.modal.submit') }}
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
                <h4 class="fs-20 text-gray-9 fw-bold mb-2 mt-1">{{ __('product.modal.delete_title') }}</h4>
                <p class="text-gray-6 mb-0 fs-16">{{ __('product.modal.delete_confirm') }}</p>
                <div class="d-flex justify-content-center mt-3">
                    <a class="btn me-2 btn-secondary fs-13 fw-medium p-2 px-3 shadow-none" data-bs-dismiss="modal">
                        {{ __('product.modal.cancel') }}
                    </a>
                    <a href="javascript:void(0)" class="btn btn-primary fs-13 fw-medium p-2 px-3 submit-delete">
                        {{ __('product.modal.confirm_delete') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
