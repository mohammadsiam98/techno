@extends('layouts.website_mother_layout')
@section('content')
@section('title', 'project-proposal')


<style>
  .form-block button:hover {
  background-color: transparent;
}
</style>

<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-3">
  <div class="text-block">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 v-center">
                  <div class="bread-inner">
                      <div class="bread-title">
                          <h2 class="sub_pages_title">Project-Proposal</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--End Breadcrumb Area-->

<div class="statistics-wrap bg-gradient5">
      <div class="container">
        <div class="row small t-ctr mt0">
          <div class="col-lg-6 col-sm-12">
            <div class="statistics">
              <div class="statistics-img">
                <img src="{{asset('frontendAssets/assets/images/phone-call.png')}}" alt="happy" class="img-fluid">
              </div>
              <div class="statnumb">
                <span>01886453849</span>
                <p>Mobile Number</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12">
            <div class="statistics">
              <div class="statistics-img">
                <img src="{{asset('frontendAssets/assets/images/gmail.png')}}" alt="project" class="img-fluid">
              </div>
              <div class="statnumb counter-number">
                <a href="mailto:technofirmbd@gmail.com"><span class="">technofirmbd@gmail.com</span></a>
                <p>Email Address</p>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
   

<!--Start Location-->
<div class="contact-info padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="text-radius text-light text-animation bg-b"><span class="typer" id="main" data-words="Write your project proposal in details, Directly call us" data-delay="100" data-deleteDelay="1000"></span> <span class="cursorx" data-owner="first-typer">|</span></h2>
          </div>
        </div>
      </div>
</div>
<!--End Location-->
   
<!--Start Enquire Form-->
<section class="contact-page pad-tb bg-gradient3">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-12">
            <div class="niwax23form shadow">
              <div class="contact-form-card-pr contact-block-sw m0 iconin">
                <div class="form-block niwaxform">
                  <form id="cForm" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="alert alert-warning alert-dismissible fade show" id="ContactMSG" role="alert" style="display: none;">
                      <strong>success: </strong> We have received your project proposal. Our team will contact with you soon..
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="margin-right:-551px;"></button>
                    </div>
                      <ul class="ks-cboxtags">
                       <h4>Choose a service</h4>
                        <li>
                          <input type="checkbox" id="checkbox_Website_Design" value="website_Design" name="servicesSelected[]">
                          <label for="checkbox_Website_Design">Website Design</label>
                        </li>
                        <li>
                          <input type="checkbox" id="checkbox_website_Development" value="website_Development" name="servicesSelected[]">
                          <label for="checkbox_website_Development">Website Development</label>
                        </li>
                        <li>
                          <input type="checkbox" id="checkbox_Graphics_Design" value="graphics_Design" name="servicesSelected[]">
                          <label for="checkbox_Graphics_Design">Graphic Design</label>
                        </li>
                        <li>
                          <input type="checkbox" id="checkbox_App_Development" value="App_Development" name="servicesSelected[]">
                          <label for="checkbox_App_Development">App Development</label>
                        </li>
                        <li>
                          <input type="checkbox" id="checkbox_Video_Editing" value="Video_Editing" name="servicesSelected[]">
                          <label for="checkbox_Video_Editing">Video Editing</label>
                        </li>
                        <li>
                          <input type="checkbox" id="checkbox_SEO" value="SEO" name="servicesSelected[]">
                          <label for="checkbox_SEO">Search Engine Optimization</label>
                        </li>
                        <li>
                          <input type="checkbox" id="checkbox_SMM" value="SMM" name="servicesSelected[]">
                          <label for="checkbox_SMM">Social Media Marketing</label>
                        </li>
                        <li>
                          <input type="checkbox" id="checkbox_Content_Writing" value="Content_Writing" name="servicesSelected[]">
                          <label for="checkbox_Content_Writing">Content Writing</label>
                        </li>
                        <li>
                          <input type="checkbox" id="checkbox_photography" value="Photography" name="servicesSelected[]">
                          <label for="checkbox_photography">Photography</label>
                        </li>
                        <li>
                          <input type="checkbox" id="checkbox_Cinematography" value="Cinematography" name="servicesSelected[]">
                          <label for="checkbox_Cinematography">Cinematography</label>
                        </li>
                      </ul>
                    <div class="fieldsets row">
                      <div class="col-md-12 form-group floating-label">
                        <div class="formicon"><i class="fas fa-user"></i></div>
                        <input type="text" placeholder=" "  id="full_name" class="floating-input" name="full_name" autocomplete="off">
                        <label>Full Name*</label>
                      
                      </div>
                      <div class="col-md-12 form-group floating-label">
                        <div class="formicon"><i class="fas fa-phone-alt"></i></div>
                        <input type="email" placeholder=" " id="email" class="floating-input" name="email" autocomplete="off">
                        <label>Email Address*</label>

                      </div>
                      <div class="col-md-12 form-group floating-label">
                        <div class="formicon"><i class="fas fa-phone-alt"></i></div>
                        <input type="text" placeholder=" "  id="mobile_number" class="floating-input" name="mobile_number" autocomplete="off">
                        <label>Mobile Number*</label>

                      </div>
                    </div>
                    <div class="fieldsets row">
                      <div class="col-md-12 form-group floating-label">
                        <div class="formicon"><i class="fas fa-envelope"></i></div>
                        <input type="text" placeholder=" " id="ref_website" class="floating-input" name="ref_website" autocomplete="off">
                        <label>Refference website*</label>
                      </div>
                    </div>
                    <div class="fieldsets row">
                      <div class="col-md-12 form-group floating-label">
                        <div class="formicon"><i class="fas fa-map-marker-alt"></i></div>
                        <textarea name="details" id="" cols="30" rows="10"></textarea>
                        <label>Project Proposal</label></label>

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
<!--End Enquire Form-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
<script>
    $('form').on('submit', function (e) {
        e.preventDefault(); // prevent the form submit
        var url = '{{ route('storePP') }}';
        // create the FormData object from the form context (this),
        // that will be present, since it is a form event
        var formData = new FormData(this); 
        // build the ajax call
        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            success: function (response) {
                // handle success response
                console.log(response.data);
                var x = document.getElementById('ContactMSG');
                if (x.style.display === "none") {
                    x.style.display = "block";
                }

            },
            error: function (xhr) {
                // handle error response
                console.log(xhr.responseText);
            },
            contentType: false,
            processData: false
        });
        document.getElementById('cForm').reset();
    });
</script>
    
@endsection