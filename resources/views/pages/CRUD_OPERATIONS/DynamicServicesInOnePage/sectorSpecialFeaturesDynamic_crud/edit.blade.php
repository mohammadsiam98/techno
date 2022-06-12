@extends('layouts.admin_dashboard_layout')
@section('content')
@section('title', 'Sector-SF-Li|Edit')


<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-12 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <a href="{{route('SectorSFD.list')}}">
                            <button type="button" class="btn btn-dark waves-effect waves-float waves-light" style="float: right">
                                <span style="font-size: 22px; margin-right:5px;">Sector SF li List</span>
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
            <section id="basic-horizontal-layouts">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <form id="" action="{{route('SectorSFD.update',$SectorSFD->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    {{-- Sector Special Feature List --}}
                                    <div class="col-12 basic-select2">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="title">sector_Special_feature</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <select name="sector_Special_feature_id" class="select2 form-select" id="select2-basic">
                                                    <option class="disabled">--Select Option--</option>
                                                    @foreach ($Fectch_Sector_SF as $Fectch_Sector_SF_list)
                                                    <option <?php if($Fectch_Sector_SF_list->id == $SectorSFD->sector_Special_feature_id){?> selected <?php }  ?> value="{{ $Fectch_Sector_SF_list->id }}">{{ $Fectch_Sector_SF_list->heading }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                   {{-- Sector Special Feature List --}}

                                    {{-- Features Name Edit --}}
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="featureName">Feature Name</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" id="featureName" class="form-control" name="featureName" value="{{$SectorSFD->featureName}}" placeholder="Edit your feature name" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Features Name Edit --}}

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Update Details</button>
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
