@extends('layouts.site')
@section('content')
    <div class="container-fluid pb-0">
        <div class="video-block section-padding">
            <div class="row">
                <div class="col-md-8">
                    <div class="single-video-left">
                        <div class="single-video">
                            <iframe width="100%" height="315" src="/storage/{{ $post->video }}" frameborder="0"
                                allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <div class="single-video-title box mb-3">
                            <h2><a href="#">{{ $post->title }}</a></h2>
                            <p class="mb-0"><i class="fas fa-eye"></i> 2,729,347 views</p>
                        </div>
                        <div class="single-video-author box mb-3">
                            <div class="float-right"><button class="btn btn-danger" type="button">Subscribe
                                    <strong>1.4M</strong></button> <button class="btn btn btn-outline-danger"
                                    type="button"><i class="fas fa-bell"></i></button></div>
                            <img class="img-fluid" src="img/s4.png" alt="">
                            <p><a href="#"><strong>{{ $post->user->firstname }} Channel</strong></a> <span title=""
                                    data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i
                                        class="fas fa-check-circle text-success"></i></span></p>
                            <small>Published on {{ $post->created_at->format('F j, Y') }}</small>
                        </div>
                        <div class="single-video-info-content box mb-3">
                            {{-- <h6>Cast:</h6>
                            <p>Nathan Drake , Victor Sullivan , Sam Drake , Elena Fisher</p>
                            --}}
                            <h6>Category :</h6>
                            <p>{{ $post->category->name }}</p>
                            <h6>About :</h6>
                            <p>{{ $post->description }} </p>
                            {{-- <h6>Tags :</h6> --}}
                            {{-- <p class="tags mb-0">
                                <span><a href="#">Uncharted 4</a></span>
                                <span><a href="#">Playstation 4</a></span>
                                <span><a href="#">Gameplay</a></span>
                                <span><a href="#">1080P</a></span>
                                <span><a href="#">ps4Share</a></span>
                                <span><a href="#">+ 6</a></span>
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-video-right">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="adblock">
                                    <div class="img">
                                        Google AdSense<br>
                                        336 x 280
                                    </div>
                                </div>
                                <div class="main-title">
                                    <div class="btn-group float-right right-action">
                                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                Rated</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                Viewed</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                &nbsp; Close</a>
                                        </div>
                                    </div>
                                    <h6>Up Next</h6>
                                </div>
                            </div>
                            <div class="col-md-12">
                                @if ($posts)
                                    @foreach ($posts as $post)
                                        <div class="video-card video-card-list">
                                            <div class="video-card-image">
                                                <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                                <a href="#">
                                                    <video controls loop poster="/storage/{{ $post->video }}" width="300"
                                                        height="200">
                                                        <source src="/storage/{{ $post->video }}" type="video/mp4">
                                                    </video>
                                                </a>
                                                <div class="time">3:50</div>
                                            </div>
                                            <div class="video-card-body">
                                                <div class="btn-group float-right right-action">
                                                    <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i>
                                                            &nbsp;
                                                            Top Rated</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fas fa-fw fa-signal"></i> &nbsp;
                                                            Viewed</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fas fa-fw fa-times-circle"></i>
                                                            &nbsp; Close</a>
                                                    </div>
                                                </div>
                                                <div class="video-title">
                                                    <a href="/watch/{{ $post->uuid }}">{{ $post->title }}</a>
                                                </div>
                                                @if ($post->category->name === 'Music')
                                                    <div class="video-page text-danger">
                                                        {{ $post->category->name }} <a title="" data-placement="top"
                                                            data-toggle="tooltip" href="#" data-original-title="Verified"><i
                                                                class="fas fa-check-circle text-primary"></i></a>
                                                    </div>
                                                @endif
                                                @if ($post->category->name === 'Entertainment')
                                                    <div class="video-page text-success">
                                                        {{ $post->category->name }} <a title="" data-placement="top"
                                                            data-toggle="tooltip" href="#" data-original-title="Verified"><i
                                                                class="fas fa-check-circle text-success"></i></a>
                                                    </div>
                                                @endif
                                                @if ($post->category->name === 'Sport')
                                                    <div class="video-page text-blue">
                                                        {{ $post->category->name }} <a title="" data-placement="top"
                                                            data-toggle="tooltip" href="#" data-original-title="Verified"><i
                                                                class="fas fa-check-circle text-blue"></i></a>
                                                    </div>
                                                @endif
                                                @if ($post->category->name === 'News')
                                                    <div class="video-page text-warning">
                                                        {{ $post->category->name }} <a title="" data-placement="top"
                                                            data-toggle="tooltip" href="#" data-original-title="Verified"><i
                                                                class="fas fa-check-circle text-warning"></i></a>
                                                    </div>
                                                @endif
                                                <div class="video-view">
                                                    1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- End foreach --}}
                                @else
                                    <div class="adblock mt-0">
                                        <div class="img">
                                            Google AdSense<br>
                                            336 x 280
                                        </div>
                                    </div>
                                @endif
                                <div class="adblock mt-0">
                                    <div class="img">
                                        Google AdSense<br>
                                        336 x 280
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
