@extends('frontend.includes.template')

@section('title') Detail xxx @endsection

@section('content')

<!-- Start top-section Area -->
<section class="top-section-area section-gap">
    <div class="container">
        <div class="row justify-content-between align-items-center d-flex">
            <div class="col-lg-8 top-left">
                <h1 class="text-white mb-20">Post Details</h1>
                <ul>
                    <li><a href="index.html">Home</a><span class="lnr lnr-arrow-right"></span></li>
                    <li><a href="category.html">Category</a><span class="lnr lnr-arrow-right"></span></li>
                    <li><a href="single.html">Fashion</a></li>
                </ul>
            </div>
        </div>
    </div>  
</section>
<!-- End top-section Area -->


<!-- Start post wrapper Area -->
<div class="post-wrapper pt-100">
    <!-- Start post Area -->
    <section class="post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="single-page-post">
                        <img class="img-fluid" src="{{ asset('blogger/img/single.jpg') }}" alt="">
                        <div class="top-wrapper ">
                            <div class="row d-flex justify-content-between">
                                <h2 class="col-lg-8 col-md-12 text-uppercase">
                                    
                                </h2>
                                <div class="col-lg-4 col-md-12 right-side d-flex justify-content-end">
                                    <div class="desc">
                                    <h2>{{$detail ['title']}}</h2>
                                        <h3>{{$detail ['date']}}</h3>
                                    </div>
                                    <div class="user-img">
                                        <img src="{{ asset($detail ['image_cover']) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tags">
                            <ul>
                                <li><a href="#">lifestyle</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Fashion</a></li>
                            </ul>
                        </div>
                        <div class="single-post-content">
                            <p>
                                {{$detail['content']}}
                            </p>

                            <blockquote><cite>{{Str::limit($detail['content'],50)}}</cite></blockquote>

                        </div>                        
                    </div>
                </div>
                <div class="col-lg-4 sidebar-area">
                   @include('frontend.includes.sidebar')
                </div>
            </div>
        </div>    
    </section>
    <!-- End post Area -->  
</div>
<!-- End post Area -->

@endsection