<!DOCTYPE html>
<html lang="en">

    <link rel="stylesheet" href="{{asset('gallery.css')}}">
 
<body>
    <section class="gallery">
        <h1>gallery</h1>
        <div class="flex-img1">
            <img src="{{asset('images/penimg.png')}}" alt="" class="image">
            <img src="{{asset('images/penimg2.webp')}}" alt="" class="image">
        </div>
        <div class="flex-img2">
            <img src="{{asset('images/penimg3.jpg')}}" alt="" class="image">
            <img src="{{asset('images/penim9.jpg')}}" alt="" class="image">
        </div>
        <div class="flex-img3">
            <img src="{{asset('images/penimg4.jpg')}}" alt="" class="image">
            <div class="flex-img3 child">
                <img src="{{asset('images/penim3.jpg')}}" alt="" class="image">
                <img src="{{asset('images/penimg7.webp')}}"alt="" class="image">
            </div>
        </div>
        <div class="flex-img2 img4">
            <img src="{{asset('images/penimg8.jpg')}}" alt="" class="image">
            <img src="{{asset('images/penimg.png')}}" alt="" class="image">
        </div>
        <div class="flex-img1 img5">
            <img src="{{asset('images/penimg5.jpg')}}" alt="" class="image">
            <img src="{{asset('images/penimg7.jpg')}}" alt="" class="image">
        </div>
         
        
          
    </section>
</body>
</html>