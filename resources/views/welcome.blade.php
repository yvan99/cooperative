@include('components.homepage.top')
<section class="hero-area bg_cover mb-2 pb-5" style="background-image: url(homepage/images/hero-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-content">
                    <h1 class="title"><span>Communicate</span> with your friends and family.</h1>
                    <ul class="nav">
                        <li><a class="main-btn" href="#">Get started <i class="fas fa-angle-right"></i></a></li>
                        <li><a class="main-btn main-btn-2" href="#">Learn more <i
                                    class="fas fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
            {{-- <div class="col-lg-6">
                <div class="hero-thumb">
                    <img src="homepage/images/hero1.png" style="width: 600px !important" alt="">
                </div>
            </div> --}}
        </div>
    </div>
</section>

<section id="intro" class="features-area mt-3">
    <div class="container custom-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="features-box">
                    <div class="features-title">
                        <h3 class="title">Get to know corba’s <br> advanced features.</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="features-item mt-30">
                                <i class="fal fa-comments"></i>
                                <h4 class="title">Simple and reliable messaging</h4>
                                <p>Make. Lights us. Is life all make midst a moveth forth under may Cattle moved
                                    without seas first air beast place after.</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="features-item mt-30">
                                <i class="fal fa-users-crown"></i>
                                <h4 class="title">Make private groups for closed ones</h4>
                                <p>Make. Lights us. Is life all make midst a moveth forth under may Cattle moved
                                    without seas first air beast place after.</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="features-item mt-30">
                                <i class="fal fa-user-lock"></i>
                                <h4 class="title">Your data encrypted and 100% secure</h4>
                                <p>Make. Lights us. Is life all make midst a moveth forth under may Cattle moved
                                    without seas first air beast place after.</p>
                            </div>
                        </div>
                    </div>
                    <div class="features-play">
                        <a class="video-popup" href="https://www.youtube.com/watch?v=MAvJ5FyM6cI"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="download-app-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="download-app-content">
                    <h3 class="title">Download the app with everything for free.</h3>
                    <ul class="nav">
                        <li><a class="main-btn main-btn-3" href="#">Get started <i
                                    class="fas fa-angle-right"></i></a></li>
                        <li><a class="main-btn main-btn-2 main-btn-4" href="#">Learn more <i
                                    class="fas fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="download-app-case">
        <img src="assets/images/download-app-case.png" alt="">
    </div>
</section>



<!--====== HERO PART ENDS ======-->


{{-- @include('components.homepage.footer') --}}
@include('components.homepage.js')
