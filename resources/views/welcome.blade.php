@extends('layouts.app')
@section('content')
    <div class="cover_photo">
        <h1>Heading1</h1>
        <h2>Heading2</h2>
        <button>hello</button>
    </div>
    <div class="about">
        <h1>Title1</h1>
        <h2>title2</h2>
    </div>
    <div class="products">
        <div class="products__card">
            <div class="photo"></div>
            <div class="info_box">
                <div class="product__name">Product name</div>
                <div class="old_price">999$</div>
                <div class="curent_price">777$</div>
            </div>
        </div>
    </div>
@endsection