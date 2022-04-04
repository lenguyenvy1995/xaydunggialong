@extends('user.layouts.app')
@section('title')
    {{ Str::ucfirst('trang chủ') }}
@endsection
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main')
   @includeIf('user.modules.carousel')  
   <section id="price-list" class="bg-blur pt-5 pb-5">
        <div class="container">
           
            <div class="row">
                
                <div class="col-12 col-md-6">
                   <div class="mt-2">
                    <h1 class="title-2">
                        <span>Bảng giá xây dựng</span>
                    </h1>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <a href="">
                                <div class="item">
                                    <div class="item-icon">
                                        <i class="fa-solid fa-building-circle-check"></i>
                                    </div>
                                    <div class="item-title">
                                        đơn giá thi công xây dựng nhà
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="">
                                <div class="item">
                                    <div class="item-icon">
                                        <i class="fa-solid fa-building-circle-check"></i>
                                    </div>
                                    <div class="item-title">
                                        đơn giá thi công xây dựng nhà
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="">
                                <div class="item">
                                    <div class="item-icon">
                                        <i class="fa-solid fa-building-circle-check"></i>
                                    </div>
                                    <div class="item-title">
                                        đơn giá thi công xây dựng nhà
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="">
                                <div class="item">
                                    <div class="item-icon">
                                        <i class="fa-solid fa-building-circle-check"></i>
                                    </div>
                                    <div class="item-title">
                                        đơn giá thi công xây dựng nhà
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="">
                                <div class="item">
                                    <div class="item-icon">
                                        <i class="fa-solid fa-building-circle-check"></i>
                                    </div>
                                    <div class="item-title">
                                        đơn giá thi công xây dựng nhà
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="">
                                <div class="item">
                                    <div class="item-icon">
                                        <i class="fa-solid fa-building-circle-check"></i>
                                    </div>
                                    <div class="item-title">
                                        đơn giá thi công xây dựng nhà
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                   </div>
                </div>
                <div class="col-12 col-md-6">
                   <div class="mt-2">
                   
                    <div class="list-about">
                        <h1 class="title-2">
                            <span>vì sao chọn chúng tôi</span>
                        </h1>
                        <div class="item">
                            <div class="item-icon">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="item-description">
                                <h5 class="item-title">đội ngũ kinh nghiệm</h5>
                                <div class="item-content"> Với đội ngũ cán bộ, công nhân chuyên nghiệp, lành nghề, nhiều kinh nghiệm</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-icon">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="item-description">
                                <h5 class="item-title"> đảm bảo tiến độ</h5>
                                <div class="item-content">
                                    Chúng tôi luôn luôn cố gắng hoàn thành dự án một cách nhanh nhất.</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-icon">
                                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                            </div>
                            <div class="item-description">
                                <h5 class="item-title"> Giá cả hợp lý   </h5>
                                <div class="item-content"> bạn sẽ thực sự cảm thấy hài lòng với khoản chi phí của mình </div>
                            </div>
                          </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <section id="field" class="categorize pt-5 pb-5 text-dark bg-white">
       <div class="container">
        <h1 class="title-1">
            <span>LĨNH VỰC HOẠT ĐỘNG</span>
        </h1>
        <div class="row">
            <div class="col-6 col-md-6 col-lg-3">
              <div class="card">
                <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">kiến trúc xây dựng</h5>
                  <p class="card-text">Để xây dựng được một ngồi nhà đẹp phải có bản thiết kế đẹp ... </p>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-6 col-lg-3">
                <div class="card">
                  <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">đầu tư xây dựng</h5>
                    <p class="card-text">Xây dựng để phát triển công ty cùng bạn phát triển tương lai ... </p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-6 col-lg-3">
                <div class="card">
                  <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">giám sát thi công</h5>
                    <p class="card-text">Giám sát thi công để đảm bảo chất lượng xây lắp đúng kỹ thuật khi xây dựng mọi công trình</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-6 col-lg-3">
                <div class="card">
                  <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">Sản phẩm sáng tạo</h5>
                    <p class="card-text">Tư vấn nội thất là chuyên mục chia sẻ tất tần tật về kiến thức thiết kế thi công nội thất nhà hàng  ...</p>
                  </div>
                </div>
              </div>
          </div>
       </div>
   </section>
 
    <section class="categorize pt-5 pb-5 text-dark bg-white">
        <div class="container">
            <h1 class="title-1">
                <span>kiến trúc</span>
            </h1>
            <ul class="nav nav-pills mb-3 justify-content-center" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">nhà phố biệt thự</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">nội thất không gian</button>
                </li>
              
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">kiến trúc xây dựng</h5>
                            <p class="card-text">Để xây dựng được một ngồi nhà đẹp phải có bản thiết kế đẹp ... </p>
                            </div>
                        </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3">
                            <div class="card">
                            <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">đầu tư xây dựng</h5>
                                <p class="card-text">Xây dựng để phát triển công ty cùng bạn phát triển tương lai ... </p>
                            </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3">
                            <div class="card">
                            <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">giám sát thi công</h5>
                                <p class="card-text">Giám sát thi công để đảm bảo chất lượng xây lắp đúng kỹ thuật khi xây dựng mọi công trình</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3">
                            <div class="card">
                            <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">Sản phẩm sáng tạo</h5>
                                <p class="card-text">Tư vấn nội thất là chuyên mục chia sẻ tất tần tật về kiến thức thiết kế thi công nội thất nhà hàng  ...</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">  <div class="row">
                    <div class="col-6 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">kiến trúc xây dựng</h5>
                        <p class="card-text">Để xây dựng được một ngồi nhà đẹp phải có bản thiết kế đẹp ... </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3">
                        <div class="card">
                        <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">đầu tư xây dựng</h5>
                            <p class="card-text">Xây dựng để phát triển công ty cùng bạn phát triển tương lai ... </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3">
                        <div class="card">
                        <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">giám sát thi công</h5>
                            <p class="card-text">Giám sát thi công để đảm bảo chất lượng xây lắp đúng kỹ thuật khi xây dựng mọi công trình</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3">
                        <div class="card">
                        <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">Sản phẩm sáng tạo</h5>
                            <p class="card-text">Tư vấn nội thất là chuyên mục chia sẻ tất tần tật về kiến thức thiết kế thi công nội thất nhà hàng  ...</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5 pb-5 text-dark bg-blur">
        <div class="container">
            <h1 class="title-2">
                <span>thi công xây dựng</span>
            </h1>
            <ul class="nav nav-pills mb-3 justify-content-center" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab-2" data-bs-toggle="pill" data-bs-target="#pills-home-2" type="button" role="tab" aria-controls="pills-home-2" aria-selected="true">
                     xây nhà trọn gói</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab-2" data-bs-toggle="pill" data-bs-target="#pills-profile-2" type="button" role="tab" aria-controls="pills-profile-2" aria-selected="false">
                        cải tạo nhà cũ</button>
                </li>
              
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home-2" role="tabpanel" aria-labelledby="pills-home-tab-2">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">kiến trúc xây dựng</h5>
                            <p class="card-text">Để xây dựng được một ngồi nhà đẹp phải có bản thiết kế đẹp ... </p>
                            </div>
                        </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3">
                            <div class="card">
                            <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">đầu tư xây dựng</h5>
                                <p class="card-text">Xây dựng để phát triển công ty cùng bạn phát triển tương lai ... </p>
                            </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3">
                            <div class="card">
                            <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">giám sát thi công</h5>
                                <p class="card-text">Giám sát thi công để đảm bảo chất lượng xây lắp đúng kỹ thuật khi xây dựng mọi công trình</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3">
                            <div class="card">
                            <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">Sản phẩm sáng tạo</h5>
                                <p class="card-text">Tư vấn nội thất là chuyên mục chia sẻ tất tần tật về kiến thức thiết kế thi công nội thất nhà hàng  ...</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile-2" role="tabpanel" aria-labelledby="pills-profile-tab-2">  <div class="row">
                    <div class="col-6 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">kiến trúc xây dựng</h5>
                        <p class="card-text">Để xây dựng được một ngồi nhà đẹp phải có bản thiết kế đẹp ... </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3">
                        <div class="card">
                        <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">đầu tư xây dựng</h5>
                            <p class="card-text">Xây dựng để phát triển công ty cùng bạn phát triển tương lai ... </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3">
                        <div class="card">
                        <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">giám sát thi công</h5>
                            <p class="card-text">Giám sát thi công để đảm bảo chất lượng xây lắp đúng kỹ thuật khi xây dựng mọi công trình</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3">
                        <div class="card">
                        <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">Sản phẩm sáng tạo</h5>
                            <p class="card-text">Tư vấn nội thất là chuyên mục chia sẻ tất tần tật về kiến thức thiết kế thi công nội thất nhà hàng  ...</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="categorize pt-5 pb-5 text-dark overflow-hidden bg-white">
        <div class="container">
            <h1 class="title-1">
                <span>dự án đã thực hiện</span>
            </h1>
            <div class="row">
                <div class="col-6 col-md-6 col-lg-3">
                <div class="card">
                    <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">dự án trọn gói quận 8</h5>
                    <p class="card-text">Để xây dựng được một ngồi nhà đẹp phải có bản thiết kế đẹp ... </p>
                    </div>
                </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="card">
                    <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">dự án xây dựng nhà phố cổ</h5>
                        <p class="card-text">Xây dựng để phát triển công ty cùng bạn phát triển tương lai ... </p>
                    </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="card">
                    <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">công trình tân phú</h5>
                        <p class="card-text">Giám sát thi công để đảm bảo chất lượng xây lắp đúng kỹ thuật khi xây dựng mọi công trình</p>
                    </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="card">
                    <img src="{{asset('images/linh-vuc-hoat-dong/tkw.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-blue-dark text-center text-uppercase fw-bolder">Sản phẩm sáng tạo</h5>
                        <p class="card-text">Tư vấn nội thất là chuyên mục chia sẻ tất tần tật về kiến thức thiết kế thi công nội thất nhà hàng  ...</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   
    <section id="customer-reviews" class="pt-5 pb-5">
        <div class="over-fill fill">
            <div class="over fill"></div>
        </div>
        <div class="container ">
            <h1 class="title-2">
                <span>ý kiến của khách hàng</span>
            </h1>
            <div class="owl-carousel">
                <div class="card">
                    <img src="{{asset('images/top-nhung-hinh-girl-han-quoc-de-thuong-cute-nhat-12-405x400-1.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Ms. Trương Gấm ( CEO )</h5>
                      <p class="card-text">
                        Thiết kế và thi công một cách bài bản và nhanh chóng. Tôi đã từng chi ra rất nhiều tiền để có một thiết kế đẹp nhưng không thành công .
                      </p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('images/top-nhung-hinh-girl-han-quoc-de-thuong-cute-nhat-12-405x400-1.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Ms. Trương Gấm ( CEO )</h5>
                      <p class="card-text">
                        Thiết kế và thi công một cách bài bản và nhanh chóng. Tôi đã từng chi ra rất nhiều tiền để có một thiết kế đẹp nhưng không thành công .
                      </p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('images/top-nhung-hinh-girl-han-quoc-de-thuong-cute-nhat-12-405x400-1.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Ms. Trương Gấm ( CEO )</h5>
                      <p class="card-text">
                        Thiết kế và thi công một cách bài bản và nhanh chóng. Tôi đã từng chi ra rất nhiều tiền để có một thiết kế đẹp nhưng không thành công .
                      </p>
                    </div>
                </div>
             </div>
        </div>
    </section>
    @includeIf('user.modules.estimates')
    <section id="blog" class="pt-5 pb-5 text-dark bg-blur">
        
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mt-2">
                    <h2 class="title-3">
                        <span>VIDEO</span>
                    </h2>
                    <div class="card border-0 bg-transparent">
                        <div class="card-body p-0">
                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/R-1HbHAgsX4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-4">
                                    <iframe width="100%" height="auto" src="https://www.youtube.com/embed/R-1HbHAgsX4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="col-4">
                                    <iframe width="100%" height="auto" src="https://www.youtube.com/embed/R-1HbHAgsX4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="col-4">
                                    <iframe width="100%" height="auto" src="https://www.youtube.com/embed/R-1HbHAgsX4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <h2 class="title-3">
                        <span>TIN TỨC & SỰ KIỆN</span>
                    </h2>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-4 d-flex align-items-center">
                            <img src="{{asset('images/linh-vuc-hoat-dong/imgabout-4396.png')}}" class="card-img-top" alt="">
                          </div>
                          <div class="col-8">
                            <div class="card-body">
                              <h4 class="card-title">Xem hướng xây nhà phong thuỷ</h4>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p  class="card-text"><small class="text-muted"> <i class="fa-solid fa-calendar-days"></i>  {{now()->format('d-m-Y H:i:s')}} </small> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-4 d-flex align-items-center">
                            <img src="{{asset('images/linh-vuc-hoat-dong/imgabout-4396.png')}}" class="card-img-top" alt="">
                          </div>
                          <div class="col-8">
                            <div class="card-body">
                              <h4 class="card-title">Xem hướng xây nhà phong thuỷ</h4>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p  class="card-text"><small class="text-muted"> <i class="fa-solid fa-calendar-days"></i>  {{now()->format('d-m-Y H:i:s')}} </small> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-4 d-flex align-items-center">
                            <img src="{{asset('images/linh-vuc-hoat-dong/imgabout-4396.png')}}" class="card-img-top" alt="">
                          </div>
                          <div class="col-8">
                            <div class="card-body">
                              <h4 class="card-title">Xem hướng xây nhà phong thuỷ</h4>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p  class="card-text"><small class="text-muted"> <i class="fa-solid fa-calendar-days"></i>  {{now()->format('d-m-Y H:i:s')}} </small> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                </div>
            </div>
        </div>
    </section>
    <section id="feng-shui" class="pt-5 pb-5 text-dark bg-white">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-6 border-end ">
                    <h2 class="title-3">
                        <span>Phong thuỷ nhà ở</span>
                    </h2>
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row g-0">
                          <div class="col-4 d-flex align-items-center">
                            <img src="{{asset('images/linh-vuc-hoat-dong/imgabout-4396.png')}}" class="card-img-top" alt="">
                          </div>
                          <div class="col-8">
                            <div class="card-body">
                              <h4 class="card-title">Xem hướng xây nhà phong thuỷ</h4>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p  class="card-text"><small class="text-muted"> <i class="fa-solid fa-calendar-days"></i>  {{now()->format('d-m-Y H:i:s')}} </small> </p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row g-0">
                          <div class="col-4 d-flex align-items-center">
                            <img src="{{asset('images/linh-vuc-hoat-dong/imgabout-4396.png')}}" class="card-img-top" alt="">
                          </div>
                          <div class="col-8">
                            <div class="card-body">
                              <h4 class="card-title">Xem hướng xây nhà phong thuỷ</h4>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p  class="card-text"><small class="text-muted"> <i class="fa-solid fa-calendar-days"></i>  {{now()->format('d-m-Y H:i:s')}} </small> </p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row g-0">
                          <div class="col-4 d-flex align-items-center">
                            <img src="{{asset('images/linh-vuc-hoat-dong/imgabout-4396.png')}}" class="card-img-top" alt="">
                          </div>
                          <div class="col-8">
                            <div class="card-body">
                              <h4 class="card-title">Xem hướng xây nhà phong thuỷ</h4>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p  class="card-text"><small class="text-muted"> <i class="fa-solid fa-calendar-days"></i>  {{now()->format('d-m-Y H:i:s')}} </small> </p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="text-secondary text-center btn btn-warning btn-sm rounded-pill"> xem tất cả </a>
                    </div>
                </div>
                
                <div class="col-12 col-md-6">
                    <h2 class="title-3">
                        <span>Tư Vấn Xây Dựng</span>
                    </h2>
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row g-0">
                          <div class="col-4 d-flex align-items-center">
                            <img src="{{asset('images/linh-vuc-hoat-dong/imgabout-4396.png')}}" class="card-img-top" alt="">
                          </div>
                          <div class="col-8">
                            <div class="card-body">
                              <h4 class="card-title">Xem hướng xây nhà phong thuỷ</h4>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p  class="card-text"><small class="text-muted"> <i class="fa-solid fa-calendar-days"></i>  {{now()->format('d-m-Y H:i:s')}} </small> </p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row g-0">
                          <div class="col-4 d-flex align-items-center">
                            <img src="{{asset('images/linh-vuc-hoat-dong/imgabout-4396.png')}}" class="card-img-top" alt="">
                          </div>
                          <div class="col-8">
                            <div class="card-body">
                              <h4 class="card-title">Xem hướng xây nhà phong thuỷ</h4>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p  class="card-text"><small class="text-muted"> <i class="fa-solid fa-calendar-days"></i>  {{now()->format('d-m-Y H:i:s')}} </small> </p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row g-0">
                          <div class="col-4 d-flex align-items-center">
                            <img src="{{asset('images/linh-vuc-hoat-dong/imgabout-4396.png')}}" class="card-img-top" alt="">
                          </div>
                          <div class="col-8">
                            <div class="card-body">
                              <h4 class="card-title">Xem hướng xây nhà phong thuỷ</h4>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p  class="card-text"><small class="text-muted"> <i class="fa-solid fa-calendar-days"></i>  {{now()->format('d-m-Y H:i:s')}} </small> </p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="text-secondary text-center btn btn-warning btn-sm rounded-pill"> xem tất cả </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Set up your HTML -->
   
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                autoplay:true,
                responsive : {
                // breakpoint from 0 up
                    0:{
                        items:1,
                        nav:false
                    },
                    1000:{
                        items:3,
                        nav:false,
                        loop:false
                    }
                }
            });
        });
    </script>
@endsection