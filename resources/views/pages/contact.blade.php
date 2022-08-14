@extends("layouts.hello")
@section('pagdeName', 'Liên Hệ')
@section('slider')
    <!-- Carousel Start -->
    @include("module.PageHeader")
    <!-- Carousel End -->
@endsection
@section("content")
<div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
       
        <div
          class="col-lg-6 wow fadeInUp"
          data-wow-delay="0.1s"
          style="min-height: 450px"
        >
          <div class="position-relative h-100">
            <iframe

            class="position-relative w-100 h-100"
             src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.0078585997485!2d108.19871761417633!3d16.06508198888349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219ad462f065f%3A0x9497d661becc7b06!2zMzMgQsOqzIEgVsSDbiDEkGHMgG4sIENow61uaCBHacOhbiwgVGhhbmggS2jDqiwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1660449782164!5m2!1svi!2s"    frameborder="0"
            style="min-height: 450px; border: 0"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"></iframe>
          
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="border-start border-5 border-primary ps-4 mb-5">
            <h6 class="text-body text-uppercase mb-2">Liên Hệ Với Chúng Tôi</h6>
            <h1 class="display-6 mb-0">
              Nếu Bạn Có Câu Hỏi Gì Về Chúng Tôi. Vui Lòng Điền Thông Tin Vào Biểu Mẫu
            </h1>
          </div>
          <p class="mb-4">
            Công ty chúng tôi rất hân hạnh gửi đến các Quý Chủ đầu tư Hồ Sơ Năng Lực của Công ty với hy vọng rằng Quý vị sẽ có những thông tin cần thiết về năng lực và các lĩnh vực hoạt động của Công ty chúng tôi.
Công ty TNHH Xây dựng Nghĩa Thành rất mong nhận được sự ủng hộ, sự hợp tác và giúp đỡ của Quý vị đến với Công ty chúng tôi.
Xin trân trọng cảm ơn!

      
          </p>
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control border-0 bg-light"
                    id="name"
                    placeholder="Your Name"
                  />
                  <label for="name">Your Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input
                    type="email"
                    class="form-control border-0 bg-light"
                    id="email"
                    placeholder="Your Email"
                  />
                  <label for="email">Your Email</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control border-0 bg-light"
                    id="subject"
                    placeholder="Subject"
                  />
                  <label for="subject">Subject</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea
                    class="form-control border-0 bg-light"
                    placeholder="Leave a message here"
                    id="message"
                    style="height: 150px"
                  ></textarea>
                  <label for="message">Message</label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary py-3 px-5" type="submit">
                 Gửi
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection