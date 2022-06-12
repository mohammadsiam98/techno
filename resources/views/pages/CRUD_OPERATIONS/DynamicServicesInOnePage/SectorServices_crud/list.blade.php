@extends('layouts.admin_dashboard_layout')
@section('content')
@section('title', 'Sector Service List')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<style>
    .toggle-off.btn {
        background-color: #343434;
        color: white;
    }

    .toggle.btn.btn-primary.slow {
        display: block;
        margin-left: 24%;
        margin-right: 50%;
    }

    .btn,
    .btn-group,
    .btn-group-vertical,
    .navbar-toggler-icon,
    .table,
    img,
    svg {
        vertical-align: middle;
        text-align: center;
    }

</style>
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-12 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <a href="{{route('SectorServices.create')}}">
                            <button type="button" class="btn btn-dark waves-effect waves-float waves-light" style="float: right; margin-left:10px;">
                                <span style="font-size: 22px; margin-right:5px;">Create new record</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                            </button>
                        </a>

                        <a href="{{route('SectorServices.restoreList')}}" style="padding: 20px;">
                            <button type="button" class="btn btn-danger waves-effect waves-float waves-light" style="float: right; box-shadow:0 1px 20px 1px #EA5455!important ">
                                <span style="font-size: 22px; margin-right:5px;"> RestoreList</span>
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
                                        <th class="text-center">Category Name</th>
                                        <th class="text-center">Service Category Heading</th>
                                        <th class="text-center">Status</th>
                                        <th class="dt-no-sorting">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($SectorServices as $key=>$SectorServiceDetails)
                                    <tr>
                                        <td class="checkbox-column text-center"> {{$key+1}} </td>
                                        <td class="text-center badge rounded-pill badge-light-primary me-1" style="margin-top: 13px;">{{$SectorServiceDetails->get_category->categoryName}}</td>
                                        <td class="text-center rounded-pill badge-light-primary me-1" style="margin-top: 13px;color:green;">{{$SectorServiceDetails->get_service_name_heading->Sector_service_name}}</td>
                                      
                                        <td>
                                            <input type="checkbox" class="toggle-class" data-id="{{ $SectorServiceDetails->id }}" data-toggle="toggle" data-style="slow" data-on="Enabled" data-off="Disabled" {{ $SectorServiceDetails->status == true ? 'checked' : ''}}>
                                        </td>
                                        <td>
                                            <a href="{{route('SectorServices.edit' , $SectorServiceDetails->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg>
                                            </a>
                                            <a href="{{route('SectorServices.destroy' , $SectorServiceDetails->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg>
                                            </a>
                                            <a href="{{route('SectorServices.preview' , $SectorServiceDetails->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chrome">
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

<script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>
    $(function() {
        $('#toggle-two').bootstrapToggle({
            on: 'Enabled'
            , off: 'Disabled'
        });
    })

</script>


<script>
    $('.toggle-class').on('change', function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var sector_services_id = $(this).data('id');
        $.ajax({
            type: 'GET'
            , dataType: 'JSON'
            , url: "{{ route('SectorServicesStatus') }}"
            , data: {
                'status': status
                , 'sector_services_id': sector_services_id
            }
            , success: function(data) {
                $('#notifDiv').fadeIn();
                $('#notifDiv').css('background', 'green');
                $('#notifDiv').text('Status Updated Successfully');
                setTimeout(() => {
                    $('#notifDiv').fadeOut();
                }, 3000);
            }
        });
    });

</script>




@endsection
