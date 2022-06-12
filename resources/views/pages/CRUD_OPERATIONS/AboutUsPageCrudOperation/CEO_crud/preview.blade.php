@extends('layouts.admin_dashboard_layout')
@section('content')
@section('title', 'CEO Details Preview')

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-12 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <div class="breadcrumb-wrapper">
                            <a href="{{route('ceoDetails.list')}}">
                                <button type="button" class="btn btn-dark waves-effect waves-float waves-light" style="float: right">
                                    <span style="font-size: 22px; margin-right:5px;">Details</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                        <line x1="8" y1="6" x2="21" y2="6"></line>
                                        <line x1="8" y1="12" x2="21" y2="12"></line>
                                        <line x1="8" y1="18" x2="21" y2="18"></line>
                                        <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                        <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                        <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <!-- Basic tabs start -->
            <section id="basic-tabs-components">
                <div class="row match-height">
                    <div class="col-xl-12 col-lg-12">
                        <div class="">
                            <!-- Ceo's Name Preview -->
                            <div class="alert" style="background: #353146">
                                <div class="alert-body d-flex align-items-center justify-content-between flex-wrap p-2">
                                    <div class="me-1">
                                        <h4 class="fw-bolder" style="color:white">Category</h4>
                                        <p class="fw-normal mb-1 mb-lg-0" style="color:white">
                                            {{$Ceo->name}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Ceo's Name Preview -->

                            <!-- Ceo's Designation Preview -->
                            <div class="alert" style="background: #353146">
                                <div class="alert-body d-flex align-items-center justify-content-between flex-wrap p-2">
                                    <div class="me-1">
                                        <h4 class="fw-bolder" style="color:white">Designation</h4>
                                        <p class="fw-normal mb-1 mb-lg-0" style="color:white">
                                            {{$Ceo->designation}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Ceo's Designation Preview -->

                            <!-- Ceo's Speech Preview -->
                            <div class="alert" style="background: #353146">
                                <div class="alert-body d-flex align-items-center justify-content-between flex-wrap p-2">
                                    <div class="me-1">
                                        <h4 class="fw-bolder" style="color:white">Speech</h4>
                                        <p class="fw-normal mb-1 mb-lg-0" style="color:white">
                                            {{$Ceo->speech}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Ceo's Speech Preview -->

                        </div>
                    </div>
                </div>

                <!-- Image Preview Which Already Uploaded -->
                <div class="row">
                    <h3>The image which you have uploaded is</h3>
                    <img style="width: 120px; height:auto" src="{{ asset('images/CEO_Image/'.$Ceo->created_at->format('Y/M/').'/'.$Ceo->image) }}" alt="CEO Image">
                </div>
                <!-- Image Preview Which Already Uploaded -->

            </section>
            <!-- Basic Tabs end -->
        </div>
    </div>
</div>
<!-- END: Content-->


@endsection
