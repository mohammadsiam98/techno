@extends('layouts.admin_dashboard_layout')
@section('content')
@section('title', 'Admin Dashboard')
<style>
    .card.card-congratulation-medal.log_in_user {
    background-color: lightseagreen;
    color: black;
    font-size: 20px;
}
</style>
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row match-height">
                    <!-- Medal Card -->
                    <div class="col-xl-12 col-md-12 col-12">
                        <div class="card card-congratulation-medal log_in_user">
                            <div class="card-body">
                                <h1>You are log in as <strong>{{ Auth::user()->name }}</strong>  </h1>
                            </div>
                        </div>
                    </div>
                    <!--/ Medal Card -->
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
<!-- END: Content-->


@endsection
