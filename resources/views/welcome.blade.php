<!doctype html>
<html class="" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome | Computer Science - Crescent University, Abeokuta</title>
    <meta content="Computer Science Department - Crescent University, Abeokuta" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="logo.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen" />
    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="css/jquery.datetimepicker.css">
    <!-- Magic popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="css/hover-min.css">
    <!-- ReImageGrid CSS -->
    <link rel="stylesheet" href="css/reImageGrid.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernizr Js -->
    <script src="js/modernizr-2.8.3.min.js"></script>
</head>

<body>
<div id="preloader"></div>
<div id="wrapper">
    <header>
        <div id="header2" class="header2-area">
            <div class="header-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="header-top-left">
                                <ul>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+1234567890"> +234(0)7098812551  </a></li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">info@crescent-university.edu.ng</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="header-top-right">
                                <ul>
                                    <li>
                                        <a class="login-btn-area" href="{{route('student.login')}}"><i class="fa fa-lock" aria-hidden="true"></i> Student Portal</a>
                                        {{-- <div class="login-form" id="login-form" style="display: none;">
                                            <div class="title-default-left-bold">Login</div>
                                            <form>
                                                <label>Username or email address *</label>
                                                <input type="text" placeholder="Name or E-mail" />
                                                <label>Password *</label>
                                                <input type="password" placeholder="Password" />
                                                <label class="check">Lost your password?</label>
                                                <span><input type="checkbox" name="remember"/>Remember Me</span>
                                                <button class="default-big-btn" type="submit" value="Login">Login</button>
                                                <button class="default-big-btn form-cancel" type="submit" value="">Cancel</button>
                                            </form>
                                        </div> --}}
                                    </li>
                                    <li>
                                        <a class="login-btn-area" href="{{route('lecturer.login')}}"><i class="fa fa-lock" aria-hidden="true"></i> Staff Portal</a>
                                        {{-- <div class="login-form" id="login-form" style="display: none;">
                                            <div class="title-default-left-bold">Login</div>
                                            <form>
                                                <label>Username or email address *</label>
                                                <input type="text" placeholder="Name or E-mail" />
                                                <label>Password *</label>
                                                <input type="password" placeholder="Password" />
                                                <label class="check">Lost your password?</label>
                                                <span><input type="checkbox" name="remember"/>Remember Me</span>
                                                <button class="default-big-btn" type="submit" value="Login">Login</button>
                                                <button class="default-big-btn form-cancel" type="submit" value="">Cancel</button>
                                            </form>
                                        </div> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-menu-area bg-textPrimary" id="sticker">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-2 col-sm-3">
                            <div class="logo-area">
                                <a href="/"><img class="img-responsive" src="/CUCSD.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-9 col-sm-9">
                            <nav id="desktop-nav">
                                <ul>
                                    <li class="active">
                                        <a href="{{route('index')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{route('about')}}">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Research</a>
                                    </li>
                                    <li>
                                        <a href="#">News/Event</a>
                                    </li>
                                    <li>
                                        <a href="#">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area Start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li>
                                        <a href="{{route('index')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{route('about')}}">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Research</a>
                                    </li>
                                    <li>
                                        <a href="#">Event/News</a>
                                    </li>
                                    <li>
                                        <a href="#">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">Contact</a>
                                    </li>
                                    <li>
                                        <a class="login-btn-area" href="{{route('student.login')}}"><i class="fa fa-lock" aria-hidden="true"></i> Student Portal</a>
                                    </li>
                                    <li>
                                        <a class="login-btn-area" href="{{route('lecturer.login')}}"><i class="fa fa-lock" aria-hidden="true"></i> Staff Portal</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area End -->
    </header>
    <!-- Slider 1 Area Start Here -->
        <div class="slider1-area overlay-default">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">
                    <img src="https://www.radiustheme.com/demo/html/academics/academics/img/slider/1-1.jpg" alt="slider" title="#slider-direction-1" />
                    <img src="https://www.radiustheme.com/demo/html/academics/academics/img/slider/1-2.jpg" alt="slider" title="#slider-direction-2" />
                    <img src="https://www.radiustheme.com/demo/html/academics/academics/img/slider/1-3.jpg" alt="slider" title="#slider-direction-3" />
                </div>
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-1">
                        <div class="title-container s-tb-c">
                            <div class="title1">Welome to the Department of Computer Science, Crescent University, Abeokuta</div>
                            <p style="text-transform: capitalize;">
                                Where the mission is to ensure the delivery of university education in ways that recognize
                                <br>
                                personal discipline and integrity and promote positive societal values.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="slider-direction-2" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-2">
                        <div class="title-container s-tb-c">
                            <div class="title1">We Are Here for You to Live and Learn</div>
                            <p style="text-transform: capitalize;">
                                At crescent university we live and learn. Once we make up our mind to tackle an issue,
                                <br>
                                we begin taking bold steps to improve in that area. This is our philosophy.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="slider-direction-3" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-3">
                        <div class="title-container s-tb-c">
                            <div class="title1">Crescent Varsity Canvasses for National Development</div>
                            <p>Crescent University, Abeokuta, has identified religion and national development as Siamese twins capable of
                                <br>
                                making human life a success, at its tenth founder's day lecture.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider 1 Area End Here -->
        <!-- Service 1 Area Start Here -->
        <div class="service1-area">
            <div class="service1-inner-area">
                <div class="container">
                    <div class="row service1-wrapper">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 service-box1">
                            <div class="service-box-content">
                                <h3><a href="#">Facility</a></h3>
                                <p>We have 100% facility to educate our student</p>
                            </div>
                            <div class="service-box-icon">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 service-box1">
                            <div class="service-box-content">
                                <h3><a href="#">Skilled Lecturers</a></h3>
                                <p>We employed exprerience lecturer to educate our students.</p>
                            </div>
                            <div class="service-box-icon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 service-box1">
                            <div class="service-box-content">
                                <h3><a href="#">Book Library & Store</a></h3>
                                <p>Book library and store are available for students.</p>
                            </div>
                            <div class="service-box-icon">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service 1 Area End Here -->{{--
    <!-- Slider 1 Area Start Here -->
        <div class="slider1-area overlay-default">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">
                    <img src="https://www.radiustheme.com/demo/html/academics/academics/img/slider/4-1.jpg" alt="slider" title="#slider-direction-1" />
                    <img src="https://www.radiustheme.com/demo/html/academics/academics/img/slider/4-2.jpg" alt="slider" title="#slider-direction-2" />
                    <img src="https://www.radiustheme.com/demo/html/academics/academics/img/slider/4-3.jpg" alt="slider" title="#slider-direction-3" />
                </div>
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-1">
                        <div class="title-container s-tb-c">
                            <div class="title1">Best Education For MBA Program</div>
                            <p>Emply dummy text of the printing and typesetting industry orem Ipsum has been the industry's standard
                                <br>dummy text ever sinceprinting and typesetting industry. </p>
                            <div class="slider-btn-area">
                                <a href="index4.html#" class="default-big-btn">Start a Course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-direction-2" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-2">
                        <div class="title-container s-tb-c">
                            <div class="title1">Best Education For HTML Template</div>
                            <p>Emply dummy text of the printing and typesetting industry orem Ipsum has been the industry's standard
                                <br>dummy text ever sinceprinting and typesetting industry. </p>
                            <div class="slider-btn-area">
                                <a href="index4.html#" class="default-big-btn">Start a Course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-direction-3" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-3">
                        <div class="title-container s-tb-c">
                            <div class="title1">Best Education Into PHP</div>
                            <p>Emply dummy text of the printing and typesetting industry orem Ipsum has been the industry's standard
                                <br>dummy text ever sinceprinting and typesetting industry. </p>
                            <div class="slider-btn-area">
                                <a href="index4.html#" class="default-big-btn">Start a Course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Slider 1 Area End Here -->
        <!-- Courses 1 Area Start Here -->
        <div class="about1-area">
            <div class="container">
                <h1 class="about-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">Welcome To Computer Science Department</h1>
                <p class="about-sub-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">
                    The mission of the University is to evolve a unique element for the delivery of University education fused with total quality assurance in ways that will develop personal discipline and integrity and promote societal values.</p>
                {{-- <div class="about-img-holder wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
                    <img src="https://www.radiustheme.com/demo/html/academics/academics/img/about/1.jpg" alt="about" class="img-responsive" />
                </div> --}}
            </div>
        </div>
        <!-- Courses 1 Area End Here -->
        <!-- Counter Area Start Here -->
        {{-- <div class="counter-area bg-primary-deep" style="background-image: url('https://www.radiustheme.com/demo/html/academics/academics/img/banner/4.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s">
                        <h2 class="about-counter title-bar-counter" data-num="80">80</h2>
                        <p>PROFESSIONAL TEACHER</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".40s">
                        <h2 class="about-counter title-bar-counter" data-num="20">20</h2>
                        <p>NEWS COURSES EVERY YEARS</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".60s">
                        <h2 class="about-counter title-bar-counter" data-num="56">56</h2>
                        <p>NEWS COURSES EVERY YEARS</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".80s">
                        <h2 class="about-counter title-bar-counter" data-num="77">77</h2>
                        <p>REGISTERED STUDENTS</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Area End Here -->
        <!-- Lecturers Area Start Here -->
        <div class="lecturers-area">
            <div class="container">
                <h2 class="title-default-left">Our Skilled Lecturers</h2>
            </div>
            <div class="container">
                <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
                    <div class="single-item">
                        <div class="lecturers1-item-wrapper">
                            <div class="lecturers-img-wrapper">
                                <a href="index4.html#"><img class="img-responsive" src="https://www.radiustheme.com/demo/html/academics/academics/img/team/1.jpg" alt="team"></a>
                            </div>
                            <div class="lecturers-content-wrapper">
                                <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                                <span class="item-designation">Senior Finance Lecturer</span>
                                <ul class="lecturers-social">
                                    <li><a href="index4.html#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="lecturers1-item-wrapper">
                            <div class="lecturers-img-wrapper">
                                <a href="index4.html#"><img class="img-responsive" src="https://www.radiustheme.com/demo/html/academics/academics/img/team/2.jpg" alt="team"></a>
                            </div>
                            <div class="lecturers-content-wrapper">
                                <h3 class="item-title"><a href="index4.html#">Mike Hussy</a></h3>
                                <span class="item-designation">Senior Finance Lecturer</span>
                                <ul class="lecturers-social">
                                    <li><a href="index4.html#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="lecturers1-item-wrapper">
                            <div class="lecturers-img-wrapper">
                                <a href="index4.html#"><img class="img-responsive" src="https://www.radiustheme.com/demo/html/academics/academics/img/team/3.jpg" alt="team"></a>
                            </div>
                            <div class="lecturers-content-wrapper">
                                <h3 class="item-title"><a href="index4.html#">Daziy Millar</a></h3>
                                <span class="item-designation">Senior Finance Lecturer</span>
                                <ul class="lecturers-social">
                                    <li><a href="index4.html#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="lecturers1-item-wrapper">
                            <div class="lecturers-img-wrapper">
                                <a href="index4.html#"><img class="img-responsive" src="https://www.radiustheme.com/demo/html/academics/academics/img/team/4.jpg" alt="team"></a>
                            </div>
                            <div class="lecturers-content-wrapper">
                                <h3 class="item-title"><a href="index4.html#">Kazi Fahim</a></h3>
                                <span class="item-designation">Senior Finance Lecturer</span>
                                <ul class="lecturers-social">
                                    <li><a href="index4.html#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="lecturers1-item-wrapper">
                            <div class="lecturers-img-wrapper">
                                <a href="index4.html#"><img class="img-responsive" src="https://www.radiustheme.com/demo/html/academics/academics/img/team/1.jpg" alt="team"></a>
                            </div>
                            <div class="lecturers-content-wrapper">
                                <h3 class="item-title"><a href="index4.html#">Rosy Janner</a></h3>
                                <span class="item-designation">Senior Finance Lecturer</span>
                                <ul class="lecturers-social">
                                    <li><a href="index4.html#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="lecturers1-item-wrapper">
                            <div class="lecturers-img-wrapper">
                                <a href="index4.html#"><img class="img-responsive" src="https://www.radiustheme.com/demo/html/academics/academics/img/team/2.jpg" alt="team"></a>
                            </div>
                            <div class="lecturers-content-wrapper">
                                <h3 class="item-title"><a href="index4.html#">Mike Hussy</a></h3>
                                <span class="item-designation">Senior Finance Lecturer</span>
                                <ul class="lecturers-social">
                                    <li><a href="index4.html#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="index4.html#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Lecturers Area End Here -->
        <!-- News and Event Area Start Here -->
        <div class="news-event-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 event-inner-area">
                        <h2 class="title-default-left">Campus Video Tour</h2>
                        <div class="video-area2 overlay-video bg-common-style" style="background-image: url('https://www.radiustheme.com/demo/html/academics/academics/img/banner/2.jpg');">
                            <div class="video-content">
                                <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM"><i class="fa fa-play" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 news-inner-area">
                        <h2 class="title-default-left">Latest News</h2>
                        <ul class="news-wrapper news-wrapper-responsive">
                            <li>
                                <div class="news-img-holder">
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/news/1.jpg" class="img-responsive" alt="news"></a>
                                </div>
                                <div class="news-content-holder">
                                    <h3><a href="single-news.html">Summer Course Start From 1st June</a></h3>
                                    <div class="post-date">June 15, 2017</div>
                                    <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge.</p>
                                </div>
                            </li>
                            <li>
                                <div class="news-img-holder">
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/news/2.jpg" class="img-responsive" alt="news"></a>
                                </div>
                                <div class="news-content-holder">
                                    <h3><a href="single-news.html">Guest Interview will Occur Soon</a></h3>
                                    <div class="post-date">June 15, 2017</div>
                                    <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge.</p>
                                </div>
                            </li>
                            <li>
                                <div class="news-img-holder">
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/news/3.jpg" class="img-responsive" alt="news"></a>
                                </div>
                                <div class="news-content-holder">
                                    <h3><a href="single-news.html">Easy English Learning Way</a></h3>
                                    <div class="post-date">June 15, 2017</div>
                                    <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="news-btn-holder">
                            <a href="index4.html#" class="view-all-accent-btn">View All</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- News and Event Area End Here -->
        <!-- Countdown Area Start Here -->
        {{-- <div class="countdown-area bg-primary-deep-fixed" style="background-image: url('https://www.radiustheme.com/demo/html/academics/academics/img/banner/3.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="countdown-content">
                            <h1>Green Life Event</h1>
                            <div class="countdown-date"> On This 01 Jan, 2017</div>
                            <a href="index4.html#" class="ghost-btn">Join With Us</a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                        <div class="countdown-content">
                            <div id="countdown"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Countdown Area End Here -->
        <!-- Students Say Area Start Here -->
        <div class="students-say-area">
            <h2 class="title-default-center">What Our Students Say</h2>
            <div class="container">
                <div class="rc-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="true" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2" data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="2" data-r-large-nav="false" data-r-large-dots="true">
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="profile-img-wrapper">
                                <a href="#" class="profile-img"></a>
                            </div>
                            <div class="tlp-tm-content-wrapper">
                                <h3 class="item-title"><a href="#">ABDUL'AKEEM ADESOKAN</a></h3>
                                <span class="item-designation">Graduated</span>

                                <div class="item-content">Quality education is beyond what we are taught, it's defined by how much opportunity is given to us to learn beyond what could be imparted. Crescent University gives all it takes to be greater than our dreams.</div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="profile-img-wrapper">
                                <a href="#" class="profile-img"></a>
                            </div>
                            <div class="tlp-tm-content-wrapper">
                                <h3 class="item-title"><a href="#">ADARAMOLA</a></h3>
                                <span class="item-designation">Manager</span>
                                <div class="item-content">With Crescent University behind me as a force, I am ready for the world.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Students Say Area End Here -->
        <!-- Students Join 1 Area Start Here -->
        <div class="students-join1-area">
            <div class="container">
                <div class="students-join1-wrapper">
                    <div class="students-join1-left">
                        <div id="ri-grid" class="author-banner-bg ri-grid header text-center">
                            <ul class="ri-grid-list">
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student8.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student8.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student8.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/students/student8.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="students-join1-right">
                        <div>
                            <h2>Join<span> 29,12,093</span> Students.</h2>
                            <a href="index4.html#" class="join-now-btn">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Students Join 1 Area End Here -->
        <!-- Brand Area Start Here -->
        {{-- <div class="brand-area">
            <div class="container">
                <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false" data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="false" data-r-large-dots="false">
                    <div class="brand-area-box">
                        <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/brand/1.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/brand/2.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/brand/3.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/brand/4.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/brand/1.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/brand/2.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/brand/3.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="index4.html#"><img src="https://www.radiustheme.com/demo/html/academics/academics/img/brand/4.jpg" alt="brand"></a>
                    </div>
                </div>
            </div>
        </div> --}}

@include('layouts.footer')
