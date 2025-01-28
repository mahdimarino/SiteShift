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
['id' => 1, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/lewis-insta.png'],
['id' => 2, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/04/max-champ.png'],
['id' => 3, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/04/Maroc-poster.png'],
['id' => 4, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/psoter-of-the-day-1.png'],
['id' => 5, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/nmr-post.png'],
['id' => 6, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/kolo.png'],
['id' => 7, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/05/jsk-poster.png'],
['id' => 8, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/arda.png'],
['id' => 9, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/CR7.png'],
['id' => 10, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/Mahrez.png'],
['id' => 11, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/garnacho.png'],
['id' => 12, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/affiche.png'],
['id' => 13, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/amoura-1.png'],
['id' => 14, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/CF-1-night.png'],
['id' => 15, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/imane.png'],
['id' => 16, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/35-mat.png'],
['id' => 17, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/Affiche-2.png'],
['id' => 18, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/04/benze.png'],





];
@endphp
<header class="container-fluid header">
    <div class="row">
        <div class="col">
            <div class="extra-lg-text">
                <span>Sport Design</span><br>
                {{-- <span>not a myth</span><br> --}}
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