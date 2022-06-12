@extends('layouts.website_mother_layout')
@section('content')
@section('title', 'contact-form')


<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-6">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">

                        <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                            <h2>Contact Form</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->

<!--Start Contact Form-->
<section class="contact-page pad-tb bg-gradient5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="niwax23form shadow">
                    <div class="common-heading text-l">
                        <h1 class="mt0 text-radius text-light text-center text-animation bg-b contact_form">Get in touch</h1>
                    </div>
                    <div class="contact-form-card-pr contact-block-sw m0 iconin">
                        <div class="form-block niwaxform">
                            <form id="contactform" method="post">
                                <div class="fieldsets row">
                                    <div class="col-md-6 form-group floating-label">
                                        <div class="formicon"><i class="fas fa-user"></i></div>
                                        <input type="text" required="required" id="name" class="floating-input" wire:model="fullname">
                                        <label>Full Name*</label>
                                        <div class="error-label"></div>
                                    </div>
                                    <div class="col-md-6 form-group floating-label">
                                        <div class="formicon"><i class="fas fa-phone-alt"></i></div>
                                        <input type="tel" required="required" id="mobile_number" class="floating-input" wire:model="mobile_number">
                                        <label>Mobile Number*</label>
                                        <div class="error-label"></div>
                                    </div>
                                </div>
                                <div class="fieldsets row">
                                    <div class="col-md-6 form-group floating-label">
                                        <div class="formicon"><i class="fas fa-envelope"></i></div>
                                        <input type="email" required="required" id="email" class="floating-input" wire:model="email">
                                        <label>Email Address*</label>
                                        <div class="error-label"></div>
                                    </div>
                                </div>
                                <div class="fieldsets row textareax">
                                    <div class="col-md-12 form-group floating-label">
                                        <div class="formicon"><i class="fas fa-comment-dots"></i></div>
                                        <textarea  required="required" id="description" class="floating-input" wire:model="description"></textarea>
                                        <label>Brief about the project*</label>
                                        <div class="error-label"></div>
                                    </div>
                                </div>
                                <div class="fieldsets mt20"> <button type="submit" name="submit" class="btn btn-main bg-btn w-fit mb20"><span>Submit <i class="fas fa-chevron-right fa-icon"></i></span> <span class="loader"></span></button> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Form-->


@endsection
