const footerTemplate = document.createElement("template");
footerTemplate.innerHTML = `


<style>
footer {
    padding-top: 20px;
  }
  
  .footer_container {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 40px 0;
  }
  
  .footer_aboutSection {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  
  .footer_aboutSection img {
    margin-bottom: 20px;
  }
  
  .footer_aboutSection p {
    padding: 0 40px;
    margin-bottom: 20px;
    width: 300px;
  }
  
  .footer_aboutSection h2 {
    color: #32baea;
  }
  
  .footer_aboutSection .hero_search {
    margin-top: 5px;
  }

  .hero_search {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 70px;
    min-width: 30vw;
    width: 350px;
    height: 50px;
    background-color: #ffffff;
    border-radius: 20px;
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.2));
  }
  
  .hero_search i {
    margin-left: 15px;
    font-size: 25px;
    color: #c2c2c2;
  }
  
  .hero_search input {
    padding-left: 10px;
    flex: 1;
    height: 50px;
    border: none;
    outline: none;
    font-size: 16.3px;
    background-color: white;
  }
  
  .hero_search button {
    background-color: #00aae5;
    border-radius: 20px;
    border: none;
    outline: none;
    height: 50px;
    color: #ffffff;
    font-size: 16.3px;
    padding: 0 25px;
  }
  
  .hero_search button:hover {
    background-color: #d6a364;
    transition: 0.2s ease-out;
  }
  
  .footer_socialLinks {
    margin-top: 20px;
    width: 150px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
  }
  
  .footer_socialLinks a img {
    width: 40px;
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.2));
  }
  
  .footer_socialLinks a img:hover {
    transform: scale(1.15);
    transition: all 0.2s ease-in-out;
  }
  
  .footer_infoSection {
    margin-top: 30px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 350px;
  }
  
  .footer_infoSection h3 {
    color: #32baea;
  }
  
  .footer_infoSection a {
    text-decoration: none;
    color: #000000;
  }
  
  .footer_infoSection a:hover {
    transition: 0.2s ease-out;
    color: #d6a364;
  }
  
  .follow_us {
    display: none;
  }
  
  .footer_termsConditions {
    margin-top: 50px;
    display: flex;
    flex-direction: column;
    text-align: center;
  }
  
  .footer_termsConditions a {
    text-decoration: none;
  }
  
  .footer_termsConditions a:hover {
    transition: 0.2s ease-out;
    color: #d6a364;
  }
  
  @media screen and (min-width: 768px) {
    .footer_socialLinks {
      display: none;
    }
  
    .footer_infoSection {
      width: 550px;
      margin-top: 40px;
    }
  
    .follow_us {
      display: unset;
    }

    .footer_aboutSection p{
      width: 600px;
    }
  }
</style>



<footer class="container-fluid">
<div class="footer_container container-sm">
    <div class="footer_aboutSection">
        <img src="../../assets/img/Tecklink_Footer.png" alt="logo">
        <p>At Tecklink, Our passion is to provide innovate, responsive, highly functional, visually appealing, and feature-rich website for our daily business to business consumers. Every client is treated with the upmost respect, we hope to see you soon.</p>
        <h2>Subscribe to our newsletter</h2>
        <div class="hero_search">
            <i class="bi bi-search"></i>
            <input type="search" placeholder="Email Address">
            <button>Subscribe</button>
        </div>
    </div>
    <div class="footer_socialLinks">
        <a href="https://facebook.com"><img src="../../assets/img/Facebook.png" alt="facebook"></a>
        <a href="https://twitter.com"><img src="../../assets/img/Twitter.png" alt="twitter"></a>
        <a href="https://instagram.com"><img src="../../assets/img/Instagram.png" alt="instagram"></a>
    </div>

    <div class="footer_infoSection">
        <div class="services">
            <h3>Services</h3>
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
            <h3>About</h3>
            <a href="../../user-profile/user-profile.html">
                <p>Profile</p>
            </a>
            <a href="#">
                <p>Jobs</p>
            </a>
            <a href="../../video conference/Video Landing Page/videoLandingPage.html">
                <p>Workshop</p>
            </a>
            <a href="#">
                <p>TeckLink</p>
            </a>
        </div>
        <div class="follow_us">
            <h3>Follow Us</h3>
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
`;
class Footer extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const shadowRoot = this.attachShadow({ mode: "open" });
    shadowRoot.appendChild(footerTemplate.content);
  }
}

customElements.define("footer-component", Footer);
