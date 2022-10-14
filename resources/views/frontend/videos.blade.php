@extends('frontend.layouts.master')
@section('content')
<style>
    @media screen and (max-width: 600px) {
        .column iframe {
            height: 300px;
        }
    }
</style>
<div class="row">
    <div class="column">
        @foreach ($videos as $video)
        <iframe src="{{ $video->name }}" width="100%" height="500px" title="YouTube video player"
            class="mt-5 grid-container" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        @endforeach
    </div>
</div>
@endsection