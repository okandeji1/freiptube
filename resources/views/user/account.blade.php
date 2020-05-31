@extends('layouts.site')
@section('content')
    <div class="container-fluid pb-0">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100 border-none">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-users"></i>
                    </div>
                    <div class="mr-5"><b>26</b> Channels</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                <i class="fas fa-angle-right"></i>
                </span>
                </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100 border-none">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-video"></i>
                    </div>
                    <div class="mr-5"><b>156</b> Videos</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                <i class="fas fa-angle-right"></i>
                </span>
                </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100 border-none">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-list-alt"></i>
                    </div>
                    <div class="mr-5"><b>123</b> Categories</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                <i class="fas fa-angle-right"></i>
                </span>
                </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100 border-none">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-cloud-upload-alt"></i>
                    </div>
                    <div class="mr-5"><b>13</b> New Videos</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                <i class="fas fa-angle-right"></i>
                </span>
                </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="video-block section-padding">
            <div class="row">
                <div class="col-md-12">
                <div class="main-title">
                    <div class="btn-group float-right right-action">
                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                        </div>
                    </div>
                    <h6>My Videos</h6>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                    <div class="video-card-image">
                        <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                        <a href="#"><img class="img-fluid" src="img/v5.png" alt=""></a>
                        <div class="time">3:50</div>
                    </div>
                    <div class="video-card-body">
                        <div class="video-title">
                            <a href="#">There are many variations of passages of Lorem</a>
                        </div>
                        <div class="video-page text-success">
                            Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                        </div>
                        <div class="video-view">
                            1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                    <div class="video-card-image">
                        <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                        <a href="#"><img class="img-fluid" src="img/v6.png" alt=""></a>
                        <div class="time">3:50</div>
                    </div>
                    <div class="video-card-body">
                        <div class="video-title">
                            <a href="#">There are many variations of passages of Lorem</a>
                        </div>
                        <div class="video-page text-danger">
                            Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Unverified"><i class="fas fa-frown text-danger"></i></a>
                        </div>
                        <div class="video-view">
                            1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                    <div class="video-card-image">
                        <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                        <a href="#"><img class="img-fluid" src="img/v7.png" alt=""></a>
                        <div class="time">3:50</div>
                    </div>
                    <div class="video-card-body">
                        <div class="video-title">
                            <a href="#">There are many variations of passages of Lorem</a>
                        </div>
                        <div class="video-page text-success">
                            Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                        </div>
                        <div class="video-view">
                            1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                <div class="video-card">
                    <div class="video-card-image">
                        <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                        <a href="#"><img class="img-fluid" src="img/v8.png" alt=""></a>
                        <div class="time">3:50</div>
                    </div>
                    <div class="video-card-body">
                        <div class="video-title">
                            <a href="#">There are many variations of passages of Lorem</a>
                        </div>
                        <div class="video-page text-success">
                            Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                        </div>
                        <div class="video-view">
                            1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <hr class="mt-0">
        <div class="video-block section-padding">
            <div class="row">
                <div class="col-md-12">
                <div class="main-title">
                    <div class="btn-group float-right right-action">
                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                        </div>
                    </div>
                    <h6>My Channels</h6>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                <div class="channels-card">
                    <div class="channels-card-image">
                        <a href="#"><img class="img-fluid" src="img/s1.png" alt=""></a>
                        <div class="channels-card-image-btn"><button type="button" class="btn btn-danger btn-sm">Subscribe <strong>1.4M</strong></button></div>
                    </div>
                    <div class="channels-card-body">
                        <div class="channels-title">
                            <a href="#">Channels Name</a>
                        </div>
                        <div class="channels-view">
                            382,323 subscribers
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                <div class="channels-card">
                    <div class="channels-card-image">
                        <a href="#"><img class="img-fluid" src="img/s2.png" alt=""></a>
                        <div class="channels-card-image-btn"><button type="button" class="btn btn-danger btn-sm">Subscribe <strong>1.4M</strong></button></div>
                    </div>
                    <div class="channels-card-body">
                        <div class="channels-title">
                            <a href="#">Channels Name</a>
                        </div>
                        <div class="channels-view">
                            382,323 subscribers
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                <div class="channels-card">
                    <div class="channels-card-image">
                        <a href="#"><img class="img-fluid" src="img/s3.png" alt=""></a>
                        <div class="channels-card-image-btn"><button type="button" class="btn btn-secondary btn-sm">Subscribed <strong>1.4M</strong></button></div>
                    </div>
                    <div class="channels-card-body">
                        <div class="channels-title">
                            <a href="#">Channels Name <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle"></i></span></a>
                        </div>
                        <div class="channels-view">
                            382,323 subscribers
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                <div class="channels-card">
                    <div class="channels-card-image">
                        <a href="#"><img class="img-fluid" src="img/s6.png" alt=""></a>
                        <div class="channels-card-image-btn"><button type="button" class="btn btn-danger btn-sm">Subscribe <strong>1.4M</strong></button></div>
                    </div>
                    <div class="channels-card-body">
                        <div class="channels-title">
                            <a href="#">Channels Name</a>
                        </div>
                        <div class="channels-view">
                            382,323 subscribers
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                <div class="channels-card">
                    <div class="channels-card-image">
                        <a href="#"><img class="img-fluid" src="img/s8.png" alt=""></a>
                        <div class="channels-card-image-btn"><button type="button" class="btn btn-danger btn-sm">Subscribe <strong>1.4M</strong></button></div>
                    </div>
                    <div class="channels-card-body">
                        <div class="channels-title">
                            <a href="#">Channels Name</a>
                        </div>
                        <div class="channels-view">
                            382,323 subscribers
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                <div class="channels-card">
                    <div class="channels-card-image">
                        <a href="#"><img class="img-fluid" src="img/s7.png" alt=""></a>
                        <div class="channels-card-image-btn"><button type="button" class="btn btn-secondary btn-sm">Subscribed <strong>1.4M</strong></button></div>
                    </div>
                    <div class="channels-card-body">
                        <div class="channels-title">
                            <a href="#">Channels Name <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle"></i></span></a>
                        </div>
                        <div class="channels-view">
                            382,323 subscribers
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                <div class="channels-card">
                    <div class="channels-card-image">
                        <a href="#"><img class="img-fluid" src="img/s1.png" alt=""></a>
                        <div class="channels-card-image-btn"><button type="button" class="btn btn-danger btn-sm">Subscribe <strong>1.4M</strong></button></div>
                    </div>
                    <div class="channels-card-body">
                        <div class="channels-title">
                            <a href="#">Channels Name</a>
                        </div>
                        <div class="channels-view">
                            382,323 subscribers
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                <div class="channels-card">
                    <div class="channels-card-image">
                        <a href="#"><img class="img-fluid" src="img/s2.png" alt=""></a>
                        <div class="channels-card-image-btn"><button type="button" class="btn btn-danger btn-sm">Subscribe <strong>1.4M</strong></button></div>
                    </div>
                    <div class="channels-card-body">
                        <div class="channels-title">
                            <a href="#">Channels Name</a>
                        </div>
                        <div class="channels-view">
                            382,323 subscribers
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection