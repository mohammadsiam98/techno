@extends('layouts.admin_dashboard_layout')
@section('content')
@section('title', 'Sector SF|List')

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-12 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <a href="{{route('SectorSF.create')}}">
                            <button type="button" class="btn btn-success waves-effect waves-float waves-light" style="float: right; margin-left:10px;">
                                <span style="font-size: 22px; margin-right:5px;">Create new record</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic Tables start -->
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="widget-content widget-content-area br-6">
                            <table id="html5-extension" class="table table-bordered non-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">Serial Number</th>
                                        <th class="text-center">Category</th>
                                        <th class="text-center">Special feature content header</th>
                                        <th class="dt-no-sorting">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($SectorSF as $key=>$SpecialFeature)
                                    <tr>
                                        <td class="checkbox-column text-center"> {{$key+1}} </td>
                                        <td class="badge rounded-pill badge-light-primary me-1" style="margin-top: 5px;display:flex;justify-content:center;">{{$SpecialFeature->get_category->categoryName}}</td>
                                        <td class="text-center">{{$SpecialFeature->heading}}</td>
                                        <td>
                                            <a href="{{route('SectorSF.edit' , $SpecialFeature->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg>
                                            </a>
                                            <a href="{{route('SectorSF.destroy' , $SpecialFeature->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg>
                                            </a>
                                            <a href="{{route('SectorSF.preview' , $SpecialFeature->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chrome">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <circle cx="12" cy="12" r="4"></circle>
                                                    <line x1="21.17" y1="8" x2="12" y2="8"></line>
                                                    <line x1="3.95" y1="6.06" x2="8.54" y2="14"></line>
                                                    <line x1="10.88" y1="21.94" x2="15.46" y2="14"></line>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
