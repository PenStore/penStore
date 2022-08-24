@extends('layouts.app')
@section('content')
    <div class="cover_photo">
        <h1>Writing has never felt so good.</h1>
        <h2>Pens with style</h2>
        <button>Catalog</button>
    </div>
    <div class="about">
        <h1>Title1</h1>
        <h2>title2</h2>
    </div>
    @foreach ($products as $item)
        <div class="products">
            <div class="products__card">
                <div class="photo">
                    @if($item->image !== null)
                        <img src="{{$item->image}}" style="width:200px; height: 200px" alt="">
                    @endif
                </div>
                <div class="info_box">
                    <div class="product__name">{{$item->name}}</div>
                    @if($item->sale_price !== null)
                        <div class="old_price" style="text-decoration: line-through;">{{$item->price}}</div>
                        <div class="curent_price">{{$item->sale_price}}</div>
                    @else
                        <div class="old_price">{{$item->price}}</div>
                    @endif

                </div>
            </div>
        </div>
    @endforeach
@endsection