@extends('layouts.app')

@section('content')

    <nav class="container-fluid">
        <div class="container-sm nav_container">
            <a href="#">
                <img src="img/TeckLink_Icon.svg" alt="TeckLink">
            </a>
            <div class="toggler">
                <i class="bi bi-list"></i>
            </div>
            <!-- Side Nav -->
            <div class="side_nav">
                <ul>
                    <li><a href="#">Workshop</a></li>
                    <li><a href="#">TeckMeet</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">TeckConnect</a></li>
                    <li><a href="#">VoiceCast</a></li>
                    <li><a href="#">Messenger</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="main">
        <div class="search-bar">
            <input type="text" name="" id="" placeholder="Click to search for jobs, networks and.........">
            <button class="search-bar__button"><img src="./images/header/magnifier-outside.svg" width="50rem"
                    alt=""></button>
        </div>
        <!-- <div class="main-card">
            <div class="main-logo">
                <img src="./images/main/LogoTeck.png" alt="">
            </div>
            <div class="main-welcome">
                Welcome to TekLink
            </div>
            <div class="profiles">
                <div class="personal-profile sub-menu">
                    <img src="./images/main/Personal-logo.png" alt="">
                    <h3>
                        John Doe
                    </h3>
                    <p>Personal Profile</p>
                </div>
                <div class="recruiter-profile sub-menu">
                    <img src="./images/main/Recruiter-logo.png" alt="">
                    <h3>
                        Amazon
                    </h3>
                    <p>Recruiter Profile</p>
                </div>
                <div class="new-profile sub-menu">
                    <img src="./images/main/new-profile-logo.png" alt="">
                    <h4>Create <br> New Profile</h4>
                </div>
            </div>
            <div class="not-you">
                <p>Not You?</p>
            </div>
        </div> -->
        <div class="main-logo">
            <img src="./images/main/Logo300.svg" alt="">
        </div>
        <div class="main-bottom">
            <div class="create-new-profile">
                <!-- <p>Create a new profile</p> -->
                <form action="{{route('login')}}" method="POST">
                @csrf
                    <input type="text" name="email" id="username" placeholder=" Username or Email Address">
                    <input type="password" name="password" id="password" placeholder=" Password"> 
            </div>
            <div class="sign-up">
                <div class="remember">
                    <input type="checkbox">
                    <span>Remember Me</span>
                    <p>forgot password?</p>
                </div>
                <div class="buttons">
                    <button class="login__button" type="submit">LOGIN</button>
                </form>
                    <button class="sign-up__button">SIGN UP</button>
                </div>
                <div class="sign-up__logos">
                    <img src="./images/main/Social Media.svg" alt="">
                </div>
                <br>
                <br>
                <br>
                <hr>
            </div>
        </div>

    </main>
    <!-- Footer -->
    <footer class="container-fluid">
        <div class="footer_container container-sm">
            <div class="footer_aboutSection">
                <img src="img/Tecklink_Footer.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
                <h4>Subscribe to our newsletter</h4>
                <div class="searchBar_container">
                    <i class="bi bi-search"></i>
                    <input type="search" placeholder="Email Address">
                    <button>Subscribe</button>
                </div>
            </div>
            <div class="footer_socialLinks">
                <a href="https://facebook.com"><img src="img/Facebook.png" alt="facebook"></a>
                <a href="https://twitter.com"><img src="img/Twitter.png" alt="twitter"></a>
                <a href="https://instagram.com"><img src="img/Instagram.png" alt="instagram"></a>
            </div>

            <div class="footer_infoSection">
                <div class="services">
                    <h5>Services</h5>
                    <a href="#">
                        <p>Jobs</p>
                    </a>
                    <a href="#">
                        <p>Communication</p>
                    </a>
                    <a href="#">
                        <p>Recruiting</p>
                    </a>
                    <a href="#">
                        <p>Social Network</p>
                    </a>
                </div>
                <div class="about">
                    <h5>About</h5>
                    <a href="../../user-profile/index.html">
                        <p>Profile</p>
                    </a>
                    <a href="#">
                        <p>Jobs</p>
                    </a>
                    <a href="#">
                        <p>Workshop</p>
                    </a>
                    <a href="#">
                        <p>TeckLink</p>
                    </a>
                </div>
                <div class="follow_us">
                    <h5>Follow Us</h5>
                    <a href="https://facebook.com">
                        <p>FaceBook</p>
                    </a>
                    <a href="https://twitter.com">
                        <p>Twitter</p>
                    </a>
                    <a href="https://instagram.com">
                        <p>Instagram</p>
                    </a>
                </div>
            </div>

            <div class="footer_termsConditions">
                <div class="terms">
                    <a href="">Terms & Conditions</a>
                </div>
                <div class="policy">
                    <a href="">Privacy Policy</a>
                </div>
                <div class="copyright">
                    <p>Copyright © 2021. Tecklink. All rights reserved.</p>
                </div>
            </div>

        </div>
    </footer>
@endsection
