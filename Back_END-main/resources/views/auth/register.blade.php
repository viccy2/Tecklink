<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeckLink | Login Page 1</title>
    <!-- RESET CSS -->
    <link rel="stylesheet" href="./reset_style.css">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="./css/stylereg.css">
    <!-- BOOTSTRAP CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>
    <nav class="container-fluid">
        <div class="container-sm nav_container">
            <a href="../../index.html">
                <img src="./img/TeckLink_Icon.svg" alt="TeckLink">
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
                    <button class="btn"><a href="../sign-up/index.html"><span>Sign in! </span></a>
                        <style>
                            .button_container {
                                position: relative;
                                left: 0;
                                right: 0;
                                top: 30%;
                            }

                            .btn {
                                border: none;
                                display: flex;
                                text-align: center;
                                cursor: pointer;
                                text-transform: uppercase;
                                outline: none;
                                overflow: hidden;
                                position: relative;
                                color: #fff;
                                font-weight: 700;
                                font-size: 15px;
                                background-color: rgb(0, 53, 123);
                                padding: 5px 25px;
                                margin-top: 10px;
                                box-shadow: 0 2px 2px rgba(0, 0, 0, 0.20);
                            }

                            .btn a {
                                color: #fff;
                                text-decoration: none;

                            }

                            .btn span {
                                position: relative;
                                z-index: 1;
                            }

                            .btn:after {
                                content: "";
                                position: absolute;
                                left: 0;
                                top: 0;
                                height: 490%;
                                width: 140%;
                                background: #2d9feb;
                                -webkit-transition: all .5s ease-in-out;
                                transition: all .5s ease-in-out;
                                -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
                                transform: translateX(-98%) translateY(-25%) rotate(45deg);
                            }

                            .btn:hover:after {
                                -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
                                transform: translateX(-9%) translateY(-25%) rotate(45deg);
                            }

                            .link {
                                font-size: 20px;
                                margin-top: 30px;
                            }

                            .link a {
                                color: #000;
                                font-size: 25px;
                            }
                        </style>
                    </button>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main Section -->
    <main class="container-fluid">
        <div class="search-bar container-sm">
            <div class="searchBar_container">
                <i class="bi bi-search"></i>
                <input type="search" placeholder="Search Job Openings">
                <button>Search</button>
            </div>
        </div>

        <div class="selection_Menu container-sm">
            <div class="selection_Menu_container">
                <div class="progress_bar">--------</div>
                <h1 class="title">Profile Type</h1>
                <!-- -----change this menu----- -->
                <div class="selection_menu_content">
                    <div class="profile_buttons">
                        <h4 id="user-btn">User <br>Registration</h4>
                        <div id="vert-line"></div>
                        <h4 id="company-btn">Company <br>Registration</h4>
                    </div>
                    <!-- input user form -->
                    <form method="POST" action="{{ route('register') }}" class="user-form">
                      @csrf
                        <!-- First Name -->
                        <label for="fname">First Name</label><br>
                        <input type="text" id="fname" name="fname" placeholder="Enter your first name" required><br>
                        <!-- Middle Name (optional) -->
                        <label for="mname">Middle Name (optional)</label><br>
                        <input type="text" id="mname" name="mname" placeholder="Enter your middle name"><br>
                        <!-- Last Name -->
                        <label for="lname">Last Name</label><br>
                        <input type="text" id="lname" name="lname" placeholder="Enter your last name" required><br>
                        <!-- Email -->
                        <label for="email">Email</label><br>
                        <input type="email" id="email" name="email" placeholder="you@example.com" required><br>
                        <!-- Phone Number -->
                        <label for="pnumber">Phone Number</label><br>
                        <input type="number" id="pnumber" name="pnumber" placeholder="000-000-0000" required><br>
                        <!-- Company Name (optional) -->
                        <label for="cname">Company Name (optional)</label><br>
                        <input type="text" id="cname" name="cname" placeholder="Enter your company's name"><br>
                        <!-- City -->
                        <label for="city">City</label><br>
                        <input type="text" id="city" name="city" placeholder="Enter your city" required><br>
                        <!-- State -->
                        <label for="state">State</label><br>
                        <input type="text" id="state" name="state" placeholder="Enter your state" required><br>
                        <!-- Country -->
                        <label for="country">Country</label><br>
                        <input type="text" id="country" name="country" placeholder="Enter your country" required><br>
                        <!-- Password -->
                        <label for="password">Password</label><br>
                        <input type="password" id="password" name="password" placeholder="********"><br>
                        <!-- Repeat Password -->
                        <label for="rpassword">Repeat Password</label><br>
                        <input type="password" id="rpassword" name="rpassword" placeholder="********"><br>
                        <p>If you have an account already, <a href="">Login here</a></p>
                        <div class="button_menu">
                            <button id="btn1" type="submit" class="userBtn">User Register</button>
                            <a href="../../index.html"><button id="btn2" type="submit">Go Back</button></a>
                        </div>
                    </form>


                    <!-- input company form -->
                    <form action="{{ route('registerCompany') }}" method = "POST" class="company-form non-active">
                      @csrf
                        <!-- First Name -->
                        <label for="comp-name">Company Name</label><br>
                        <input type="text" id="comp-name" name="company_name" placeholder="Enter your company's name"
                            required><br>
                        <!-- Industry/Sector -->
                        <label for="industry">Industry/Sector</label><br>
                        <select id="industry" name="company_industry">
                            <option value="" selected="" disabled="" hidden="">
                                Choose industry/sector
                            </option>
                            <option value="oil-gas">Oil &amp; Gas</option>
                            <option value="finance">Banking/Finance</option>
                            <option value="construction">Construction</option>
                            <option value="engineering">Engineering</option>
                            <option value="health-care">Health Care</option>
                            <option value="travel">Travel</option>
                            <option value="entertainment">Entertainment</option>
                            <option value="information-technology">
                                Information Technology
                            </option>
                            <option value="real-estate">Real Estate</option>
                            <option value="social-services">Social Services</option>
                            <option value="arts-crafts">Arts and Crafts</option>
                            <option value="agriculture">Agriculture</option>
                            <option value="fashion">Fashion</option>
                            <option value="freelance">Freelance</option>
                            <option value="other">Other</option>
                        </select><br>
                        <!-- Email -->
                        <label for="email">Email</label><br>
                        <input type="email" id="email" name="company_email" placeholder="you@example.com" required><br>
                        <!-- Phone Number -->
                        <label for="pnumber">Phone Number</label><br>
                        <input type="number" id="pnumber" name="company_phone" placeholder="000-000-0000" required><br>
                        <!-- City -->
                        <label for="city">City</label><br>
                        <input type="text" id="city" name="company_city" placeholder="Enter your city" required><br>
                        <!-- State -->
                        <label for="state">State</label><br>
                        <input type="text" id="state" name="company_state" placeholder="Enter your state" required><br>
                        <!-- Country -->
                        <label for="country">Country</label><br>
                        <input type="text" id="country" name="company_country" placeholder="Enter your country" required><br>
                        <!-- Password -->
                        <label for="password">Password</label><br>
                        <input type="password" id="password" name="company_password" placeholder="********"><br>
                        <!-- Repeat Password -->
                        <label for="rpassword">Repeat Password</label><br>
                        <input type="password" id="rpassword" name="rpassword" placeholder="********"><br>
                        <p>If you have an account already, <a href="">Login here</a></p>
                        <div class="button_menu">
                            <button id="btn1" type="submit" class="companyBtn"  value="Submit">Company Register</button>
                            <a href="../../index.html"><button id="btn2" type="submit">Go Back</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="container-fluid">
        <div class="footer_container container-sm">
            <div class="footer_aboutSection">
                <img src="./img/Tecklink_Footer.png" alt="">
                <p>TeckLink is an employment and business service available on web and and mobile.
                    TeckLink can be used for career advancement, busniess, employment with the assistance of AI.</p>
                <h4>Subscribe to our newsletter</h4>
                <div class="searchBar_container">
                    <i class="bi bi-search"></i>
                    <input type="search" placeholder="Email Address">
                    <button>Subscribe</button>
                </div>
            </div>
            <div class="footer_socialLinks">
                <a href="https://facebook.com"><img src="./img/Facebook.png" alt="facebook"></a>
                <a href="https://twitter.com"><img src="./img/Twitter.png" alt="twitter"></a>
                <a href="https://instagram.com"><img src="./img/Instagram.png" alt="instagram"></a>
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

    <!-- Page Script -->
    <script src="./js/appreg.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
