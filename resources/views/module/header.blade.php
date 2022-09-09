@section("header")
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Nghĩa Thành Company</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
   

    <!-- Libraries Stylesheet -->
    <link href="{{asset('front_end/lib/animate/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('front_end/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('front_end/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{asset('front_end/css/style.css')}}" rel="stylesheet" />
    
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <!-- <div class="container-fluid bg-light p-0">
      <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
          <div
            class="h-100 d-inline-flex align-items-center border-start border-end px-3"
          >
            <small class="fa fa-phone-alt me-2"></small>
            <small>+012 345 6789</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center border-end px-3">
            <small class="far fa-envelope-open me-2"></small>
            <small>info@example.com</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center border-end px-3">
            <small class="far fa-clock me-2"></small>
            <small>Mon - Fri : 09 AM - 09 PM</small>
          </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center">
            <a class="btn btn-square border-end border-start" href=""
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a class="btn btn-square border-end" href=""
              ><i class="fab fa-twitter"></i
            ></a>
            <a class="btn btn-square border-end" href=""
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a class="btn btn-square border-end" href=""
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
    >
      <a href="index.html" class="navbar-brand d-flex align-items-center">
        <h2 class="m-0">
          <img src="http://127.0.0.1:8000/public/upload/product/{{$lienhe->logo}}" width="100px" height="60px" alt="" />NGHĨA THÀNH
        </h2>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
          <a href="{{url('/')}}" class="nav-item nav-link active">TRANG CHỦ</a>
          <a href="{{url('/about')}}" class="nav-item nav-link">VỀ CHÚNG TÔI</a>
          <a href="{{url('/tintuc')}}" class="nav-item nav-link">TIN TỨC</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >HỒ SƠ NĂNG LỰC</a
            >
            <div class="dropdown-menu bg-light m-0">
             
              <a href="{{url('/hsphaply')}}" class="dropdown-item">Hồ SƠ PHÁP LÝ</a>
              <a href="{{url('/nltaichinh')}}" class="dropdown-item">NĂNG LỰC TÀI CHÍNH</a>
              <a href="{{url('/hsnhanluc')}}" class="dropdown-item">NĂNG LỰC NHÂN SỰ</a>
              <a href="{{url('/thietbithicong')}}" class="dropdown-item">THIẾT BỊ THI CÔNG </a>
              <a href="{{url('/nanglucvakinhnghiem')}}" class="dropdown-item">NĂNG LỰC & KINH NGHIỆM</a>
            
            </div>
          </div>
          <a href="{{url('/contact')}}" class="nav-item nav-link">LIÊN HỆ</a>
        </div>
      </div>
    </nav>