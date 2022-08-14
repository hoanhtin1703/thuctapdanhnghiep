@extends("layouts.hello")
@section('pagdeName', 'Tin Tức')
@section('slider')
    <!-- Carousel Start -->
    @include("module.slider")
    <!-- Carousel End -->
@endsection
@section('content')
     <!-- Service Start -->
     <div class="container-xxl py-5">
        <div class="container">
        
          <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item bg-light overflow-hidden h-100">
                <img class="img-fluid" src="https://dauthau.asia/uploads/news/2022_08/mot-nha-thau-co-the-tham-gia-nhieu-goi-thau-cung-luc-duoc-khong.png" alt="" />
                <div class="service-text position-relative text-center h-100 p-4">
                  <h5 class="mb-3">Một nhà thầu có thể tham gia nhiều gói thầu cùng lúc được không?</h5>
                  <p>
                    Đấu thầu là quá trình lựa chọn nhà thầu để tham gia thực hiện các yêu cầu/ đề nghị của chủ đầu tư. Vậy một nhà thầu ...
                  </p>
                  <a class="small" href=""
                    >Xem thêm<i class="fa fa-arrow-right ms-3"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
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
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item bg-light overflow-hidden h-100">
                <img class="img-fluid" src="https://cdn.dauthau.asia/assets/news/2022_07/mot-so-vuong-mac-ve-hoat-dong-dau-thau-lien-danh.png" alt="" />
                <div class="service-text position-relative text-center h-100 p-4">
                  <h5 class="mb-3">Một số vướng mắc liên quan đến nhà thầu liên danh trong đấu thầu</h5>
                  <p>
                    Trong quá trình chăm sóc khách hàng, DauThau.info đã nhận được rất nhiều câu hỏi liên quan đến tình huống đấu thầu mà nhà thầu tham dự là liên danh. 
                  </p>
                  <a class="small" href=""
                       >Xem thêm<i class="fa fa-arrow-right ms-3"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="service-item bg-light overflow-hidden h-100">
                <img class="img-fluid" src="https://cdn.dauthau.asia/assets/news/2022_07/nguon-luc-tai-chinh-cho-goi-thau.jpg" alt="" />
                <div class="service-text position-relative text-center h-100 p-4">
                  <h5 class="mb-3">Yêu cầu về nguồn lực tài chính cho gói thầu là gì? Những điều nhà thầu cần chuẩn bị!</h5>
                  <p>
                    Theo yêu cầu trong ‘Hướng dẫn chuyển đổi tài khoản' của Hệ thống mạng đấu thầu quốc gia, để thao tác được trên Hệ thống mạng đấu thầu quốc gia e-GP mới..
                  </p>
                  <a class="small" href=""
                       >Xem thêm<i class="fa fa-arrow-right ms-3"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="service-item bg-light overflow-hidden h-100">
                <img class="img-fluid" src="https://cdn.dauthau.asia/assets/news/2022_07/nha-thau-co-duoc-thay-doi-nhan-su-chu-chot-da-ke-khai-trong-ho-so-du-thau.png" alt="" />
                <div class="service-text position-relative text-center h-100 p-4">
                  <h5 class="mb-3">Nhà thầu có được thay đổi nhân sự chủ chốt đã kê khai trong Hồ sơ dự thầu?</h5>
                  <p>
                    Vì một số lý do khác nhau mà trong một số trường hợp nhân sự do nhà thầu kê khai trong HSDT không thể tham gia thực hiện hợp đồng được. 
                  </p>
                  <a class="small" href=""
                       >Xem thêm<i class="fa fa-arrow-right ms-3"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <nav aria-label="...">
            <ul class="pagination justify-content-center mt-3" role="navigation">
              <li class="page-item">
                <a class="page-link">Previous</a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item " aria-current="page">
                <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- Service End -->
@endsection