<div class="tab-content-wrap">
    @include('components.pos-product-search')
    <div class="pos-products">
        <div class="tabs_container">

            @foreach ($data['pr'] as $categoryKey => $productList)
                <div class="tab_content {{$loop->first ? "active" : ""}}" data-tab="{{ Str::slug($categoryKey) }}">
                    <div class="row g-3 list-of-products">
                        @foreach ($productList as $productIndex => $pr)
                            <x-pos-product-template index="{{ $productIndex }}" id="{{ $pr['id'] }}"
                                image="{{ $pr['image'] }}" category="{{ $categoryKey }}" name="{{ $pr['name'] }}"
                                price="{{ $pr['price'] }}" qty="{{ $pr['quantity'] }}" />
                        @endforeach
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>
