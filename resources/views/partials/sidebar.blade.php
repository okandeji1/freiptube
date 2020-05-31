<ul class="sidebar navbar-nav">
    @guest        
    <li class="nav-item active">
        <a class="nav-link" href="/">
        <i class="fas fa-fw fa-home text-primary"></i>
        <span>Home</span>
        </a>
    </li>
    @else
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-tachometer-alt text-success"></i>
        <span>Dashboard</span>
        </a>
        <div class="dropdown-menu">
            <h6 class="dropdown-header">Personal</h6>
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="/account">account</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="#">Settings</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="10-upload">
        <i class="fas fa-fw fa-cloud-upload-alt text-success"></i>
        <span>Upload Video</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-user-alt text-warning"></i>
        <span>My Channels</span>
        </a>
    </li>
    @endguest
    <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-users text-warning"></i>
        <span>Channels</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-bolt text-danger"></i>
        <span>Trending</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-list-alt text-secondary"></i>
        <span>Categories</span>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Movie</a>
            <a class="dropdown-item" href="#">Music</a>
            <a class="dropdown-item" href="#">Television</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-question-circle text-secondary"></i>
        <span>Help</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-paper-plane text-success"></i>
        <span>Send Feedback</span>
        </a>
    </li>
    <li class="nav-item channel-sidebar-list">
        <h6>SUBSCRIPTIONS</h6>
        <ul>
            <li>
                <a href="#">
                <img class="img-fluid" alt="" src="img/s1.png"> Your Life 
                </a>
            </li>
            <li>
                <a href="#">
                <img class="img-fluid" alt="" src="img/s2.png"> Unboxing  <span class="badge badge-warning">2</span>
                </a>
            </li>
            <li>
                <a href="#">
                <img class="img-fluid" alt="" src="img/s3.png"> Product / Service  
                </a>
            </li>
            <li>
                <a href="#">
                <img class="img-fluid" alt="" src="img/s4.png">  Gaming 
                </a>
            </li>
        </ul>
    </li>
</ul>