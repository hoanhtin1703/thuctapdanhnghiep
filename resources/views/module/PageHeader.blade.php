
        <!-- Page Header Start -->
        <div
        class="container-fluid page-header py-5 mb-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container text-center py-5">
          <h1 class="display-4 text-white animated slideInDown mb-4">
        @yield('pagdeName')
          </h1>
          <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
              <li class="breadcrumb-item">
                <a class="text-white" href="#">Trang Chủ</a>
              </li>
              <li class="breadcrumb-item">
                <a class="text-white" href="#">Hồ Sơ Năng Lực</a>
              </li>
              <li class="breadcrumb-item text-primary active" aria-current="page">
                @yield('pagdeName')
              </li>
            </ol>
          </nav>
        </div>
      </div>
