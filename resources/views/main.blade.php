<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Honghong</title>
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <script src="https://kit.fontawesome.com/426c14851d.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Header Section  -->
    <section class="header login custom-pad-guest" style="background: #F7F4F3;">
        <div class="left-content">
            <a href="main.html">
                <h3 class="logo" style="color: #5B2300;">theSillimanCon</h3>
            </a>
        </div>
        <div class="right-content">
            <a href="{{ route('login') }}"><button class="btn btn-tertiary">Log In</button></a>
            <a href="{{ route('register') }}"><button class="btn btn-primary btn-border">Sign Up</button></a>
        </div>
    </section>

    <!-- Main Section  -->
    <section class="main-container">
        <header>Lorem ipsum dolor sit amet, <br>cosectetur adipscing elit</header>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sapien felis, <br> hendrerit id nisl vitae,
            malesuada
            euismod justo. Aenean eleifend arcu eget <br> ipsum efficitur fermentum. </p>
        <a href="{{ route('login') }}"><button class="btn btn-primary btn-large">Get Connected</button></a>
    </section>

    <!-- Nav Section  -->
    <section class="nav-container">
        <div class="nav">
            <a href="#b-one">
                <h2>Check how it works</h2>
                <i class="fa-solid fa-angle-down"></i>
            </a>
        </div>
    </section>

    <!-- Banner One Section  -->
    <section class="banner-container" id="b-one">
        <div class="banner-one">
            <div class="left-content">
                <h2>Lorem ipsum dolor</h2>
                <p>Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit. Ut <br> sapien felis</p>
                <a href="{{ route('login') }}"><button class="btn btn-secondary">Get
                        Connected</button></a>
            </div>
            <div class="right-content">
                <img src="/images/knight.png" alt="">
            </div>
        </div>

    </section>

    <!-- Banner Two Section  -->
    <section class="banner-container" id="b-two">
        <div class="banner-two">
            <div class="left-content">
                <div class="wrapper one" id="tooltip">
                    <span id="tipMid">Love+Relationships</span>
                    <i class="fa-solid fa-heart"></i>
                </div>
                <div class="wrapper two" id="tooltip">
                    <span id="tipMid">Confession+Secrets</span>
                    <i class="fa-solid fa-book-skull"></i>
                </div>
                <div class="wrapper three" id="tooltip">
                    <span id="tipMid">Hate</span>
                    <i class="fa-solid fa-face-angry"></i>
                </div>
                <div class="wrapper four" id="tooltip">
                    <span id="tipMid">Opinion</span>
                    <i class="fa-solid fa-microphone"></i>
                </div>
                <div class="wrapper five" id="tooltip">
                    <span id="tipMid">Political</span>
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <div class="wrapper six" id="tooltip">
                    <span id="tipMid">Scary</span>
                    <i class="fa-solid fa-ghost"></i>
                </div>
            </div>
            <div class="right-content">
                <h2>Lorem ipsum dolor</h2>
                <p>Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit. Ut <br> sapien felis</p>
                <a href="{{ route('login') }}"><button class="btn btn-primary btn-large">Get Connected</button></a>
            </div>
        </div>
    </section>

    <!-- Banner Three Section  -->
    <section class="banner-container" id="b-three">
        <div class="banner-three">
            <div class="left-content">
                <h2>Lorem ipsum dolor</h2>
                <p>Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit. Ut <br> sapien felis</p>
                <a href="{{ route('login') }}"><button class="btn btn-secondary btn-large">Get Connected</button></a>
            </div>
            <div class="right-content">
                <img src="/images/knight.png" alt="">
            </div>
        </div>

    </section>

    <!-- Join Section  -->
    <section class="join-container">
        <h2>Lorem ipsum dolor sit.</h2>
        <a href="{{ route('login') }}"><button class="btn btn-primary btn-large">Get Connected</button></a>
    </section>

    <!-- Footer Section  -->
    <section class="footer-st">
        <h3>@Silliman Confessions</h3>
    </section>
</body>

</html>
