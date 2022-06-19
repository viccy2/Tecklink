const navbarTemplate = document.createElement("template");
navbarTemplate.innerHTML = `

<!-- BOOTSTRAP CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<style>
nav {
    min-height: 110px;
    background-color: #2b89ea;
    display: flex;
    align-items: center;
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.2));
  }
  
  .nav_container {
    display: flex;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: space-evenly;
  }
  
  .toggler {
    color: white;
    font-size: 50px;
    cursor: pointer;
    margin-left: 20px;
  }
  
  .toggler:hover {
    color: #d6a364;
    transition: 0.3s ease-out;
  }
  
  /* Side Nav */
  .side_nav {
    display: none;
    width: 100%;
  }
  
  .side_nav ul {
    list-style: none;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  
  .side_nav ul li a {
    text-decoration: none;
    color: white;
    font-size: 18px;
    line-height: 40px;
    transition: 0.3s ease-out;
  }
  
  .side_nav ul li a:hover {
    color: #d6a364;
  }
  
  @media screen and (min-width: 992px) {
    .navbar{
      flex-wrap: nowrap;
    }
  
    .nav_container {
      flex-direction: row;
      /* flex-wrap: nowrap; */
    }
  
    .toggler {
      display: none;
    }
  
    .side_nav {
      display: block !important;
      position: relative;
      width: auto;
      /* float: right; */
      padding: 5px 0;
    }
  
    .side_nav ul {
      float: left;
      flex-direction: row;
    }
  
    .side_nav ul li {
      display: inline-block;
      padding-right: 20px;
    }
  }
</style>

<nav class="navbar container-fluid">
        <div class="container-sm nav_container">
            <a href="../index.html">
                <img src="../assets/img/TeckLink-Header-Logo.png" alt="TeckLink">
            </a>
            <div class="toggler">
                <i class="bi bi-list"></i>
            </div>
            <!-- Side Nav -->
            <div class="side_nav">
                <ul>
                    <li><a href="../../under_construction/underConstructionPage.html">Workshop</a></li>
                    <li><a href="../../TeckMeet/Video Landing Page/videoLandingPage.html">TeckMeet</a></li>
                    <li><a href="../../under_construction/underConstructionPage.html">Jobs</a></li>
                    <li><a href="../../TeckConnect/friends.html">TeckConnect</a></li>
                    <li><a href="../../under_construction/underConstructionPage.html">VoiceCast</a></li>
                    <li><a href="../../messenger/index.html">Messenger</a></li>
                    <button class="btn"><a href="./sign-up/index.html"><span>Sign In</span></a>
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

    
    <script src='script.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
`;

class Navbar extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const shadowRoot = this.attachShadow({ mode: "open" });
    shadowRoot.appendChild(navbarTemplate.content);
  }
}

window.customElements.define("navbar-component", Navbar);
