<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">TECHCOMFEST</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">TCF</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
                <a href="{{url('dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                </ul>
            </li>
            <li class="menu-header">Menu</li>
            <li class="dropdown">
                <a href="{{url('teams')}}" class="nav-link"><i class="far fa-user"></i> <span>Teams</span></a>
            </li>
            <li class="dropdown">
                <a href="{{url('verif')}}" class="nav-link"><i class="far fa-user"></i> <span>Verifikasi Data</span></a>
            </li>

            <li> <a href="" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Submission</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{url('software')}}">Software</a></li>
                    <li><a class="nav-link" href="{{url('multimedia')}}">Multimedia</a></li>
                    <li><a class="nav-link" href="{{url('network')}}">Network</a></li>
                </ul>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>