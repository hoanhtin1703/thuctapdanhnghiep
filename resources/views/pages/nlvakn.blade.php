@extends("layouts.hello")
@section('pagdeName', 'Năng Lực Và Kinh Nghiệm')
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
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
                    <img class="position-absolute w-100 h-100" src="front_end/img/anhdauthau.png" alt=""
                        style="object-fit: cover" />

                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Năng Lực Và Kinh Nghiệm</h6>
                        <h1 class="display-6 mb-0">
                            Thông Tin Về Nhà Thầu
                        </h1>
                    </div>

                    <p><b>Tên đơn vị: CÔNG TY TNHH XÂY DỰNG NGHĨA THÀNH</b></p>
                    <p> Trụ sở chính: Thôn Dương Thạnh, Xã Trà Dương, Huyện Bắc Trà My, Tỉnh Quảng Nam</p>
                    <p>Văn Phòng: 33 Bế Văn Đàn, Chính Gián, Thanh Khê, Đà Nẵng.</p>
                    <p> Mã số thuế: 4000333535</p>
                    <p>Tài Khoản số : <b>5621 0000 045 858</b> <br>
                        <b> Tại NH đầu tư và Phát triển CN Quảng Nam</b></p>
                    <p> Ngày cấp giấy phép: 25/07/2000</p>
                    <p> Ngày hoạt động: 01/08/2000 (Đã hoạt động 22 năm)</p>
                    <p> Điện thoại trụ sở: <b>05103879579</b> - <b>05113659667</b> </p>
                    <p> Di động <b>09134476628</b> - <b>0914172106</b> </p>
                    <p> Fax: <b>05113659667</b> </p>
                    <p> Người đại diện hợp pháp: <b style="color: blue">Trần Văn Thưởng</b> </p>
                </div>
            </div>
        </div>
        <div class="row mt-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="mb-3">
                <div class="border-start border-5 border-primary ps-4">
                    <h3 class="display-10 text-uppercase mb-2">Tổng Số Năm Kinh Nghiệm Hoạt Động Xây Dựng</h3>

                </div>

                <table class="table table-bordered mt-3">
                    <thead style="text-align:center ;">
                        <tr>
                            <th scope="col"><b>STT</b></th>
                            <th scope="col"><b>Tính Chất Công Việc</b></th>
                            <th scope="col"><b>Năm Kinh Nghiệm</b></th>

                        </tr>
                    </thead>
                    <tbody style="text-align:center ;">
                        <tr>
                            <th scope="row"><b>1</b></th>
                            <td> Xây dựng công trình giao thông (cầu, đường bộ)</td>
                            <td>20</td>

                        </tr>
                        <tr>
                            <th scope="row"><b>2</b></th>
                            <td>Xây dựng công trình kỹ thuật dân dụng , công nghiệp</td>
                            <td>20</td>

                        </tr>
                        <tr>
                            <th scope="row"><b>3</b></th>
                            <td>Xây dựng công trình thủy lợi</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <th scope="row"><b>4</b></th>
                            <td>Xây dựng công trình điện dân dụng</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <th scope="row"><b>5</b></th>
                            <td>Khai thác khoáng sản ( trừ các loại khoáng sản cấm )</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <th scope="row"><b>6</b></th>
                            <td>Sản xuất vật liệu xây dựng</td>
                            <td>20</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="row g-5 align-items-end mb-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="border-start border-5 border-primary ps-4">
                    <h6 class="text-body text-uppercase mb-2">Năng Lực Và Kinh Nghiệm</h6>
                    <h1 class="display-6 mb-0">HỢP ĐỒNG TIÊU BIỂU ĐÃ THI CÔNG</h1>

                </div>
            </div>
        </div>
        <div class="row g-5 align-items-end ">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase" style="text-align: center">Các hoạt động chính tương tự</h5>
                        <p class="card-text">
                            <div class="table-responsive">
                                <table class="table table-bordered " style="text-align: center">
                             {{-- @foreach ($hoso as $value)
                                 
                             @endforeach --}}
                             @foreach ($hoso as $value)
                                  <tbody >
                                    
                                    <tr>
                                      <th scope="row">Hợp đồng số : {{$value->mahopdong}}</th>
                                      <td scope="row">Mô tả hợp đồng</td>
                                      <td colspan="2">{{$value->tenhopdong}}</td>
                                
                                    </tr>
                                    <tr>
                                      <th scope="row">Ngày Ký</th>
                                      <td>{{$value->ngayky}}</td>
                                      <td >Ngày hoàn thành </td>
                                      <td >{{$value->ngayhoanthanh}}</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Vai trò hợp đồng</th>
                                      @if ($value->vaitro ==0)
                                      <td colspan="3">Nhà thầu</td>
                                      @elseif ($value->vaitro ==1)
                                      <td colspan="3">Quản lý nhà thầu</td>  
                                      @else
                                      <td colspan="3">Nhà thầu phụ</td>
                                      @endif
                                      
                                    </tr>
                                    <tr>
                                        <th scope="row">Tổng giá trị hợp đồng</th>
                                        <td></td>
                                        <td colspan="2">{{number_format($value->total,0,'','.')}}VND</td>

                                      </tr>
                                      <tr>
                                        <th scope="row">Nếu là thành viên liên danh hoặc nhà thầu phụ, xác định phần tham gia trong tổng hợp đồng</th>
                                        <td >100%</td>
                                        <td colspan="2">Tổng giá trị :{{number_format($value->total,0,'','.')}}VND</td>
                                       
                                      </tr>
                                      <tr>
                                        <th scope="row">Tên chủ đầu tư</th>
                                        <td colspan="3">{{$value->tenchudautu}}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Địa chỉ</th>
                                        <td colspan="3">{{$value->diachi}}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Điện Thoại</th>
                                        <td colspan="3">{{$value->dienthoai}}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Số Fax</th>
                                        <td colspan="3">{{$value->fax}}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Email</th>
                                        <td colspan="3">{{$value->email}}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Mô tả công việc đã làm :</th>
                                        <td colspan="3">

                                            {{$value->mota}}</td>
                                      </tr>
                                  </tbody>
                                  
                                
                                </table>
                                
                              </div>
                        </p>
                     
                    </div>
                    <!-- Gallery -->
                    <div class="row">
                        @foreach (json_decode($value->image_url) as $image )
                        <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                            <img src="http://127.0.0.1:8000/public/upload/product/{{$image}}" class="w-100 shadow-1-strong rounded mb-4"
                                alt="Boat on Calm Water" />
                        </div>
                                  @endforeach
                        
                       
                    </div>
                    @endforeach
                </div>
                <!-- Gallery -->
            </div>
            <nav aria-label="...">
                <ul class="pagination justify-content-end">
                    {{$hoso->links()}}
                </ul>
              </nav>
        </div>
    </div>
</div>
</div>
<!-- About End -->
@endsection