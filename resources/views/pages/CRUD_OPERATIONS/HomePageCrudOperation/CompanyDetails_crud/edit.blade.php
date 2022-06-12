@extends('layouts.admin_dashboard_layout')
@section('content')
@section('title', 'Company Details Edit')

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-12 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <a href="{{route('CompanyDetails.list')}}">
                            <button type="button" class="btn btn-dark waves-effect waves-float waves-light"
                                style="float: right">
                                <span style="font-size: 22px; margin-right:5px;">List</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-list">
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
        <div class="content-body">
            <section id="basic-horizontal-layouts">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <form id="" action="{{route('CompanyDetails.update',$Details->id)}}" method="post">
                                @csrf
                                <div class="row">
                                    <!-- Company Details Edit -->
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-12">
                                                <label class="col-form-label" for="details">Company Details</label>
                                                <textarea name="details" class="form-control" id="my_editor"
                                                    aria-describedby="details"
                                                    placeholder="Write your company description" id="" cols="30"
                                                    rows="10">{!! $Details->details !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Company Details Edit -->

                                    <!-- Company Details Edit & Reset Button -->
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Update Details</button>
                                        <button type="reset" class="btn btn-info">Reset</button>
                                    </div>
                                    <!-- Company Details Edit & Reset Button -->

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->

@endsection