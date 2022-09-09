@extends("layouts.hello")
@section('pagdeName', 'Chi Tiết Bài Viết')
{{-- @section('slider')
    <!-- Carousel Start -->
    @include("module.PageHeader")
    <!-- Carousel End -->
@endsection --}}
@section("content")

  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 align-items-end mb-5">
        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
          <div class="border-start border-5 border-primary ps-4">
            <h6 class="text-body text-uppercase mb-2">   
                <i class="fa fa-calendar fa-me-3">{{$tintuc->created_at}}</i></h6>
            <h1 class="display-6 mb-0">
{{$tintuc->topic}}            </h1>
          </div>
        </div>
       
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col text-center">
            <img src="http://127.0.0.1:8000/public/upload/product/{{$tintuc->image_url}}" height="500px" height="300px">
        </div>
       <p>{!! $tintuc->content!!}</p>
      </div>
    </div>
  </div>
  <!-- Service End -->
@endsection