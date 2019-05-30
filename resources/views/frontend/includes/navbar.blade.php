<!-- Start Header Area -->
<header class="default-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('blogger/img/logo.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/category/1') }}">News</a></li>
                    <li><a href="{{ url('/category/1') }}">Travel</a></li>
                    <li>
                        <a href="{{ url('/search/1') }}">
                            <i class="fa fa-search"></i> Pencarian
                        </a>
                    </li>
                </div>						
        </div>
    </nav>
</header>
<!-- End Header Area -->