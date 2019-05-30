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
                                    A Discount Toner Cartridge Is Better Than Ever
                                </h2>
                                <div class="col-lg-4 col-md-12 right-side d-flex justify-content-end">
                                    <div class="desc">
                                        <h2>Mark wiens</h2>
                                        <h3>12 Dec ,2017 11:21 am</h3>
                                    </div>
                                    <div class="user-img">
                                        <img src="{{ asset('blogger/img/user.jpg') }}" alt="">
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
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.
                            </p>
                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed MCSE training.
                            </p>

                            <blockquote>Ea possunt paria non esse. Pudebit te, inquam, illius tabulae, quam Cleanthes sane commode verbis depingere solebat. Urgent tamen et nihil remittunt. An vero displicuit ea, quae tributa est animi virtutibus tanta praestantia? Sint ista Graecorum; Cur igitur, cum de re conveniat, non malumus usitate loqui? Huius ego nunc auctoritatem sequens idem faciam.
                            <cite>Wise Man</cite></blockquote>

                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.
                            </p>
                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed MCSE training.
                            </p>
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