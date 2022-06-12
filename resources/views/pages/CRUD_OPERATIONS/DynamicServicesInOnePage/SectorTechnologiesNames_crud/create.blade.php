@extends('layouts.admin_dashboard_layout')
@section('content')
@section('title', 'Technology Heading | Create')


<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-12 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <a href="{{route('SectorTechnologyHeading.list')}}">
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
        <div class="content-body">
            <section id="basic-horizontal-layouts">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('SectorTechnologyHeading.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf                       
                                {{method_field('PUT')}}
                                <div class="row">


                                     {{-- Category List --}}
                                     <div class="col-12 basic-select2">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="title">Category</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <select name="category_id" class="select2 form-select" id="select2-basic">
                                                    <option class="disabled">--Select Option--</option>
                                                    @foreach ($categorylist as $category)
                                                    <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Category List --}}

                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="Sector_technologies_name_heading">Service Stack name we offer</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" id="Sector_technologies_name_heading" class="form-control" name="Sector_technologies_name_heading" value="{{ (old('Sector_technologies_name_heading')?old('Sector_technologies_name_heading'):'') }}" placeholder="Enter a heading" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-info">Reset</button>
                                    </div>
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
