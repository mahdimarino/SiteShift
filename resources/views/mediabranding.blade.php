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
['id' => 1, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/06/ecape-2.png'],
['id' => 2, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/06/f150-1.png'],
['id' => 3, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/06/escape-3.png'],
['id' => 4, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/04/Sans-titre-7-18-1-2048x2048.jpg'],
['id' => 5, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/04/Sans-titre-6-17-1-2048x2048.jpg'],
['id' => 6, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/04/Sans-titre-5-16-1-2048x2048.jpg'],
['id' => 7, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/post-rouge-3.png'],
['id' => 8, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/post-rouge-1.png'],
['id' => 10, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/post-rouge-2.png'],
['id' => 11, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/visu7.png'],
['id' => 12, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/visu-3.png'],
['id' => 13, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/visu-6.png'],
['id' => 14, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/04/Sans-titre-1-12-1-2048x2048.jpg'],
['id' => 15, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/04/Sans-titre-2-13-1-2048x2048.jpg'],
['id' => 16, 'image' => 'https://amineousmer.com/wp-content/uploads/2023/04/Sans-titre-3-14-1-2048x2048.jpg'],
['id' => 17, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/Post-IG-02-2048x2048.png'],
['id' => 18, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/Post-IG-03-2048x2048.png'],
['id' => 19, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/Post-IG-04-2048x2048.png'],
['id' => 20, 'image' =>
'https://amineousmer.com/wp-content/uploads/2024/12/Charte-graphique_Plan-de-travail-1-2048x2048.png'],
['id' => 21, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/Charte-graphique-02-2048x2048.png'],
['id' => 23, 'image' => 'https://amineousmer.com/wp-content/uploads/2024/12/Charte-graphique-03-2048x2048.png'],

];
@endphp
<header class="container-fluid header">
    <div class="row">
        <div class="col">
            <div class="extra-lg-text">
                <span>Social Media</span><br>
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