@extends('layouts.admin_dashboard_layout')
@section('content')
@section('title', 'CEO Details Create')

<!-- Stylesheet for error alert message -->
<style>
    .alert-warning {
        background: rgb(0 0 0) !important;
        color: #ffffff !important;
        font-size: 25px;
        font-family: 'Poppins';
        display: flex;
        justify-content: center;
    }

    .alert.alert-dismissible .btn-close {
        background-color: white;
    }
</style>
<!-- Stylesheet for error alert message -->


<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-12 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <a href="{{route('ceoDetails.list')}}">
                            <button type="button" class="btn btn-dark waves-effect waves-float waves-light"
                                style="float: right">
                                <span style="font-size: 22px; margin-right:5px;">Ceo Details</span>
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
                            <form action="{{route('ceoDetails.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{method_field('PUT')}}
                                <div class="row">
                                    <!-- CEO Name -->
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="heading">Name</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" id="name" class="form-control" name="name"
                                                    value="{{ (old('name')?old('name'):'') }}"
                                                    placeholder="Enter the name of the CEO" autocomplete="off"
                                                    required />
                                            </div>
                                            @if($errors->first('name'))
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>{{$errors->first('name')}}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- CEO Name -->

                                    <!-- CEO Designation -->
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="designation">Designation</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" id="designation" class="form-control"
                                                    name="designation"
                                                    value="{{ (old('designation')?old('designation'):'') }}"
                                                    placeholder="Enter the designation" autocomplete="off" required />
                                            </div>
                                            @if($errors->first('designation'))
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>{{$errors->first('designation')}}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- CEO Designation -->

                                    <!-- CEO Speech -->
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="speech">Speech</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <textarea type="text" id="speech" class="form-control" name="speech"
                                                    value="{{ (old('speech')?old('speech'):'') }}"
                                                    placeholder="Write the Description of the CEO" autocomplete="off"
                                                    rows="20" cols="40" required></textarea>
                                            </div>
                                            @if($errors->first('speech'))
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>{{$errors->first('speech')}}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- CEO Speech -->


                                    <!-- CEO Image -->
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                                <label style="font-family: 'Poppins', sans-serif; color:black"> Choose
                                                    an image<a href="javascript:void(0)"
                                                        class="custom-file-container__image-clear"
                                                        title="Clear Image"></a></label>
                                                <label class="custom-file-container__custom-file">
                                                    <input type="file" name="image" required>
                                                    <span
                                                        class="custom-file-container__custom-file__custom-file-control"></span>
                                                </label>
                                                <div class="custom-file-container__image-preview"></div>
                                                @if($errors->first('image'))
                                                <div class="alert alert-warning alert-dismissible fade show"
                                                    role="alert">
                                                    <strong>{{$errors->first('image')}}</strong>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CEO Image -->

                                    <!-- Action Buttons -->
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-info">Reset</button>
                                    </div>
                                    <!-- Action Buttons -->
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