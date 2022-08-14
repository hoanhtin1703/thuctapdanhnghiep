@extends("layouts.hello")
@section('pagdeName', 'Về Chúng Tôi')
@section('slider')
    <!-- Carousel Start -->
    @include("module.PageHeader")
    <!-- Carousel End -->
@endsection
@section("content")
      <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
          <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
            <img class="position-absolute w-100 h-100" src="front_end/img/about.jpg" alt="" style="object-fit: cover" />
            <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px">
              <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                <h1 class="text-white">22</h1>
                <h2 class="text-white">Năm</h2>
                <h5 class="text-white mb-0">Kinh Nghiệm</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
          <div class="h-100">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">Về Chúng Tôi</h6>
              <h1 class="display-6 mb-0">
                CÔNG TY TNHH XÂY DỰNG NGHĨA THÀNH
              </h1>
            </div>

            <p><b>Tên giao dịch: NGHIA THANH CONSTRUCTION COMPANY LTD</b></p>
            <p> Loại hình hoạt động: Công ty TNHH Hai Thành Viên trở lên</p>
            <p> Mã số thuế: 4000333535</p>
            <p>Địa chỉ cũ: Thôn Dương Thạnh, Xã Trà Dương, Huyện Bắc Trà My, Tỉnh Quảng Nam</p>
            <p>Địa chỉ mới: 33 Bế Văn Đàn, Chính Gián, Thanh Khê, Đà Nẵng.</p>
            <p> Đại diện pháp luật: Trần Văn Thưởng</p>
            <p> Ngày cấp giấy phép: 25/07/2000</p>
            <p> Ngày hoạt động: 01/08/2000 (Đã hoạt động 22 năm)</p>
            <p> Điện thoại trụ sở: <b>05103879579</b></p>
            <p> Trạng thái: <b>Đang hoạt động</b> </p>

            <!-- <p class="mb-4">
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo magna dolore erat amet
              </p> -->
            <!-- <div class="border-top mt-4 pt-4">
                <div class="row g-4">
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0">Ontime at services</h6>
                  </div>
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0">24/7 hours services</h6>
                  </div>
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0">Verified professionals</h6>
                  </div>
                </div>
              </div> -->
          </div>
        </div>
      </div>
      <div class="row mt-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="mb-3">
          <div class="border-start border-5 border-primary ps-4">
            <h3 class="display-10 text-uppercase mb-2">Ngành Nghề Kinh Doanh</h3>

          </div>

          <table class="table table-bordered mt-3">
            <thead style="text-align:center ;">
              <tr>
                <th scope="col"><b>STT</b></th>
                <th scope="col"><b>Tên ngành</b></th>
                <th scope="col"><b>Mã ngành</b></th>

              </tr>
            </thead>
            <tbody style="text-align:center ;">
              <tr>
                <th scope="row"><b>1</b></th>
                <td> Sản xuất vật liệu xây dựng từ đất sét</td>
                <td>C23920</td>

              </tr>
              <tr>
                <th scope="row"><b>2</b></th>
                <td><b>Xây dựng công trình kỹ thuật dân dụng khác</b></td>
                <td><b>F42900 (Chính)</b></td>

              </tr>
              <tr>
                <th scope="row"><b>3</b></th>
                <td>Chuẩn bị mặt bằng</td>
                <td>F43120</td>
              </tr>
              <tr>
                <th scope="row"><b>4</b></th>
                <td>Vận tải hàng hóa bằng đường bộ</td>
                <td>H4933</td>
              </tr>
              <tr>
                <th scope="row"><b>5</b></th>
                <td>Dịch vụ lưu trú ngắn ngày</td>
                <td>I5510</td>
              </tr>
              <tr>
                <th scope="row"><b>6</b></th>
                <td>Nhà hàng và các dịch vụ ăn uống phục vụ lưu động</td>
                <td>I5610</td>
              </tr>
              <tr>
                <th scope="row"><b>7</b></th>
                <td> Trồng rừng và chăm sóc rừng</td>
                <td>A0210</td>
              </tr>
              <tr>
                <th scope="row"><b>8</b></th>
                <td>Khai thác gỗ</td>
                <td>A02210</td>
              </tr>
              <tr>
                <th scope="row"><b>9</b></th>
                <td>Khai thác lâm sản khác trừ gỗ</td>
                <td>A02220</td>
              </tr>
              <tr>
                <th scope="row"><b>10</b></th>
                <td>Khai thác đá, cát, sỏi, đất sét</td>
                <td>B0810</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->
@endsection