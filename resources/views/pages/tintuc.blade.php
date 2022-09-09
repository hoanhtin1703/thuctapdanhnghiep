@extends("layouts.hello")
@section('pagdeName', 'Tin Tức')
@section('slider')
    <!-- Carousel Start -->
    @include("module.PageHeader")
    <!-- Carousel End -->
@endsection
@section('content')
     <!-- Service Start -->
     <div class="container-xxl py-5">
        <div class="container">
        
          <div class="row g-4 justify-content-center">
            @foreach ($tintuc as $value )
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item bg-light overflow-hidden h-100">
                <img class="img-fluid" src="http://127.0.0.1:8000/public/upload/product/{{$value->image_url}}" alt="" />
                <div class="service-text position-relative text-center h-100 p-4">
                  <h5 class="mb-3"> {{$value->topic}}</h5>
                  <p>
                    {{$value->sub_content}}
                  </p>
                  <a class="small" href="{{url('detail-tintuc/'.$value->id.'')}}"
                    >Xem thêm<i class="fa fa-arrow-right ms-3"></i
                  ></a>
                </div>
              </div>
            </div>
            @endforeach
           
          </div>
          <nav aria-label="...">
            <ul class="pagination justify-content-center mt-3" role="navigation">
             
                    {{$tintuc->links()}}
            </ul>
          </nav>
        </div>
      </div>
      <!-- Service End -->
@endsection