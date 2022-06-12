@extends('layouts.website_mother_layout')
@section('content')
@section('title', 'contact-form')
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
                            <h2 class="sub_pages_title">Contact-Us</h2>
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
            <div class="col-lg-12 col-sm-12">
                <h2 class="text-radius text-light text-animation bg-b" style="text-align: center; margin-bottom:20px">Contact with us for any kind of information</h2>
            </div>
            <div class="col-lg-12" style="margin-top:30px;">
                <div class="niwax23form shadow">
                   <div class="contact-form-card-pr contact-block-sw m0 iconin">
                        <div class="form-block niwaxform">
                            <form id="cForm" role="form" enctype="multipart/form-data">
                                @csrf
                                    <div class="alert alert-warning alert-dismissible fade show" id="ContactMSG" role="alert" style="display: none;">
                                        <strong>Congratulations!</strong> We have received your message. we will knock you soon !!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="margin-right:-551px;"></button>
                                    </div>
                                <div class="fieldsets row">
                                    <div class="form-group col-sm-6">
                                        <input type="text" id="name" name="name" placeholder="Enter name" required data-error="Please fill Out" autocomplete="off">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="tel" name="mobilenumber" id="mobilenumber" placeholder="Enter mobile number" required autocomplete="off">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="fieldsets row">
                                    <div class="form-group col-sm-12">
                                        <input type="email" name="email" id="email" placeholder="Enter your email" required autocomplete="off">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="fieldsets row textareax">
                                    <div class="form-group col-sm-12">
                                        <textarea type="text" cols="30" rows="10" name="yourMessage" id="yourMessage" placeholder="Enter your thoughts" required></textarea>
                                        <div class="help-block with-errors"></div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
<script>
    $('form').on('submit', function (e) {
        e.preventDefault(); // prevent the form submit
        var url = '{{ route('contactStore') }}';
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
            error: function (response) {
                // handle error response
                console.log(response.data);
            },
            contentType: false,
            processData: false
        });
        document.getElementById('cForm').reset();
    });
</script>

@endsection
