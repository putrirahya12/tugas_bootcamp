@extends('frontend.includes.template')

@section('title') Home @endsection

@section('content')
    <!-- Banner Area -->
    @include('frontend.includes.banner')

    <!-- Start category Area -->
    <section class="category-area section-gap" id="news">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Latest News from all categories</h1>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p> -->
                    </div>
                </div>
            </div>						
            <div class="active-cat-carusel">
                <div class="item single-cat">
                    <img src="{{ asset($last_post ['photo']) }}" alt="">
                    <p class="date">{{ $last_post ['date'] }}</p>
                    <h4><a href="{{ url('/read/1') }}">{{ $last_post ['title'] }}</a></h4>
                </div>
                <div class="item single-cat">
                    <img src="{{ asset($last_post ['photo']) }}" alt="">
                    <p class="date">{{ $last_post ['date'] }}</p>
                    <h4><a href="{{ url('/read/1') }}">{{ $last_post ['title'] }}</a></h4>
                </div>
                <div class="item single-cat">
                    <img src="{{ asset($last_post ['photo']) }}" alt="">
                    <p class="date">{{ $last_post ['date'] }}</p>
                    <h4><a href="{{ url('/read/1') }}">{{ $last_post ['title'] }}</a></h4>
                </div>							
            </div>												
        </div>	
    </section>
    <!-- End category Area -->
    
    <!-- Start travel Area -->
    <section class="travel-area section-gap" id="travel">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Hot topics from Travel Section</h1>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p> -->
                    </div>
                </div>
            </div>						
            <div class="row">
                <div class="col-lg-6 travel-left">
                    <div class="single-travel media pb-70">
                        <img class="img-fluid d-flex  mr-3" src="{{ asset('blogger/img/t1.jpg') }}" alt="">
                        <div class="dates">
                        <span>20</span>
                        <p>Dec</p>
                        </div>
                        <div class="media-body align-self-center">
                        <h4 class="mt-0"><a href="{{ url('/read/1') }}">Addiction When Gambling
                        Becomes A Problem</a></h4>
                        <p>inappropriate behavior Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="single-travel media">
                        <img class="img-fluid d-flex  mr-3" src="{{ asset('blogger/img/t3.jpg') }}" alt="">
                        <div class="dates">
                        <span>20</span>
                        <p>Dec</p>
                        </div>							  
                        <div class="media-body align-self-center">
                        <h4 class="mt-0"><a href="{{ url('/read/1') }}">Addiction When Gambling
                        Becomes A Problem</a></h4>
                        <p>inappropriate behavior Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>														
                </div>
                <div class="col-lg-6 travel-right">
                    <div class="single-travel media pb-70">
                        <img class="img-fluid d-flex  mr-3" src="{{ asset('blogger/img/t2.jpg') }}" alt="">
                        <div class="dates">
                        <span>20</span>
                        <p>Dec</p>
                        </div>							  
                        <div class="media-body align-self-center">
                        <h4 class="mt-0"><a href="{{ url('/read/1') }}">Addiction When Gambling
                        Becomes A Problem</a></h4>
                        <p>inappropriate behavior Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="single-travel media">
                        <img class="img-fluid d-flex  mr-3" src="{{ asset('blogger/img/t4.jpg') }}" alt="">
                        <div class="dates">
                        <span>20</span>
                        <p>Dec</p>
                        </div>							  
                        <div class="media-body align-self-center">
                        <h4 class="mt-0"><a href="{{ url('/read/1') }}">Addiction When Gambling
                        Becomes A Problem</a></h4>
                        <p>inappropriate behavior Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>								
                </div>
                <a href="{{ url('/read/1') }}" class="primary-btn load-more pbtn-2 text-uppercase mx-auto mt-60">Load More </a>		
            </div>
        </div>					
    </section>
    <!-- End travel Area -->
@endsection