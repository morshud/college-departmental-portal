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
                                        <a class="login-btn-area" href="{{route('student.login')}}" id=""><i class="fa fa-lock" aria-hidden="true"></i>Student Portal</a>
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
                                        <a class="login-btn-area" href="{{route('lecturer.login')}}" id="login-button"><i class="fa fa-lock" aria-hidden="true"></i>Staff Portal</a>
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
                        <div class="col-lg-2 col-md-2 col-sm-3">
                            <div class="logo-area">
                                <a href="/"><img class="img-responsive" src="/CUCSD.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9">
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
