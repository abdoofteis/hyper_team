<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title>Hyper-Team</title>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
   <link rel="stylesheet" href="{{ asset('css/team.css') }}">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
</head>
<body>
  <!-- header start -->
    
  <header>
        <div class="header-area "> 
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="{{ route('home') }}">
                                        <img src="img/logo1.png" alt="Hyper Team">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('home') }}#protfolio">Protfolio <i class="ti-angle-down"></i></a></li>
                                            <li><a href="{{ route('home') }}#service">Services</a></li>
                                            <li><a href="{{ route('home') }}#about">About Us <i class="ti-angle-down"></i></a>
                                            </li>
                                            <li><a href="{{ route('home') }}#team">Team</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block" id="navigation">
                                        <a  href="{{ route('contactus') }}">CONTACT US</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none pt-2"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2"><div class="col-md-12 col-sm-12 text-center ftco-animate mt-5"><h1 style="font-size: 130px;
color: #e9b422;
margin-left: -90px; margin-top: -70px;">Hello</h1><h1 class="text-slide2 col-12">Welcome To Our WebSite...</h1></p></div></div>

            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay2"><div class="col-md-12 col-sm-12 text-center ftco-animate mt-5"><h1 style="font-size: 100px;
color: #e9b422;
margin-left: -90px; margin-top: -70px;">We Are <h1 class="text-slide2 col-12">Web Developers...</h1></h1></div></div>

            <div class="single_slider  d-flex align-items-center slider_bg_3 overlay2"><div class="col-md-12 col-sm-12 text-center ftco-animate mt-5"><h1 style="font-size: 150px;
color: #e9b422;
margin-left: -90px; margin-top: -70px;">& <h1 style="color: white;
font-size: 50px;margin-top: 10px;margin-left: -10px;">Web Designers...</h1></h1></div></div>

            <div class="single_slider  d-flex align-items-center slider_bg_4 overlay2"><div class="col-md-12 col-sm-12 text-center ftco-animate mt-5"><h1 style="font-size: 80px;
color: #e9b422;
margin-left: -10px; margin-top: -70px;">We Are Always Ready <h1 class="text-slide2">To Serve You...</h1></h1></div></div>

           
        </div>
    </div>
    <!-- slider_area_end -->

   <!-- header end -->

      <!-- protfolio div start -->
      <a name="protfolio"></a>
       <h1 class="pro"><b>PROTFOLIO</b></h1>
      <!-- slide start -->
   <div class="cycle-slideshow pb-2"
    data-cycle-speed="600"
      data-cycle-manual-speed="800"
      data-cycle-fx='scrollHorz'>
    <!-- start controller -->
        <span class="cycle-prev"style="left: 3%"><b>&#60;</b></span>
        <span class="cycle-next"style="right: 3%"><b>&#62;</b></span>
        <span class="cycle-pager"></span>
    <!-- end controller -->
        <img class="b" src="{{asset('img/couch-conference-concentration-startup-7111.jpg')}}">
        <img class="b" src="{{asset('img/adults-business-computer-desk-1181371.jpg')}}">
        <img class="b" src="{{asset('img/woman-wearing-black-and-red-gingham-sport-shirt-1181471.jpg')}}">
   </div>
<!-- slide end -->
<!-- end protfolio -->
<!-- services start -->
<a name="service"></a>
     <h1 class="ser" style="color:#e9b422;"><b>OUR SERVICES</b></h1>
      <div class="container">
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div class="service-box">
                  <i class="fa fa-globe"></i>
                  <h4 class="title">Web Design</h4>
                  <p class="description">
                     Hello Hyper Team With You We Can Help You For Any Design You Want Just Contact With Us</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="service-box">
                  <i class="fa fa-rocket"></i>
                  <h4 class="title">Web Development</h4>
                  <p class="description">
                     Hello Hyper Team With You We Can Help You For Any Design You Want Just Contact With Us</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="service-box">
                  <i class="fa fa-edit"></i>
                  <h4 class="title">SEO</h4>
                  <p class="description">
                     Hello Hyper Team With You We Can Help You For Any Design You Want Just Contact With Us</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="service-box">
                  <i class="fa fa-cog"></i>
                  <h4 class="title">Social Networks</h4>
                  <p class="description">
                     Hello Hyper Team With You We Can Help You For Any Design You Want Just Contact With Us</p>
               </div>
            </div>
       </div>
    </div>
<!-- services End -->
<!-- Our Team start -->
<br></br>
  <section>
     <a name="team"></a>
         <h1 class="prot"><b>OUR TEAM</b></h1>
           <div class="card-wrapper">
            <div class="card">
               <img src="img/small2.jpg" alt="Malek Alnapouli" class="card-img">
               <img src="img/malek2.jpg" alt="profile img" class="profile-img">
               <h1>Malek AL Napouli</h1>
               <p class="job-title">Lead Designer</p>
               <p class="about">Hello people I'm Malek Study at Tripoli University Fuctily of sience I Work as web Designer & I'm good of it </p>
               <ul class="social-media">
                <li><a href="https://www.facebook.com/Maleknp97"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
               </ul>
            </div>
            <div class="card">
               <img src="img/small2.jpg" alt="Malek Alnapouli" class="card-img">
               <img src="img/Abdoo.jpg" alt="profile img" class="profile-img">
               <h1>Abdo Fteis</h1>
               <p class="job-title">Full Stack Developer</p>
               <p class="about">Hello people I'm Abdo Study at Tripoli University Fuctily of sience I Work as web Designer & I'm good of it </p>
               <ul class="social-media">
                <li><a href="https://www.facebook.com/profile.php?id=100003436528749"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
               </ul>
            </div>
            <div class="card">
               <img src="img/small2.jpg" alt="Malek Alnapouli" class="card-img">
               <img src="img/hussain.jpg" alt="profile img" class="profile-img">
               <h1>Hussain Moftah</h1>
               <p class="job-title">Web Developer</p>
               <p class="about">Hello people I'm Hussain Study at Tripoli University Fuctily of sience I Work as web Designer & I'm good of it </p>
               <ul class="social-media">
                <li><a href="https://www.facebook.com/hussain.muftah"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
               </ul>
            </div>
            <div class="card">
               <img src="img/small2.jpg" alt="Malek Alnapouli" class="card-img">
               <img src="img/ibrahim.jpg" alt="profile img" class="profile-img">
               <h1>Ibrahim Shwekh</h1>
               <p class="job-title">Full Stack Developer</p>
               <p class="about">Hello people I'm Ibrahim Study at Tripoli University Fuctily of sience I Work as web Designer & I'm good of it </p>
               <ul class="social-media">
                <li><a href="https://www.facebook.com/www.ibrahim.shwekh"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
               </ul>
            </div>
    </div>
  </section>
<!-- Our Team End -->
<!-- About Us Start -->
<a name="about"></a>
      <div class="about-section">
         <div class="inner-width">
            <h1><b>ABOUT US</b></h1>
            <div class="border"></div>
            <div class="about-section-row">
               <div class="about-section-col">
                  <div class="about" id="navigation">
                     <p>our team member student at university of tripoli we study together & word together our team is the best at web.
                     </p>
                     <a href="{{ route('contactus') }}">CONTACT US</a>
                  </div>
               </div>
               <div class="about-section-col">
                  <div class="skills">
                     <div class="skills">
                        <div class="title">Web Design</div>
                        <div class="progress">
                           <div class="progress-bar p1"><span>90%</span></div>
                        </div>
                     </div>

                     <div class="skills">
                        <div class="title">UI Design</div>
                        <div class="progress">
                           <div class="progress-bar p2"><span>70%</span></div>
                        </div>
                     </div>

                     <div class="skills">
                        <div class="title">UX Design</div>
                        <div class="progress">
                           <div class="progress-bar p3"><span>50%</span></div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
<!-- About Us End -->
 <!-- Footer Start -->
    <div class="footer-main-div">
           <div class="footer-social-icons">
               <ul>
                  <li><a href="#" target="blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" target="blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" target="blank"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#" target="blank"><i class="fa fa-youtube"></i></a></li>
               </ul>
           </div>

           <div class="footer-menu-one" id="navigation">
              <ul>
                 <li><a href="{{ route('home') }}">Home</a></li>
                 <li><a href="{{ route('home') }}#protfolio">Protfolio</a></li>
                 <li><a href="{{ route('home') }}#team">Our Team</a></li>
              </ul>
           </div>
        
           <div class="footer-menu-two" id="navigation">
              <ul>
                 <li><a href="">Services</a></li>
                 <li><a href="{{ route('contactus') }}">Contact Us</a></li>
              </ul>
           </div>

    </div>
    <div class="footer-bottom" id="navigation">
       <p>Designed by:<a href="{{ route('home') }}">Hyper Team</a></p>
    </div>
 <!-- Footer End -->
 <!-- {{ asset('js/jqurey*3.4.1.min.js') }} -->
 <script type="text/javascript" src="{{asset('js/team.js')}}"></script>
 <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js') }}"></script>
 <script type="text/javascript" src="{{asset('js/jquery.cycle2.min.js')}}"></script>

 <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
 <script src="{{asset('js/popper.min.js')}}"></script>    <script src="{{asset('js/bootstrap.min.js')}}"></script>
 <script src="{{asset('js/owl.carousel.min.js')}}"></script>
 <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
 <script src="{{asset('js/main.js')}}"></script>
</body>
</html>