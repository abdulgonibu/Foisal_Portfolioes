@extends('frontend.layouts.master')
@section('content')
<div class="row">
    <div class="column">
        @foreach ($category->portfolies as $logo)
        <img src="{{ !empty($logo->image) ? url('public/upload/logo_images/' . $logo->image) : url('public/upload/no-image.png') }}"
            width="100%">
        @endforeach
    </div>
</div>
@endsection