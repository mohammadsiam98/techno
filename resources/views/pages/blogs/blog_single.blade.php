@extends('layouts.website_mother_layout')
@section('content')
@section('title', 'blog')

<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-3">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-title">
                            <h2 class="sub_pages_title">Blog Section</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->

  <!--Start Blog Details-->
  <section class="blog-page pad-tb">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="blog-header">
            <h1>{{$blogsFetch->title}}</h1>
            <div class="row mt20 mb20">
              <div class="col-md-8 col-9">
                <div class="media">
                  <div class="user-image bdr-radius"><img src="{{asset('frontendAssets/assets/images/profile.png')}}" alt="girl"
                      class="img-fluid" /></div>
                  <div class="media-body user-info">
                    <h5>{{$blogsFetch->get_user_name->name}}</h5>
                    <p>
                      <?php
                      echo date("d.m.Y", strtotime($blogsFetch->created_at));
                      ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="blog-content mt30">
            <p>
              {!!$blogsFetch->description!!}
            </p>
          </div>
        </div>
        <!--End Blog Details-->
      </div>
    </div>
  </section>
@endsection