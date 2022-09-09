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
                <h1 class="h3 mb-4 text-gray-800">Quản lý hồ sơ năng lực</h1>
                <div class="row mt-4">
                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Logo cua trang web</h6>
                                
                                   <a href="" id="nutthem1" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">Thêm Mới</a>
                               
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                              <div class="row">
  
                                  <div class="col-md-12 col-lg-12">
                                      <div class="container mt-4">
                                          <div class="table-responsive">
                                              <table style="width: 100%" class="table table-bordered data-table1">
                                                  <thead>
                                                      <tr>
                                                          <th>STT</th>
                                                          <th>Số Hợp Đồng</th>
                                                          <th>Tên Hợp Đồng</th>
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
          <button type="button" class="btn-close dong" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="container mt-4">
                                        <div class="table-responsive">
                                            <table class="table table-bordered " style="text-align: center">
                                         <thead>
                                            <tr>
                                                <th colspan="4">Các hoạt động chính tương tự</th>
                                            </tr>
                                         </thead>
                                              <tbody >
                                                <form method="POST" enctype="multipart/form-data" id="insert_hoso"
                                                action="javascript:void(0)">
                                                  @csrf
                                                <tr class="font-weight-bold">
                                                  <input id="input_hiden" type="hidden" name="id" value="">
                                                  <th scope="row">Hợp đồng số : <input class="form-control" id ="mahopdong" name="mahopdong" type="text"> </th>
                                                  <td scope="row">Mô tả hợp đồng</td>
                                                  <td colspan="2">Tên hợp đồng :<textarea  class="form-control" id ="tenhopdong" name="tenhopdong" rows="2"></textarea></td>
                                          
                                                </tr>
                                                <tr>
                                                  <th scope="row">Ngày Ký</th>
                                                  <td><input class="form-control" type="date" id ="ngayky" name="ngayky"></td>
                                                  <td  class="font-weight-bold">Ngày hoàn thành </td>
                                                  <td ><input class="form-control"  type="date" id ="ngayhoanthanh" name="ngayhoanthanh"></td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">Vai trò hợp đồng</th>
                                                  <td><div class="form-check">
                                                    <input class="form-check-input" type="radio" value="0" id ="vaitro" name="vaitro" id="flexCheckIndeterminate">
                                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                                     Nhà Thầu
                                                    </label>
                                                  </div></td>
                                                  <td><div class="form-check">
                                                    <input class="form-check-input" type="radio" value="1"  id ="vaitro" name="vaitro" id="flexCheckIndeterminate">
                                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                                     Quản Lý Nhà Thầu
                                                    </label>
                                                  </div></td>
                                                  <td><div class="form-check">
                                                    <input class="form-check-input" type="radio" value="2"  id ="vaitro" name="vaitro" id="flexCheckIndeterminate">
                                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                                      Nhà Thầu Phụ
                                                    </label>
                                                  </div></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <th scope="row">Tổng giá trị hợp đồng :</th>
                                                  
                                                    <td colspan="3"><div class="d-flex">
                                                        <input id="total"  class="form-control col-md-6" id ="total" name="total" type="text">
                                                       <p class="text-center p-2" >VND </p>
                                                    </div></td>
                                                   
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Nếu là thành viên liên danh hoặc nhà thầu phụ, xác định phần tham gia trong tổng hợp đồng</th>
                                                    <td >100%</td>
                                                    <td colspan="2"><p id="total-preview">Tổng giá trị:</p></td>
                                                   
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Tên chủ đầu tư</th>
                                                    <td colspan="3"><input  class="form-control"  id ="tenchudautu" name="tenchudautu" type="text"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Địa chỉ</th>
                                                    <td colspan="3"><input  class="form-control" id="diachi" name="diachi" type="text"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Điện Thoại</th>
                                                    <td colspan="3"><input  class="form-control" id ="dienthoai" name="dienthoai" type="text"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Số Fax</th>
                                                    <td colspan="3"><input  class="form-control" id ="fax" name="fax" type="text"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Email</th>
                                                    <td colspan="3"><input  class="form-control" id ="email" name="email" type="text"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Mô tả công việc đã làm :</th>
                                                    <td colspan="3">
            
                                                        <textarea  class="form-control" id ="mota" name="mota" rows="3"></textarea></td>
                                                  </tr>
                                              </tbody>
                                          
                                            </table>
                                            
                                          </div>
                                          <div class="form-group">
                                            <label class="font-weight-bold"><span class="text-danger">*</span>Tư liệu hình ảnh hồ sơ năng lực</label>
                                           
                                          </div>
                                            <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                            <input type="file" id ="images"name="images[]" id="images" placeholder="Choose images"  multiple >
                                            </div>
                                        
                                            </div>
                                            <div class="col-md-12">
                                            <div class="mt-1 text-center">
                                            <div  class="images-preview-div"> </div>
                                            </div>  
                                            </div>
                                            <div class="col-md-12">
                                           
                                            </div>
                                            </div>     
                                           
                                        <!-- Pie Chart -->
                                       
                                </div>
                    <!-- /.container-fluid -->
                </div>
            </div>
          </div>
        <div class="modal-footer">
            <a href="javascript:void(0)"  class="btn btn-secondary dong" data-bs-dismiss="modal">Đóng</a>
          <button type="submit" class="btn btn-primary submit">Lưu</button>
        </form>
          <a href="javascript:void(0)" class="btn btn-success click_submit1"  style="display: none">Lưu Thay Đổi</a>
          
        </div>
    
      </div>
    </div>
  </div>
            </div>
            <!-- /.container-fluid -->

        
        <!-- End of Main Content -->

        <!-- Footer -->
       
        <!-- End of Footer -->

    </div>
     </div>
    <!-- End of Content Wrapper -->
@endsection