@extends("layouts.hello")

@section('slider')

<!-- Carousel Start -->
@include("module.slider")
<!-- Carousel End -->
@endsection

@section('content')

<!-- About Start -->
<div class="container-xxl py-5">

  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
          <img class="position-absolute w-100 h-100"
            src="https://img.freepik.com/free-photo/building-sector-industrial-workers-concept-cheerful-smiling-asian-construction-manager-inspector_1258-55166.jpg?w=996&t=st=1660445270~exp=1660445870~hmac=f38b9fb11657083410ad451a7cf5bdf7eee3853006d0d31f4d4958eea58500fe"
            alt="" style="object-fit: cover" />
          <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px">
            <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
              <h1 class="text-white">22</h1>
              <h2 class="text-white">Năm </h2>
              <h5 class="text-white mb-0">Kinh Nghiệm</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="h-100">
          <div class="border-start border-5 border-primary ps-4 mb-5">
            <h6 class="text-body text-uppercase mb-2">Về Chúng Tôi</h6>
            <h1 class="display-6 mb-0 text-uppercase ">
              Công ty TNHH Xây Dựng Nghĩa Thành
            </h1>
          </div>
          <p>
            Ngay từ khi thành lập, Công ty TNHH xây dựng Nghĩa Thành đã định hướng phát triển của mình vào ngành xây
            dựng dân dụng và công nghiệp; giao thông và thủy lợi.
            Với vị trí của một doanh nghiệp chủ lực trong lĩnh vực xây dựng trên địa bàn, Công ty TNHH xây dựng Nghĩa
            Thành xác định các mục tiêu phát triển của mình như sau:
          </p>

          <div class="border-top mt-4 pt-4">
            <div class="row g-4 wow fadeIn" data-wow-delay="0.1s">
              <div class="col-lg-12 d-flex">
                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3" style="margin: 30px auto"></i>

                <h6 class="mb-0"> Lấy chất lượng, uy tín, hiệu quả và xây dựng một phong cách làm việc chuyên nghiệp,
                  đáp ứng nhu cầu của nhiều Chủ đầu tư và các khách hàng với thời gian nhanh nhất và hiệu quả cao nhất
                </h6>
              </div>
              <div class="col-lg-12 d-flex">
                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3" style="margin: 30px auto"></i>

                <h6 class="mb-0"> Áp dụng công nghệ thông tin chuyên ngành Tin học Xây dựng và các phần mềm ứng dụng
                  phục vụ trực tiếp vào ngành kỹ thuật xây dựng;</h6>
              </div>
              <div class="col-lg-12 d-flex">
                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3" style="margin: 30px auto"></i>

                <h6 class="mb-0"> Tích cực đưa ngành xây dựng trở thành ngành có đóng góp lớn, tạo điều kiện và góp phần
                  phát triển kinh tế xã hội;</h6>
              </div>
              <div class="col-lg-12 d-flex">
                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3" style="margin: 30px auto"></i>

                <h6 class="mb-0"> Cung cấp các dịch vụ “Thi công xây lắp và cung cấp các dịch vụ bảo dưỡng, sửa chữa các
                  công trình xây dựng” với chất lượng tốt, giá cả hợp lý nhằm đáp ứng nhu cầu đa dạng của các chủ đầu tư
                  và khách hàng</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- About End -->



<!-- Features Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="border-start border-5 border-primary ps-4 mb-5">
          <h6 class="text-body text-uppercase mb-2">Về Chúng Tôi</h6>
          <h1 class="display-6 text-uppercase mb-0">
            Công ty TNHH XÂY Dựng nghĩa thành
          </h1>
        </div>
        <h3>Cùng với đó là các tiêu chí mà Công ty TNHH xây dựng Nghĩa Thành luôn đặt ra:</h3>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">

        <img class=" w-100 h-100"
          src="https://img.freepik.com/free-photo/engineers-planning-work-outside_1098-21098.jpg?w=996&t=st=1660447821~exp=1660448421~hmac=809e54e2301f06270d7a8e35fc3ffca72c1b49c140b1b253c0ee307f754f62b3"
          alt="" />
      </div>
    </div>
    <div class="row lg-5">

      <div class="row gy-5 gx-4">
        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
          <div class="d-flex align-items-center mb-3">
            <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
            <h6 class="mb-0">Tính chuyên nghiệp</h6>
          </div>
          <span>Với đội ngũ cán bộ công nhân viên, kỹ sư tài năng có kiến thức chuyên môn vững chắc và đội ngũ thi công
            nhiều kinh nghiệm, quy trình bài bản và chuyên nghiệp</span>
        </div>
        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
          <div class="d-flex align-items-center mb-3">
            <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
            <h6 class="mb-0">Tầm ứng dụng</h6>
          </div>
          <span>Ngoài hệ thống công trình, hạng mục công trình được thi công xây dựng tuân thủ các điều kiện quản lý
            theo quy định của luật xây dựng cơ bản mà còn tính đến việc phát triển qui mô cho khách hàng mang tính khả
            dụng cao.</span>
        </div>
        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
          <div class="d-flex align-items-center mb-3">
            <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
            <h6 class="mb-0">Dịch vụ trực tiếp</h6>
          </div>
          <span>Cung cấp dịch vụ trọn gói cùng với các kỹ sư, cán bộ kỹ thuật, nhân viên của công ty. Hạn chế các khâu
            trung gian. Từ đó tiết kiệm được nhiều thời gian cũng như giảm mọi chi phí không cần thiết cho chủ đầu
            tư.</span>
        </div>
        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
          <div class="d-flex align-items-center mb-3">
            <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
            <h6 class="mb-0">Đào tạo cán bộ</h6>
          </div>
          <span>Chúng tôi thường xuyên tổ chức các buổi tập huấn, các lớp đào tạo trong công ty nhằm giúp cán bộ công
            nhân viên nâng cao trình độ nghiệp vụ để đáp ứng những thử thách mới, thích ứng kịp thời với mọi biến động
            của thực tiễn, theo đúng kế hoạch phát triển nguồn nhân lực, đáp ứng các yêu cầu công việc, nghiên cứu hiện
            tại cũng như tương lai, tiến tới hoà nhập với khu vực và quốc tế, để xây dựng công ty ngày càng lớn mạnh và
            phát triển.</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Features End -->

<!-- Service Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5 align-items-end mb-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="border-start border-5 border-primary ps-4">
          <h6 class="text-body text-uppercase mb-2">CÔNG TY TNHH XÂY DỰNG NGHĨA THÀNH</h6>
          <h1 class="display-6 mb-0">
            TIN TỨC NỔI BẬT
          </h1>
        </div>
      </div>
      <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
        <a class="btn btn-primary py-3 px-5" href="">Xem Thêm</a>
      </div>
    </div>
    <div class="row g-4 justify-content-center">
      @foreach ($tintuc as $value )
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item bg-light overflow-hidden h-100">
          <img class="img-fluid" src="http://127.0.0.1:8000/public/upload/product/{{$value->image_url}}" alt="" />
          <div class="service-text position-relative text-center h-100 p-4">
            <h5 class="mb-3">{{$value->topic}}?</h5>
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
     
      {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="service-item bg-light overflow-hidden h-100">
          <img class="img-fluid" src="https://dauthau.asia/uploads/news/2022_08/thong-tu-10-ve-lua-chon-nha-dau-tu-qua-mang.jpg" alt="" />
          <div class="service-text position-relative text-center h-100 p-4">
            <h5 class="mb-3">Thông tư mới của Bộ Kế hoạch và Đầu tư về lựa chọn nhà đầu tư năm 2022</h5>
            <p>
              Thông tư số 10/2022/TT-BKHĐT ngày 15/06/2022 Quy định chi tiết việc cung cấp, đăng tải thông tin và lựa chọn nhà đầu tư trên Hệ thống...
            </p>
            <a class="small" href=""
            >Xem thêm<i class="fa fa-arrow-right ms-3"></i
            ></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="service-item bg-light overflow-hidden h-100">
          <img class="img-fluid" src="https://cdn.dauthau.asia/assets/news/2022_08/ho-so-moi-thau-ban-giay-co-gia-tri-phap-ly-khong.jpg" alt="" />
          <div class="service-text position-relative text-center h-100 p-4">
            <h5 class="mb-3">Năm 2022 hồ sơ mời thầu bản giấy có còn giá trị pháp lý không?</h5>
            <p>
              Đấu thầu qua mạng hay không qua mạng là đề tài mà rất nhà thầu quan tâm, trong đó tính pháp lý của hồ sơ...
            </p>
            <a class="small" href=""
                 >Xem thêm<i class="fa fa-arrow-right ms-3"></i
            ></a>
          </div>
        </div>
      </div> --}}

    </div>
 
  </div>
</div>

<!-- Service End -->

<!-- Appointment Start -->
<div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="row g-5">
      <div class="col-lg-5 col-md-6 wow fadeIn" data-wow-delay="0.3s">
        <div class="border-start border-5 border-primary ps-4 mb-5">
          <h6 class="text-white text-uppercase mb-2">Liên Hệ Với Chúng Tôi</h6>
          <h1 class="display-6 text-white mb-0">
        CÔNG TY TNHH XÂY DỰNG NGHĨA THÀNH
          </h1>
        </div>
        <p class="text-white mb-0">
          Công ty TNHH Xây dựng Nghĩa Thành rất mong nhận được sự ủng hộ, sự hợp tác và giúp đỡ của Quý vị đến với Công ty chúng tôi.
        </p>
      </div>
      <div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay="0.5s">
        <form>
          <div class="row g-3">
            <div class="col-sm-6">
              <div class="form-floating">
                <input type="text" class="form-control bg-light border-0" id="gname" placeholder="Gurdian Name" />
                <label for="gname">Your Name</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-floating">
                <input type="email" class="form-control bg-light border-0" id="gmail" placeholder="Gurdian Email" />
                <label for="gmail">Your Email</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-floating">
                <input type="text" class="form-control bg-light border-0" id="cname" placeholder="Child Name" />
                <label for="cname">Your Mobile</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-floating">
                <input type="text" class="form-control bg-light border-0" id="cage" placeholder="Child Age" />
                <label for="cage">Service Type</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <textarea class="form-control bg-light border-0" placeholder="Leave a message here" id="message"
                  style="height: 100px"></textarea>
                <label for="message">Message</label>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary w-100 py-3" type="submit">
               Liên Hệ
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Appointment End -->

<!-- Testimonial Start -->
{{-- <div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="border-start border-5 border-primary ps-4 mb-5">
          <h6 class="text-body text-uppercase mb-2">Testimonial</h6>
          <h1 class="display-6 mb-0">What Our Happy Clients Say!</h1>
        </div>
        <p class="mb-4">
          Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
          ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
          dolore erat amet
        </p>
        <div class="row g-4">
          <div class="col-sm-6">
            <div class="d-flex align-items-center mb-2">
              <i class="fa fa-users fa-2x text-primary flex-shrink-0"></i>
              <h1 class="ms-3 mb-0">123+</h1>
            </div>
            <h5 class="mb-0">Happy Clients</h5>
          </div>
          <div class="col-sm-6">
            <div class="d-flex align-items-center mb-2">
              <i class="fa fa-check fa-2x text-primary flex-shrink-0"></i>
              <h1 class="ms-3 mb-0">123+</h1>
            </div>
            <h5 class="mb-0">Projects Done</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
        <div class="owl-carousel testimonial-carousel">
          <div class="testimonial-item">
            <img class="img-fluid mb-4" src="img/testimonial-1.jpg" alt="" />
            <p class="fs-5">
              Dolores sed duo clita tempor justo dolor et stet lorem kasd
              labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
              et labore et tempor diam tempor erat.
            </p>
            <div class="bg-primary mb-3" style="width: 60px; height: 5px"></div>
            <h5>Client Name</h5>
            <span>Profession</span>
          </div>
          <div class="testimonial-item">
            <img class="img-fluid mb-4" src="img/testimonial-2.jpg" alt="" />
            <p class="fs-5">
              Dolores sed duo clita tempor justo dolor et stet lorem kasd
              labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
              et labore et tempor diam tempor erat.
            </p>
            <div class="bg-primary mb-3" style="width: 60px; height: 5px"></div>
            <h5>Client Name</h5>
            <span>Profession</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
<!-- Testimonial End -->

@stop