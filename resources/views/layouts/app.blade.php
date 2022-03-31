


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="TFOLC Ministry Training Academy">
    <meta name="description" content="TFOLC Ministry Training Academy">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">



    <!-- Title -->
    <title>{{ config('app.name', 'TFOLC Ministry Training Academy') }}</title>
    <!-- Favicon -->
    <link href="{{ asset('favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('favicon.ico') }}" sizes="128x128" rel="shortcut icon" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>

.banner-style-one .slide.home6:before {
    background-color: rgba(0,0,0,0.1);
    bottom: 0;
    content: "";
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
}

.our-dashbord {
    background-color: #f9fafc;
    margin-top: 0px;
    position: relative;
}

.btn-thm2 {
  background-color: #D2AF70;
  border-color: #D2AF70;
  color: #ffffff;
  border-radius: 0px;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}



.stylehome1 .mm-navbar {
	border-color: #c51111;
	background-color: #d41d1d;
	height: 60px;
	line-height: 40px;
}

.stylehome1 .mm-navbar,
.stylehome1 .mm-panel  {
	background-color: #d81515;
}

.mobile-menu,.stylehome1{
	background-color: #d81515;
} 


.mm-listitem {
	color: rgba(0, 0, 0, 0.75);
	color: var(--mm-color-text);
	border-bottom: 1px solid #c51111 !important;
	position: relative;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
}


@media only screen and (max-width: 992px) {
.main-banner-wrapper {
		position: relative;
		display: none;
	}
}
</style>



</head>

<body>
    <div class="wrapper">
        <div class="preloader"></div>
        <div class="header_top home6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xl-5">
                        <ul class="home4_header_top_contact">
                            <li class="list-inline-item"><a href="#">(+234) 8033438048</a></li>
                            <li class="list-inline-item"><a href="#">nata@tfolc.org</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-xl-7">
                        <ul class="sign_up_btn home6 dn-smd text-right">



                        <li class="list-inline-item">
                        @guest
                            @if (Route::has('login'))
                                <a href="{{ asset('/login') }}" class="btn btn-md"><i class="flaticon-user"></i>
                                    <span>Login</span></a> 
                            @endif

                            @if (Route::has('register'))
                                    <a href="{{ asset('/register') }}" class="btn btn-md">
                                        <span>Register</span></a>
                            @endif
                        @else
                        <a href="{{ route('home.courses')}}"><span class="btn btn-md"> All Courses</span></a>
                       <a href="{{ route('home.payments')}}"><span class="btn btn-md">Payments</span> </a>
                        <a href="{{ route('home.applications')}}"><span class="btn btn-md"> My Applications</span></a>



                                <a href="{{ asset('/home/profile') }}" class="btn btn-md">
                                        <span>My Profile</span></a>

                                 <a href="#" class="btn btn-md">
                                        <span>Welcome {{ Auth::user()->name }}</span></a>
                        @endif
                        </li>


                            <li class="list-inline-item">
                            </li>
                        </ul><!-- Button trigger modal -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Nav -->
        <header class="header-nav menu_style_home_six navbar-scrolltofixed main-menu">
            <div class="container">
                <!-- Ace Responsive Menu -->
                <nav>
                    <!-- Menu Toggle btn-->
                    <div class="menu-toggle">
                        <img class="nav_logo_img img-fluid" width="80px" height="80px" src="{{ asset('images/logo.png')}}" alt="logo.png">
                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a  style="text-decoration: none;" href="{{ asset('/')}}" class="navbar_brand float-left dn-smd">
                        <img class="logo1 img-fluid" width="80px" height="80px" src="{{ asset('images/logo.png')}}" alt="logo.png">
                        <img class="logo2 img-fluid" width="80px" height="80px" src="{{ asset('images/logo.png')}}" alt="logo.png">
                        <span style="font-size: 11px">Nidus Aquilae <br>Training Academy</span>
                    </a>
                    <div class="menu6_search home6 float-right">
                        <div class="search_overlay">
                            <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                                <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
                            </a>
                            <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
                                <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i
                                        class="fa fa-times"></i></a>
                                <div id="mk-fullscreen-search-wrapper">
                                    <form method="get" id="mk-fullscreen-searchform">
                                        <input type="text" value="" placeholder="Search courses..."
                                            id="mk-fullscreen-search-input">
                                        <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value=""
                                                type="submit"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Responsive Menu Structure-->
                    <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                    <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                        <li class="last">
                            <a href="{{ asset('/contact') }}"><span class="title">Contact</span></a>
                        </li>
                        <li class="list_two">
                            <a href=""><span class="title">Seminars</span></a>
                            <ul>
                                <li><a href="{{ asset('/nuturing') }}">Pastoral Nurturing with Pastor Taiwo</a></li>
                                {{-- <li><a href="{{ asset('/team') }}">Team</a></li> --}}
                            </ul>
                        </li>
                       {{-- <li class="last">
                            <a href="{{ asset('/courses') }}"><span class="title">Courses</span></a>
                        </li> --}}
                        <li class="list_five">
                            <a href="#"><span class="title">Schools</span></a>
                            <ul>
                                <li><a href="{{ asset('/school-of-post-graduate-studies') }}">School of Post Graduate
                                        Studies</a></li>
                                <li><a href="{{ asset('/school-of-ministry') }}">School of Ministry</a></li>
                            </ul>
                        </li>
                        <li class="list_two">
                            <a href="{{ asset('/') }}"><span class="title">About Us</span></a>
                            <ul>
                                <li><a href="{{ asset('/history') }}">History</a></li>
                                <li><a href="{{ asset('/team') }}">Team</a></li>
                            </ul>
                        </li>

                        <li class="list_one">
                            <a href="{{ asset('/') }}"><span class="title">Home</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Responsive Menu -->
            </div>
        </header>


        <!-- Main Header Nav For Mobile -->
        <div id="page" class="stylehome1 h0">
            <div class="mobile-menu" >
                <div class="header stylehome1  " >
                    <div class="main_logo_home2">
                        {{-- <img class="nav_logo_img img-fluid float-left mt20" width="80px" height="80px" src="{{ asset('images/logo.png') }}"
                            alt="header-logo.png"> --}}
                        <span>TFOLC ACADEMY</span>
                    </div>
                    <ul class="menu_bar_home2"   >
                        <li class="list-inline-item">
                        </li>
                        <li class="list-inline-item"><a href="#menu"><span></span></a></li>
                    </ul>
                </div>
            </div><!-- /.mobile-menu -->
            <nav id="menu" class="stylehome1">
                <ul>
 

                 @auth
                    @if(     auth()->user()->hasRole("admin")   )
                    <li><a href="{{ route('admin.users')}}"><span class="flaticon-online-learning"></span> Users</a></li>
                    <li><a href="{{ route('admin.applications')}}"><span class="flaticon-online-learning"></span>Applications</a></li>
                    <li><a href="{{ route('admin.payments')}}"><span class="flaticon-online-learning"></span> Payments</a></li>
                    <li><a href="{{ route('admin.schools')}}"><span class="flaticon-online-learning"></span> Schools</a></li>
                    <li><a href="{{ route('mailinglist.index')}}"><span class="flaticon-online-learning"></span> Mailing List</a></li>
                    <li><a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="flaticon-logout"></span> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @elseif(    auth()->user()->hasRole("user")  )
            
                    <li><a href="{{ route('home.courses')}}"><span class="flaticon-online-learning"></span> All Courses</a></li>
                    <li><a href="{{ route('home.payments')}}"><span class="flaticon-online-learning"></span> Payments</a></li>
                    <li><a href="{{ route('home.applications')}}"><span class="flaticon-online-learning"></span> My Applications</a></li>
                    <li><a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="flaticon-logout"></span> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endif 
                
                @endauth


                @guest

                <li><a href="{{ asset('/') }}"><span class="title">Home</span></a></li>
                <li><span>About Us</span>
                    <ul>
                        <li><a href="{{ asset('/history') }}">History</a></li>
                        <li><a href="{{ asset('/team') }}">Team</a></li>
                    </ul>
                </li>
                <li><span>Schools</span>
                    <ul>
                        <li><a href="{{ asset('/school-of-post-graduate-studies') }}">School of Post Graduate Studies</a></li>
                        <li><a href="{{ asset('/school-of-ministry') }}">School of Ministry</a></li>
                    </ul>
                </li>
                {{-- <li><span>Courses</span>
                    <ul>
                        <li><span>Courses List</span>
                            <ul>
                                <li><a href="page-course-v1.html">Courses v1</a></li>
                                <li><a href="page-course-v2.html">Courses v2</a></li>
                                <li><a href="page-course-v3.html">Courses v3</a></li>
                            </ul>
                        </li>
                        <li><span>Courses Single</span>
                            <ul>
                                <li><a href="page-course-single-v1.html">Single V1</a></li>
                                <li><a href="page-course-single-v2.html">Single V2</a></li>
                                <li><a href="page-course-single-v3.html">Single V3</a></li>
                            </ul>
                        </li>
                        <li><a href="page-instructors.html">Instructors</a></li>
                        <li><a href="page-instructors-single.html">Instructor Single</a></li>
                    </ul>
                </li> --}}
                <li> <a href="{{ asset('/contact') }}"><span class="title">Contact</span></a></li>
                <li><a href="{{ asset('login') }}"><span class="flaticon-user"></span> Login</a></li>
                <li><a href="{{ asset('register') }}"><span class="flaticon-edit"></span> Register</a></li>
                @endguest
            </ul>

              




            </nav>
        </div>











        <div>
            @yield('content')
        </div>



        <!-- Our Footer Middle Area -->
        <section class="footer_middle_area p0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-md-5 col-lg-4 col-xl-3 pb15 pt15">
                        <div class="logo-widget home6">
                            {{-- <img class="img-fluid" src="images/header-logo.png" alt="header-logo.png"> --}}
                            <span>Nidus Aquilae Training Academy</span>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-7 col-lg-5 col-xl-5 pb25 pt25 brdr_left_right home6">
                        <div class="footer_menu_widget home6">
                            <ul>
                                <li class="list-inline-item"><a href="{{ asset('/')}}">Home</a></li>
                                <li class="list-inline-item"><a href="{{ asset('/history')}}">History</a></li>
                                <li class="list-inline-item"><a href="{{ asset('/team')}}">Team</a></li>
                                <li class="list-inline-item"><a href="{{ asset('/contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-md-12 col-lg-3 col-xl-4 pb15 pt15">
                        <div class="footer_social_widget home6 mt15">
                            <ul>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        <!-- Our Footer Bottom Area -->
        <section class="footer_bottom_area pt25 pb25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="copyright-widget text-center">
                            <p>Copyright  2021. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
    </div>
    <!-- Wrapper End -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ace-responsive-menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/snackbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/simplebar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scrollto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.counterup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/progressbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/timepicker.js') }}"></script>
    <!-- Custom script for all pages -->
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>







<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="dob"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>

@stack('scripts')


</body>

</html>
