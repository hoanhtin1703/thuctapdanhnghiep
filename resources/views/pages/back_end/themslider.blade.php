@extends("layouts.admin")
@section("content")
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">Quản lý Slider</h1>
            <!-- Page Heading -->
            <div class="row mt-4">
                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Lo go của trang web</h6>
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

                                <div class="col-md-6 col-lg-6">
                                    <div class="container mt-4">
                                        <form method="POST" enctype="multipart/form-data" id="image-upload"
                                            action="javascript:void(0)">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input id="input_topic" class="form-control" placeholder="Mô tả"
                                                            type="text"  name="topic" value="">
                                                            <input id="input_hiden" type="hidden" name="id" value="">
                                                    </div>
                                                </div>


                                                <div class="col-md-12 mb-2">
                                                    <img id="preview-image-before-upload"
                                                        src="https://via.placeholder.com/1920x1080"
                                                        alt="preview image" style="max-height: 250px;max-width: 400px;">
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="file" name="image" placeholder="Choose image"
                                                            id="image">
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-12 m-2">
                                                        <button type="submit" class="btn btn-primary"
                                                            id="button_add">Thêm</button>
                                                    </div>
                                                    <div class="col-md-12  m-2">
                                                        <a href="javascript:void(0)" style="display:none" class="btn btn-success" id="button_update">Cập Nhật</a>
                                                    </div>
                                                    <div class="col-md-12 m-2">
                                                        <a href="javascript:void(0)" style="display:none" class="btn btn-warning" id="button_back">Trở về</a>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <!-- Pie Chart -->

                                </div>
                                <div class="col-lg-6 col-md-6">
                                    
                                    <div class="container">
                                        <div class="row">
                                            <h2>Danh sách các slider</h2>
                                           
                                            <div id="load_slider" class="col-md-12 "></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.container-fluid -->

                            </div>
                            <!-- End of Main Content -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection