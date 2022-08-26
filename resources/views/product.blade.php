@extends('layouts.app')
@section('content')

<style>
    img
    {
        min-width: 100%;
        padding: 20px;
    }
    .carousel {
        width:600px;
        /* height:360px; */
    }

    #demo
    {
        width: 100%;
    }
    .wrapper
    {
        display: grid;
        justify-content: center;
        align-items: center;
        grid-template-rows: auto;
        background-color: white
    }
    .product-info
    {
        margin-top: 96px;
    }
    .product-name
    {
        font-size: 40px;
        display: block
    }

    .product-price
    {
        font-size: 25px;
        display: block
    }

    .quantity
    {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 60px;
        background: white;
        border: 1px solid;
        width: 200px;
        font-size: 20px;
    }
    .button-quantity
    {
        height: 100%;
        width: 40px;
        font-size: 24px;
        background-color: white;
        border: none;
    }

    .info-wrapper
    {
        padding: 20px
    }
    .add-to-cart
    {
        background: none;
        width: 100%;
        height: 70px;
        font-size: 20px;
        margin: 15px 0 15px 0;
    }

    .carousel-control-next,
    .carousel-control-prev
    {
        filter: invert(100%); /*make carousel arrows black */
    }

    .description
    {
        font-size: 2.5em;
    }
</style>
<div class="wrapper">
    @isset($product)
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            @foreach($images as $item)
                <button type="button" data-bs-target="#demo" data-bs-slide-to="{{$loop->index}}" class="@if($loop->index == 0) active @endif"></button>
            @endforeach
        </div>
        
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            @foreach($images as $item)
                <div class="carousel-item @if($loop->index == 0) active @endif">
                    <img src="{{$item->image}}" alt="{{$item->name}}" class="d-block" style="width:100%">
                </div>
            @endforeach
        </div>
        
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    <div class="info-wrapper">
        <div class="product-info">
            <span class="product-name">{{$product->name}}</span>
            <span class="product-price">${{$product->price}} CAD</span>
        </div>
        <span style="font-size: 24px">Quantity</span>
        <div class="quantity">
            <button class="button-quantity" id="minus">-</button>
            <span class="quantity_val">1</span>
            <button class="button-quantity" id="plus">+</button>
        </div>
        <button class="add-to-cart" onclick="addToCArt()">Add to cart</button>
        <button class="add-to-cart" style="background: black; color: white; margin-top: 0">Buy it now</button>
        <div class="description">{{$product->description}}</div>
    </div>
    @endisset
</div>

<script>
    $( document ).ready(function() {
        $("#minus").click(function(){
            let quantity = parseInt($(".quantity_val").html());
            if(quantity != 1){
                quantity -= 1;
                $(".quantity_val").html(quantity);
            }
        });

        $("#plus").click(function(){
            let quantity = parseInt($(".quantity_val").html());
            quantity += 1;
            $(".quantity_val").html(quantity);
        });
    });

</script>
@endsection