<div class="col-md-3 col-sm-3 col-xs-12">
    <div class="box-a marB30">
        <img style="aspect-ratio: 16/9; object-fit: cover; height: 150px;" src="{{ asset($imgurl) }}" alt="{{ $pname }}" />
        <div class="box-detail">
            <h4 class="hover marB5"><a href="coupon-detail/{{ $pid }}">{{ $pname }}</a></h4>
            <p>{{ substr($detail, 0, 30) }}</p>
            <h4>
                <span class="red"><i class="fa fa-usd" aria-hidden="true"></i>{{ $saleprice }}</span>
                <del>
                    <span class="grey"><i class="fa fa-usd" aria-hidden="true"></i>{{ $price }}</span>
                </del>
            </h4>
        </div>
    </div>
</div>
