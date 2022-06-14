@extends('layouts.admin_dashboard_layout')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@section('title', 'Blog | Create')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
</style>

<style>
.alert-warning
{
    background: rgb(0 0 0)!important;
    color: #ffffff!important;
    font-size: 25px;
    font-family: 'Poppins';
    display: flex;
    justify-content: center;
}
.alert.alert-dismissible .btn-close
{
    background-color: white;
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
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="basic-horizontal-layouts">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('Blogs.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{method_field('PUT')}}
                                <div class="row">
                                    {{-- Category Names Fetch --}}
                                    <div class="col-12 basic-select2">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="title">Category</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <select name="category_id" class="select2 form-select"
                                                    id="select2-basic" required>
                                                    <option class="disabled">--Select Option--</option>
                                                    @foreach ($categorylist as $category)
                                                    <option value="{{ $category->id }}">{{ $category->categoryName }}
                                                    </option>
                                                    @endforeach
                                                    @if($errors->first('category_id'))
                                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                        <strong>{{$errors->first('category_id')}}</strong>
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                    @endif
                                                </select>
                                             
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Category Names Fetch --}}

                                   
                                    {{-- Blog Title Insert --}}
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="title"> Blog Title</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" id="title" class="form-control" name="title"
                                                    value="{{ (old('title')?old('title'):'') }}"
                                                    placeholder="Write your blog title" autocomplete="off"
                                                    style="font-family: 'Poppins', sans-serif;font-size:20px;" required />
                                            </div>
                                        </div>
                                        @if($errors->first('title'))
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>{{$errors->first('title')}}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif
                                    </div>
                                    {{-- Blog Title Insert --}}


                                    {{-- Blog Description Insert --}}
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="description">Blog Description</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <textarea id="my-editor" name="description"
                                                    class="form-control" required></textarea>


                                                    @if($errors->first('description'))
                                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                        <strong>{{$errors->first('description')}}</strong>
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Blog Description Insert --}}

                                  

                                    {{-- Blog Image Insert --}}
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
                                                @if($errors->first('image'))
                                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                            <strong>{{$errors->first('image')}}</strong>
                                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                        </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Blog Image Insert --}}


                                    {{-- Blog Image Thumbnail Insert --}}
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
                                    {{-- Blog Image Thumbnail Insert --}}

                                    @if($errors->first('thumbnail_image'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>{{$errors->first('thumbnail_image')}}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif


                                    {{-- Enter & Reset Button --}}
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-info">Reset</button>
                                    </div>
                                    {{-- Enter & Reset Button --}}
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