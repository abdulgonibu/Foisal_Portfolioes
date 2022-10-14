@extends('frontend.layouts.master')
@section('content')
<div class="row">
    <div class="column">
        @foreach ($project->projectdetail as $images)
        <img src="{{ !empty($images->image) ? url('public/upload/project_details_images/' . $images->image) : url('public/upload/no-image.png') }}"
            width="100%">
        @endforeach
    </div>
</div>
@endsection