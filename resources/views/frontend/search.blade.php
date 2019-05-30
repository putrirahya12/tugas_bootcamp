@extends('frontend.includes.template')

@section('title') Pencarian @endsection

@section('content')

    <!-- Start top-section Area -->
    <section class="top-section-area section-gap">
        <div class="container">
            <div class="row justify-content-center align-items-center d-flex">
                <div class="col-lg-8">
                    <div id="imaginary_container">
                        <div class="input-group stylish-input-group">
                            <input type="text" class="form-control" placeholder="Addictionwhen gambling"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Addictionwhen gambling '"
                                required="">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <span class="lnr lnr-magnifier"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                    <p class="mt-20 text-center text-white">169 results found for “Addictionwhen gambling”</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End top-section Area -->
    
    
    <!-- Start post Area -->
    <div class="post-wrapper pt-100">
        <!-- Start post Area -->
        <section class="post-area">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-lg-8">
                        <div class="post-lists">
                            <div class="single-list flex-row d-flex">
                                <div class="thumb">
                                    <div class="date">
                                        <span>20</span><br>Dec
                                    </div>
                                    <img src="{{ asset('blogger/img/asset/l1.jpg') }}" alt="">
                                </div>
                                <div class="detail">
                                    <a href="#">
                                        <h4 class="pb-20">Addiction When Gambling <br>
                                            Becomes A Problem</h4>
                                    </a>
                                    <p>
                                        inappropriate behavior Lorem ipsum dolor sit amet, consecteturinapprop riate
                                        behavior Lorem ipsum dolor sit amet, consectetur.
                                    </p>
                                </div>
                            </div>
                            <div class="single-list flex-row d-flex">
                                <div class="thumb">
                                    <div class="date">
                                        <span>20</span><br>Dec
                                    </div>
                                    <img src="{{ asset('blogger/img/asset/l2.jpg') }}" alt="">
                                </div>
                                <div class="detail">
                                    <a href="#">
                                        <h4 class="pb-20">Addiction When Gambling <br>
                                            Becomes A Problem</h4>
                                    </a>
                                    <p>
                                        inappropriate behavior Lorem ipsum dolor sit amet, consecteturinapprop riate
                                        behavior Lorem ipsum dolor sit amet, consectetur.
                                    </p>
                                </div>
                            </div>
                            <div class="single-list flex-row d-flex">
                                <div class="thumb">
                                    <div class="date">
                                        <span>20</span><br>Dec
                                    </div>
                                    <img src="{{ asset('blogger/img/asset/l3.jpg') }}" alt="">
                                </div>
                                <div class="detail">
                                    <a href="#">
                                        <h4 class="pb-20">Addiction When Gambling <br>
                                            Becomes A Problem</h4>
                                    </a>
                                    <p>
                                        inappropriate behavior Lorem ipsum dolor sit amet, consecteturinapprop riate
                                        behavior Lorem ipsum dolor sit amet, consectetur.
                                    </p>
                                </div>
                            </div>
                            <div class="single-list flex-row d-flex">
                                <div class="thumb">
                                    <div class="date">
                                        <span>20</span><br>Dec
                                    </div>
                                    <img src="{{ asset('blogger/img/asset/l4.jpg') }}" alt="">
                                </div>
                                <div class="detail">
                                    <a href="#">
                                        <h4 class="pb-20">Addiction When Gambling <br>
                                            Becomes A Problem</h4>
                                    </a>
                                    <p>
                                        inappropriate behavior Lorem ipsum dolor sit amet, consecteturinapprop riate
                                        behavior Lorem ipsum dolor sit amet, consectetur.
                                    </p>
                                </div>
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