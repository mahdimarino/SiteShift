@extends('web_layout')
@section('content')
<header class="container-fluid header">
    <div class="row">
        <div class="col">
            <div class="lg-text">
                <span>About</span><br>
                <span>The Site Shift</span><br>
                <span class="other-color">design studio.</span>
            </div>
            <div class="normal-text">
                {{-- <p>But I must explain to you how all this mistaken idea of denouncing<br> pleasure and praising pain was
                    born and I will give you a complete<br> account of the system.</p> --}}
            </div>
        </div>
    </div>
</header>
<div class="container-fluid process-section">
    <div class="row">
        <div class="col">
            <div class="lg-text"><span class="other-color">our process</span></div>
            <div class="normal-text">
                <p>At The Site Shift, we transform ideas into digital excellence. Specializing in web and app development, software
                solutions, branding, web and graphic design, 3D visualization, and multimedia production, we are committed to delivering
                cutting-edge solutions that elevate businesses. Whether you're a startup or an established brand, we craft tailor-made
                digital experiences that make an impact. <br><br>With a global team of developers and designers from Canada, Algeria, UAE, and the Philippines, we bring diverse
                expertise and innovative solutions to our clients. We serve businesses across the USA, Canada, Algeria, the Philippines,
                and the UAE, ensuring quality and efficiency in every project. While most of our work is done remotely, we also have a
                dedicated office space in the UAE for in-person collaborations when needed.</p> 
            </div>
        </div>
    </div>
    <div class="lg-text"><span class="other-color">our service</span></div>
    <div class="row justify-content-center">
        
        <div class="col-md-4">
            <div class="text-box">
                <div><h1>Web & App Development</h1> </div>
                <p>We develop dynamic websites, e-commerce platforms, and mobile applications with seamless functionality and intuitive
                user experiences.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-box">
                <div class="title">Software Development</div>
                <p>Custom software solutions to optimize your business processes, improve efficiency, and enhance user engagement.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-box">
                <div class="title">Web & Graphic Designing</div>
                <p>Engaging and modern web design combined with high-quality graphic design to create visually stunning digital experiences.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="text-box">
                <div class="title">Branding & Identity</div>
                <p>From logo creation to brand strategy, we help businesses build strong and memorable identities.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-box">
                <div class="title">3D Visualization & Mockups</div>
                <p>We bring ideas to life with 3D video production, 3D mockups, and realistic product visualizations.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-box">
                <div class="title">Photography & Videography</div>
                <p>Professional photo and video coverage, along with high-end editing, to create stunning visuals for marketing and
                branding.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-box">
                <div class="title">Video & Photo Editing</div>
                <p style="font-size: 1rem">Our expert team enhances your media assets with top-quality photo and video editing services, perfect for
                advertisements, social media, and branding.</p>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container-fluid team-section">
    <div class="row">
        <div class="col">
            <div class="extra-lg-text">
                <span>behind every</span><br>
                <span>great project,</span><br>
                <span>cre8 team!</span>
            </div>
        </div>
    </div>
    <div class="team-photos">
        <div class="team-photos-holder">
            <div class="photo-holder"><img src="images/team1.png" alt=""></div>
            <div class="photo-holder"><img src="images/team2.png" alt=""></div>
            <div class="photo-holder"><img src="images/team3.png" alt=""></div>
            <div class="photo-holder"><img src="images/team4.png" alt=""></div>
            <div class="photo-holder"><img src="images/team5.png" alt=""></div>
            <div class="photo-holder"><img src="images/team6.png" alt=""></div>
        </div>
    </div>
</div>
<div class="container-fluid jobs-section padding-for-team no-padding-bottom">
    <div class="row">
        <div class="col">
            <div class="lg-text"><span class="other-color">job openings</span></div>
        </div>
    </div>
    <div class="row job-box-row">
        <div class="col-sm-7">
            <div class="job-box">
                <div class="title">Frontend developer</div>
                <div class="subtitle">Remote</div>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="btn-holder">
                <a href="#" class="cr-btn black ex-padding">Apply Now</a>
            </div>
        </div>
    </div>
    <div class="row job-box-row">
        <div class="col-sm-7">
            <div class="job-box">
                <div class="title">UX Researcher</div>
                <div class="subtitle">Remote</div>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="btn-holder">
                <a href="#" class="cr-btn black ex-padding">Apply Now</a>
            </div>
        </div>
    </div>
    <div class="row job-box-row">
        <div class="col-sm-7">
            <div class="job-box">
                <div class="title">UI Designer</div>
                <div class="subtitle">London, UK</div>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="btn-holder">
                <a href="#" class="cr-btn black ex-padding">Apply Now</a>
            </div>
        </div>
    </div>
    <div class="row job-box-row">
        <div class="col-sm-7">
            <div class="job-box">
                <div class="title">Client service agent</div>
                <div class="subtitle">London, UK</div>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="btn-holder">
                <a href="#" class="cr-btn black ex-padding">Apply Now</a>
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
</div> --}}


@endsection