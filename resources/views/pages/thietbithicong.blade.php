@extends("layouts.hello")
@section('pagdeName', 'Thiết Bị Thi Công')
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
            <h6 class="text-body text-uppercase mb-2">THIẾT BỊ THI CÔNG 
            </h6>
            <h1 class="display-6 mb-0">DANH SÁCH CÁC THIẾT BỊ THI CÔNG CHÍNH
            </h1>
            
          </div>
        </div>
    
      </div>
      <div class="row g-5 align-items-end mb-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">

                <table class="table table-bordered mt-3">
                    <thead style="text-align:center;">
                      <tr>
                        <th scope="col"><b>STT</b></th>
                        <th scope="col"><b >Loại thiết bị thi công </b></th>
                        <th scope="col"><b>Nước sản xuất</b></th>
                        <th scope="col"><b>Công suất</b></th>
                        <th scope="col"><b>Tính Năng</b></th>
                      </tr>
                    </thead>
                    <tbody style="text-align:center ;">
                      <tr>
                        <th scope="row"><b>1</b></th>
                        <td class="text-body"> Vận thăng lồng</td>
                        <td>Trung Quốc</td>
                        <td>Qmax=1T</td>
                        <td>H=120m</td>
                      </tr>
                      <tr>
                        <th scope="row"><b>2</b></th>
                        <td> Xe tải Huyndai</td>
                        <td>Hàn Quốc</td>
                        <td>Qmax=2,5T</td>
                        <td>Vận tải</td>
                      </tr>
                      <tr>
                        <th scope="row"><b>3</b></th>
                        <td> Container Văn Phòng</td>
                        <td>việt Nam</td>
                        <td>45m2</td>
                        <td>Văn phòng công trường</td>
                      </tr>
                      <tr>
                        <th scope="row"><b>4</b></th>
                        <td> Giàn giáo 1,7 m</td>
                        <td>việt Nam</td>
                        <td>B=1,25 ,H=1,7m</td>
                        <td>Đỡ sàn, bao che</td>
                      </tr>
                      <tr>
                        <th scope="row"><b>5</b></th>
                        <td> Giàn giáo 1,35 m</td>
                        <td>việt Nam</td>
                        <td>B=1,25 ,H=1,53m</td>
                        <td>Đỡ sàn, bao che</td>
                      </tr>
                      <tr>
                        <th scope="row"><b>6</b></th>
                        <td> Cây chống thép</td>
                        <td>việt Nam</td>
                        <td>Hmin=1,25 ,Hmax=1,53m</td>
                        <td>Chống đỡ</td>
                      <tr>
                        <th scope="row"><b>7</b></th>
                        <td> Đầu kích 500</td>
                        <td>Việt Nam</td>
                        <td></td>
                        <td>ván Khuôn<td>
                      </tr>
                      <tr>
                        <th scope="row"><b>8</b></th>
                        <td> Thép hộp 50x100x2</td>
                        <td>Việt Nam</td>
                        <td>MNC</td>
                        <td>ván Khuôn<td>
                      </tr>
                      <tr>
                        <th scope="row"><b>9</b></th>
                        <td> Xà gồ 40x80x2</td>
                        <td>Việt Nam</td>
                        <td>MNC</td>
                        <td>ván Khuôn<td>
                      </tr>
                      <tr>
                        <th scope="row"><b>10</b></th>
                        <td> Xà gồ 50x50x2</td>
                        <td>Việt Nam</td>
                        <td>MNC</td>
                        <td>ván Khuôn<td>
                      </tr>
                    </tbody>
                  </table>
                  <nav aria-label="...">
                    <ul class="pagination justify-content-end">
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

      <div class="container-xxl py-5">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
              <h6 class="text-body text-uppercase mb-2">THIẾT BỊ THI CÔNG 
              </h6>
              <h1 class="display-6 mb-0">DANH MỤC HÌNH ẢNH CÁC THIẾT BỊ THI CÔNG CHÍNH
              </h1>
            </div>
          </div>
        </div>
        <div class="row align-items-end item-load ">
          <div class="col-md-3">
            <a href="https://cdn.pixabay.com/photo/2017/04/02/09/08/bulldozer-2195329_1280.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <img src="https://cdn.pixabay.com/photo/2017/04/02/09/08/bulldozer-2195329_1280.jpg" class="img-fluid content">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://cdn.pixabay.com/photo/2016/02/01/21/15/excavator-1174428_1280.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <img src="https://cdn.pixabay.com/photo/2016/02/01/21/15/excavator-1174428_1280.jpg" class="img-fluid content">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://cdn.pixabay.com/photo/2017/01/21/19/30/wheel-loader-1998102_1280.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <img src="https://cdn.pixabay.com/photo/2017/01/21/19/30/wheel-loader-1998102_1280.jpg" class="img-fluid content">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://cdn.pixabay.com/photo/2018/09/19/11/11/site-3688250_1280.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <img src="https://cdn.pixabay.com/photo/2018/09/19/11/11/site-3688250_1280.jpg" class="img-fluid content">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid content">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid content">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid content">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid content">
            </a>
          </div>
        </div>
      <div class="row">
        <button class="btn btn-primary loadMore">Load more</button>
        </div>  
      
    </div>
    </div>
  </div>
@endsection