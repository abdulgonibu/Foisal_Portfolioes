@extends('frontend.layouts.master')
@section('content')
<style>
    .about {
        width: 100%;
        display: grid;
        grid-template-columns: auto auto;
        gap: 30px;
    }

    @media screen and (max-width: 600px) {
        .about {
            display: grid;
            grid-template-columns: auto;
            gap: 10px;
        }
    }
</style>
<div class="about" data-type="page-section" id="about">
    <div class="row sqs-row about" id="about">

        <div class="">

            <h3 style="text-align:justify-center;white-space:pre-wrap;">
                <span class="text"><strong>Welcome!</strong></span>
            </h3>

            <p style="text-align:justify-center;" class="sqsrte-large">Doaa
                is a Cairo born, NYC raised and
                based commercial food photographer
                for advertising agencies and
                editorial clients. Her Egyptian
                roots and upbringing in the world's
                most diverse city allowed her to
                experience food as the ultimate
                connector and the best way to honor
                others from a young age. She still
                holds this vision, and uses her work
                to capture the spirit of community,
                warmth and invitation behind
                beautiful plates of food.
            </p>


        </div>
    </div>
    <div class="">
        <img src="{{asset('public/frontend/images/1.jpg')}}" style="width:100%">

    </div>
</div>

@endsection