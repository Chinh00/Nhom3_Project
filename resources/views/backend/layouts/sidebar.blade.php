<div class="theme-setting-wrapper">
    <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
    <div id="theme-settings" class="settings-panel">
        <i class="settings-close fa fa-times"></i>
        <p class="settings-heading">SIDEBAR SKINS</p>
        <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
        <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
        <p class="settings-heading mt-2">HEADER SKINS</p>
        <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
        </div>
    </div>
</div>

<!-- partial -->
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{asset('template/backend/images/faces/face5.jpg')}}" alt="image"/>
                </div>
                <div class="profile-name">
                    <p class="name">
                        Welcome Jane
                    </p>
                    <p class="designation">
                        Super Admin
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index-2.html">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @if(\Illuminate\Support\Facades\Auth::user()->role =='admin')
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="fa-solid fa-users menu-icon"></i>
                <span class="menu-title">Người dùng</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{route('user.index')}}">Quản lý</a></li>
                </ul>
            </div>
        </li>
        @endif

        <li class="nav-item">
            <a class="nav-link" href="{{route('products')}}">
                <i class="fa-solid fa-mobile-screen-button menu-icon"></i>
                <span class="menu-title">Sản phẩm</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="fab fa-trello menu-icon"></i>
                <span class="menu-title">Danh mục</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{route('category.index')}}">Quản lý danh mục</a></li>
                </ul>
            </div>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{route('category.create')}}">Thêm danh mục</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
