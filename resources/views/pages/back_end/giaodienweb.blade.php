@extends("layouts.admin")
@section("content")
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      

        <!-- Begin Page Content -->
        <div class="container-fluid mt-4">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tùy Chỉnh Liên Hệ</h1>

            </div>
            <!-- Content Row -->
{{-- Logo web --}}
            <div class="row">
                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Logo của trang web</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                               
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="row">

                                <div class="col text-center">
                                  <form action="javascript:void(0)" method="post" enctype="multipart/form-data" id="upload-anh">
                                    <img id="preview-image" src="/front_end/img/logo.png" width="200px" height="200px" alt="" />
                                    <div class="upload-btn-wrapper">
                                        <button class="btn btn-primary"><i
                                            class="fas fa-download fa-sm text-white-50"></i>Thay đổi logo</button>
                                        <input type="file" id="myfile" name="myfile" />
                                      </div>
                                    </form>
                                </div>
                            </div>
                            <a href="javascript:void(0)" style="display:none" class="btn btn-primary luu-anh">Lưu</a>
                        </div>
                    </div>
                </div>

                <!-- Pie Chart -->
            </div>
            
            <div class="row">
                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Thông tin liên hệ</h6>
                            <div class="dropdown no-arrow">
                   
                                <a href="javascript:void(0)" onclick="return editmode()" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                                    class="fas fa-pencil fa-sm text-white-50"></i> Chỉnh sửa</a>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <form action="javascript:void(0)" method="post" enctype="multipart/form-data" id="update_lienhe">
       
                            <div class="row text-center pl-5 pr-5">
                               
                                     @csrf
                                    <div class="form-group">
                                    
                                            <div class=" row d-flex">

                                                <div class="col-md-3">
                                                    <label class="mr-3 mt-2" for="my-input"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                                        <i
                                                        class="fas fa-location-dot fa-sm text-white-50"></i> Địa chỉ</a></label>
                                            </div>  
                                            <div class="col-md-6">
                                                <input id="input-diachi" readonly class="form-control" type="text" name="diachi">
                                            </div>
                                                
    
                                            </div>
                                            <div class="row mt-3 d-flex">
                                                <div class="col-md-3">
                                                    <label class="mr-3 " for="my-input"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                                        <i
                                                        class="fas fa-envelope fa-sm text-white-50"></i> Địa chỉ Email</a></label>
                                                </div>
                                                <div class="col-md-6">
    
                                                        <input id="input-email" readonly class="form-control" type="text" name="email">
                                                </div>
                                            </div> 
                                            
                                            <div class="row mt-3 d-flex">
<div class="col-md-3">
    <label class="mr-3 " for="my-input">  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i
        class="fas fa-phone fa-sm text-white-50"></i> Điện thoại</a></label>
</div>
                                                <div class="col-md-6">

                                                    <input id="input-phone"readonly class="form-control" type="text" name="phone">
                                                </div>
                                            </div>
                                    </div>
                                   
                                </form>
                        </div>
                         <!-- Pie Chart -->
                       
                         <a href="javascript:void(0)" class="btn btn-primary btn-luu">Lưu</a>
                         <a href="javascript:void(0)" onclick="return readmode();" class="btn btn-primary btn-danger btn-huy">Hủy</a>
           
                  
            </div>
   
                </div>
                {{-- <div class="col-xl-4 col-lg-"></div> --}}

               
            </div>
            {{-- header --}}
         
                <!-- Pie Chart -->
           
            <!-- Content Row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

</div>
@endsection