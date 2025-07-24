<style>
    .modal-body {
        max-height: calc(100vh - 200px);
        overflow-y: auto;
    }
</style>
<div class="modal fade" id="add-purchase">
    <div class="modal-dialog purchase modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="page-title">
                    <h4>{{ __('purchase.modals.add_title') }}</h4>
                </div>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="{{ __('purchase.modals.close') }}">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('purchase.store') }}" method="POST" enctype="multipart/form-data"
                class="edit-page-form">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        {{-- Supplier --}}
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="mb-3 add-product">
                                <label class="form-label">{{ __('purchase.form.supplier.label') }}<span
                                        class="text-danger ms-1">*</span></label>
                                <div class="row">
                                    <div class="col-lg-10 col-sm-10 col-10">
                                        <select id="select-person"
                                            class="select2 w-full @error('person_d') is-invalid @enderror"
                                            name="person_d">
                                            <option value="">{{ __('purchase.form.select_option') }}</option>
                                            @foreach ($select_data as $item)
                                                <option value="{{ $item['id'] }}" data-name="{{ $item['name'] }}"
                                                    data-code="{{ $item['code'] }}" data-email="{{ $item['email'] }}"
                                                    data-phone="{{ $item['phone'] }}">
                                                    {{ $item['name'] }} ({{ $item['code'] }}) - {{ $item['email'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('person_d')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Brand --}}
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">{{ __('purchase.form.brand.label') }}<span
                                        class="text-danger ms-1 ">*</span></label>
                                <select class="select2 brandId form-control @error('brand_id') is-invalid @enderror"
                                    name="brand_id">
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}"> {{ $brand->name }}</option>
                                    @endforeach
                                </select>
                                @error('brand_id')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- Product --}}
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">{{ __('purchase.form.product.label') }}<span
                                        class="text-danger ms-1">*</span></label>
                                <select class="select2 form-control productId @error('product_id') is-invalid @enderror"
                                    name="product_id">
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}"> {{ $product->name }}</option>
                                    @endforeach
                                </select>
                                @error('product_id')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Price / Tax / Shipping / Order Tax --}}
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Price <span class="text-danger">*</span></label>
                                <input type="number" step="0.01" name="price"
                                    class="form-control price @error('price') is-invalid @enderror">
                                @error('price')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Tax <span class="text-danger">*</span></label>
                                <input type="number" step="0.01" name="tax"
                                    class="form-control tax @error('tax') is-invalid @enderror">
                                @error('tax')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Shipping <span class="text-danger">*</span></label>
                                <input type="text" name="shipping"
                                    class="form-control shipping @error('shipping') is-invalid @enderror">
                                @error('shipping')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Order Tax <span class="text-danger">*</span></label>
                                <input type="number" step="0.01" name="order_tax"
                                    class="form-control tax @error('order_tax') is-invalid @enderror">
                                @error('order_tax')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" rows="2" class="form-control description @error('description') is-invalid @enderror"></textarea>
                        @error('description')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>


                    {{-- Image Upload --}}
                    <div class="mb-3">
                        <label class="form-label">{{ __('purchase.form.image_upload') }}</label>
                        <input type="file" id="imeiImageInput" class="form-control" accept="image/*" />
                        <small class="form-text text-muted">{{ __('purchase.form.image_hint') }}</small>
                        <button type="button" id="processImeiImage" class="btn btn-sm btn-primary mt-2">
                            <i class="ti ti-scan"></i> Extract IMEIs from Image
                        </button>
                    </div>
                    <canvas id="imeiCanvas" style="display: none;"></canvas>

                    {{-- IMEI Input Section --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label d-flex justify-content-between align-items-center">
                                    {{ __('purchase.form.imeis.label') }} <span class="text-danger ms-1">*</span>
                                    <button type="button" class="btn btn-sm btn-success" onclick="addImeiRow()">
                                        <i class="ti ti-plus"></i> {{ __('purchase.form.imeis.add') }}
                                    </button>
                                </label>
                                <div id="imeis-container" class="row gy-3">
                                    @if (old('imeis'))
                                        @foreach (old('imeis') as $index => $imei)
                                            <div
                                                class="imei-row col-md-6 border rounded p-3 position-relative bg-light">
                                                <div class="mb-2">
                                                    <label class="form-label">IMEI 1 <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="imeis[{{ $index }}][imei1]"
                                                        class="form-control imei1-input"
                                                        value="{{ old('imeis.' . $index . '.imei1') }}" required>
                                                    @error('imeis.' . $index . '.imei1')
                                                        <p class="invalid-feedback">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label">IMEI 2</label>
                                                    <input type="text" name="imeis[{{ $index }}][imei2]"
                                                        class="form-control imei2-input"
                                                        value="{{ old('imeis.' . $index . '.imei2') }}">
                                                    @error('imeis.' . $index . '.imei2')
                                                        <p class="invalid-feedback">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <button type="button"
                                                    class="btn-close position-absolute top-0 end-0 m-2"
                                                    aria-label="Remove"
                                                    onclick="this.closest('.imei-row').remove();"></button>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div id="codeAlert" class="invalid-feedback d-none"></div>
                            </div>
                        </div>
                    </div>

                    {{-- Template --}}
                    <template id="imei-template">
                        <div class="imei-row col-md-6 border rounded p-3 position-relative bg-light">
                            <div class="mb-2">
                                <label class="form-label">IMEI 1 <span class="text-danger">*</span></label>
                                <input type="text" name="imeis[__INDEX__][imei1]" class="form-control imei1-input"
                                    required>
                                @error('imeis.__INDEX__.imei1')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">IMEI 2</label>
                                <input type="text" name="imeis[__INDEX__][imei2]"
                                    class="form-control imei2-input">
                                @error('imeis.__INDEX__.imei2')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                                aria-label="Remove" onclick="this.closest('.imei-row').remove();"></button>
                        </div>
                    </template>

                    {{-- Footer --}}
                    <div class="modal-footer">
                        <button type="button" class="btn me-2 btn-secondary"
                            data-bs-dismiss="modal">{{ __('purchase.buttons.cancel') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('purchase.buttons.submit') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

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
                <h4 class="fs-20 text-gray-9 fw-bold mb-2 mt-1">{{ __('purchase.modals.delete_title') }}</h4>
                <p class="text-gray-6 mb-0 fs-16">{{ __('purchase.modals.delete_confirm') }}</p>
                <div class="d-flex justify-content-center mt-3">
                    <a class="btn me-2 btn-secondary fs-13 fw-medium p-2 px-3 shadow-none" data-bs-dismiss="modal">
                        {{ __('purchase.buttons.cancel') }}
                    </a>
                    <a href="javascript:void(0)" class="btn btn-primary fs-13 fw-medium p-2 px-3 submit-delete">
                        {{ __('purchase.buttons.confirm_delete') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@include("modals.purchase-script")