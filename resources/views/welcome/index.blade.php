@extends('layouts.app')

@section('content')





    <!-- 6th Home Slider -->
    <div class="home2-slider">
        <div class="container-fluid p0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-banner-wrapper">
                        <div class="banner-style-one owl-theme owl-carousel">
                            <div class="slide slide-one home6" style="background-image: url(images/home/banner2.png);">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 offset-lg-3 text-center">
                                            <h3 class="banner-title">
                                                {{-- Dove Unıversıty --}}
                                            </h3>
                                            <p>
                                                {{-- Known for its academic excellence the school offers departments and
                                                programs. --}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide slide-one home6" style="background-image: url(images/home/banner3.png);">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 offset-lg-3 text-center">
                                            {{-- <h3 class="banner-title">Self EducatIon Resources and Infos</h3>
                                            <p>Technology is brining a massive wave of evolution on learning things
                                                on different ways</p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="carousel-btn-block banner-carousel-btn">
                                <span class="carousel-btn left-btn"><i class="flaticon-left-arrow left"></i> <span
                                        class="left"> <br> </span></span>
                                <span class="carousel-btn right-btn"><span class="right"> <br> </span> <i
                                        class="flaticon-right-arrow-1 right"></i></span>
                            </div><!-- /.carousel-btn-block banner-carousel-btn -->
                    </div><!-- /.main-banner-wrapper -->
                </div>
            </div>
        </div>
    </div>




    <!-- about Us home6 -->
    <section class="home6_about pt35 bgc-f9">
        <div class="container">
            <div class="row mt60">
                <div class="col-sm-6 col-lg-6 col-xl-6">
                    <div class="becomea_instructor_home3 style1">
                        <div class="bi_grid">
                            <h3>SCHOOL OF POST GRADUATE STUDIES</h3>
                            <p>Teach what you love. Dove Schooll gives you the tools to create an <br class="dn-lg"> online course.</p>
                            <a class="btn btn-dark" href="{{ asset('school-of-post-graduate-studies')}}">Start Now <span class="flaticon-right-arrow-1"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 col-xl-6">
                    <div class="becomea_instructor_home3 style2">
                        <div class="bi_grid">
                            <h3>SCHOOL OF MINISTRY</h3>
                            <p>Get unlimited access to 2,500 of Udemy’s top courses for <br class="dn-lg"> your team.</p>
                            <a class="btn btn-thm2" href="{{ asset('school-of-ministry')}}">Start Now <span class="flaticon-right-arrow-1"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- about Us home6 -->
    <section class="home6_about pt35 bgc-f9">
        <div class="container">
            <div class="row mt60">
                <div class="col-lg-6">
                    <div class="about_box_home6">
                        <div class="details">
                            <h3>Welcome</h3>
                            <p>
                                The Grace Springs Bible College of the Fountain of Life Church, Ilupeju – Lagos was
                                established as part of the vision given to Pastor Taiwo Odukoya the Senior Pastor of the
                                Fountain of Life Church.
                                The guiding Philosophy of the College is the pursuit of excellence in life and ministry with
                                a sound academic base.
                            </p>
                            

                            <div class="form-group ui_kit_button mb0">
                                <a class="btn btn-lg btn-thm2 rounded" href="{{ asset('history')}}">Read More</a>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <div class="thumb"><img class="img-fluid " src="{{ asset('images/home/welcome.png')}}" alt="1.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>









    <!-- Divider -->
    <section class="divider_home1 parallax" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="divider-one">
                        <p class="color-white">STARTING ONLINE LEARNING</p>
                        <h1 class="color-white text-uppercase">Enhance your skIlls with best OnlIne courses</h1>
                        <a class="btn dbxshad btn-lg btn-thm2 rounded" href="{{ route('login') }}">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
