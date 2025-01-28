@extends('web_layout')
@section('content')
<style>
    .video-holder {
    margin-bottom: 20px; /* Adjust spacing */
    }
    
    .video-holder iframe {
  
    /* Adjust height as needed */
    border: none;
    }
</style>
<header class="container-fluid header">
    <div class="row">
        <div class="col">
            <div class="extra-lg-text">
                <span>perfection is</span><br>
                <span>not a myth</span><br>
                <span class="other-color">check our</span><br>
                <span class="other-color">work.</span>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid project-info">
    <div class="row">
        <div class="col">
            <h2>De Restaurant Branding</h2>
            <div class="lg-text">
                <span>Bringing design</span><br>
                <span>to the table</span>
            </div>
            <div class="normal-text">
                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising<br> pain was
                    born and I will give you a complete account of the system.</p>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="text-box">
                <div class="title">Client</div>
                <p>De Restaurant</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="text-box">
                <div class="title">Website</div>
                <p>derestaurant.com</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="text-box">
                <div class="title">Sector</div>
                <p>Food & Beverages</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="text-box">
                <div class="title">Deliverables</div>
                <p>Branding<br>
                    Branding Strategy<br>
                    Naming & verbal identity<br>
                    Launch & brand campaigns</p>
            </div>
        </div>
    </div> --}}
</div>
<div class="container-fluid project-imgs">
    <div class="row d-flex justify-content-center">
        <div class="col-md-3">
            <!-- Video 1 -->
            <div class="video-holder">
                <video width="100%" autoplay muted>
                    <source src="{{ asset('web/videos/vid1.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            </div>
<div class="col-md-3">
            <!-- Video 2 -->
           <div class="video-holder">
            <video width="100%" autoplay muted>
                <source src="{{ asset('web/videos/vid2.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
</div>
<div class="col-md-3">
            <!-- Video 3 -->
         <div class="video-holder">
            <video width="100%" autoplay muted>
                <source src="{{ asset('web/videos/vid3.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
            {{-- <div class="video-holder">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DDKk-EbRnqn/?utm_source=ig_web_copy_link"
                    data-instgrm-version="14">
                    <a href="https://www.instagram.com/reel/DDKk-EbRnqn/?utm_source=ig_web_copy_link">View Instagram Video</a>
                </blockquote>
            </div> --}}
            </div>
        </div>
    </div>
</div>
<div class="container-fluid other-content">
    <div class="row">
        <div class="col">
            <div class="lg-text">have a project<br>for us?</div>
            <div class="normal-text">
                <p>Contact us and we’ll send you the brief form to fill.<br>
                    Then we’ll contact you within 24 hours.</p>
            </div>
            <div class="btn-holder">
                <a href="{{route('contact')}}" class="cr-btn ex-padding">let’s Create!</a>
            </div>
        </div>
    </div>
</div>

@endsection