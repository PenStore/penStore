@extends('layouts.app')

<link rel="stylesheet" href="gallery.css">
 
@section('content')
    <section class="gallery">
        <h1>gallery</h1>
        <div class="flex-img1">
            <img src="https://images.unsplash.com/photo-1604030257241-81a7a60c2c43?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1474&q=80" alt="" class="image">
            <img src="https://images.pexels.com/photos/753695/pexels-photo-753695.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="image">
        </div>
        <div class="flex-img2">
            <img src="https://static4.depositphotos.com/1008244/326/v/600/depositphotos_3266175-stock-illustration-colorfull-pens.jpg" alt="" class="image">
            <img src="https://images.unsplash.com/photo-1587042167052-00701238fb17?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fHBlbnN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="" class="image">
        </div>
        <div class="flex-img3">
            <img src="https://images.unsplash.com/photo-1510936994138-07e06c7c5add?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1476&q=80" alt="" class="image">
            <div class="flex-img3 child">
                <img src="https://images.unsplash.com/photo-1523292643061-ed55f8c45178?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="" class="image">
                <img src="https://images.unsplash.com/photo-1531087131490-07836ca4341d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"alt="" class="image">
            </div>
        </div>
        <div class="flex-img2 img4">
            <img src="https://images.unsplash.com/photo-1605641987825-c1664626d79f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="" class="image">
            <img src="https://images.unsplash.com/photo-1596518431396-db10452634d9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="" class="image">
        </div>
        <div class="flex-img1 img5">
            <img src="https://images.unsplash.com/photo-1584631716657-a78c9d18aaac?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="" class="image">
            <img src="https://images.unsplash.com/photo-1509827908497-9d239de281bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="" class="image">
        </div>
    </section>
@endsection