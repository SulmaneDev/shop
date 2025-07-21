<div class="tab-content-wrap">
    @include('components.pos-product-search')
    <div class="pos-products">
        <div class="tabs_container">
            <div class="tab_content active" data-tab="all">
                <div class="row g-3">
                    @foreach ($data['pr'] as $key => $productList)
                        @foreach ($productList as $pr)
                            <x-pos-product-template 
                                image="{{ $pr['image'] }}" 
                                category="All" 
                                name="{{ $pr['name'] }}" 
                                price="{{ $pr['price'] }}" 
                                qty="{{ $pr['quantity'] }}" />
                        @endforeach
                    @endforeach
                </div>
            </div>
            
            @foreach ($data['pr'] as $key => $productList)
                <div class="tab_content" data-tab="{{ Str::slug($key) }}">
                    <div class="row g-3">
                        @foreach ($productList as $pr)
                            <x-pos-product-template 
                                image="{{ $pr['image'] }}" 
                                category="{{ $key }}" 
                                name="{{ $pr['name'] }}" 
                                price="{{ $pr['price'] }}" 
                                qty="{{ $pr['quantity'] }}" />
                        @endforeach
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>
