@extends('layouts.site')
@section('content')
    <div id="upload">
        <style>
            .d-none {
                display: none;
            }

        </style>
        <div class="container-fluid upload-details">
            <div class="row">
                <!-- upload -->
                <div class="col-lg-12">
                    @include('partials.messages')
                    <h1 class="page-title"><span>Add</span> Category</h1>
                    <form onsubmit="return uploadVideo()" action="/admin/add-category" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <label>Category Name</label>
                                <input type="text" name="category" id="category" class="form-control :class=" { 'is-invalid'
                                    : form.errors.has('category') }" placeholder="Post Category Name">
                                <has-error :form="form" field="category"></has-error>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" id="contact_submit" class="btn btn-outline-primary">Save</button>
                            </div>
                            <div class="alert alert-danger d-none" id="msg"></div>
                        </div>
                    </form>
                </div><!-- // col-md-8 -->

                <div class="col-md-4">
                    <a href="#"><img src="/demo_img/upload-adv.png" alt=""></a>
                </div><!-- // col-md-8 -->
                <!-- // upload -->
            </div><!-- // row -->
        </div><!-- // upload -->
    </div>
@endsection

<script>
    function uploadVideo() {
        // Get user input value
        let category = document.getElementById('category').value;

        // Checking for validation
        if (category === '' || category === 'undefined') {
            document.getElementById('msg').classList.remove('d-none');
            document.getElementById('msg').innerHTML = 'Please category name is required';
            return false
        }
    }

</script>
