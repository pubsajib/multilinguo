@extends('layouts.main')
@section('content')
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-7">
                <h2 class="title">Learn any language, from anywhere in the World with</h2>
                <h1 class="subTitle">Multilinguo</h1>
                <div class="buttonContainer"><a href="{{ route('loginregister') }}" class="button buttonLg buttonRadius paste">Sing up today</a></div>
            </div>
        </div>
    </div>
</section>
<section class="srinked blog">
    <div class="container">
        <div class="row ">
            <div class="col-sm-4">
                <div class="item languages" style="background-image: url({{ asset('images/b1.jpg') }});">
                    <div class="content">
                        <button class="button buttonMd paste"> Languages</button><br>
                        <button class="button buttonSm orange"> Best Teachers</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="item lesson" style="background-image: url({{ asset('images/b2.jpg') }});">
                    <div class="content"><button class="button buttonMd paste"> Plan Lessons</button></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="item lesson" style="background-image: url(images/b3.jpeg);">
                    <div class="content"><button class="button buttonMd paste"> Home comfort</button></div>
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
        <div class="row row-eq-height">
            <div class="col-sm-4 home">
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
@endsection