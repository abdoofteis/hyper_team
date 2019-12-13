<html>
    <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/contact-us.css') }}">

    </head>
    <body style ="background-image: url('{{ asset('img/bg.jpg') }}');">
          <!-- header start -->
    
  <header>
        <div class="header-area "> 
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="http://localhost/hyper_team/public/hyperteam">
                                        <img src="{{asset('img/logo2.png')}}" alt="Hypeer Team">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="http://localhost/hyper_team/public/hyperteam">Home</a></li>
                                            <li><a href="#">Protfolio <i class="ti-angle-down"></i></a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">About Us <i class="ti-angle-down"></i></a>
                                            </li>
                                            <li><a href="http://localhost/hyper_team/public/hyperteam/contactus">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a  href="http://localhost/hyper_team/public/hyperteam/contactus">CONTACT US</a>
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



    <div class="wrapper">
        <div class="content">
                <h2>CONTACT US</h2>
                <p>How We Can Help You Sir...</p>
        </div>
        <div class="container mb-5 ">
               
            <form action="{{ url('/contactus') }}" method="post">
            <!--  -->
                @csrf
              <div class="row form-group">
              <label class="col-lg-2 col-md-3 col-sm-12 text-md-right text-sm-center">Your Name</label>
              <input class="col-lg-7 col-md-9 col-sm-12 form-control " name="name" type="text" placeholder="Ahmed">
              </div>
              
               <div class="row form-group">
              <label class="col-lg-2 col-md-3 col-sm-12 text-md-right text-sm-center">E-Mail</label>
              <input class="col-lg-7 col-md-9 col-sm-12 form-control "name="email" type="text" placeholder="Example@example.com">
              </div>
              
               <div class="row form-group">
              <label class="col-lg-2 col-md-3 col-sm-12 text-md-right text-sm-center">Phone Number</label>
              <input class="col-lg-7 col-md-9 col-sm-12 form-control " name="phone_number"type="text" placeholder="0912345678">
              </div>
              
             <div class="row">
            <label class="col-lg-2 col-md-3 col-sm-12 text-md-right text-sm-center ">Choose</label>
            <select class="col-lg-7 col-md-9 col-sm-12 form-control  custom-select "name="subject" >
                <option>WebSite</option>
                <option>App</option>
                <option>Website & App</option>
                <option>Desgin</option>
                <option>Other</option>
            </select>
              </div>
              
              <div class="row form-group mt-3 mb-3">
          <label class= "col-lg-2 col-md-3 col-sm-12 text-md-right text-sm-center">Message</label>
          <textarea class="col-lg-7 col-md-9 col-sm-12 form-control" rows="3"placeholder="Your Message" name="description"></textarea>
        </div>
              
                <!-- <div class="btn" type="submit">Send</div> -->
                <input type="submit" class="btn" value="Send">
            </div>
              
            </form>
          </div>
        </div>
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

    <div class="footer-menu-one">
       <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Protfolio</a></li>
          <li><a href="">Our Team</a></li>
       </ul>
    </div>
 
    <div class="footer-menu-two">
       <ul>
          <li><a href="">Services</a></li>
          <li><a href="http://localhost/hyper_team/public/hyperteam/contactus">Contact Us</a></li>
       </ul>
    </div>

</div>
<div class="footer-bottom">
<p>Designed by:<a href="http://localhost/hyper_team/public/hyperteam">Hyper Team</a></p>
</div>
<!-- Footer End -->



<script type="text/javascript" src="{{asset('js/team.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.cycle2.min.js')}}"></script>

<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>    <script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>