@section("slider")
  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @php
        $i=0
    @endphp
    @foreach ($slider as $value )
    @if ($i==0)
    <div class="carousel-item active">
    @else
    <div class="carousel-item">
      @endif
        <img class="w-100" src="http://127.0.0.1:8000/public/upload/product/{{$value->image_url}}" alt="">
        <div class="carousel-caption">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-10">
                <h3
                  class="text-light text-uppercase mb-3 animated slideInDown"
                >
                  Chào mừng bạn đến với Nghĩa Thành
                </h3>
                <h1 class="display-2 text-light mb-3 animated slideInDown">
                  {{$value->image_topic}}
                </h1>
              
                <a href="" class="btn btn-primary py-3 px-5"
                  >Xem thêm</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      
      @php
      $i++;
  @endphp
    @endforeach
       
        {{-- <div class="carousel-item">
          <img class="w-100" src="front_end/img/anhcongtruong.jpg" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                  <h5
                    class="text-light text-uppercase mb-3 animated slideInDown"
                  >
                  Chào mừng bạn đến với Nghĩa Thành
                  </h5>
                  <h1 class="display-2 text-light mb-3 animated slideInDown">
                    Năng lực tài chính
                  </h1>
                 
                  <a href="" class="btn btn-primary py-3 px-5"
                    >Xem thêm</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100" src="front_end/img/anhslider.jpg" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-center">  
                <div class="col-12 col-lg-10">
                  <h5
                    class="text-light text-uppercase mb-3 animated slideInDown"
                  >
                  Chào mừng bạn đến với Nghĩa Thành
                  </h5>
                  <h1 class="display-2 text-light mb-3 animated slideInDown">
                    Năng lực & kinh nghiệm
                  </h1>
                 
                  <a href="" class="btn btn-primary py-3 px-5"
                    >Xem thêm</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  @endsection