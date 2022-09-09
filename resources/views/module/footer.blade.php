   <!-- Footer S tart -->
   <div
   class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn"
   data-wow-delay="0.1s"
 >
   <div class="container ">
     <div class="row">
       <div class="col-lg-4 col-md-6">
        <img src="http://127.0.0.1:8000/public/upload/product/{{$lienhe->logo}}" width="150px" height="150px" > 
         <h3 class="text-white ">
      
        NGHĨA THÀNH
         </h3>
         <p>
         
         </p>
         <div class="d-flex pt-2">
           <a class="btn btn-square btn-outline-primary me-1" href=""
             ><i class="fab fa-twitter"></i
           ></a>
           <a class="btn btn-square btn-outline-primary me-1" href=""
             ><i class="fab fa-facebook-f"></i
           ></a>
           <a class="btn btn-square btn-outline-primary me-1" href=""
             ><i class="fab fa-youtube"></i
           ></a>
           <a class="btn btn-square btn-outline-primary me-0" href=""
             ><i class="fab fa-linkedin-in"></i
           ></a>
         </div>
       </div>
       <div class="col-lg-4 col-md-6">
         <h4 class="text-light mb-4">Địa Chỉ</h4>
         <p>
           <i class="fa fa-map-marker-alt me-3"></i>{{$lienhe->diachi}}
         </p>
         <p><i class="fa fa-phone-alt me-3"></i>{{$lienhe->phone}}</p>
         <p><i class="fa fa-envelope me-3"></i>{{$lienhe->email}}</p>
       </div>
       <div class="col-lg-4 col-md-6">
         <h4 class="text-light mb-4">Truy cập nhanh</h4>
         <a href="index.html" class="nav-item nav-link active">TRANG CHỦ</a>
         <a href="about.html" class="nav-item nav-link">VỀ CHÚNG TÔI</a>
         <a href="service.html" class="nav-item nav-link">TIN TỨC</a>
         <div class="nav-item dropdown">
          <a
            href="#"
            class="nav-link dropdown-toggle"
            data-bs-toggle="dropdown"
            >HỒ SƠ NĂNG LỰC</a
          >
          <div class="dropdown-menu bg-light m-0">
           
            <a href="hsphaply.html" class="dropdown-item">Hồ SƠ PHÁP LÝ</a>
            <a href="testimonial.html" class="dropdown-item">NĂNG LỰC TÀI CHÍNH</a>
            <a href="hsnhanluc.html" class="dropdown-item">NĂNG LỰC NHÂN SỰ</a>
            <a href="team.html" class="dropdown-item">THIẾT BỊ THI CÔNG </a>
            <a href="testimonial.html" class="dropdown-item">NĂNG LỰC & KINH NGHIỆM</a>
          
          </div>
        </div>
        <a href="contact.html" class="nav-item nav-link">LIÊN HỆ</a>
       </div>
     
     </div>
   </div>
  
 </div>
 <!-- Footer End -->

 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
   ><i class="bi bi-arrow-up"></i
 ></a>

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script src="{{asset('front_end/lib/wow/wow.min.js')}}"></script>
 <script src="{{asset('front_end/lib/easing/easing.min.js')}}"></script>
 <script src="{{asset('front_end/lib/waypoints/waypoints.min.js')}}"></script>
 <script src="{{asset('front_end/lib/owlcarousel/owl.carousel.min.js')}}"></script>

 <!-- Template Javascript -->
 <script src="{{asset('front_end/js/main.js')}}"></script>
 <script src="{{asset('front_end/js/gallery.js')}}"></script>
 <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.0/dist/index.bundle.min.js"></script>
<script >
  $(document).ready(function(){
  $(".content").slice(0,4).show()
  $(".loadMore").on("click", function(e){
    setTimeout(() => {
      $(".content:hidden").slice(0,4).slideDown();
      $(".loadMore").text("Load more");
    }, 1000);
    $(".loadMore").text("Loading...");
    var html = "<span class='spinner-border spinner-border-sm' role='status'; aria-hidden='true'></span>";
    // $(".loadMore").wrapInner("<span class='spinner-border spinner-border-sm' role='status'; aria-hidden='true'></span>")
    $(".loadMore").append(html);
    e.preventDefault();
    if($(".content:hidden").length == 0) {
      $(".loadMore").text("").addClass("noContent");
    }
  });
  
})
</script>
<script>
  $(".call-buton").click(function (e) { 
    e.preventDefault();
    Swal.fire({
 title: '<a href="tel:05103879579">05103879579</a>', 
  iconHtml: '<i class="fa fa-phone text-primary"></i>',
  confirmButtonColor: '#FDA12B',
  customClass: {
    icon : 'no-border'
  }
})
  });
</script>
</body>
</html>