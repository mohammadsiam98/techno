@extends('layouts.admin_dashboard_layout')
@section('content')
@section('title', 'Preview')

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
                            <a href="{{route('SectorServices.list')}}">
                                <button type="button" class="btn btn-dark waves-effect waves-float waves-light" style="float: right">
                                    <span style="font-size: 22px; margin-right:5px;">Sector Service List</span>
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
                            <div class="card-header">
                                <h4 class="card-title" style="display:block;justify-content:center">Sector Services Details</h4>
                            </div>
                            <div class="alert"  style="background: #353146">
                                <div class="alert-body d-flex align-items-center justify-content-between flex-wrap p-2">
                                  <div class="me-1">
                                    <h4 class="fw-bolder" style="color:white">Service Name Heading</h4>
                                    <p class="fw-normal mb-1 mb-lg-0" style="color:white">
                                        {{$SectorServices->get_service_name_heading->Sector_service_name}}
                                    </p>
                                  </div>
                                </div>
                            </div>
                            <div class="alert" style="background: #353146">
                                <div class="alert-body d-flex align-items-center justify-content-between flex-wrap p-2">
                                  <div class="me-1">
                                    <h4 class="fw-bolder" style="color:white">Category</h4>
                                    <p class="fw-normal mb-1 mb-lg-0" style="color:white">
                                        {{$SectorServices->get_category->categoryName}}
                                    </p>
                                  </div>
                                </div>
                            </div>
                            <div class="alert" style="background: #353146">
                                <div class="alert-body d-flex align-items-center justify-content-between flex-wrap p-2">
                                  <div class="me-1">
                                    <h4 class="fw-bolder" style="color:white">Service Title</h4>
                                    <p class="fw-normal mb-1 mb-lg-0" style="color:white">
                                        {{$SectorServices->title}}
                                    </p>
                                  </div>
                                </div>
                            </div> 
                            <div class="alert" style="background: #353146">
                                <div class="alert-body d-flex align-items-center justify-content-between flex-wrap p-2">
                                  <div class="me-1">
                                    <h4 class="fw-bolder" style="color:white">Service Details</h4>
                                    <p class="fw-normal mb-1 mb-lg-0" style="color:white">
                                        {{$SectorServices->details}} 
                                    </p>
                                  </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <!-- Tabs with Icon ends -->
                </div>

                <img class="blog-img-view-121" src="{{ asset('images/SectorServices/'.$SectorServices->created_at->format('Y/M/').'/'.$SectorServices->image) }}" style="width: 33%;" alt="Sector Service Image">
            </section>

               
            <!-- Basic Tabs end -->
        </div>
    </div>
</div>
<!-- END: Content-->


@endsection
