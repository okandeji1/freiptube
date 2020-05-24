@extends('layouts.site')
@section('content')
<div id="upload">
<style>
        .d-none {
            display: none;
    }
</style>
    <div class="row">
        <!-- upload -->
        <div class="col-md-8">
            @include('partials.messages')
            <h1 class="page-title"><span>Upload</span> Video</h1>
            <form onsubmit="return uploadVideo()" action="/10-upload" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label>Post Title</label>
                        <input type="text" name="title" id="title" class="form-control :class="{ 'is-invalid': form.errors.has('title') }" placeholder="Post Title">
                        <has-error :form="form" field="title"></has-error>
                    </div>
                    <div class="col-md-6">
                        <label>Post Category</label>
                        <input type="text" name="category" id="category" class="form-control :class="{ 'is-invalid': form.errors.has('category') }" placeholder="Post Category">
                        <has-error :form="form" field="category"></has-error>
                    </div>
                    <div class="col-md-6">
                        <label>Video upload</label>
                        <input id="upload_file video" name="video" type="file" class="file :class="{ 'is-invalid': form.errors.has('video') }">
                        <has-error :form="form" field="video"></has-error>
                    </div>
                    <div class="alert alert-danger d-none" id="msg"></div>
                    <div class="col-md-6">
                        <button type="submit" id="contact_submit" class="btn btn-dm">Save your post</button>
                    </div>
                </div>
            </form>
            <div class="alert alert-danger d-none" id="msg"></div>
        </div><!-- // col-md-8 -->

        <div class="col-md-4">
            <a href="#"><img src="/demo_img/upload-adv.png" alt=""></a>
        </div><!-- // col-md-8 -->
        <!-- // upload -->
    </div><!-- // row -->
</div><!-- // upload -->
@endsection

<script>

    function uploadVideo(){
        // Get user input value
        let title = document.getElementById('title').value;
        let category = document.getElementById('category').value;
        let video = document.getElementById('video').value;

    // Checking for validation
        if(title === '' || title === 'undefined'){
            document.getElementById('msg').classList.remove('d-none');
            document.getElementById('msg').innerHTML  = 'Please title is required';
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