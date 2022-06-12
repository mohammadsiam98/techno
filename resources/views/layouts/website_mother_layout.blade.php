<!DOCTYPE html>
<html lang="en" class="no-js">



<head>
    <meta charset="utf-8" />
    <title>Technofirm - @yield('title')</title>
    <meta name="description" content="Helping you in the technology field so that you can do your business well">
    <meta name="keywords" content="Website Development Company,Website Development Company in Dhaka, Best Website Development Company in Bangladesh, Website Development Services Creative Agency in Bangladesh, Digital Marketing company in Bangladesh">
    <meta name="author" content="Technofirm">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--website-favicon-->
    <link href="{{asset('frontendAssets/assets/images/logo2.png')}}" rel="icon">
    <!--plugin-css-->
    <link href="{{asset('frontendAssets/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontendAssets/assets/css/plugin.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontendAssets/assets/css/swiper.min.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3f89815316.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- template-style-->
    <link href="{{asset('frontendAssets/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontendAssets/assets/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('frontendAssets/assets/css/darkmode.css')}}" rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-RF1QRNVH90"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-RF1QRNVH90');
        </script>
         <!-- Global site tag (gtag.js) - Google Analytics -->

</head>

<body>
    <!-- Custom mouse start-->
    <div class="mouse-cursor cursor"></div>
    <div class="mouse-cursor cursor-follow"></div>
    <!-- Custom mouse end-->

    <!--Start Header -->
    <header class="header-pr nav-bg-b main-header navfix fixed-top menu-white">
        <div class="container-fluid m-pad">
            <div class="menu-header">
                <div class="dsk-logo"><a class="nav-brand" href="{{route('homepage')}}">
                        <img src="{{asset('frontendAssets/assets/images/logo3.png')}}" alt="Logo" class="mega-white-logo" />
                        <img src="{{asset('frontendAssets/assets/images/logo3.png')}}" alt="Logo" class="mega-darks-logo" />
                    </a>
                </div>
                <div class="custom-nav" role="navigation">
                    <ul class="nav-list">
                        <li class="">
                            <a href="{{route('aboutUs')}}" class="menu-links">About Us</a>
                        </li>
                        <li class="">
                            <a href="{{route('ourPortfolio')}}" class="menu-links" >Portfolio</a>
                        </li>
                        <li class="rpdropdown">
                            <a href="#" class="menu-links">
                                <img src="{{asset('frontendAssets/assets/images/menu.png')}}" alt="" style="margin-right:10px;">Sectors</a>
                            <div class="nx-dropdown menu-dorpdown">
                                <div class="sub-menu-section">
                                    <div class="sub-menu-center-block">
                                        <div class="sub-menu-column smfull">
                                            <ul>
                                                <li><a href="{{route('sectors','website-development')}}">
                                                        <img src="" alt="" style="margin-right:10px;"> Web Development</a></li>
                                                <li><a href="{{route('sectors','Mobile-Application-Development')}}" >
                                                        <img src="" alt="" style="margin-right:13px;">Mobile App Development</a> </li>
                                                <li><a href="{{route('sectors','Search-Engine-Optimization')}}">
                                                        <img src="" alt="" style="margin-right:13px;">Search Engine Optimization</a></li>
                                                <li><a href="{{route('sectors','Social-Media-Marketing')}}">
                                                        <img src="" alt="" style="margin-right:13px;" class="">Social Media Marketing</a> </li>
                                                <li><a href="{{route('sectors','Content-Writing')}}">
                                                        <img src="" alt="" style="margin-right:10px;"> Content Writing</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="">
                            <a href="{{route('blog')}}" class="menu-links">Blog</a>
                        </li>
                        <a href="{{route('contactUs')}}" class="contact_Us_Button pr-5" style="font-size:20px;"><button class="bg-btn5 smllbtnn lnk">Contact-Us<span class="circle"></span></button></a>
                        <a href="{{route('projectProposal')}}" style="font-size:20px;"><button class="bg-btn5 smllbtnn lnk">Project Proposal<span class="circle"></span></button></a>
                    </ul>
                    <!-- mobile + desktop - sidebar menu- dark mode witch and button -->
                    <ul class="nav-list right-end-btn">
                        <li class="hidedesktop darkmodeswitch">
                            <div class="switch-wrapper"> <label class="switch" for="niwax"> <input type="checkbox" id="niwax" /> <span class="slider round"></span> </label> </div>
                        </li>
                        <li class="navm- hidedesktop"> <a class="toggle" href="#"><span></span></a></li>
                    </ul>
                </div>
            </div>

            <!--Mobile Menu-->
            <nav id="main-nav">
                <ul class="first-nav">
                    <li>
                        <a href="{{route('homepage')}}">Home</a>
                        <ul>
                            <li>
                                <a href="#">Sectors</a>
                                <ul>
                                    <li><a href="{{route('sectors','Website-Development')}}">
                                            <img src="{{asset('frontendAssets/assets/images/development.png')}}" alt="" style="margin-right:10px;"> Web Development</a></li>
                                    <li><a href="{{route('sectors','Website-Design')}}">
                                            <img src="{{asset('frontendAssets/assets/images/web-design.png')}}" alt="" style="margin-right:10px;"> Web Design</a></li>
                                    <li><a href="{{route('sectors','Graphic Design')}}">
                                            <img src="{{asset('frontendAssets/assets/images/graphic-design.png')}}" alt="" style="margin-right:10px;"> Graphics Design</a> </li>
                                    <li><a href="{{route('sectors','Application-Development')}}">
                                            <img src="{{asset('frontendAssets/assets/images/mobile-app.png')}}" alt="" style="margin-right:13px;">App Development</a> </li>
                                    <li><a href="{{route('sectors','SEO')}}">
                                            <img src="{{asset('frontendAssets/assets/images/SEO.png')}}" alt="" style="margin-right:13px;">Search Engine Optimization</a></li>
                                    <li><a href="{{route('sectors','Social Media Marketing')}}">
                                            <img src="{{asset('frontendAssets/assets/images/bullhorn.png')}}" alt="" style="margin-right:13px;">Social Media Marketing</a> </li>
                                    <li><a href="{{route('sectors','Content-Writing')}}">
                                            <img src="{{asset('frontendAssets/assets/images/creative-writing.png')}}" alt="" style="margin-right:10px;"> Content Writing</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">One-Page Demo</a>
                                <ul>
                                    <li><a href="digital-agency-onepage.html">Digital Agency</a></li>
                                    <li><a href="digital-agency-dark-onepage.html">Digital Agency Dark</a></li>
                                    <li><a href="web-design-agency-onepage.html">Web Design Agency</a></li>
                                    <li><a href="web-design-agency-dark-onepage.html">Web Design Agency Dark</a></li>
                                    <li><a href="digital-marketing-onepage.html">Digital Marketing</a></li>
                                    <li><a href="digital-marketing-dark-onepage.html">Digital Marketing Dark</a></li>
                                    <li><a href="lead-generation-onepage.html">Lead Generation Agency</a></li>
                                    <li><a href="lead-generation-dark-onepage.html">Lead Generation Agency Dark</a></li>
                                    <li><a href="freelance-portfolio-onepage.html">Freelance Portfolio</a></li>
                                    <li><a href="freelance-portfolio-dark-onepage.html">Freelance Portfolio Dark</a></li>
                                    <li><a href="app-development-onepage.html">App Development Agency</a></li>
                                    <li><a href="minimal-portfolio-onepage.html">Minimal Portfolio</a></li>
                                    <li><a href="creative-agency-onepage.html">Creative Agency</a></li>
                                    <li><a href="branding-agency-onepage.html">Branding Agency</a></li>
                                    <li><a href="modern-agency-onepage.html">Modern Agency</a></li>
                                    <li><a href="business-and-startup-onepage.html">Business & Startup</a></li>
                                    <li><a href="graphic-studio-onepage.html">Graphic Studio</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="bottom-nav">
                    <li class="prb">
                        <a href="tel:+11111111111">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                                <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
								  c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
								  c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
								  C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z" />
                            </svg>
                        </a>
                    </li>
                    <li class="prb">
                        <a href="https://separateweb.com/cdn-cgi/l/email-protection#32415d5f574557505f57565b5372555f535b5e1c515d5f">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                <path d="M0 0h24v24H0z" fill="none" />
                            </svg>
                        </a>
                    </li>
                    <li class="prb">
                        <a href="skype:niwax.company?call">
                            <svg enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                                <path d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!--End Header -->

    @yield('content')



    <div class="footer-brands">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 v-center">
              <h5 class="mb10">Top App Development Companies</h5>
              <p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Enter your email</p>
            </div>
            <div class="col-lg-8 v-center">
              <ul class="footer-badges-">
                <li><a href="#"><img src="{{asset('frontendAssets/assets/images/footer/gmail.png')}}" alt="gmail"></a></li>
                <li><a href="#"><img src="{{asset('frontendAssets/assets/images/footer/facebook.png')}}" alt="facebook"></a></li>
                <li><a href="#"><img src="{{asset('frontendAssets/assets/images/footer/linkedin.png')}}" alt="linkedin"></a></li>
                <li><a href="#"><img src="{{asset('frontendAssets/assets/images/footer/blogging.png')}}" alt="blogging"></a></li>
              </ul>
            </div>
          </div>
        </div>
        </div>


    <!--Start Footer-->
    <footer class="footerdez footerdex dark-footer pt50 pb80">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-sm-12 pt40">
                    <div class="footerdez-a">
                        <h2>We would love to hear from you.</h2>
                        <p class="mt10">Feel free to reach out if you want to collaborate with us, or simply have a call.</p>

                    </div>
                </div>

                <div class="col-lg-7 col-sm-12">
                    <div class="row fttlnks">
                        <div class="col-lg-4 col-sm-6 pt40">
                            <h5>OUR ADDRESS</h5>
                            <h4>New Your</h4>
                            <p>603 FA Forest Avenue, New York, USA 10021</p>
                            <h4 class="mt30">India</h4>
                            <p>603 FA Forest Avenue, New York, USA 10021</p>
                        </div>
                        <div class="col-lg-4 col-sm-6 pt40">
                            <h5>SUPPORT</h5>
                            <ul class="footer-address-list link-hover">
                                <li><a href="get-quote.html">Contact</a></li>
                                <li><a href="javascript:void(0)">Customer's FAQ</a></li>
                                <li><a href="javascript:void(0)">Refund Policy</a></li>
                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                <li><a href="javascript:void(0)">Terms and Conditions</a></li>
                                <li><a href="javascript:void(0)">License & Copyright</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-sm-6 pt40">
                            <h5>Company</h5>
                            <ul class="footer-address-list link-hover">
                                <li><a href="get-quote.html">Contact</a></li>
                                <li><a href="javascript:void(0)">Customer's FAQ</a></li>
                                <li><a href="javascript:void(0)">Refund Policy</a></li>
                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                <li><a href="javascript:void(0)">Terms and Conditions</a></li>
                                <li><a href="javascript:void(0)">License & Copyright</a></li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </footer>

    <!--End Footer-->
    <footer class="footerdex dark-footer pb10">
        <div class="container">
            <div class="row">
                <h5 style="text-align:center">2022 all rights reserved by Techfirm</h5>
            </div>
        </div>
    </footer>


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('frontendAssets/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('frontendAssets/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontendAssets/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontendAssets/assets/js/plugin.min.js')}}"></script>
    <script src="{{asset('frontendAssets/assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('frontendAssets/vassets/js/preloader.js')}}"></script>
    <script src="{{asset('frontendAssets/assets/js/dark-mode.js')}}"></script>
    <script src="{{asset('frontendAssets/assets/phpmailer/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('frontendAssets/assets/js/validator.min.js')}}"></script>
    <script src="{{asset('frontendAssets/assets/js/form.js')}}"></script>
    <!--form script file-->
    <script src="{{asset('frontendAssets/assets/phpmailer/js/main.js')}}"></script>
    <!-- type effect -->
    <script async src="{{asset('frontendAssets/assets/js/typer.js')}}"></script>

    <!--common script file-->
    <script src="{{asset('frontendAssets/assets/js/main.js')}}"></script>
    
   
<script>
    //Owl-Carousel - awards card
    var owl = $('.niwax-review-slider');
    owl.owlCarousel({      
      items: 3,
      loop: true,
    center:false,
      autoplay: true,
      margin: 20,
      nav: false,
      dots: true,
      autoplayTimeout: 3500,
      autoplayHoverPause: true,
      smartSpeed: 2000,
      responsive: {
        0: {
          items: 1,      	
        },
        520: {
          items: 1
        },
        768: {
          items: 2
        },
        1200: {
          items: 2
        },
        1400: {
          items: 3
        },
        1600: {
          items: 3
        },
      }
    });
</script>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/629d10c1b0d10b6f3e75cf45/1g4qoit5s';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
