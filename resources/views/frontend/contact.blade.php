@extends('frontend.layouts.master')
@section('content')
<style>
    * {
        box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }


    .contact {
        width: 100%;
        display: grid;
        grid-template-columns: auto auto;
        gap: 60px;
    }

    .text a {
        color: #000;
    }

    @media screen and (max-width: 600px) {
        .contact {
            display: grid;
            grid-template-columns: auto;
            gap: 10px;
        }
    }
</style>
</head>


@foreach($contacts as $contact)
<h3>Contact us</h3>
<div class="contact">
    <div class="contact-wrap w-100 p-md-5 p-4">
        <p class="mb-4">We're open for any suggestion or just to have a chat</p>
        <div id="form-message-warning" class="mb-4"></div>
        <div id="form-message-success" class="mb-4">
            Your message was sent, thank you!
        </div>
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="dbox w-100 d-flex align-items-start">
                    <div class="text">
                        <p><span>Address:</span> {{$contact->address}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dbox w-100 d-flex align-items-start">
                    <div class="text">
                        <p><span>Email:</span> <a href="{{$contact->email}}">{{$contact->email}}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dbox w-100 d-flex align-items-start">
                    <div class="text">
                        <p><span>Phone:</span> <a href="tel://1234567920">{{$contact->mobile}}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 social-media mt-5 text">
            <h3>Follow us here</h3>
            <p>
                <a href="{{$contact->facebook}}">Facebook</a>
                <a href="{{$contact->twitter}}">Twitter</a>
                <a href="{{$contact->youtube}}">Youtube</a>
                <a href="{{$contact->linkedin}}">Dribbble</a>
            </p>
        </div>
    </div>
    @endforeach
    <div>

        <form action="">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="country">Country</label>
            <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
            </select>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>



</div>


@endsection