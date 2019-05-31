<!-- start banner Area -->
<section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="{{ asset($last_post['photo']) }}">
    <div class="overlay-bg overlay"></div>
    <div class="container">
        <div class="row fullscreen">
            <div class="banner-content d-flex align-items-center col-lg-12 col-md-12">
                <h1>{{ $last_post['title'] }}</h1>
            </div>	
            <div class="head-bottom-meta d-flex justify-content-between align-items-end col-lg-12">
                <div class="col-lg-6 flex-row d-flex meta-left no-padding">
                </div>
                <div class="col-lg-6 flex-row d-flex meta-right no-padding justify-content-end">
                    <div class="user-meta">
                        <h4 class="text-white">{{ $last_post['author']}}</h4>
                        <p>{{ $last_post['date'] }}</p>
                    </div>
                    <img class="img-fluid user-img" src="{{ asset('blogger/img/user.jpg') }}" alt="">
                </div>
            </div>												
        </div>
    </div>
</section>
<!-- End banner Area -->	