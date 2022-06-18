@extends('layouts.website_mother_layout')
@section('content')
@section('title', 'Digital Marketing Agency')

<!--Start Hero-->
<section class="hero-card-web shape-bg3">
   <div class="hero-main-rp container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <h1 class="text-radius header_text text-light text-animation bg-b" style="padding: 1%"><span class="typer"
                  id="main" data-words="A Digital Marketing Agency, Strategic Concepts for Evolving Businesses, Better ideas for Fast Growth, Digital Strategies for Real Businesses, Clear Strategies, Real-time result" data-delay="100" data-deleteDelay="1000"></span>
               <span class="cursorx" data-owner="first-typer">|</span></h1>
         </div>
         <div class="col-lg-12">
            <div class="hero-right-scmm">
               <div class="hero-service-cards wow fadeInRight" data-wow-duration="2s">
                  <div class="owl-carousel service-card-prb">
                     <!-- Banner For Loop Starts -->
                     @foreach($bannerFetch as $key => $banner_images)
                     <div class="service-slide" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                        <a href="#">
                           <div class="service-card-hh">
                              <div class="image-sr-mm">
                                 <img
                                    src="{{ asset('images/blog/'.$banner_images->created_at->format('Y/M/').'/'.$banner_images->image) }}">
                              </div>
                           </div>
                        </a>
                     </div>
                     @endforeach
                     <!-- Banner For Loop End -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--End Hero-->

<!--Start About-->
<section class="about-sec-app pad-tb pt60 dark-bg2">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="common-heading text-l">
               <h2 class="mb30 text-center"><span class="text-second text-bold">Technofirm | </span> Why do you
                  choose us
               </h2>
               @foreach($companyDetailsFetch as $companyDetails)
               <p style="font-family: poppins; text-align:center; font-size:20px;">{{$companyDetails->details}}</p>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
<!--End About-->

<!--Start Service-->
<section class="service-section service-2 pad-tb">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8">
            <div class="common-heading">
               <h2 class="mb30 text-radius text-light text-animation bg-b">Our Top Digital Marketing Services</h2>
            </div>
         </div>
      </div>
      <div class="row upset link-hover">
         <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
            <div class="wide-block service-img1" data-tilt data-tilt-max="2" data-tilt-speed="600">
               <div class="block-space-">
                  <h4>Social Media Marketing</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-sm-6 mt30  wow fadeInUp" data-wow-delay=".4s">
            <div class="wide-block service-img2" data-tilt data-tilt-max="2" data-tilt-speed="600">
               <div class="block-space-">
                  <h4>Content Marketing</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-sm-6 mt30  wow fadeInUp" data-wow-delay=".6s">
            <div class="wide-block service-img3" data-tilt data-tilt-max="2" data-tilt-speed="600">
               <div class="block-space-">
                  <h4>Custom Software Development</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-sm-6 mt30  wow fadeInUp" data-wow-delay=".8s">
            <div class="wide-block service-img4" data-tilt data-tilt-max="2" data-tilt-speed="600">
               <div class="block-space-">
                  <h4>Website Design & Development</h4>
               </div>
            </div>
         </div>
      </div>
      <div class="-cta-btn mt70">
         <div class="free-cta-title v-center  wow zoomInDown" data-wow-delay=".9s">
            <a href="{{route('projectProposal')}}" class="btn-main bg-btn2 lnk">Project Proposal<i
                  class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
         </div>
      </div>
   </div>
</section>
<!--End Service-->

<!--why choose-->
<section class="why-choos-lg-nx pad-tb deep-dark bg-gradient10">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="common-heading text-l">

               <h2 class="mb20"><span class="text-second text-bold"> Our Company Features</span></h2>
               <div class="itm-media-object mt40 tilt-3d">
                  <div class="media">
                     <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                           src="{{asset('frontendAssets/assets/images/icons/computers.svg')}}" alt="icon" class="layer">
                     </div>
                     <div class="media-body">
                        <h4>Streamlined Project Management</h4>
                        <p>Using modernized techniques, technology and other possible approaches our projects are streamlined to simplify or eliminate unnecessary work-related tasks to enhance the efficiency of processes.</p>
                     </div>
                  </div>
                  <div class="media mt40">
                     <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                           src="{{asset('frontendAssets/assets/images/icons/worker.svg')}}" alt="icon" class="layer">
                     </div>
                     <div class="media-body">
                        <h4>A Dedicated Team of Experts</h4>
                        <p>Our focus is and always will be to put the customer first. We aim to build a healthy relationship with our customers and always take their opinions into account when developing a site befitting their business.</p>
                     </div>
                  </div>
                  <div class="media mt40">
                     <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img
                           src="{{asset('frontendAssets/assets/images/icons/deal.svg')}}" alt="icon" class="layer">
                     </div>
                     <div class="media-body">
                        <h4>Experienced Developers</h4>
                        <p>We have under us experienced developers who are familiar with developing your desired projects.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image wow fadeIn"
               data-wow-duration="2s"><img src="{{asset('frontendAssets/assets/images/Digital presentation-bro.svg')}}"
                  alt="image" class="w-100"></div>
         </div>
      </div>
   </div>
</section>
<!--End why choose-->


<!--Start work-category-->
<section class="work-category pad-tb">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8">
            <div class="common-heading ptag">
               <h2 class="text-radius text-light text-animation bg-b">Industries We Serve</h2>
            </div>
         </div>
      </div>
      <div class="row mt30">
         <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.1s">
            <div class="industry-workfor hoshd">
               <img src="{{asset('frontendAssets/assets/images/icons/house.svg')}}" alt="img">
               <h6>Real estate</h6>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.3s">
            <div class="industry-workfor hoshd">
               <img src="{{asset('frontendAssets/assets/images/icons/travel-case.svg')}}" alt="img">
               <h6>Tour &amp; Travels</h6>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="industry-workfor hoshd">
               <img src="{{asset('frontendAssets/assets/images/icons/video-tutorials.svg')}}" alt="img">
               <h6>Education</h6>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.7s">
            <div class="industry-workfor hoshd">
               <img src="{{asset('frontendAssets/assets/images/icons/taxi.svg')}}" alt="img">
               <h6>Transport</h6>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.9s">
            <div class="industry-workfor hoshd">
               <img src="{{asset('frontendAssets/assets/images/icons/event.svg')}}" alt="img">
               <h6>Event</h6>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.1s">
            <div class="industry-workfor hoshd">
               <img src="{{asset('frontendAssets/assets/images/icons/smartphone.svg')}}" alt="img">
               <h6>eCommerce</h6>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.3s">
            <div class="industry-workfor hoshd">
               <img src="{{asset('frontendAssets/assets/images/icons/joystick.svg')}}" alt="img">
               <h6>Game</h6>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.5s">
            <div class="industry-workfor hoshd">
               <img src="{{asset('frontendAssets/assets/images/icons/healthcare.svg')}}" alt="img">
               <h6>Healthcare</h6>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.7s">
            <div class="industry-workfor hoshd">
               <img src="{{asset('frontendAssets/assets/images/icons/money-growth.svg')}}" alt="img">
               <h6>Finance</h6>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.9s">
            <div class="industry-workfor hoshd">
               <img src="{{asset('frontendAssets/assets/images/icons/baker.svg')}}" alt="img">
               <h6>Restaurant</h6>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.1s">
            <div class="industry-workfor hoshd">
               <img src="{{asset('frontendAssets/assets/images/icons/mobile-app.svg')}}" alt="img">
               <h6>On-Demand</h6>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.3s">
            <div class="industry-workfor hoshd">
               <img src="{{asset('frontendAssets/assets/images/icons/groceries.svg')}}" alt="img">
               <h6>Grocery</h6>
            </div>
         </div>
      </div>
   </div>
</section>
<!--End  work-category-->

<!--Start Testinomial-->
<section class="testinomial-section-nx bg-gradient6 pb100 pt100">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="common-heading text-l">
               <h2 class="mb0 text-radius text-light text-animation bg-b">What our clients say about us</h2>
            </div>
            <div class="owl-carousel testimonial-card-b mt60">
               <div class="testimonial-card">
                  <p>Thanks so much! You were an EXCELLENT client to work with!</p>
                  <div class="-client-details- mt20">
                     <i class="fas fa-quote-left posiqut"></i>
                     <div class="reviewer-text">
                        <h4>Touhid Akik</h4>
                        <p>Business Owner</p>
                        <div class="star-rate mt10">
                           <ul>
                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>

                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
              
               <div class="testimonial-card">
                  <p>Thank you so much, I am always happy to help with another challenging project</p>
                  <div class="-client-details- mt20">
                     <i class="fas fa-quote-left posiqut"></i>
                     <div class="reviewer-text">
                        <h4>Sumaiya</h4>
                        <p>Courier Company's Owner</p>
                        <div class="star-rate mt10">
                           <ul>
                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>

                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="testimonial-card">
                  <p> I wish you all the success in the world. Thank you for being such a delight to work with! Let me know if you need me for any future projects.</p>
                  <div class="-client-details- mt20">
                     <i class="fas fa-quote-left posiqut"></i>
                     <div class="reviewer-text">
                        <h4>A Client</h4>
                        <p>Business Owner</p>
                        <div class="star-rate mt10">
                           <ul>
                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>

                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="testimonial-card">
                  <p>You’re too kind. This was fun to work with My days are packed with smiles</p>
                  <div class="-client-details- mt20">
                     <i class="fas fa-quote-left posiqut"></i>
                     <div class="reviewer-text">
                        <h4>A Client</h4>
                        <p>Business Owner</p>
                        <div class="star-rate mt10">
                           <ul>
                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>

                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                       aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="clients-creative-pic pl25">
               <img src="{{asset('frontendAssets/assets/images/Customer Survey-pana.svg')}}" alt="">
            </div>
         </div>
      </div>
   </div>
</section>
<!--End Testinomial-->

<!--Start Blogs-->
<section class="blogs-section pb120 pt120">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8">
            <div class="common-heading">
               <span class="text-effect">Check our blog</span>
               <h2 class="mb30 text-radius text-light text-animation bg-b">Latest Blog Stories</h2>
            </div>
         </div>
      </div>
      <div class="row justify-content-center">
         @foreach($blogsFetch as $blogs)
         <div class="col-lg-4 col-sm-6 mt30">
            <div class="single-blog-post- up-hor shdo">
               <div class="single-blog-img-">
                  <a href="{{ route('singleBlogPost',$blogs->slug) }}"><img src="{{ asset('images/WebsitePosts/'.$blogs->created_at->format('Y/M/').'/'.$blogs->thumbnail_image) }}"
                        alt="girl" class="img-fluid" /></a>
                  <div class="entry-blog-post dg-bg2">
                     <span class="bypost-"><a href="#"><i class="fas fa-tag"></i>
                           <td class="text-center badge rounded-pill badge-light-primary me-1"
                              style="margin-top: 12px;">{{$blogs->get_category->categoryName}}</td>
                        </a></span>
                  </div>
               </div>
               <div class="blog-content-tt">
                  <div class="single-blog-info-">
                     <h4><a href="{{ route('singleBlogPost',$blogs->slug) }}">{{$blogs->title}}</a></h4>
                     <p>{!!Str::limit($blogs->description,50, $end='....')!!}</p>
                  </div>
                  <div class="post-social">
                     <div
                        class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                        <span class="posted-on-">
                           <a href="#">
                              <i class="fas fa-clock"></i>
                              <?php
                              echo date("d.m.Y", strtotime($blogs->created_at));
                              ?>
                           </a>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
         <div class="-cta-btn mt70">
            <div class="free-cta-title v-center  wow zoomInDown" data-wow-delay=".9s"
               style="visibility: visible; animation-delay: 0.9s; animation-name: zoomInDown;">
               <a href="{{route('blog')}}" class="btn-main bg-btn2 lnk">View more blogs<i
                     class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--End Blogs-->


@endsection