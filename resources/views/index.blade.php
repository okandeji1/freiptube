
@extends('layouts.site')
@section('content')
@if(count($posts) > 0)
<h1 class="new-video-title"><i class="fa fa-bolt"></i> Trending</h1>
<div class="row">

    <!-- video-item -->
    <div class="col-lg-3 col-md-4 col-sm-6">
        @foreach($posts as $post)
            <div class="video-item">
                <div class="thumb video-info">
                    <div class="hover-efect"></div>                    
                    <video controls loop width="208">
                        <source src="/storage/{{$post->video}}" type="video/mp4" >
                    </video>
                    <a href="#" class="title">{{$post->title}}</a>
                    <a class="channel-name" href="#">{{$post->user->firstname}}<span>
                    <i class="fa fa-check-circle"></i></span></a>
                    <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                    <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
                </div>
            </div>
        @endforeach
    </div>
    <!-- // video-item -->

</div><!-- // row -->
<h1 class="new-video-title"><i class="fa fa-soccer-ball-o"></i> sport</h1>
<div class="row">

    <!-- video-item -->
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="video-item">
            <div class="thumb">
                <div class="hover-efect"></div>
                <small class="time">10:53</small>
                <a href="#"><img src="demo_img/v5.png" alt=""></a>
            </div>
            <div class="video-info">
                <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                <a class="channel-name" href="#">Rabie Elkheir<span>
                <i class="fa fa-check-circle"></i></span></a>
                <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
            </div>
        </div>
    </div>
    <!-- // video-item -->


    <!-- video-item -->
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="video-item">
            <div class="thumb">
                <div class="hover-efect"></div>
                <small class="time">10:53</small>
                <a href="#"><img src="demo_img/v6.png" alt=""></a>
            </div>
            <div class="video-info">
                <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                <a class="channel-name" href="#">Rabie Elkheir<span>
                <i class="fa fa-check-circle"></i></span></a>
                <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
            </div>
        </div>
    </div>
    <!-- // video-item -->


    <!-- video-item -->
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="video-item">
            <div class="thumb">
                <div class="hover-efect"></div>
                <small class="time">10:53</small>
                <a href="#"><img src="demo_img/v7.png" alt=""></a>
            </div>
            <div class="video-info">
                <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                <a class="channel-name" href="#">Rabie Elkheir<span>
                <i class="fa fa-check-circle"></i></span></a>
                <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
            </div>
        </div>
    </div>
    <!-- // video-item -->


    <!-- video-item -->
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="video-item">
            <div class="thumb">
                <div class="hover-efect"></div>
                <small class="time">10:53</small>
                <a href="#"><img src="demo_img/v8.png" alt=""></a>
            </div>
            <div class="video-info">
                <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                <a class="channel-name" href="#">Rabie Elkheir<span>
                <i class="fa fa-check-circle"></i></span></a>
                <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
            </div>
        </div>
    </div>
    <!-- // video-item -->

</div><!-- // row -->
<h1 class="new-video-title"><i class="fa fa-globe"></i> News</h1>
<div class="row">

    <!-- video-item -->
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="video-item">
            <div class="thumb">
                <div class="hover-efect"></div>
                <small class="time">10:53</small>
                <a href="#"><img src="demo_img/v9.png" alt=""></a>
            </div>
            <div class="video-info">
                <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                <a class="channel-name" href="#">Rabie Elkheir<span>
                <i class="fa fa-check-circle"></i></span></a>
                <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
            </div>
        </div>
    </div>
    <!-- // video-item -->


    <!-- video-item -->
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="video-item">
            <div class="thumb">
                <div class="hover-efect"></div>
                <small class="time">10:53</small>
                <a href="#"><img src="demo_img/v10.png" alt=""></a>
            </div>
            <div class="video-info">
                <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                <a class="channel-name" href="#">Rabie Elkheir<span>
                <i class="fa fa-check-circle"></i></span></a>
                <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
            </div>
        </div>
    </div>
    <!-- // video-item -->


    <!-- video-item -->
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="video-item">
            <div class="thumb">
                <div class="hover-efect"></div>
                <small class="time">10:53</small>
                <a href="#"><img src="demo_img/v11.png" alt=""></a>
            </div>
            <div class="video-info">
                <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                <a class="channel-name" href="#">Rabie Elkheir<span>
                <i class="fa fa-check-circle"></i></span></a>
                <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
            </div>
        </div>
    </div>
    <!-- // video-item -->


    <!-- video-item -->
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="video-item">
            <div class="thumb">
                <div class="hover-efect"></div>
                <small class="time">10:53</small>
                <a href="#"><img src="demo_img/v12.png" alt=""></a>
            </div>
            <div class="video-info">
                <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                <a class="channel-name" href="#">Rabie Elkheir<span>
                <i class="fa fa-check-circle"></i></span></a>
                <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
            </div>
        </div>
    </div>
    <!-- // video-item -->

</div><!-- // row -->

<!-- Loading More Videos -->
<div id="loading-more">
    <i class="fa fa-refresh faa-spin animated"></i> <span>Loading more</span>
</div>
<!-- // Loading More Videos -->
@else
 <p>No posts found</p>
@endif
@endsection
