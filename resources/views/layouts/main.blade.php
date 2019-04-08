<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="nav topNav">
            <div class="container">
                <div class="row">
                    <ul class="list-inline float-left">
                        <li class="list-inline-item"> Address No 40 Baria Street 133/2 </li>
                        <li class="list-inline-item"> | </li>
                        <li class="list-inline-item"> Call Us (295) 146 8067 </li>
                    </ul>
                    <ul class="list-inline float-right ml-auto">
                        <li class="list-inline-item nav-item dropdown"> 
                            <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Languages
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">En</a>
                                    <a class="dropdown-item" href="#">Jp</a>
                                </div>
                        </li>
                        <li class="list-inline-item"> | </li>
                        <li class="list-inline-item"> <a href="#">Login / Register</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header>
            <div class="container">
                <div class="row"><a href="javascript:;"><img src="{{ asset('images/logo21.png') }}" alt="logo"></a>
                </div>
            </div>
        </header>
        <section class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-7">
                        <h2 class="title">Learn any language, from anywhere in the World with</h2>
                        <h1 class="subTitle">Multilinguo</h1>
                        <div class="buttonContainer"><a href="javascript:;" class="button buttonLg buttonRadius paste">Sing up today</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="srinked blog">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-4">
                        <div class="item languages" style="background-image: url({{ asset('images/blog1.jpg') }});">
                            <img src="{{ asset('images/blog1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item lesson" style="background-image: url({{ asset('images/blog2.jpg') }});">
                            <img src="{{ asset('images/blog2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item comfort" style="background-image: url({{ asset('images/blog3.jpg') }});">
                            <img src="{{ asset('images/blog3.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="srinked blog2">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-4">
                        <div class="item languages">
                            <img src="{{ asset('images/blog6.png') }}" alt="">
                            <h5 class="title">Easy to use system</h5>
                            <p class="content">Easy to use system that will allow you find what you want easily</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item lesson">
                            <img src="{{ asset('images/blog4.png') }}" alt="" style="margin: 20px 0 10px 0;">
                            <h5 class="title">Online lessons</h5>
                            <p class="content">Book your lessons with few clicks with the teacher of your choice</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item comfort">
                            <img src="{{ asset('images/blog5.png') }}" alt="" style="margin: 20px 0 0px 0;">
                            <h5 class="title">Great teachers</h5>
                            <p class="content">Great teachers who are available to help you with your learning goals</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="srinked boxWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 row-eq-height home">
                        <div class="item">
                            <div class="imgContainer"> <img src="{{ asset('images/house.png') }}" alt=""></div>
                            <h5 class="title">Learn form your home</h5>
                            <p class="content">Learn from the comfor of your home without having to pack your lesson bag everytime</p>
                        </div>
                    </div>
                    <div class="col-sm-4 teacher">
                        <div class="item">
                            <div class="imgContainer"> <img src="{{ asset('images/teachers.png') }}" alt=""></div>
                            <h5 class="title">Communicate with teachers</h5>
                            <p class="content">Communicate with teachers that cought your eye and schedule 1 to 1 lessons with them</p>
                        </div>
                    </div>
                    <div class="col-sm-4 language">
                        <div class="item">
                            <div class="imgContainer"> <img src="{{ asset('images/book2.png') }}" alt=""></div>
                            <h5 class="title">Learn your favorite languages</h5>
                            <p class="content">Learn languages you've always wanted to learn using our easy to use booking system</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="signUpWrapper">
            <aside class="freeSpace">
                <div class="container">
                    <div class="row row-eq-height">
                        <div class="col-md-6"></div>
                        <div class="col-md-6 circleWrapper"></div>
                    </div>
                </div>
            </aside>
            <section class="signUp">
                <div class="container">
                    <div class="row row-eq-height">
                        <div class="col-md-4">
                            <div class="girlImgWrapper"> <img src="{{ asset('images/girl.png') }}" alt=""></div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-6 circleWrapper">
                            <div class="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro vitae dicta repellendus veritatis molestiae esse cumque fuga totam mollitia tempore nesciunt blanditiis vero, perferendis ipsa quisquam iste ea vel, doloremque.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro vitae dicta repellendus veritatis molestiae esse cumque fuga totam mollitia tempore nesciunt blanditiis vero, perferendis ipsa quisquam iste ea vel, doloremque.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro vitae dicta repellendus veritatis molestiae esse cumque fuga totam mollitia tempore nesciunt blanditiis vero, perferendis ipsa quisquam iste ea vel, doloremque.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section> --}}
        <section class="signUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-6">
                        <div class="contentWrapper">
                            <h1 class="title">What are you waiting for?</h1>
                            <h4 class="subTitle">Sign up today and find your favorite teacher</h4>
                            <button class="button orange buttonCircled getStarted">GET STARTED &#10142;</button>
                            <P class="content">Have question?</P>
                            <button class="button white buttonCircled contactUs">CONTACT US &#10142;</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner2 paste">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="title">Multilinguo</h2>
                        <p class="content">Learn any language, From anywhere in the world</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
