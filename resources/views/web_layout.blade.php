<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Shift</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/style.css') }}">
</head>

<body>
    <div class="menu-toggle">
        <div class="icon"></div>
    </div>
    <div class="main-menu">
        <div class="contant-info">
            <div><a href="mailto:hello@cre8.com">Mahdismahi.13@gmail.com</a></div>
            <div>+971 585 7212 89</div>
        </div>
        <div class="menu-links">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="about">About</a></li>
                {{-- <li><a href="work">Work</a></li>
                <li><a href="blog">Blog</a></li> --}}
                <li><a href="contact">Contact</a></li>
            </ul>
        </div>
        <div class="social-media">
            {{-- <div class="social-link-holder"><a href="#">Dribbble</a></div>
            <div class="social-link-holder"><a href="#">Instagram</a></div>
            <div class="social-link-holder"><a href="#">Twitter</a></div>
            <div class="social-link-holder"><a href="#">Facebook</a></div> --}}
        </div>
    </div>
    <nav class="container-fluid cnav">
        <div class="row">
            <div class="col">
                <div class="logo-holder">
                    <a href="index.html"><img class="logo" src="{{ asset('web/images/logo.jpg') }}" alt="CRE8"></a>
                </div>
            </div>
            <div class="col text-right">
                <div class="social-media">
                    {{-- <div class="social-link-holder"><a href="#">Dribbble</a></div>
                    <div class="social-link-holder"><a href="#">Instagram</a></div>
                    <div class="social-link-holder"><a href="#">Twitter</a></div>
                    <div class="social-link-holder"><a href="#">Facebook</a></div> --}}
                </div>
            </div>
        </div>
    </nav>
        @yield('content')
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
      <footer class="container-fluid footer">
        <div class="row">
            <div class="col">
                <div class="lg-text">
                    <span>100% satisfication.</span><br>
                    <span>let’s create</span>
                </div>
                <div class="normal-text">
                    <p>We’ll take your business to the next level, with our proven<br>strategies, latest technologies and
                        friendly creatives that<br>will work to produce the best outcome possible.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="contact-info-holder">
                    <div class="title">Call us</div>
                    <div class="contact-info">+971 585 7212 89</div>
                </div>
            </div>
            <div class="col">
                <div class="contact-info-holder">
                    <div class="title">E-mail</div>
                    <div class="contact-info"><a href="Mahdismahi.13@gmail.com">Mahdismahi.13@gmail.com</a></div>
                    <div class="social-media">
                        {{-- <div class="social-link-holder"><a href="#">Dribbble</a></div>
                        <div class="social-link-holder"><a href="#">Instagram</a></div>
                        <div class="social-link-holder"><a href="#">Twitter</a></div>
                        <div class="social-link-holder"><a href="#">Facebook</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('web/js/jquery.min.js') }}"></script>
    <script src="{{ asset('web/js/popper.min.js') }}"></script>
    <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('web/js/anime.min.js') }}"></script>
    <script src="{{ asset('web/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('web/js/main.js') }}"></script>
    <script async src="//www.instagram.com/embed.js"></script>
    </body>
    
    </html>


