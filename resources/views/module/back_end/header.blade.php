<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>SB Admin 2 - Dashboard</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js">
  <!-- Custom fonts for this template-->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="{{asset('back_end/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('back_end/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link href="{{asset('back_end/css/dropzone.css')}}" rel="stylesheet">
  <style>
    .images-preview-div img {

      padding: 10px;
      max-width: 200px;
    }

    .upload-btn-wrapper {
      position: relative;
      overflow: hidden;
      display: inline-block;
    }

    /* .btn {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
} */

    .upload-btn-wrapper input[type=file] {
      font-size: 100px;
      position: absolute;
      left: 0;
      top: 0;
      opacity: 0;
    }

    .btn {
      display: inline-block;
      padding: 6px 12px;
      margin-bottom: 0;
      font-size: 14px;
      font-weight: normal;
      line-height: 1.42857143;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-image: none;
      border: 1px solid transparent;
      border-radius: 4px;
    }

    /*Also */
    .btn-success {
      border: 1px solid #c5dbec;
      background: #d0e5f5;
      font-weight: bold;
      color: #2e6e9e;
    }

    /* This is copied from https://github.com/blueimp/jQuery-File-Upload/blob/master/css/jquery.fileupload.css */
    .fileinput-button {
      position: relative;
      overflow: hidden;
    }

    .fileinput-button input {
      position: absolute;
      top: 0;
      right: 0;
      margin: 0;
      opacity: 0;
      -ms-filter: "alpha(opacity=0)";
      font-size: 200px;
      direction: ltr;
      cursor: pointer;
    }

    .thumb {
      height: 80px;
      width: 100px;
      border: 1px solid #000;
    }

    ul.thumb-Images li {
      width: 120px;
      float: left;
      display: inline-block;
      vertical-align: top;
      height: 120px;
    }

    .img-wrap {
      position: relative;
      display: inline-block;
      font-size: 0;
    }

    .img-wrap .close {
      position: absolute;
      top: 2px;
      right: 2px;
      z-index: 100;
      background-color: #d0e5f5;
      padding: 5px 2px 2px;
      color: #000;
      font-weight: bolder;
      cursor: pointer;
      opacity: 0.5;
      font-size: 23px;
      line-height: 10px;
      border-radius: 50%;
    }

    .img-wrap:hover .close {
      opacity: 1;
      background-color: #ff01000;
    }

    .FileNameCaptionStyle {
      font-size: 12px;
    }
  </style>

  <script type="text/javascript">
    $(document).ready(function(e) {
      load_slider();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      // Load ảnh preview
      $('#image').change(function() {
        let reader = new FileReader();
        reader.onload = (e) => {
          $('#preview-image-before-upload').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
      });
      //Up ảnh
      $('#image-upload').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
          type: 'POST',
          url: "{{url('themslider')}}",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          success: (data) => {
            load_slider();
            this.reset();
            $("#input_topic").val('')
            $('#preview-image-before-upload').attr('src',
              "https://via.placeholder.com/1920x1080");
            Swal.fire({
              title: 'Thông Báo!',
              text: 'Thêm Thành Công',
              icon: 'success',
              confirmButtonText: 'OK'
            })
          },
          error: function(data) {
            console.log(data);
          }
        });
      });
      // Chỉnh sửa 
      $('#image-upload').attr("id", "form-upload");
      $("#button_update").click(function(e) {
        $('#image').change(function() {
          let reader = new FileReader();
          reader.onload = (e) => {
            $('#preview-image-before-upload').attr('src', e.target.result);
          }
          reader.readAsDataURL(this.files[0]);
        });
        var _token = $('input[name="_token"]').val();
        e.preventDefault();
        var formdata = new FormData($('form#form-upload')[0]);
        $.ajax({
          type: 'POST',
          url: '{{url('/update_slider')}}',
          data: formdata,
          cache: false,
          contentType: false,
          processData: false,
          success: (data) => {
            $('#image').val('')
            console.log(data);
            load_slider();
            $("#input_topic").val('')
            $('#preview-image-before-upload').attr('src',
              "https://via.placeholder.com/1920x1080");
            Swal.fire({
              title: 'Thông Báo!',
              text: 'Chỉnh Sửa Thành Công',
              icon: 'success',
              confirmButtonText: 'OK'
            })
          },
          error: function(data) {
            console.log(data);
          }
        });
      });
      $("#button_back").click(function(e) {
        e.preventDefault();
        $('#preview-image-before-upload').attr('src', "https://via.placeholder.com/1920x1080");
        $("#input_topic").val('')
        $("#button_add").show();
        $("#button_update").hide()
        $("#button_back").hide();
      });
      // Load lại danh sách
      function load_slider() {
        var _token = $('input[name="_token"]').val();
        $.ajax({
          url: '{{url('/admin/hienthislider')}}',
          method: 'GET',
          data: {
            _token: _token
          },
          success: function(data) {
            $('#preview-image-before-upload').attr('src',
              "https://via.placeholder.com/1920x1080");
            $('#load_slider').html(data);
          }
        })
      };
    });
    // Xóa
    function xoa(id) {
      var xoa = confirm('Ban co muon xoa khong');
      if (xoa) {
        $.ajax({
          url: "{{url('/delete_slider/')}}/" + id,
          method: 'GET',
          dataType: "JSON",
          success: function(response) {
            var _token = $('input[name="_token"]').val();
            $.ajax({
              url: '{{url('/admin/hienthislider')}}',
              method: 'GET',
              data: {
                _token: _token
              },
              success: function(data) {
                Swal.fire({
                  title: 'Thông Báo!',
                  text: 'Xóa Thành Công',
                  icon: 'success',
                  confirmButtonText: 'OK'
                })
                $('#load_slider').html(data);
              }
            })
            // alert("xoa thanh cong");                  
            console.log(response);
          }
        });
      }
    };
    //  Xóa slider theo id
    function load_single_slider(id) {
      var _token = $('input[name="_token"]').val();
      var path = "http://127.0.0.1:8000/public/upload/product/"
      $.ajax({
        url: "{{url('/slider/')}}/" + id,
        method: 'GET',
        dataType: "JSON",
        success: function(response) {
          console.log(response);
          $('#preview-image-before-upload').attr('src', path + response.image_url);
          $("#input_topic").val(response.image_topic)
          $("#input_hiden").attr('value', id);
          $("#button_add").hide();
          $("#button_update").show();
          $("#button_back").show();
        }
      });
    };
  </script>
  <script>
    $(document).ready(function() {
      $("#nutthem").click(function(e) {
        $('#preview-image-before-upload').attr('src', 'https://via.placeholder.com/1920x1080');
        $("#tieude").val('')
        $("#ndngan").val('')   
        CKEDITOR.instances['id4'].setData('')
        $(".button_submit").show();
        $(".click_submit").hide()
      });
      $("#tieude").keyup(function() {
        $("#tieude-preview").text($("#tieude").val())
      });
      $("#ndngan").keyup(function() {
        $("#ndngan-preview").text($("#ndngan").val() + '...')
      });
      // Thêm tin tức
      $('#insert_tintuc').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        formData.append('main_content', CKEDITOR.instances['id4'].getData());
        $.ajax({
          type: 'POST',
          url: "{{url('themtintuc')}}",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          success: (data) => {
            this.reset();
            // $("#input_topic").val('')
            Swal.fire({
              title: 'Thông Báo!',
              text: 'Thêm Thành Công',
              icon: 'success',
              confirmButtonText: 'OK'
            })
            $(".modal").modal('hide')
            var table = $('.data-table').DataTable()
            table.draw()
          },
          error: function(data) {
            console.log(data);
          }
        });
      });
      // Chỉnh sửa tin tức
      $(".click_submit").click(function(e) {
        e.preventDefault();
        var formData = new FormData($('form#updatetintuc')[0]);
        formData.append('main_content', CKEDITOR.instances['id4'].getData());
        $.ajax({
          type: 'POST',
          url: "{{url('update_tintuc')}}",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          success: (data) => {
            $(".modal").modal('hide')
            // load_tintuc()
            Swal.fire({
              title: 'Thông Báo!',
              text: 'Thêm Thành Công',
              icon: 'success',
              confirmButtonText: 'OK'
            })
            var table = $('.data-table').DataTable()
            table.draw()
            console.log(data);
          },
          error: function(data) {
            console.log(data);
          }
        });
      });
      
    });
// get tin tuc theo id
    function tintuc(id) {
      $(".modal-title").text('Chỉnh sửa tin tức')
      var _token = $('input[name="_token"]').val();
      var path = "http://127.0.0.1:8000/public/upload/product/"
      $.ajax({
        url: "{{url('/get_tintuc/')}}/" + id,
        method: 'GET',
        dataType: "JSON",
        success: function(response) {
          console.log(response);
          $('#preview-image-before-upload').attr('src', path + response.image_url);
          $("#tieude").val(response.topic)
          $("#ndngan").val(response.sub_content)
          $("#tieude-preview").text(response.topic)
          $("#ndngan-preview").text(response.sub_content)
          CKEDITOR.instances['id4'].setData(response.content)
          $("#input_hiden").attr('value', id);
          $('#insert_tintuc').attr("id", "updatetintuc");
          $(".button_submit").hide();
          $(".click_submit").show()
        }
      });
    }
// Xóa tin tức
    function xoatintuc(id) {
      Swal.fire({
        title: 'Thông Báo !!!',
        text: "Bạn có chắc chắn muốn xóa!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Có, Tôi Muốn'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: "{{url('/delete_tintuc/')}}/" + id,
            method: 'GET',
            dataType: "JSON",
            success: function(response) {
              Swal.fire({
                title: 'Thông Báo!',
                text: 'Xóa Thành Công',
                icon: 'success',
                confirmButtonText: 'OK'
              })
              $(".modal").modal('hide')
              var table = $('.data-table').DataTable()
              table.draw()
              // alert("xoa thanh cong");                  
              console.log(response);
            }
          });
        }
      })
    }
  </script>
  {{-- DataTable --}}
  <script>
    $(function() {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      var path = "http://127.0.0.1:8000/public/upload/product/"
      var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        url: "{{url('/admin/quanlytintuc')}}",
        columns: [{
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
          },
          {
            data: 'image_url',
            name: 'image_url',
            render: function(data, type, row) {
              return '<img src="' + path + data + '" width="100px" height="100px" />';
            }
          },
          {
            data: 'topic',
            name: 'topic'
          },
          {
            data: 'sub_content',
            name: 'sub_content'
          },
          {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false
          },
        ]
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      $("#total").keyup(function(e) {
        $("#total-preview").text("Tổng giá trị :" + new Intl.NumberFormat().format($("#total").val()) + "VND");
      });
      $("#nutthem1").click(function(e) {
        $("#mahopdong").val("");
        $("#tenhopdong").text("");
        $("#ngayky").val("");
        $("#ngayhoanthanh").val("");
        $("#total").val("");
        $("#total-preview").text("")
        $("#tenchudautu").val("");
        $("#diachi").val("");
        $("#dienthoai").val("");
        $("#fax").val("");
        $("#email").val("");
        $("#mota").text("");
        $(".submit").show();
        $(".click_submit1").hide()
        $('#update_hoso').attr("id", "insert_hoso");
      });
      // Thêm hồ sơ
      $('#insert_hoso').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        
        $.ajax({
          type: 'POST',
          url: "{{url('/themhoso')}}",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          success: (data, response) => {
            console.log(data);
            this.reset();
            // $("#input_topic").val('')
            $(".images-preview-div img").remove()
            $('.images-preview-div').css({
              'border': 'none'
            });
            Swal.fire({
              title: 'Thông Báo!',
              text: 'Thêm Thành Công',
              icon: 'success',
              confirmButtonText: 'OK'
            })
            $(".modal").modal('hide')
            var table = $('.data-table1').DataTable()
            table.draw()
            $(".images-preview-div img").remove()
          },
          error: function(data) {
            console.log(data);
          }
        });
      });
      // Chỉnh sửa hồ sơ
      $(".click_submit1").click(function(e) {
        e.preventDefault();
        var formData = new FormData($('form#update_hoso')[0]);
        $.ajax({
          type: 'POST',
          url: "{{url('update_hoso')}}",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          success: (data) => {
            $(".modal").modal('hide')
            // load_tintuc()
            Swal.fire({
              title: 'Thông Báo!',
              text: 'Thêm Thành Công',
              icon: 'success',
              confirmButtonText: 'OK'
            })
            $(".images-preview-div img").remove()
            var table = $('.data-table1').DataTable()
            table.draw()
            console.log(data);
          },
          error: function(data) {
            console.log(data);
          }
        });
      });
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      // DataTables
      var table = $('.data-table1').DataTable({
        processing: true,
        serverSide: true,
        url: "{{url('/admin/quanlyhosonangluc')}}",
        columns: [{
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
          },
          {
            data: 'mahopdong',
            name: 'mahopdong'
          },
          {
            data: 'tenhopdong',
            name: 'tenhopdong'
          },
          {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false
          },
        ]
      });
    });
    // Upload nhiều ảnh
    $(function() {
      var fileTypes = ['jpg', 'jpeg', 'png']; //acceptable file types
      // Multiple images preview with JavaScript
      var previewImages = function(input, imgPreviewPlaceholder) {
        if (input.files && input.files[0]) {
          var extension = input.files[0].name.split('.').pop().toLowerCase(), //file extension from input file
            isSuccess = fileTypes.indexOf(extension) > -1; //is extension in acceptable types
          if (isSuccess) { //yes
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
              var reader = new FileReader();
              reader.onload = function(event) {
                $('.images-preview-div').css({
                  'border': '1px solid #000'
                });
                $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
              }
              reader.readAsDataURL(input.files[i]);
            }
          } else {
            $("#images").val("");
            alert("file khong chap nhan")
          }
        }
      };
      $('#images').on('change', function() {
        previewImages(this, 'div.images-preview-div');
      });
    });
// Lấy hồ sơ theo id
    function hoso(id) {
      $(".modal-title").text('Chỉnh sửa hồ sơ')
      var _token = $('input[name="_token"]').val();
      var path = "http://127.0.0.1:8000/public/upload/product/"
      $.ajax({
        url: "{{url('/get_hoso/')}}/" + id,
        method: 'GET',
        dataType: "JSON",
        success: function(response) {
          console.log(response);
          $("input[name=vaitro][value=" + response.vaitro + "]").prop('checked', true);
          $("#mahopdong").val(response.mahopdong);
          $("#tenhopdong").text(response.tenhopdong);
          $("#ngayky").val(response.ngayky);
          $("#ngayhoanthanh").val(response.ngayhoanthanh);
          console.log(response.vaitro);
          $("#tenchudautu").val(response.tenchudautu);
          $("#diachi").val(response.diachi);
          $("#total").val(response.total);
          $("#total-preview").text("Tổng giá trị :" + new Intl.NumberFormat().format($("#total").val()) + "VND");
          $("#dienthoai").val(response.dienthoai);
          $("#fax").val(response.fax);
          $("#email").val(response.email);
          $("#mota").text(response.mota);
          $('#insert_hoso').attr("id", "update_hoso");
          $("#submit").hide();
          $("#input_hiden").attr('value', id);
          $(".submit").hide();
          $(".click_submit1").show();
          array1 = JSON.parse(response.image_url);
          $.each(array1, function(index, val) {
            // $('.images-preview-div').find('<img/>').attr('src',path+val)
            $($.parseHTML('<img>')).attr('src', path + val).appendTo(".images-preview-div");
            console.log(index, val)
          });
          $(".dong").click(function(e) {
            e.preventDefault();
            $(".images-preview-div img").remove()
          });
        }
      });
    }
// Xóa hồ sơ
    function xoahoso(id) {
      Swal.fire({
        title: 'Thông Báo !!!',
        text: "Bạn có chắc chắn muốn xóa!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Có, Tôi Muốn'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: "{{url('/delete_hoso/')}}/" + id,
            method: 'GET',
            dataType: "JSON",
            success: function(response) {
              Swal.fire({
                title: 'Thông Báo!',
                text: 'Xóa Thành Công',
                icon: 'success',
                confirmButtonText: 'OK'
              })
              $(".modal").modal('hide')
              var table = $('.data-table1').DataTable()
              table.draw()
              // alert("xoa thanh cong");                  
              console.log(response);
            }
          });
        }
      })
    }
  </script>
  <script>
    // Load logo
    $(document).ready(function() {
      loadlienhe()
      loadanh()
      // Thay đổi logo
      $(".luu-anh").click(function(e) {
        e.preventDefault();
        var formData = new FormData($('form#upload-anh')[0]);
        $.ajax({
          type: 'POST',
          url: "{{url('update_logo')}}",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          success: (data) => {
            Swal.fire({
              title: 'Thông Báo!',
              text: 'Thay Đổi Thành Công',
              icon: 'success',
              confirmButtonText: 'OK'
            })
            console.log(data);
            loadanh()
            $(".luu-anh").hide();
          },
          error: function(data) {
            console.log(data);
          }
        });
      });
      // Thay đổi thông tin liên hệ
      $(".btn-luu").click(function(e) {
        e.preventDefault();
        var _token = $('input[name="_token"]').val();
        var diachi = $("#input-diachi").val();
        var email = $("#input-email").val();
        var phone = $("#input-phone").val();
        $.ajax({
          type: 'POST',
          url: "{{url('update_lienhe')}}",
          data: {
            _token: _token,
            diachi: diachi,
            email: email,
            phone: phone
          },
          success: (data) => {
            Swal.fire({
              title: 'Thông Báo!',
              text: 'Thay Đổi Thành Công',
              icon: 'success',
              confirmButtonText: 'OK'
            })
            console.log(data);
            loadlienhe()
          },
          error: function(data) {
            console.log(data);
          }
        });
      });
      $('#myfile').change(function() {
        let reader = new FileReader();
        reader.onload = (e) => {
          $('#preview-image').attr('src', e.target.result);
          $('#preview-image1').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
        $(".luu-anh").show();
      });
    });
// load thông tin liên hệ
    function loadlienhe() {
      $(".btn-luu").hide();
      $(".btn-huy").hide();
      var _token = $('input[name="_token"]').val();
      $.ajax({
        url: '{{url('/admin/loadlienhe')}}',
        method: 'GET',
        data: {
          _token: _token
        },
        success: function(data) {
          console.log(data.diachi);
          $.each(data, function(index, val) {
            $("#input-diachi").val(val.diachi);
            $("#input-email").val(val.email);
            $("#input-phone").val(val.phone);
          });
        }
      })
    }

    function editmode() {
      $(".btn-luu").show();
      $(".btn-huy").show();
      $("#input-diachi").prop('readonly', false);
      $("#input-email").prop('readonly', false);
      $("#input-phone").prop('readonly', false);
    }

    function readmode() {
      $(".btn-luu").hide();
      $(".btn-huy").hide();
      $("#input-diachi").prop('readonly', true);
      $("#input-email").prop('readonly', true);
      $("#input-phone").prop('readonly', true);
    }
// load ảnh
    function loadanh() {
      var path = "http://127.0.0.1:8000/public/upload/product/"
      var _token = $('input[name="_token"]').val();
      $.ajax({
        url: '{{url('/admin/loadlienhe ')}}',
        method: 'GET',
        data: {
          _token: _token
        },
        success: function(data) {
          $.each(data, function(index, val) {
            $('#preview-image').attr('src', path + val.logo);
            $('#preview-image1').attr('src', path + val.logo);
            console.log(val.logo);
          });
        }
      })
    }
  </script>

</head>