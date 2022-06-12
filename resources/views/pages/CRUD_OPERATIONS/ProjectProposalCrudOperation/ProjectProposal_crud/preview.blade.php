@extends('layouts.admin_dashboard_layout')
@section('content')
@section('title', 'Project-proposal | Preview')

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
                            <a href="{{route('ProjectProposal.list')}}">
                                <button type="button" class="btn btn-dark waves-effect waves-float waves-light" style="float: right">
                                    <span style="font-size: 22px; margin-right:5px;">Project proposal List</span>
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
                    <!-- Tabs with Icon starts -->
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="alert" style="background: #353146">
                                <div class="alert-body d-flex align-items-center justify-content-between flex-wrap p-2">
                                  <div class="me-1">
                                    <h2 class="fw-bolder" style="color:white">Service Names Selected</h2>
                                    <p class="fw-normal mb-1 mb-lg-0" style="color:white">
                                        {{$ProjectProposalDetails->servicesSelected}}
                                    </p>
                                  </div>
                                </div>
                            </div>

                            <div class="alert" style="background: #05693f">
                                <div class="alert-body d-flex align-items-center justify-content-between flex-wrap p-2">
                                  <div class="me-1">
                                    <h2 class="fw-bolder" style="color:white">Refference Website</h2>
                                    <p class="fw-normal mb-1 mb-lg-0" style="color:white">
                                        <a href="" style="color:white;">{{$ProjectProposalDetails->ref_website}}</a>
                                    </p>
                                  </div>
                                </div>
                            </div>
                            <div class="alert" style="background: #bd7373">
                                <div class="alert-body d-flex align-items-center justify-content-between flex-wrap p-2">
                                  <div class="me-1">
                                    <h2 class="fw-bolder" style="color:white">Full name</h2>
                                    <p class="fw-normal mb-1 mb-lg-0" style="color:white">
                                        {{$ProjectProposalDetails->full_name}}
                                    </p>
                                  </div>
                                </div>
                            </div>
                            <div class="alert" style="background: #c58540bd">
                                <div class="alert-body d-flex align-items-center justify-content-between flex-wrap p-2">
                                  <div class="me-1">
                                    <h2 class="fw-bolder" style="color:white">Mobile Number</h2>
                                    <p class="fw-normal mb-1 mb-lg-0" style="color:white">
                                        {{$ProjectProposalDetails->mobile_number}}
                                    </p>
                                  </div>
                                </div>
                            </div> 
                            <div class="alert" style="background: #f34d0b">
                                <div class="alert-body d-flex align-items-center justify-content-between flex-wrap p-2">
                                  <div class="me-1">
                                    <h2 class="fw-bolder" style="color:white">Email</h2>
                                    <p class="fw-normal mb-1 mb-lg-0" style="color:white">
                                        {{$ProjectProposalDetails->email}}
                                    </p>
                                  </div>
                                </div>
                            </div> 

                            <div class="alert" style="background: #353146">
                                <div class="alert-body d-flex align-items-center justify-content-between flex-wrap p-2">
                                  <div class="me-1">
                                    <h2 class="fw-bolder" style="color:white">Details</h2>
                                    <p class="fw-normal mb-1 mb-lg-0" style="color:white">
                                        {{$ProjectProposalDetails->details}}
                                    </p>
                                  </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- Tabs with Icon ends -->
                </div>
               
            </section>
            <!-- Basic Tabs end -->
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
