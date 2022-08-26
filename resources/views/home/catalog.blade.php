@extends('layouts.app')
@section('content')
<div class="filter">
    <div class="filter-top">
        <span class="filter-sort">Filter and sort</span>
        <span class="product-count">{{count($products)}} products</span>
    </div>

    <div class="filter-wrapper">
        <form id="filter_form" action="{{route('catalog')}}" method="get">
        <div class="filter-inner">
                <div class="option-card availability-card">
                    <div class="back">
                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.46398 0.809577C5.43258 0.733346 5.38282 0.666061 5.31912 0.613715C5.25543 0.561368 5.17978 0.525584 5.09891 0.509549C5.01804 0.493513 4.93446 0.497724 4.85561 0.521806C4.77676 0.545888 4.70509 0.589094 4.64698 0.647577L0.646976 4.64758C0.600413 4.69402 0.563471 4.7492 0.538264 4.80994C0.513058 4.87069 0.500083 4.93581 0.500083 5.00158C0.500083 5.06734 0.513058 5.13247 0.538264 5.19321C0.563471 5.25396 0.600413 5.30913 0.646976 5.35558L4.64698 9.35558C4.74086 9.44946 4.8682 9.50221 5.00098 9.50221C5.13375 9.50221 5.26109 9.44946 5.35498 9.35558C5.44886 9.26169 5.50161 9.13435 5.50161 9.00158C5.50161 8.8688 5.44886 8.74146 5.35498 8.64758L2.20798 5.50158H13.001C13.1336 5.50158 13.2608 5.4489 13.3545 5.35513C13.4483 5.26136 13.501 5.13419 13.501 5.00158C13.501 4.86897 13.4483 4.74179 13.3545 4.64802C13.2608 4.55426 13.1336 4.50158 13.001 4.50158H2.20798L5.35498 1.35558C5.42523 1.28563 5.4731 1.19637 5.49251 1.09915C5.51191 1.00193 5.50198 0.90114 5.46398 0.809577Z" fill="#333030"/>
                        </svg>
                        <span>Availability</span>     
                    </div>     
                    <div>
                        <input type="checkbox" name="out_of_stock" id="" @if(isset($request->out_of_stock)) checked="checked" @endif value="out_of_stock">
                        <span>Out of stock</span>
                    </div>
                    <div>
                        <input type="checkbox" name="in_stock" id="" @if(isset($request->in_stock)) checked="checked" @endif value="in_stock">
                        <span>In stock</span>
                    </div>
                </div>
                <div class="option-card price-card">
                    <div class="back">
                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.46398 0.809577C5.43258 0.733346 5.38282 0.666061 5.31912 0.613715C5.25543 0.561368 5.17978 0.525584 5.09891 0.509549C5.01804 0.493513 4.93446 0.497724 4.85561 0.521806C4.77676 0.545888 4.70509 0.589094 4.64698 0.647577L0.646976 4.64758C0.600413 4.69402 0.563471 4.7492 0.538264 4.80994C0.513058 4.87069 0.500083 4.93581 0.500083 5.00158C0.500083 5.06734 0.513058 5.13247 0.538264 5.19321C0.563471 5.25396 0.600413 5.30913 0.646976 5.35558L4.64698 9.35558C4.74086 9.44946 4.8682 9.50221 5.00098 9.50221C5.13375 9.50221 5.26109 9.44946 5.35498 9.35558C5.44886 9.26169 5.50161 9.13435 5.50161 9.00158C5.50161 8.8688 5.44886 8.74146 5.35498 8.64758L2.20798 5.50158H13.001C13.1336 5.50158 13.2608 5.4489 13.3545 5.35513C13.4483 5.26136 13.501 5.13419 13.501 5.00158C13.501 4.86897 13.4483 4.74179 13.3545 4.64802C13.2608 4.55426 13.1336 4.50158 13.001 4.50158H2.20798L5.35498 1.35558C5.42523 1.28563 5.4731 1.19637 5.49251 1.09915C5.51191 1.00193 5.50198 0.90114 5.46398 0.809577Z" fill="#333030"/>
                        </svg>
                        <span>Price</span>     
                    </div>                   
                    <input type="text" id="amount" name="price_range" readonly style="border:0; color:rgb(0, 0, 0); font-weight:bold;">
                    <div class="price-range">
                        <div id="slider-range"></div>
                    </div>
                </div>
                <div class="option-card color-card">
                    <div class="back">
                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.46398 0.809577C5.43258 0.733346 5.38282 0.666061 5.31912 0.613715C5.25543 0.561368 5.17978 0.525584 5.09891 0.509549C5.01804 0.493513 4.93446 0.497724 4.85561 0.521806C4.77676 0.545888 4.70509 0.589094 4.64698 0.647577L0.646976 4.64758C0.600413 4.69402 0.563471 4.7492 0.538264 4.80994C0.513058 4.87069 0.500083 4.93581 0.500083 5.00158C0.500083 5.06734 0.513058 5.13247 0.538264 5.19321C0.563471 5.25396 0.600413 5.30913 0.646976 5.35558L4.64698 9.35558C4.74086 9.44946 4.8682 9.50221 5.00098 9.50221C5.13375 9.50221 5.26109 9.44946 5.35498 9.35558C5.44886 9.26169 5.50161 9.13435 5.50161 9.00158C5.50161 8.8688 5.44886 8.74146 5.35498 8.64758L2.20798 5.50158H13.001C13.1336 5.50158 13.2608 5.4489 13.3545 5.35513C13.4483 5.26136 13.501 5.13419 13.501 5.00158C13.501 4.86897 13.4483 4.74179 13.3545 4.64802C13.2608 4.55426 13.1336 4.50158 13.001 4.50158H2.20798L5.35498 1.35558C5.42523 1.28563 5.4731 1.19637 5.49251 1.09915C5.51191 1.00193 5.50198 0.90114 5.46398 0.809577Z" fill="#333030"/>
                        </svg>
                        <span>Color</span>     
                    </div>    

                    @foreach($colors as $item)
                    <div>

                        <input type="checkbox" class="color_{{$loop->index}}" name="color_{{$loop->index}}" value="{{$item->name}}">
                        <span>{{$item->name}}</span>
                    </div>
                    @endforeach
                </div>
                
                <div class="filter-option availability" style="">
                    <span>Availability</span>
                    <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.537 0.809577C8.5684 0.733346 8.61816 0.666061 8.68186 0.613715C8.74555 0.561368 8.8212 0.525584 8.90207 0.509549C8.98294 0.493513 9.06652 0.497724 9.14537 0.521806C9.22422 0.545888 9.29589 0.589094 9.354 0.647577L13.354 4.64758C13.4006 4.69402 13.4375 4.7492 13.4627 4.80994C13.4879 4.87069 13.5009 4.93581 13.5009 5.00158C13.5009 5.06734 13.4879 5.13247 13.4627 5.19321C13.4375 5.25396 13.4006 5.30913 13.354 5.35558L9.354 9.35558C9.26011 9.44946 9.13278 9.50221 9 9.50221C8.86722 9.50221 8.73989 9.44946 8.646 9.35558C8.55211 9.26169 8.49937 9.13435 8.49937 9.00158C8.49937 8.8688 8.55211 8.74146 8.646 8.64758L11.793 5.50158H1C0.867392 5.50158 0.740215 5.4489 0.646447 5.35513C0.552678 5.26136 0.5 5.13419 0.5 5.00158C0.5 4.86897 0.552678 4.74179 0.646447 4.64802C0.740215 4.55426 0.867392 4.50158 1 4.50158H11.793L8.646 1.35558C8.57575 1.28563 8.52788 1.19637 8.50847 1.09915C8.48906 1.00193 8.49899 0.90114 8.537 0.809577Z" fill="#333030"/>
                    </svg>
                </div>
                <div class="filter-option price">
                    <span>Price</span>
                    <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.537 0.809577C8.5684 0.733346 8.61816 0.666061 8.68186 0.613715C8.74555 0.561368 8.8212 0.525584 8.90207 0.509549C8.98294 0.493513 9.06652 0.497724 9.14537 0.521806C9.22422 0.545888 9.29589 0.589094 9.354 0.647577L13.354 4.64758C13.4006 4.69402 13.4375 4.7492 13.4627 4.80994C13.4879 4.87069 13.5009 4.93581 13.5009 5.00158C13.5009 5.06734 13.4879 5.13247 13.4627 5.19321C13.4375 5.25396 13.4006 5.30913 13.354 5.35558L9.354 9.35558C9.26011 9.44946 9.13278 9.50221 9 9.50221C8.86722 9.50221 8.73989 9.44946 8.646 9.35558C8.55211 9.26169 8.49937 9.13435 8.49937 9.00158C8.49937 8.8688 8.55211 8.74146 8.646 8.64758L11.793 5.50158H1C0.867392 5.50158 0.740215 5.4489 0.646447 5.35513C0.552678 5.26136 0.5 5.13419 0.5 5.00158C0.5 4.86897 0.552678 4.74179 0.646447 4.64802C0.740215 4.55426 0.867392 4.50158 1 4.50158H11.793L8.646 1.35558C8.57575 1.28563 8.52788 1.19637 8.50847 1.09915C8.48906 1.00193 8.49899 0.90114 8.537 0.809577Z" fill="#333030"/>
                    </svg>
                </div>
                <div class="filter-option color">
                    <span>Color</span>
                    <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.537 0.809577C8.5684 0.733346 8.61816 0.666061 8.68186 0.613715C8.74555 0.561368 8.8212 0.525584 8.90207 0.509549C8.98294 0.493513 9.06652 0.497724 9.14537 0.521806C9.22422 0.545888 9.29589 0.589094 9.354 0.647577L13.354 4.64758C13.4006 4.69402 13.4375 4.7492 13.4627 4.80994C13.4879 4.87069 13.5009 4.93581 13.5009 5.00158C13.5009 5.06734 13.4879 5.13247 13.4627 5.19321C13.4375 5.25396 13.4006 5.30913 13.354 5.35558L9.354 9.35558C9.26011 9.44946 9.13278 9.50221 9 9.50221C8.86722 9.50221 8.73989 9.44946 8.646 9.35558C8.55211 9.26169 8.49937 9.13435 8.49937 9.00158C8.49937 8.8688 8.55211 8.74146 8.646 8.64758L11.793 5.50158H1C0.867392 5.50158 0.740215 5.4489 0.646447 5.35513C0.552678 5.26136 0.5 5.13419 0.5 5.00158C0.5 4.86897 0.552678 4.74179 0.646447 4.64802C0.740215 4.55426 0.867392 4.50158 1 4.50158H11.793L8.646 1.35558C8.57575 1.28563 8.52788 1.19637 8.50847 1.09915C8.48906 1.00193 8.49899 0.90114 8.537 0.809577Z" fill="#333030"/>
                    </svg>
                </div>
                <div class="filter-option" style="position: relative">
                    <span>Sort by:</span>
                    <span class="sort_by_val">
                        Best selling
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.639893 1.17711L1.347 0.470001L4.99345 4.11645L8.63989 0.470001L9.347 1.17711L4.99345 5.53066L0.639893 1.17711Z" fill="black"/>
                        </svg>                            
                    </span>
                    <div class="sort_by" style="display:none; position: absolute; right: 10px; top: 100%">
                        <span>Best selling</span>
                        <span>Price: Descending</span>
                        <span>Price: Ascending</span>
                    </div>
                </div>
        </div>
    </form>

        <div class="filter-actions">
            <button class="clear">Clear all</button>
            <button class="apply">Apply</button>
        </div>
    </div>
</div>
<div class="products">
    @foreach ($products as $item)
        <div class="products__card">
            <a href="{{route('showProduct', $item->id)}}">
                <div class="photo">
                    @if($item->image !== null)
                        <img src="{{$item->image}}" style="width:100%; height: 100%" alt="">
                        @if($item->sale_price !== null)
                            <div class="sale">Sale</div>
                        @endif 
                    @endif
                </div>
            </a>
            <div class="info_box">
                <div class="product__name">{{$item->name}}</div>
                @if($item->sale_price !== null)
                    <div class="old_price" style="text-decoration: line-through;">${{$item->price}}</div>
                    <div class="curent_price">${{$item->sale_price}}</div>
                @else
                    <div class="old_price">${{$item->price}}</div>
                @endif
            </div>
        </div>
    @endforeach
</div>

<script>
$( document ).ready(function() {
        
function GetURLParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) 
        {
            return sParameterName[1];
        }
    }
}


let colors = {{count($colors)}};

for (let index = 0; index < colors; index++) {
    console.log(GetURLParameter('color_' + index));
    if(GetURLParameter('color_' + index) !== undefined)
        $('.color_' + index).prop('checked', true);
}



$('.filter-sort').click(function(){
    $('.filter-wrapper').toggleClass('active');
    hideAll();
});


$( "#slider-range" ).slider({
      range: true,
      min: {{$products->min('price')}},
      max: {{$products->max('price')}},
      values: [ {{$products->min('price')}}, {{$products->max('price')}} ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );

$('.filter-option').click(function(){

    hideAll();
    if($(this).hasClass('price')){
        $('.price-card').toggleClass('active');
    }

    if($(this).hasClass('availability')){
        $('.availability-card').toggleClass('active');
    }

    if($(this).hasClass('color')){
        $('.color-card').toggleClass('active');
    }
});

$('.back').click(function(){
    $(this).parent().removeClass('active');
});

$('#price_range').on("change mousemove", function() {
    $('.custom-max-price').html($(this).val());
});

$('.apply').click(function(){
    $('#filter_form').submit();
});

$('.clear').click(function(){
    location.href = '{{route('catalog')}}'
});
function hideAll(){
    let option_cards = $('.option-card');

    //close all previous opened cards
    for (let index = 0; index < option_cards.length; index++) {
        $(option_cards[index]).removeClass('active');
    }
}
});
</script>
@endsection