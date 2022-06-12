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


<!--Start Blog Grid-->
<section class="blog-page pad-tb pt40">
    <div class="container">
        <div class="row">
            @foreach($blogsFetch as $blogs)
            <div class="col-lg-4 col-sm-6 mt30">
                <div class="single-blog-post- up-hor shdo">
                    <div class="single-blog-img-">
                        <a href="{{route('singleBlogPost',[$blogs->title])}}"><img src="{{url($blogs->thumbnail_image)}}" alt="girl" class="img-fluid" /></a>
                        <div class="entry-blog-post dg-bg2">
                            <span class="bypost-"><a href="#"><i class="fas fa-tag"></i>  <td class="text-center badge rounded-pill badge-light-primary me-1" style="margin-top: 12px;">{{$blogs->get_category->categoryName}}</td></a></span>
                        </div>
                    </div>
                    <div class="blog-content-tt">
                        <div class="single-blog-info-">
                            
                            <h4><a href="{{ route('singleBlogPost',$blogs->slug) }}">{{$blogs->title}}</a></h4>
                            <p>{!!Str::limit($blogs->description,100, $end='.......')!!}</p>
                        </div>
                        <div class="post-social">
                            <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                <span class="posted-on-">
                                    <a href="#">
                                        <i class="fas fa-clock"></i>
                                        <?php
                                        echo date("d.m.Y", strtotime($blogs->created_at));
                                        ?>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--End Blog Grid-->

@endsection
