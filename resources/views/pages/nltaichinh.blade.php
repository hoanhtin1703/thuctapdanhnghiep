@extends("layouts.hello")
@section('pagdeName', 'Năng Lực Tài Chính')
@section('slider')
    <!-- Carousel Start -->
    @include("module.PageHeader")
    <!-- Carousel End -->
@endsection
@section("content")
<div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 align-items-end mb-5">
        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
          <div class="border-start border-5 border-primary ps-4">
            {{-- <h6 class="text-body text-uppercase mb-2">Năng Lực Tài Chính</h6> --}}
            <h1 class="display-6  mb-0">Năng Lực Tài Chính</h1>
            
          </div>
        </div>
    
      </div>
      <div class="row g-4">
        <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item position-relative">
            <img class="img-fluid" src="front_end/img/nltaiching.png" alt="" />
           
          
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection