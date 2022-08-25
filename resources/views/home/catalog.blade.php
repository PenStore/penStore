@extends('layouts.app')
@section('content')
    <div class="filter">
        <div class="filter-top">
            <span class="filter-sort">Filter and sort</span>
            <span class="product-count">6 products</span>
        </div>

        <div class="filter-wrapper">
            <div class="filter-inner">
                <div>
                    <span>Color</span>
                </div>
                <div>
                    <span>Sort by:</span>
                    <span>Best selling</span>
                </div>
            </div>
        </div>
    </div>

    

    <script>
        $( document ).ready(function() {
            $('.filter-sort').click(function(){
                $('.filter-wrapper').toggleClass('active');
            });
        });
    </script>
@endsection