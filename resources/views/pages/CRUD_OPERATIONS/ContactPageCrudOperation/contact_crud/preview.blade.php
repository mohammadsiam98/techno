@extends('layouts.admin_dashboard_layout')
@section('content')
@section('title', 'Single Contact Preview')

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
                            <a href="{{route('Contact.list')}}">
                                <button type="button" class="btn btn-dark waves-effect waves-float waves-light" style="float: right">
                                    <span style="font-size: 22px; margin-right:5px;">Contact List</span>
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
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Contact Preview Details</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="homeIcon-tab" data-bs-toggle="tab" href="#homeIcon" aria-controls="home" role="tab" aria-selected="true"> Name</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profileIcon-tab" data-bs-toggle="tab" href="#profileIcon" aria-controls="profile" role="tab" aria-selected="false"> Number</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="image-tab" data-bs-toggle="tab" href="#imageTab" aria-controls="profile" role="tab" aria-selected="false">Message</a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="homeIcon" aria-labelledby="homeIcon-tab" role="tabpanel">
                                        <p>
                                            {{$contact->name}}
                                        </p>

                                    </div>
                                    <div class="tab-pane" id="profileIcon" aria-labelledby="profileIcon-tab" role="tabpanel">
                                        <p>
                                            {{$contact->mobilenumber}}
                                        </p>
                                    </div>

                                    <div class="tab-pane" id="imageTab" aria-labelledby="image-tab" role="tabpanel">
                                        <p>
                                            {{$contact->yourMessage}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tabs with Icon ends -->

                    <div class="col-md-6">

                    </div>

                </div>
            </section>
            <!-- Basic Tabs end -->
        </div>
    </div>
</div>
<!-- END: Content-->


@endsection
