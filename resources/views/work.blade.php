@extends('web_layout')
@section('content')

<header class="container-fluid header">
    <div class="mouse-scroll"></div>
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
<div class="container-fluid box-content">
    <div class="row">
        <div class="col-md-6">
            <div class="boxy img-box">
                <div class="img"><img src="{{ asset('web/images/img1.png')}}" alt=""></div>
                <div class="bottom-text">
                    <div class="link">VIEW THIS PROJECT</div>
                    <div class="text">Hubble eye lenses branding</div>
                </div>
                <a href="project" class="project-link-full"></a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="boxy img-box">
                <div class="img"><img src="{{ asset('web/images/img2.png')}}" alt=""></div>
                <div class="bottom-text">
                    <div class="link">VIEW THIS PROJECT</div>
                    <div class="text">UIUX Design for travel agency</div>
                </div>
                <a href="project" class="project-link-full"></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid box-content">
    <div class="row">
        <div class="col-md-6">
            <div class="boxy img-box">
                <div class="img"><img src="{{ asset('web/images/img3.png')}}" alt=""></div>
                <div class="bottom-text">
                    <div class="link">VIEW THIS PROJECT</div>
                    <div class="text">CoinView App development</div>
                </div>
                <a href="project" class="project-link-full"></a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="boxy img-box">
                <div class="img"><img src="{{ asset('web/images/img4.png')}}" alt=""></div>
                <div class="bottom-text">
                    <div class="link">VIEW THIS PROJECT</div>
                    <div class="text">Hubble package design</div>
                </div>
                <a href="project" class="project-link-full"></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid box-content">
    <div class="row">
        <div class="col-md-6">
            <div class="boxy img-box">
                <div class="img"><img src="{{ asset('web/images/img1.png')}}" alt=""></div>
                <div class="bottom-text">
                    <div class="link">VIEW THIS PROJECT</div>
                    <div class="text">Hubble eye lenses branding</div>
                </div>
                <a href="project" class="project-link-full"></a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="boxy img-box img5">
                <div class="img"><img src="{{ asset('web/images/img5.png')}}" alt=""></div>
                <div class="bottom-text">
                    <div class="link">VIEW THIS PROJECT</div>
                    <div class="text">UIUX Design for travel agency</div>
                </div>
                <a href="project" class="project-link-full"></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid box-content">
    <div class="row">
        <div class="col-md-6">
            <div class="boxy img-box">
                <div class="img"><img src="{{ asset('web/images/img3.png')}}" alt=""></div>
                <div class="bottom-text">
                    <div class="link">VIEW THIS PROJECT</div>
                    <div class="text">CoinView App development</div>
                </div>
                <a href="project" class="project-link-full"></a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="boxy img-box">
                <div class="img"><img src="{{ asset('web/images/img6.png')}}" alt=""></div>
                <div class="bottom-text">
                    <div class="link">VIEW THIS PROJECT</div>
                    <div class="text">Hubble package design</div>
                </div>
                <a href="project" class="project-link-full"></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid default-content">
    <div class="row">
        <div class="col">
            <div class="lg-text">
                <span>Awwward winning</span><br>
                <span>london-based product</span><br>
                <span class="other-color">design studio.</span>
            </div>
            <div class="normal-text">
                <p>But I must explain to you how all this mistaken idea of denouncing<br>
                    pleasure and praising pain was born and I will give you a complete<br>
                    account of the system.</p>
            </div>
            <div class="btn-holder">
                <a href="about.html" class="cr-btn primary">more about us</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid clients-section">
    <div class="row">
        <div class="col">
            <div class="lg-text">
                <span>DELIGHTING OUR</span><br>
                <span>CLIENTS IS OUR</span><br>
                <span>MISSION.</span>
            </div>
            <div class="normal-text">
                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising<br> pain was
                    born and I will give you a complete account of the system.</p>
            </div>
            <div class="clients-logos">
                <div class="logo-holder"><img src="images/client1.png" alt=""></div>
                <div class="logo-holder"><img src="images/client2.png" alt=""></div>
                <div class="logo-holder"><img src="images/client3.png" alt=""></div>
                <div class="logo-holder"><img src="images/client4.png" alt=""></div>
                <div class="logo-holder"><img src="images/client5.png" alt=""></div>
                <div class="logo-holder"><img src="images/client6.png" alt=""></div>
                <div class="logo-holder"><img src="images/client7.png" alt=""></div>
                <div class="logo-holder"><img src="images/client8.png" alt=""></div>
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