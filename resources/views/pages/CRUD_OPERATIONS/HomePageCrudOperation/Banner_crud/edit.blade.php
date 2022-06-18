@extends('layouts.admin_dashboard_layout')
@section('content')
@section('title', 'Banner Edit')


<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-12 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <a href="{{route('Banner.list')}}">
                            <button type="button" class="btn btn-dark waves-effect waves-float waves-light"
                                style="float: right">
                                <span style="font-size: 22px; margin-right:5px;">Banner List</span>
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
                            <form id="" action="{{route('Banner.update',$banner->id)}}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- Edit Banner Heading -->
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="heading">Heading</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" id="heading" class="form-control" name="heading"
                                                    value="{{$banner->heading}}"
                                                    value="{{ (old('heading')?old('heading'):'') }}"
                                                    placeholder="Edit your banner header" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Edit Banner Heading -->

                                    <!-- Edit Banner Image -->
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                                <label style="font-family: 'Poppins', sans-serif; color:black"> Choose
                                                    an image<a href="javascript:void(0)"
                                                        class="custom-file-container__image-clear"
                                                        title="Clear Image"></a></label>
                                                <label class="custom-file-container__custom-file">
                                                    <input type="file" name="image" />
                                                    <span
                                                        class="custom-file-container__custom-file__custom-file-control"></span>
                                                </label>
                                                <div class="custom-file-container__image-preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Edit Banner Image -->

                                    <!-- Banner Edit Button & Reset Button -->
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Update Banner</button>
                                        <button type="reset" class="btn btn-info">Reset</button>
                                    </div>
                                    <!-- Banner Edit Button & Reset Button -->
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