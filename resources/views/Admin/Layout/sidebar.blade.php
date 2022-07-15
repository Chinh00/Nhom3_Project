@section('sidebar')
    <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="{{asset('backend/images/faces/face5.jpg')}}" alt="image"/>
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
            <a class="nav-link" href="/admin">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#products" aria-expanded="false" aria-controls="error">
              <i class="fas fa-exclamation-circle menu-icon"></i>
              <span class="menu-title">Sản phẩm</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="products">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/products/">Danh sách sản phẩm</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/products/add/">Thêm sản phẩm</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#discount" aria-expanded="false" aria-controls="error">
              <i class="fas fa-exclamation-circle menu-icon"></i>
              <span class="menu-title">Thông tin giảm giá</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="discount">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/discount">Các sản phẩm giảm giá</a></li>
              </ul>
            </div>
          </li>
        
          
          <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="icons">
                    <i class="fa fa-stop-circle menu-icon"></i>
                    <span class="menu-title">Danh muc</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="category">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/admin/category">Quản lý danh mục</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/admin/category/create">Thêm danh mục</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="icons">
                    <i class="fa fa-stop-circle menu-icon"></i>
                    <span class="menu-title">Bảng người dùng</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="users">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/admin/users">Danh sách người dùng</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#home" aria-expanded="false" aria-controls="icons">
                    <i class="fa fa-stop-circle menu-icon"></i>
                    <span class="menu-title">Trang chủ hiển thị</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="home">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/admin/homecategories">Danh mục hiển thị</a></li>
                    </ul>
                </div>
            </li>
        </ul>
      </nav>
    <!-- partial -->

@endsection