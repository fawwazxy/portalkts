
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Logo -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('website/resources/img/logokt.jpeg') }}" class="navbar-brand-img">
        </a>
        <hr class="my--4">

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Sidebar -->
            <hr class="my-3">
            <ul class="navbar-nav ">
                <li class="nav-item @if ($activePage == 'Dashboard') active @endif">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-planet text-red"></i> {{ __('Dashboard') }}
                    </a>
                </li>
                <li class="nav-item @if ($activePage == 'My profile') active @endif ">
                    <a class="nav-link" href="{{ route('profile.edit') }}">
                        <i class="ni ni-badge text-red"></i> {{ __('My profile') }}
                    </a>
                </li>
                <br>

                <h4><b>&nbsp&nbsp&nbsp&nbspMENU</b></h4>
                <li class="nav-item @if ($activePage == 'Course') active @endif">
                    <a class="nav-link" href="{{ route('course.index') }}">
                        <i class="ni ni-books text-blue"></i> {{ __('Course') }}
                    </a>
                </li>
                <li class="nav-item @if ($activePage == 'Institute') active @endif">
                    <a class="nav-link" href="{{ route('institute.index') }}">
                        <i class="ni ni-single-copy-04 text-blue"></i> {{ __('Institute') }}
                    </a>
                </li>
                <li class="nav-item @if ($activePage == 'Gallery') active @endif">
                    <a class="nav-link" href="{{ route('gallery.index') }}">
                        <i class="ni ni-camera-compact text-blue"></i> {{ __('Gallery') }}
                    </a>
                </li>
                <li class="nav-item @if ($activePage == 'Certificate') active @endif">
                    <a class="nav-link" href="{{ route('certificate.index') }}">
                        <i class="ni ni-paper-diploma text-blue"></i> {{ __('Certificate') }}
                    </a>
                </li>
                <li class="nav-item @if ($activePage == 'User Management') active @endif">
                    <a class="nav-link" href="{{ route('management.index') }}">
                        <i class="ni ni-single-02 text-blue"></i> {{ __('User Management') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
