<nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{asset('logo41.svg')}}" style="max-width:400px;height:50px" loading="lazy" alt="logo" srcset="" class="lazyload">
    </a>
    <button class="btn btn-light navbar-toggler border-3 px-2" type="button" data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"
      >
      <i class="fa-solid fa-align-center"></i>
    </button>
    <div class="offcanvas offcanvas-start-lg bg-light" tabindex="-1" id="offcanvasExample"
      aria-labelledby="offcanvasExampleLabel"
      >
      <div class="offcanvas-header d-flex d-lg-none">
        <h5 class="offcanvas-title text-blue-dark" id="offcanvasExampleLabel">    
            <img src="{{asset('logo41.svg')}}" style="max-width:400px;min-height:50px" loading="lazy" alt="logo" srcset="" class="lazyload">
        </h5>
        <a href="javascript:void(0) "
          class="text-reset p-0"
          data-bs-dismiss="offcanvas"
          aria-label="close"
          >
          <svg xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="#0e173e"
            class="bi bi-x-circle"
            viewBox="0 0 16 16"
            >
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </a>
      </div>
      <div class="offcanvas-body p-lg-0">
        <ul class="navbar-nav justify-content-center m-auto mb-2 mb-lg-0">
          <li class="nav-item hvr-bounce-to-top ">
            <a class="nav-link active" aria-current="page" href="#">Trang Chủ</a>
          </li>
          <li class="nav-item hvr-bounce-to-top">
            <a class="nav-link" href="#">Giới Thiệu</a>
          </li>
          <li class="nav-item hvr-bounce-to-top">
            <a class="nav-link" href="#">Kiến Trúc</a>
          </li>
          <li class="nav-item hvr-bounce-to-top">
            <a class="nav-link" href="#">Thi Công</a>
          </li>
          <li class="nav-item hvr-bounce-to-top">
            <a class="nav-link" href="#">VLXD</a>
          </li>
          <li class="nav-item hvr-bounce-to-top">
            <a class="nav-link" href="#">Báo Giá</a>
          </li>
          <li class="nav-item hvr-bounce-to-top">
            <a class="nav-link" href="#">Dự Án</a>
          </li>
          <li class="nav-item hvr-bounce-to-top">
            <a class="nav-link" href="#">Mẫu Nhà</a>
          </li>
          <li class="nav-item hvr-bounce-to-top">
            <a class="nav-link" href="#"> Liên Hệ</a>
          </li>
        </ul>
        <form class="d-flex">
          <div class="input-box"> <input type="text" class="form-control" placeholder="Tìm kiếm ..."> <i class="fa fa-search"></i> </div>
        </form>
      </div>
    </div>
  </div>
</nav>