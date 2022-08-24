@extends('layouts.app')

@section('content')
    <div class="cover_photo">
        <h1>Writing has never felt so good.</h1>
        <h2>Pens with style</h2>
        <a href="{{route('catalog')}}"><button style="height: 50px; width: 100px; font-size: 1.8rem">Catalog</button></a>
    </div>
    <div class="wrapper">
        <div class="about">
            <h1>Obsessive Attention. Intelligent Effort.</h1>
            <h2>Functional handbags made of luxurious and honest materials to improve people's lives in small but mighty ways.</h2>
        </div>
        <div class="products">
            @foreach ($products as $item)
                <div class="products__card">
                    <a href="{{route('showProduct', $item->id)}}">
                        <div class="photo">
                            @if($item->image !== null)
                                <img src="{{$item->image}}" style="width:100%; height: 200px" alt="">
                                @if($item->sale_price !== null)
                                    <div class="sale">Sale</div>
                                @endif 
                            @endif
                        </div>
                    </a>
                    <div class="info_box">
                        <div class="product__name">{{$item->name}}</div>
                        @if($item->sale_price !== null)
                            <div class="old_price" style="text-decoration: line-through;">${{$item->price}} CAD</div>
                            <div class="curent_price">${{$item->sale_price}} CAD</div>
                        @else
                            <div class="old_price">${{$item->price}} CAD</div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection