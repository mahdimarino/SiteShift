@extends('web_layout')
@section('content')
<style>
    .video-holder {
        margin-bottom: 20px;
        /* Adjust spacing */
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
                <span>Videography</span><br>
                <span>& Reels</span><br>
                <span class="other-color">check our</span><br>
                <span class="other-color">work.</span>
            </div>
        </div>
    </div>
</header>

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
                <blockquote class="instagram-media"
                    data-instgrm-permalink="https://www.instagram.com/reel/DDKk-EbRnqn/?utm_source=ig_web_copy_link"
                    data-instgrm-version="14">
                    <a href="https://www.instagram.com/reel/DDKk-EbRnqn/?utm_source=ig_web_copy_link">View Instagram
                        Video</a>
                </blockquote>
            </div> --}}
        </div>
        <div class="col-10 my-3">
            <div class="video-holder">
               <iframe width="100%" height="400" src="https://www.youtube.com/embed/CYC4SRMmS8o?si=RehMAxj3QpCc3UGj"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </div>
        </div>
        <!-- YouTube Video 3 -->
        <div class="col-10 my-3">
            <div class="video-holder">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/k2Nbh4fhOHY?si=IdqGn1ZgXOzCKf3X"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </div>
        </div>
        <!-- YouTube Video 3 -->
        <div class="col-10 my-3">
            <div class="video-holder">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/aXXdNYfK-wc?si=FI1SNvq4dcSMVNcQ"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </div>
        </div>
        <!-- YouTube Video 4 -->
        <div class="col-10 my-3">
            <div class="video-holder">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/UrMaYthq9UI?si=GQA717cAZcWpHfaf"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</div>
</div>
<!-- YouTube Video 2 -->



@endsection