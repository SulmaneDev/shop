<div class="tab-wrap">
    <ul class="tabs owl-carousel pos-category5 owl-loaded owl-drag"
        style="display: block; height: 100%; overflow: hidden;">
        <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 109px;">
                @foreach ($data['brandsWithProducts'] as $brand)
                    <div class="owl-item {{$loop->first ? "active" : ""}}" style="width: 15.533px;">
                        <li data-target="{{ Str::slug($brand['name']) }}" class="{{$loop->first ? "active" : ""}}">
                            <h6><a href="javascript:void(0);">{{ $brand['name'] }}</a></h6>
                        </li>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                    aria-label="Previous">‹</span></button><button type="button" role="presentation"
                class="owl-next"><span aria-label="Next">›</span></button></div>
        <div class="owl-dots disabled"></div>
    </ul>
</div>
