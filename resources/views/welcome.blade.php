@include('components.homepage.top')
<section class="hero-area bg_cover" style="background-image: url(homepage/images/hero-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="title"><span>Communicate</span> with your friends and family.</h1>
                    <ul class="nav">
                        <li><a class="main-btn" href="#">Get started <i class="fas fa-angle-right"></i></a></li>
                        <li><a class="main-btn main-btn-2" href="#">Learn more <i
                                    class="fas fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-thumb">
                    <img src="homepage/images/hero1.png" style="width: 600px !important" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== HERO PART ENDS ======-->


{{-- @include('components.homepage.footer') --}}
@include('components.homepage.js')
