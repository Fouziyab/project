<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cake Zone</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!--css-->
       <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

*,
*:after,
*:before{
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

:active,
:hover,
:focus {
    outline: 0 !important;
    outline-offset: 0;
}

a,
a:hover {
    text-decoration: none;
}
 
a:hover {
    color: var(--primary-color);

}
ul,
ol {
    margin: 0;
    padding: 0;
}
/****variable define****/
:root {
    --primary-color: #A82C48;
    --secondary-color: #43121d;
    --third-color: #f98169;
    --white-color: #fff;
    --text-color: #555;
    --text-gray: #999;
    --black-color: #000;
    --primary-font: 'Robot',sans-serif;
    --secondary-font: 'Quicksand', sans-serif;

}
html {
    scroll-behavior: smooth;
}

body {

    font-family: var(--primary-font);
    font-size: 100%;
    font-weight: 400;
}

/*******custom scrollbar*******/

h1 {
    font-size: 3rem;
    font-weight: 900;
    margin-bottom: 3rem;
    color: var(--secondary-color);
}

h2 {
    font-weight: 700;
    font-size: 2.25rem;
    text-transform: capitalize;
    font-size: var(--secondary-font);
    color: var(--secondary-color);
    line-height: 3rem;
}

h4 {
    color: var(--secondary-color);
    font-family: var(--secondary-font);
    text-transform: capitalize;
    font-size: 18px;
    font-weight: 800;
    margin-bottom: 0.5rem;
}

h5 {
    color: var(--primary-color);
    text-transform: capitalize;
    font-family: var(--secondary-font);
    font-size: 1rem;
    font-weight: 700;
    margin-bottom: 1px;
}
 p {
    font-size: 1rem;
    color: var(--text-color);
    font-weight: 400;
    line-height: 1.75rem;
    letter-spacing: 1px;
 }

 .main-btn {
    display: inline-block;
    padding: 0.625rem 1.875rem;
    line-height: 1.5625rem;
    background-color: var(--primary-color);
    border: 0.1875rem solid var(--primary-color);
    color: var(--white-color);
    font-size: 0.9375rem;
    font-weight: 600;
    text-transform: capitalize;
    box-shadow: 0px 2px 10px -1px rgb(0 0 0 / 19%);
    -webkit-transition: all .4s ease-out 0s;
    -o-transition: all .4s ease-out 0s;
    -moz-transition: all .4s ease-out 0s;
    transition: all .4s ease-out 0s;

 }

 .white-btn {
    padding: 0.625rem 1.875rem;
    line-height: 25px;
    background-color: var(--white-color);
    border: 0.1875rem solid var(--white-color);
    color: var(--text-color);
    font-size: 0.9375rem;
    font-weight: 600;
    text-transform: capitalize;
    box-shadow: 0px 2px 10px -1px rgb(0 0 0 / 19%);
    -webkit-transition: all .4s ease-out 0s;
    -o-transition: all .4s ease-out 0s ;
    -moz-transition: all .4s ease-out 0s ;
    transition: all .4s ease-out 0s;
 }

 .main-btn:hover {
    background-color: transparent;
    color: var(--primary-color);
 }

 .white-btn:hover {
    background-color: transparent;
    color: var(--primary-color);
    border-color: var(--primary-color);
 }

 .wrapper {
    padding-top: 8.25rem;
    padding-bottom: 8.25rem;
 }

 .text-content {
    width: 70%;
    margin: auto;
 }

 .counter-section h2,
 .testimonial-section h2,
 .book-food-text h2 {
    color: var(--white-color);
 }
 /******header design*****/
 
.navigation.wrap{
    position: fixed;
    width: 100%;
    left: 0;
    z-index: 1000;
    -webkit-transition:all 0.3s ease-out; 
    transition: all 0.3s ease-out;
}
.navigation.wrap.nav-item{
    padding: 0 0.625rem;
    transition: all 200ms linear;
}
.navbar-toggler:focus{
    outline: unset;
    border: unset;
    box-shadow: none;
}
.nav-link {
    font-size: 0.9357rem;
    font-weight: 600;
    text-transform: capitalize;
    color: var(--primary-color);
    letter-spacing: 1px;
}
.navigation.wrap .main-btn{
    padding: 0.3125rem 1.4375rem;
    box-shadow: none;
    margin-left: 0.625rem;
}
/*** change navbar styling on scroll ****/

.navigation.wrap.scroll.on{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: var(--white-color);
    box-shadow: 0 0.125rem 1.75rem 0 rgb(0,0,0,00.9);
    transition: all .15s ease-in-out 0s;
}
/*** top-banner design ****/
.top-banner{
    width: 100%;
    background: url("images/back1/jpg")no repeat center;
    background-size: cover;
    padding: 16.875rem 0 9.375rem;
}
/***** about section design ******/
.about-section {
    background: var(--white-color);
}
.about-section .card,
.about-section .card img{
    border-left: 2rem;
}
/***** cake type section ******/
.cake-type ul li{
    font-size: 1rem;
    color: var(--text-color);
    line-height: 32px;
    position: relative;
    margin-left: 30px;
}
.cake-type ul li::before{
    position: absolute;
    left: -2.1875rem;
    color: var(--primary-color);
    font-size: 1.25rem;
    font-family: "Font Awesome 5 Free";
    content: "\f00c";
    display: inline-block;
    padding-right: 3px;
    vertical-align: middle;
    font-weight: 900;
}
.story-section{
    width: 100%;
    height: 28.125rem;
    background: url('../images/story4.jpg') no-repeat center;
    background-size: cover;
    padding-top: 100px;
    text-align: center;
}
.story-section h2{
    color: var(--primary-color);
}
.best-sellers .card{
    border: none;
    background-color: transparent;
    border-radius: 0.9375rem;
}
.best-sellers .card img{
    border-radius: 0.9375rem;
    object-fit: cover;
}
.best-sellers .card span{
    display: block;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary-color);
    padding-bottom: 1rem;
    border-bottom: 0.0625rem solid #eee;
}
.best-sellers .card span del{
    color: var(--text-gray);
    margin-left: 0.5rem;
}
/***** testimonial section design *****/
.testimonial-section{
    background-color: var(--primary-color);
}
.testimonial-section .carousel-item{
    margin-top: 3rem;
    padding: 10rem 3.125rem;
    background-color: var(--white-color);
    border-radius: 0.9375rem;
    text-align: center;
}
.testimonial-section .carousel-caption img{
    max-width: 5rem;
    border-radius: 50%;
    padding: 0.3125rem;
}

.testimonial-section .carousel-item .carousel-caption p{
    font-size: 1.3125rem;
    line-height: 2.0625rem;
    padding: 0 11% 0.625rem;
}
.testimonial-section .carousel-indicators{
    bottom: -2.8125rem;
}
.testimonial-section .carousel-indicators button{
    width: 15px;
    height: 15px;
    outline: none;
    border-radius: 50%;
    border: none;
    margin-right: 1rem;
    opacity: 0.2;
}
.testimonial-section .carousel-indicators button.active{
    opacity: 1;
}
/***** faq sections *****/
.faq h4 span{
    color: var(--primary-color);
    font-size: 1.875rem;
    margin-right: 0.3125rem;
}
.order-cake{
    width: 100%;
    background: url('../images/story2.jpg') no-repeat center;
    background-size: cover;
    background-attachment: fixed;
    background-position: 0 71.9125px;
    padding: 4.375rem 0;
}

/***form control***/
.newsletter{
    width: 55%;
    margin: 0 auto;
}
.newsletter .form-control{
    height: 3.225rem;
    padding: 0 1.25rem;
    font-size: 0.875rem;
    width: 100%;
    border: none;
    border-radius: 0;
    background: transparent;
    border: 0.1875rem solid var(--text-gray);
    color: var(--black-color);
    font-weight: 700;
}
.newsletter .form-control:hover,
.newsletter .form-control:focus{
    outline: none;
    box-shadow: none;
    border-color: var(--primary-color);
}
/****footer design ******/
.footer{
    background: var(--primary-color);

}
.footer .footer-link{
    font-size: 1rem;
    color: var(--white-color);
    padding: 0 1.875rem;
}
.footer .footer-link a:hover{
    color: var(--white-color);
}
.footer a i{
    font-size: 1.5rem;
    color: var(--white-color);
    padding: 0 1rem;
}

 
       </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navigation-wrap">
                <div class="container">
                  <a class="navbar-brand" href="#"><img src="images/Logo2.png"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-stream navbar-toggler-icon"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#best-sellers">Best Sellers</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#testimonial">Reviews</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#contact-us">Contact Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="signup.php">Sign Up</a>
                    </ul>
                  </div>
                </div>
              </nav>
        </header>
        <!---section-1 top-banner-->
        <section id="home">
          <div class="container-fluid px-0 top-banner">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-md-6">
                  <h1>THINK CELEBRATION, THINK CAKE ZONE </h1>
                  <p>THE MORE YOU PRAISE AND CELEBRATE YOUR LIFE,
                    THE MORE THERE IS IN LIFE TO CELEBRATE
                  </p>
                  <div class="mt-4">
                    <button class="main-btn">Order Now <i class="fas fa-shopping-basket ps-3"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    
        <!--section-3 About-->
        <section id="about">
          <div class="about-section wrapper">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
                  <div class="card border.0">
                    <img src="images/about 01.jpg" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-5 col-md-12 text-sec">
                  <h2>Good Food is the Foundation of Joy</h2>
                  <p>
                    It started off with making handcrafted chocolates on special orders from a friend's outhouse.
                    Today we have 4 outlets across the city.Our passion has always been guaranteeing that people are left feeling happy
                    because of a full anf satisfied belly.
                  </p>
                  <button class="main-btn mt-4">Learn MORE</button>
                </div> 
              </div>
            </div>
            <div class="container cake-type">
              <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
                  <h2> We make everything by hand with best ingredients.</h2>
                  <p>Our chefs are highly trained with skill sets to complete internationally, produce products of highest quality and finish.
                    The specialty recipes created by our chefs are under constant, keeping in mind standards of the product match the ever changing habits of the customer.
                  </p>
                  <ul class="list-unstyled py-3">
                    <li> Rich in flavors </li>
                    <li>Indulge in chocolate,Comfort and sweetness</li>
                    <li>Overall goal is to promote delicious and healthy products</li>
                  </ul>
                <button class="main-btn mt-4">Learn MORE</button>
                </div>
                <div class="col-lg-7 col-md-12">
                  <div class="card border-0">
                    <img src="images/about 2.jpg" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--section-3 story -->
        <section id="story">
          <div class="story-section">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="text-content">
                    <h2>Scrumptious Cakes to Make Your Day More Special.</h2>
                    <p>Any celebration, big or small, is incomplete without cake! Being able to surprise our loved ones with their favourite flavoured cakes 
                      on birthdays, anniversaries, or just for fun, has made online cake delivery increasingly popular!</p>
                    <button class="main-btn mt-3">Read More</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--section-4 best-sellers-->
        <section id="best-sellers">
          <div class="best-sellers wrapper">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="text-content text-center">
                    <h2>Best  Sellers</h2>
                    <p>Cakes are special.Every birthday,every celebration start with a cake & close people and ends with loads of memories.
                      GIFT your friends & family a variety of goodies from us made with love & passion for craft of the season.</p>
                  </div>
                </div>
              </div>
              <div class="row pt-5">
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class="card">
                    <img src="images/cake10.jpeg" class="img-fluid">
                    <div class="pt-3">
                      <h4>Cute panda chocolate cake</h4>
                      <p>Earliest Delivery:Today | 1/2 kg</p>
                      <span>Rs:700 <del>799</del></span>
                      <button class="mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class="card">
                    <img src="images/cake1.jpg" class="img-fluid">
                    <div class="pt-3">
                      <h4>Gulab Jamun cake</h4>
                      <p>Earliest Delivery:Today | 1/2 kg</p>
                      <span>Rs:1449 <del>1500</del></span>
                      <button class="mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class="card">
                    <img src="images/cake2.jpg" class="img-fluid">
                    <div class="pt-3">
                      <h4> Rasmalai cake</h4>
                      <p>Earliest Delivery:Today | 1/2 kg</p>
                      <span>Rs:1650 <del>1709</del></span>
                      <button class="mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class="card">
                    <img src="images/cake4.jpg" class="img-fluid">
                    <div class="pt-3">
                      <h4>Pineapple cake</h4>
                      <p>Earliest Delivery:Today | 1/2 kg</p>
                      <span>Rs:600 <del>650</del></span>
                      <button class="mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class="card">
                    <img src="images/cake3.jpeg" class="img-fluid">
                    <div class="pt-3">
                      <h4>Black Forest cake</h4>
                      <p>Earliest Delivery:Today | 1/2 kg</p>
                      <span>Rs:599 <del>625</del></span>
                      <button class="mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class="card">
                    <img src="images/cake5.jpg" class="img-fluid">
                    <div class="pt-3">
                      <h4>Chocolate Truffle cake</h4>
                      <p>Earliest Delivery:Today | 1/2 kg</p>
                      <span>Rs:549 <del>600</del></span>
                      <button class="mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class="card">
                    <img src="images/cake6.jpg" class="img-fluid">
                    <div class="pt-3">
                      <h4>Fruit Overload cake</h4>
                      <p>Earliest Delivery:Today | 1/2 kg</p>
                      <span>Rs:749 </span>
                      <button class="mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class="card">
                    <img src="images/cake7.jpg" class="img-fluid">
                    <div class="pt-3">
                      <h4>Butterscotch cake</h4>
                      <p>Earliest Delivery:Today | 1/2 kg</p>
                      <span>Rs:599 </span>
                      <button class="mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class="card">
                    <img src="images/cake8.jpg" class="img-fluid">
                    <div class="pt-3">
                      <h4>Tempting Mango cake</h4>
                      <p>Earliest Delivery:Today | 1/2 kg</p>
                      <span>Rs:699 </span>
                      <button class="mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class="card">
                    <img src="images/cake9.jfif" class="img-fluid">
                    <div class="pt-3">
                      <h4>Kit Kat cake</h4>
                      <p>Earliest Delivery:Today | 1/2 kg</p>
                      <span>Rs:1049 </span>
                      <button class="mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class="card">
                    <img src="images/cake11.jpg" class="img-fluid">
                    <div class="pt-3">
                      <h4>Death By Chocolate cake</h4>
                      <p>Earliest Delivery:Today | 1/2 kg</p>
                      <span>Rs:699 </span>
                      <button class="mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                  <div class="card">
                    <img src="images/cake12.jpg" class="img-fluid">
                    <div class="pt-3">
                      <h4>Red Velvet cake</h4>
                      <p>Earliest Delivery:Today | 1/2 kg</p>
                      <span>Rs:799 </span>
                      <button class="mt-4 main-btn">Order Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--section-5 testimonial-->
        <section id="testimonial">
          <div class="wrapper testimonial-section">
            <div class="container text-center">
              <div class="text-center pb-4">
                <h2>Testimonial</h2>
              </div>
             <div class="row">
              <div class="col-sm-12 col-lg-10 offset-lg-1">
                <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" 
                    aria-label="slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" 
                    aria-label="slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="carousel-caption">
                        <img src="images/review1.jpg">
                        <p>I have been a regular customer of Cake Zone for several years now! I especially love their mini cakes, Their 
                          delivery is spot on and the products are fresh and delicious.</p>
                        <h5>ANEESHA</h5>
                      </div>
                    </div>
                    <div class="carousel-item">
              
                        <div class="carousel-caption">
                          <img src="images/review2.jpg">
                          <p>Pull it up Rasmalai cake was just as smooth as it could be and delicious. On time delivery and service is Great! Thank you Cake Zone</p>
                          <h5>CHAITRA</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
              
                          <div class="carousel-caption">
                            <img src="images/review3.jpg">
                            <p>Excellent cakes the best i should say . Thanks Cake Zone</p>
                            <h5>JOSLIN</h5>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
             </div>
              </div>
            </div>
          </div>
        </section>
        <!--section-6 faq -->
        <section id="faq">
          <div class="faq wrapper">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="text-center pb-4">
                    <h2>Frequently Asked Questions</h2>
                  </div>
                </div>
              </div>
              <div class="row pt-5">
                <div class="col-sm-6 mb-4">
                  <h4><span>~</span>Do you take same-day orders?</h4>
                  <p>Some cakes may be available for same day pick-up subject to availability.You need to walk-in to our store pick up the cake</p>
                </div>
                <div class="row pt-5">
                  <div class="col-sm-6 mb-4">
                    <h4><span>~</span>How do i pay for the cake delivery?</h4>
                    <p>We accept payment through credit cards, debit cards, net banking from all major banks in India.You will be directed to a secure payment gateway
                      to make the transactions while ordering the cake.
                    </p>
                  </div>
                  <div class="row pt-5">
                  <div class="col-sm-6 mb-4">
                    <h4><span>~</span>Is cake delivery online possible on holidays or weekends?</h4>
                    <p>Yes, Cake Zone offers cake delivery on holidays and weekends too.You have to give the orders in prior so that we can 
                      process everything on time.
                    </p>
                  </div>
                  <div class="row pt-5">
                  <div class="col-sm-6 mb-4">
                    <h4><span>~</span>Do you have a return or refund policy for cake delivery online?</h4>
                    <p>Our team checks if there are any issues regarding the order. if there are any legit issues found, we refund the amount
                      to the customers.
                    </p>
                  </div>
              </div>
            </div>
          </div>
        </section>
        <!--section-7 order-cake-->
        <section id="order-cake">
          <div class="order-cake">
            <div class="container order-cake-text">
              <div class="row text-center">
                <div class="col-lg-9 col-md-12">
                  <h2>Cake Zone would set a benchmark in creating unique menu</h2>
                </div>
                <div class="col-lg-3 col-md-12 mt-lg-0 mt-4">
                  <button class="main-btn">Learn More</button>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!--section-8 newsletter-->
        <section id="newsletter">
          <div class="newsletter wrapper">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="text-content text-center pb-4">
                    <h2>Hurry Up! Subscribe our newsletter
                      and get 25% off </h2>
                      <p>Limited  time offer for this month.</p>
                  </div>
                  <form class="newsletter">
                    <div class="row">
                      <div class="col-md-4 col-12">
                        <input class="form-control" placeholder="Email Address here" name="email" type="email">
                      </div>
                      <div class="col-md-4 col-12">
                        <button class="main-btn" type="Submit">Subscribe</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--section-9 footer-->
        <footer id="footer">
          <div class="footer py-5">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                  <a class="footer-link" href="#">Register</a>
                  <a class="footer-link" href="#">Forum</a>
                  <a class="footer-link" href="#">Affiliate</a>
                  <a class="footer-link" href="#">FAQ</a>
                  <div class="footer-social pt-4 text-center">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="footer-copy">
                    <div class="copy-right text-center pt-5">
                      <p class="text-light">@ 2023. cake zone. All rigths reserved.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>

                 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    </body>
</html>