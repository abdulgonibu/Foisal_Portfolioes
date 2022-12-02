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

            <p style="text-align:justify;" class="sqsrte-large">Faysal khan is a commercial photographer, valued
                by his clients for his innovative style, his attention to detail and
                his ability to transform a client’s initial germ of an idea into a superb portfolio of images. It is
                unusual to find a
                professional of faysal’s ability and integrity who also possesses a genuine charm and charisma, which
                ensures that his
                clients enjoy working with him time and again ; confident in the knowledge that the results will be
                first class and the
                experience of working with faysal will be valuable, creative and fun. As the most successful people on
                the planet will
                tell you, the ability to project your brand via strong imagery is key to your business success. Engaging
                a professional
                who can not only get the technical stuff right every time, but also go that extra mile, is more than
                most of us can wish
                for, but in faysalkhan photography you get all that and more. To find out how faysal can make the
                difference that makes
                the difference to you, contact him. Or simply browse the portfolio for further inspiration.
            </p>


        </div>
    </div>
    <div class="">
        <img src="{{asset('public/frontend/images/1.jpg')}}" style="width:100%">

    </div>
</div>

@endsection