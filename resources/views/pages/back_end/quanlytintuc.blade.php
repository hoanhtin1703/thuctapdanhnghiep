@extends("layouts.admin")
@section("content")
     <!-- Content Wrapper -->
     <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
           
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Quản lý tin tức</h1>
                <div class="row mt-4">
                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Logo cua trang web</h6>
                                
                                   <a href="" id="nutthem" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">Thêm Mới</a>
                               
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="row">
    
                                    <div class="col-md-12 col-lg-12">
                                        <div class="container mt-4">
                                            <div class="table-responsive">
                                                <table class="table table-bordered data-table">
                                                    <thead>
                                                        <tr>
                                                            <th>STT</th>
                                                            <th>Hình Ảnh Thumbnail</th>
                                                            <th>Tiêu Đề</th>
                                                            <th>Nội Dung Ngắn</th>
                                                            <th style="width:250px"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        
                                            <!-- Pie Chart -->
                                    </div>
                                    </div>
                                  
                                    <!-- /.container-fluid -->
    
                                </div>
                                <!-- End of Main Content -->
    
                            </div>
                        </div>
                    </div>
                </div>
<!-- Button trigger modal -->
<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thêm tin tức</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-8">
                        <div class="container mt-4">
                            <form method="POST" enctype="multipart/form-data" id="insert_tintuc"
                            action="javascript: void(0)">
                            @csrf
                            <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="">*Hình Ảnh Tin Tức:</label>
                                            <br>
                                            <input type="file" name="image" placeholder="Choose image"
                                                id="image">
                                                  <input id="input_hiden" type="hidden" name="id" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">                       
                                        <div class="form-group">
                                          <label for="">*Tiêu Đề :</label>
                                          <input type="text" name="topic" id="tieude" class="form-control" placeholder="" aria-describedby="helpId">
                                        
                                        </div>
                                        <div class="form-group mt-4">
                                            <label for="">*Nội Dung Ngắn:</label>
                                            <input type="text" name="sub_content" id="ndngan" class="form-control" placeholder="" aria-describedby="helpId">
                                          
                                          </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">*Nội Dung Chính :</label>
                                            <textarea name="main_content" id="id4" class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                      
                                    </div>

                                </div>
                                 
                                </div>
                         

                            <!-- Pie Chart -->

                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="container">
                            <div class="row">
                                <h2>Xem Trước</h2>
                                <div class="card" style="width: 100%;">
                                    <img class="mt-2"id="preview-image-before-upload" src="https://via.placeholder.com/1920x1080" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                      <h5  id="tieude-preview" class="card-title">Tiêu Đề</h5>
                                      <p id="ndngan-preview" class="card-text">Nội Dung Ngắn</p>
                                      <a href="javascript:void(0)"  class="btn btn-primary">Xem Thêm</a>
                                    </div>
                                  </div>
                            </div>
                        </div>
                   
                    </div>
                    <!-- /.container-fluid -->
                </div>
            </div>
          </div>
        <div class="modal-footer">
            <a href="javascript:void(0)" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</a>
          <button type="submit" class="btn btn-primary button_submit">Lưu Thay Đổi</button>
          <a href="javascript:void(0)" class="btn btn-primary click_submit"  style="display: none">Lưu Thay Đổi</a>
          
        </div>
    </form>
      </div>
    </div>
  </div>
            </div>
            <!-- /.container-fluid -->

        
        <!-- End of Main Content -->

        <!-- Footer -->
       
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
@endsection