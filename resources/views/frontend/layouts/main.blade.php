@extends('frontend.layouts.master')

@section('content')
<div class="gallery-masonry-wrapper">
    <style>
        .home {
            width: 100%;
            display: grid;
            grid-template-columns: auto auto;
            gap: 60px;
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
            <img src="{{ !empty($portfolio->image) ? url('public/upload/logo_images/' . $portfolio->image) : url('upload/no-image.png') }}"
                style="width:100%">
            @endforeach
        </div>

    </div>


</div>
@endsection