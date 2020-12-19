{{ floor($product->reviews->avg('rating')*2)/2 }}
@for($i=0;$i<floor(floor($product->reviews->avg('rating')*2)/2);$i++)
    <i class="fas fa-star"></i>
@endfor
@for($j=0;$j<5-floor(floor($product->reviews->avg('rating')*2)/2);$j++)
    @if($j == 0)
        @if(floor($product->reviews->avg('rating')*2)/2 - floor(floor($product->reviews->avg('rating')*2)/2) > 0)
            <i class="fas fa-star-half-alt"></i>
        @else
            <i class="far fa-star"></i>
        @endif
    @else
        <i class="far fa-star"></i>
    @endif
@endfor
