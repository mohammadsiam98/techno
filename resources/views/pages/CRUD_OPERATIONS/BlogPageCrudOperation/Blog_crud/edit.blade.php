@extends('layouts.admin_dashboard_layout')
@section('content')
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@section('title', 'Blog Details| Edit')

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-12 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    {{-- Blog Edit --}}
                    <div class="col-12">
                        <a href="{{route('Blogs.list')}}">
                            <button type="button" class="btn btn-dark waves-effect waves-float waves-light"
                                style="float: right">
                                <span style="font-size: 22px; margin-right:5px;">Blogs List</span>
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
                    {{-- Blog Edit --}}
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="basic-horizontal-layouts">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <form id="" action="{{route('Blogs.update',$blog_details->id)}}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    {{-- Category List --}}
                                    <div class="col-12 basic-select2">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="title">Technology Heading</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <select name="category_id" class="select2 form-select"
                                                    id="select2-basic">
                                                    <option class="disabled">--Select Option--</option>
                                                    @foreach ($categorylist as $category)
                                                    <option <?php if($category->id == $blog_details->category_id){?>
                                                        selected
                                                        <?php }  ?> value="{{ $category->id }}">{{
                                                        $category->categoryName }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Categpory List --}}


                                    {{-- Blog Title Edit --}}
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="title">Blog Title</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" id="title" class="form-control" name="title"
                                                    value="{{$blog_details->title}}" placeholder="Edit your blog title"
                                                    autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Blog Title Edit --}}

                                    {{-- Blog Title Description Edit --}}
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="description">Blog Description</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <textarea id="my-editor" name="description"
                                                    class="form-control">{{$blog_details->description}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Blog Title Description Edit --}}

                                    {{-- Blog Image Edit --}}
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
                                    {{-- Blog Image Edit --}}

                                    {{-- Blog Thumbnail Image Edit --}}
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="custom-file-container" data-upload-id="thumbnailImage">
                                                <label style="font-family: 'Poppins', sans-serif; color:black"> Choose
                                                    an image<a href="javascript:void(0)"
                                                        class="custom-file-container__image-clear"
                                                        title="Clear Image"></a></label>
                                                <label class="custom-file-container__custom-file">
                                                    <input type="file" name="thumbnail_image" />
                                                    <span
                                                        class="custom-file-container__custom-file__custom-file-control"></span>
                                                </label>
                                                <div class="custom-file-container__image-preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Blog Thumbnail Image Edit --}}

                                    {{-- Enter & Reset Button --}}
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="reset" class="btn btn-info">Reset</button>
                                    </div>
                                    {{-- Enter & Reset Button --}}
                                </div>

                                {{-- Blog Image Show --}}
                                <div class="row">
                                    <h3>The image which you have uploaded is</h3>
                                    <img src="{{url($blog_details->image)}}" style="width: 120px;height:auto;">
                                </div>
                                {{-- Blog Image Show --}}
                                
                                
                                {{-- Blog Thumbnail Image Show --}}
                                <div class="row">
                                    <h3>The thumbnail image which you have uploaded is</h3>
                                    <img src="{{url($blog_details->thumbnail_image)}}" style="width: 120px;height:auto;">
                                </div>
                                {{-- Blog Thumbnail Image Show --}}
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