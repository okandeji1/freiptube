@extends('layouts.site')
@section('content')
<style>
        .d-none {
            display: none;
    }
</style>
<div class="container-fluid upload-details">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-title">
            <h6>Upload Details</h6>
            </div>
        </div>
        <!-- <div class="col-lg-2">
            <div class="imgplace"></div>
        </div> -->
        <!-- <div class="col-lg-10">
            <div class="osahan-title">Contrary to popular belief, Lorem Ipsum (2019) is not.</div>
            <div class="osahan-size">102.6 MB . 2:13 MIN Remaining</div>
            <div class="osahan-progress">
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"   aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
            </div>
            <div class="osahan-close">
                <a href="#"><i class="fas fa-times-circle"></i></a>
            </div>
            </div>
            <div class="osahan-desc">Your Video is still uploading, please keep this page open until it's done.</div>
        </div> -->
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            @include('partials.messages')
            <form onsubmit="return uploadVideo()" action="/10-upload" method="post" enctype="multipart/form-data">
                @csrf
                <div class="osahan-form">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="e1">Video Title</label>
                                <input type="text" name="title"  placeholder="Video Title" id="e1 title" class="form-control :class="{ 'is-invalid': form.errors.has('title') }">
                                <has-error :form="form" field="title"></has-error>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="e2">About</label>
                                <textarea rows="3" id="e2 description" name="description" class="form-control :class="{ 'is-invalid': form.errors.has('description') }">Description</textarea>
                                <has-error :form="form" field="description"></has-error>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="e3">Video Category</label>
                                <select id="e3 category" name="category" class="custom-select :class="{ 'is-invalid': form.errors.has('category') }">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->name}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                <has-error :form="form" field="category"></has-error>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="main-title">
                                <h6>Note ( Video file must not be greater than 100mb )</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row category-checkbox">
                        <!-- checkbox 1col -->
                        <div class="col-lg-2 col-xs-6 col-4">
                            <div class="form-group">
                                <label for="customCheck1">Select video file</label>
                                <input type="file" class="form-control :class="{ 'is-invalid': form.errors.has('video') }" id="e8 video">
                                <has-error :form="form" field="video"></has-error>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="osahan-area text-center mt-3">
                    <div class="alert alert-primary d-none" id="msg"></div>
                    <button type="submit" class="btn btn-outline-primary">Save Changes</button>
                </div>
            </form>
            
            <hr>
            <div class="terms text-center">
            <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority <a href="#">Terms of Service</a> and <a href="#">Community Guidelines</a>.</p>
            <p class="hidden-xs mb-0">Ipsum is therefore always free from repetition, injected humour, or non</p>
            </div>
        </div>
    </div>
</div>

<script>

    function uploadVideo(){
        // Get user input value
        let title = document.getElementById('title').value;
        let description = document.getElementById('description').value;
        let category = document.getElementById('category').value;
        let video = document.getElementById('video').value;

    // Checking for validation
        if(title === '' || title === 'undefined'){
            document.getElementById('msg').classList.remove('d-none');
            document.getElementById('msg').innerHTML  = 'Please title is required';
            return false
        }

        if(description === '' || description === 'undefined'){
            document.getElementById('msg').classList.remove('d-none');
            document.getElementById('msg').innerHTML  = 'Please describe the video in a bit';
            return false
        }
    
        if(category === '' || category === 'undefined'){
            document.getElementById('msg').classList.remove('d-none');
            document.getElementById('msg').innerHTML  = 'Please category is required';
            return false
        }
    
        if(video === '' || video === 'undefined'){
            document.getElementById('msg').classList.remove('d-none');
            document.getElementById('msg').innerHTML  = 'Please upload a file';
            return false
        }
    }
    
    </script>
@endsection