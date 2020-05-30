<div id="main-category">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12">
                <ul class="main-category-menu">
                    <li class="color-1"><a href="#"><i class="fa fa-play-circle-o"></i>Live</a></li>
                    <li class="color-2"><a href="#"><i class="fa fa-soccer-ball-o"></i>Sports</a></li>
                    <li class="color-1"><a href="#"><i class="fa fa-music"></i>Music</a></li>
                    <li class="color-4"><a href="#"><i class="fa fa-globe"></i>News</a></li>
                    <li class="color-3"><a href="#"><i class="fa fa-gamepad"></i>Gaming</a></li>
                    @guest
                        <li class="color-2">
                            <a href="/login"><i class="fa fa-sign-in mr-5"></i></a>
                        <li>
                    @else
                        <li>
                            <a href="/logout"><i class="fa fa-sign-out"></i></a>
                        <li>      
                    @endguest
                </ul>
            </div><!-- // col-md-14 -->
          </div><!-- // row -->
      </div><!-- // container-full -->
  </div>
