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
@php
$projects = [
['id' => 1, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/04/Ohashi-3.jpg'],
['id' => 2, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/04/Ohashi-2-1.jpg'],
['id' => 3, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/04/Ohashi-3-1.jpg'],
['id' => 4, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/04/DSC03786-1-1-2048x2048.jpg'],
['id' => 5, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/04/DSC03806-1-1-2048x2048.jpg'],
['id' => 6, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/04/DSC03811-1-1-2048x2048.jpg'],
['id' => 7, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/03/AZ2-1-5.jpg'],
['id' => 8, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/03/DSC04454-1-1-5-2048x2048.jpg'],
['id' => 9, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/03/AZ1-2-6-1.jpg'],



];
@endphp
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

<div class="container-fluid project-imgs">
    <div class="row">
        @foreach ($projects as $project)
        <div class="col-md-4">
            
            <div class="img-holder">
                <img src="{{ $project['image'] }}" alt="Project {{ $project['id'] }}">
            </div>
            
        </div>
@endforeach
    </div>
</div>
</div>


@endsection