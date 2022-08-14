@extends("layouts.hello")
@section('pagdeName', 'Hồ Sơ Nhân Lực')
@section('slider')
    <!-- Carousel Start -->
    @include("module.PageHeader")
    <!-- Carousel End -->
@endsection
@section("content")
<div class="container">
    <div class="tree">
      <ul>
        <li>
          <a href="#">
            <div class="mx-auto">
              <img
                src="https://cdn1.iconfinder.com/data/icons/user-avatars-2/300/10-512.png"
                alt="Sample avatar"
              />
            </div>
            <p class="font-weight-bold mt-4 mb-3">Giám Đốc</p>
          </a>
          <ul class="inn_line">
            <!-- Nhánh 1 -->
            <li>
              <a href="#">
                <div class="mx-auto">
                  <img
                    src="https://cdn2.iconfinder.com/data/icons/avatar-vol-1-5/512/7_Asian_avatar_businessman_chinese-512.png"
                    alt="Sample avatar"
                  />
                </div>
                <p class="font-weight-bold mt-4 mb-3">Phó Giám Đốc Kinh Tế</p>
              </a>
              
              <ul class="inn_line">
                <!-- Nhánh con 1 -->
                <li>
                  <a href="#">
                    <div class="mx-auto">
                      <img
                        src="https://cdn2.iconfinder.com/data/icons/avatar-vol-1-5/512/7_Asian_avatar_businessman_chinese-512.png"
                        alt="Sample avatar"
                      />
                    </div>
                    <p class="font-weight-bold mt-4 mb-3">Phòng Tổ Chức <br>- Hành Chính</p>
                  </a>
                   <!-- Nhánh phụ -->
                   <ul class="inn_line">
                    <li>
                      <a href="#">
                        <div class="mx-auto">
                          <img
                            src="https://i.pinimg.com/originals/d3/69/d9/d369d9056795f553e244da66e8297cca.png"
                            alt="Sample avatar"
                          />
                        </div>
                        <p class="font-weight-bold mt-4 mb-3">Nhà Máy<br>- Khai Thác Đá</p>
                      </a>
                     
                    </li>
                  </ul>
                </li>
                <!-- Nhánh con 2 -->
                <li>
                  <a href="#">
                    <div class="mx-auto">
                      <img
                        src="https://i.pinimg.com/originals/d3/69/d9/d369d9056795f553e244da66e8297cca.png"
                        alt="Sample avatar"
                      />
                    </div>
                    <p class="font-weight-bold mt-4 mb-3">Phòng Kế Toán <br>- Tài Vụ</p>
                  </a>
                  <!-- Nhánh phụ -->
                  <ul class="inn_line">
                    <li>
                      <a href="#">
                        <div class="mx-auto">
                          <img
                            src="https://i.pinimg.com/originals/d3/69/d9/d369d9056795f553e244da66e8297cca.png"
                            alt="Sample avatar"
                          />
                        </div>
                        <p class="font-weight-bold mt-4 mb-3">Kế Toán <br> Công Trình</p>
                      </a>
                     
                    </li>
                  </ul>
                </li>
                <!-- Nhánh con 3 -->
                <li>
                  <a href="#">
                    <div class="mx-auto">
                      <img
                        src="https://i.pinimg.com/originals/d3/69/d9/d369d9056795f553e244da66e8297cca.png"
                        alt="Sample avatar"
                      />
                    </div>
                    <p class="font-weight-bold mt-4 mb-3">Phòng Kế Hoạch <br> - Vật Tư</p>
                  </a>
                 <!-- Nhánh phụ -->
                 <ul class="inn_line">
                  <li>
                    <a href="#">
                      <div class="mx-auto">
                        <img
                          src="https://i.pinimg.com/originals/d3/69/d9/d369d9056795f553e244da66e8297cca.png"
                          alt="Sample avatar"
                        />
                      </div>
                      <p class="font-weight-bold mt-4 mb-3">Giám Sát<br>- Kỹ Thuật</p>
                    </a>
                   
                  </li>
                </ul>
                </li>
              </ul>
            </li>
            <!-- Nhánh 2 -->
            <li>
              <a href="#">
                <div class="mx-auto">
                  <img
                    src="https://cdn2.iconfinder.com/data/icons/avatar-vol-1-5/512/7_Asian_avatar_businessman_chinese-512.png"
                    alt="Sample avatar"
                  />
                </div>
                <p class="font-weight-bold mt-4 mb-3">Phó Giám Đốc Kỹ Thuật</p>
              </a>
              <ul class="inn_line">
                <!-- Nhánh con 1 -->
                <li>
                  <a href="#">
                    <div class="mx-auto">
                      <img
                        src="https://cdn2.iconfinder.com/data/icons/avatar-vol-1-5/512/7_Asian_avatar_businessman_chinese-512.png"
                        alt="Sample avatar"
                      />
                    </div>
                    <p class="font-weight-bold mt-4 mb-3">Phòng Kế Hoạch <br>- Kỹ Thuật</p>
                  </a>
                 <!-- Nhánh phụ -->
                 <ul class="inn_line">
                  <li>
                    <a href="#">
                      <div class="mx-auto">
                        <img
                          src="https://i.pinimg.com/originals/d3/69/d9/d369d9056795f553e244da66e8297cca.png"
                          alt="Sample avatar"
                        />
                      </div>
                      <p class="font-weight-bold mt-4 mb-3">Bộ Phận<br>- Vật Tư</p>
                    </a>
                   
                  </li>
                </ul>
                </li>
                <!-- Nhánh con 2 -->
                <li>
                  <a href="#">
                    <div class="mx-auto">
                      <img
                        src="https://i.pinimg.com/originals/d3/69/d9/d369d9056795f553e244da66e8297cca.png"
                        alt="Sample avatar"
                      />
                    </div>
                    <p class="font-weight-bold mt-4 mb-3">Phòng Chỉ Huy <br>Công Trình</p>
                  </a>
                  <!-- Nhánh phụ -->
                  <ul class="inn_line">
                    <li>
                      <a href="#">
                        <div class="mx-auto">
                          <img
                            src="https://i.pinimg.com/originals/d3/69/d9/d369d9056795f553e244da66e8297cca.png"
                            alt="Sample avatar"
                          />
                        </div>
                        <p class="font-weight-bold mt-4 mb-3">Đội <br>- Thi Công</p>
                      </a>
                     
                    </li>
                  </ul>
                </li>
                
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
@endsection