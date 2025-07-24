@props(['image', 'category', 'name', 'price', 'qty', 'id', 'index'])

<div data-index="{{ $index }}" class="product col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-3"
    data-category="{{ $category }}" data-name="{{ $name }}" data-price="{{ $price }}"
    data-qty="{{ $qty }}" data-id="{{ $id }}">
    <div class="product-info card mb-0">
        <a href="javascript:void(0);" class="pro-img">
            <img src="{{ '/storage/' . $image }}" alt="{{ $name }}" class="img-fluid w-100 object-fit-contain"
                style="max-height: 180px; aspect-ratio: 1 / 1; object-fit: contain;" />

            <span><i class="ti ti-circle-check-filled"></i></span>
        </a>
        <h6 class="cat-name">
            <a href="javascript:void(0);">{{ $category }}</a>
        </h6>
        <h6 class="product-name">
            <a href="javascript:void(0);">{{ $name }}</a>
        </h6>
        <div class="d-flex align-items-center justify-content-between price">
            <p class="text-gray-9 mb-0">${{ $price }}</p>
            <div class="qty-item m-0">
                <a href="javascript:void(0);" data-category="{{ $category }}" data-name="{{ $name }}"
                    data-price="{{ $price }}" data-qty="{{ $qty }}" data-id="{{ $id }}"
                    class="dec d-flex justify-content-center align-items-center" data-bs-toggle="tooltip"
                    title="minus">
                    <i class="ti ti-minus"></i>
                </a>
                <input type="text" class="form-control text-center" name="qty" value="{{ $qty }}">
                <a href="javascript:void(0);" data-category="{{ $category }}" data-name="{{ $name }}"
                    data-price="{{ $price }}" data-qty="{{ $qty }}" data-id="{{ $id }}"
                    class="inc d-flex justify-content-center align-items-center" data-bs-toggle="tooltip"
                    title="plus">
                    <i class="ti ti-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
