@extends('web_layout')
@section('content')
<header class="container-fluid header">
    <div class="row">
        <div class="col">
            <div class="lg-text">
                <span>PRODUCT TIPS</span><br>
                <span>DESIGN & BUSINESS</span><br>
                <span class="other-color">cre8 blog</span>
            </div>
            <div class="normal-text">
                <p>You can call it an extra arm that support you with insightful ideas,<br>about business, design,
                    productivity, design or even personal<br> development for business people.</p>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid blog-section">
    <div class="row">
        <div class="col">
            <div class="post-box">
                <div class="text-holder">
                    <a href="post.html" class="title">designing for the web</a>
                    <div class="text">But I must explain to you how all this mistaken idea of denouncing pleasure and
                        praising pain was born and I will give you a complete account of the system.</div>
                </div>
                <div class="img-holder">
                    <img src="{{ asset('web/images/post1.png')}}" alt="">
                </div>
            </div>
            <div class="post-box">
                <div class="text-holder">
                    <a href="post.html" class="title">how to choose the best team</a>
                    <div class="text">But I must explain to you how all this mistaken idea of denouncing pleasure and
                        praising pain was born and I will give you a complete account of the system.</div>
                </div>
                <div class="img-holder">
                    <img src="{{ asset('web/images/post2.png')}}" alt="">
                </div>
            </div>
            <div class="post-box">
                <div class="text-holder">
                    <a href="post.html" class="title">is responsive still effective?</a>
                    <div class="text">But I must explain to you how all this mistaken idea of denouncing pleasure and
                        praising pain was born and I will give you a complete account of the system.</div>
                </div>
                <div class="img-holder">
                    <img src="{{ asset('web/images/post3.png')}}" alt="">
                </div>
            </div>
            <div class="post-box">
                <div class="text-holder">
                    <a href="post.html" class="title">is responsive still effective?</a>
                    <div class="text">But I must explain to you how all this mistaken idea of denouncing pleasure and
                        praising pain was born and I will give you a complete account of the system.</div>
                </div>
                <div class="img-holder">
                    <img src="{{ asset('web/images/post4.png')}}" alt="">
                </div>
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
                <a href="#" class="cr-btn ex-padding">let’s cre8</a>
            </div>
        </div>
    </div>
</div>

@endsection