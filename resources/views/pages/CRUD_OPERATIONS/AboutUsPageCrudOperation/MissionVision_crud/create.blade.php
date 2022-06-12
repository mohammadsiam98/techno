@extends('layouts.admin_dashboard_layout')
@section('content')
@section('title', 'Mission-Vision Create')


<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-12 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <a href="{{route('goal.list')}}">
                            <button type="button" class="btn btn-dark waves-effect waves-float waves-light" style="float: right">
                                <span style="font-size: 22px; margin-right:5px;">Mission & Vision Details</span>
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
                            <form action="{{route('goal.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf                       
                                {{method_field('PUT')}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="mission">Mission</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <textarea id="mission" class="form-control" name="mission" value="{{ (old('mission')?old('mission'):'') }}" autocomplete="off"> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="vision">Vision</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <textarea id="vision" class="form-control" name="vision" value="{{ (old('vision')?old('vision'):'') }}" autocomplete="off"></textarea>
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
