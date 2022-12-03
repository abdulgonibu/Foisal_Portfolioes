@extends('frontend.layouts.master')

@section('content')
<div class="gallery-masonry-wrapper">
    <style>
        .home {
            width: 100%;
            display: grid;
            grid-template-columns: auto auto auto auto;
            gap: 10px;
        }

        img {
            width: 100%;
        }

        @media screen and (max-width: 600px) {
            .home {
                display: grid;
                grid-template-columns: auto;
                gap: 10px;
            }
        }
    </style>

    <!-- Photo Grid -->
    <div class="row">

        <div class="home">
            @foreach ($portfolies as $portfolio)


            <img src="{{(!empty($portfolio->image))?url('public/upload/logo_images/'.$portfolio->image):url('/upload/no-image.png')}}"
                width="100%">
            @endforeach
        </div>

    </div>


</div>


<script src="{{ asset('public/js/jquery-3.4.1.js') }}"></script>





<script>
    $(document).ready(function(){
    $('.gallery-item').magnificPopup({
    type: 'image',
    gallery:{
    enabled:true
  }
});
})
</script>







<script src="{{ asset('public/js/dist/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('public/js/dist/jquery.magnific-popup.js') }}"></script>


<script src="{{ asset('public/js/main.js') }}"></script>
@endsection