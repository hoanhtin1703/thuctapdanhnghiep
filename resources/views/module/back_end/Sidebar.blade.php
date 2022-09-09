  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
            <img id="preview-image1" src="/front_end/img/logo.png" width="50px" height="50px" alt="" />
        </div>
        <div class="sidebar-brand-text mx-3">Nghĩa Thành</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('/admin/giaodienweb')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tùy Chỉnh Liên Hệ</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
   

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="{{url('/admin/themslider')}}" >
            <i class="fas fa-fw fa-cog"></i>
            <span>Quản lý Slider</span>
        </a>
       
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="{{url('/admin/quanlytintuc')}}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Quản lý tin tức</span>
        </a>
       
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
   

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link " href="{{url('/admin/quanlyhosonangluc')}}" 
           >
            <i class="fas fa-fw fa-folder"></i>
            <span>Quản lý hồ sơ năng lực</span>
        </a>
       
    </li>

    <!-- Nav Item - Charts -->
    

    <!-- Nav Item - Tables -->
   

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
  

</ul>
<!-- End of Sidebar -->