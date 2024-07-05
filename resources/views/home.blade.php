<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/header.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
    <!-- Thêm CSS của Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    @include('partials.header')
    <div class="slide-show">
        <div class="list-images">
            <img src="{{ asset('frontend/img/slide-img1.png') }}" width="100%" alt="">
            <img src="{{ asset('frontend/img/slide-img2.png') }}" width="100%" alt="">
            <img src="{{ asset('frontend/img/slide-img3.png') }}" width="100%" alt="">
        </div>
        <div class="btns">
            <div class="btn-left btn"><i class='bx bx-chevron-left'></i></div>
            <div class="btn-right btn"><i class='bx bx-chevron-right'></i></div>
        </div>
        <div class="index-images">
            <div class="index-item index-item-0 active"></div>
            <div class="index-item index-item-1"></div>
            <div class="index-item index-item-2"></div>
        </div>
    </div>
    <section  class="awe-section-2">
        <div class="sectison_about">
            <div class="container">
                <div class="row">
                    <div class="col-sx-12 col-md-4 col-lg-4"> 
                        <img src="https://bizweb.dktcdn.net/100/422/613/themes/814338/assets/about.png?1717725773014" alt="">
                    </div>
                    <div class="col-sx-12 col-md-8 col-lg-8"> 
                    <div class="content">
                        <div class="header-content">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            <h1 class="section_title_2">XIMO - CHĂM SÓC ĐÔI GIÀY CỦA BẠN</h1>
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </div>
                        <div class="descri">
                            XIMO là thương hiệu cung cấp các sản phẩm phụ kiện chăm sóc, vệ sinh và bảo quản giày. Với 7 năm kinh nghiệm, XIMO đã mang đến những sản phẩm được người tiêu dùng tin tưởng và đón nhận, hiện đang là thương hiệu phụ kiện chăm sóc giày hàng đầu Việt Nam và tương lai sẽ là Đông Nam Á."
                        </div>
                        <div class="more">
                            <a href="#">Xem thêm</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container home-container">
        <div class="row-2">
            <div class="col-md-4 product text-center">
                <img src="https://bizweb.dktcdn.net/100/422/613/themes/814338/assets/img_banner_1.jpg?1717725773014" alt="Product 1">
            </div>
            <div class="col-md-4 product text-center">
                <img src="https://bizweb.dktcdn.net/100/422/613/themes/814338/assets/img_banner_2.jpg?1717725773014" alt="Product 2">
            </div>
            <div class="col-md-4 product text-center">
                <img src="https://bizweb.dktcdn.net/100/422/613/themes/814338/assets/img_banner_3.jpg?1717725773014" alt="Product 3">
            </div>
        </div>
    </div>
    <div class="content-2">
        <div class="header-content">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            <h2 class="section_title_2">
				Ximo hợp tác với những đối tác lớn tại Việt Nam
			</h2>
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
        <div class="descri">
            XIMO là thương hiệu cung cấp các sản phẩm phụ kiện chăm sóc, vệ sinh và bảo quản giày. Với 7 năm kinh nghiệm, XIMO đã mang đến những sản phẩm được người tiêu dùng tin tưởng và đón nhận, hiện đang là thương hiệu phụ kiện chăm sóc giày hàng đầu Việt Nam và tương lai sẽ là Đông Nam Á."
        </div>
        <div class="more">
            <a href="#">Xem thêm</a>
        </div>
        <div class="logo col-xs-12 col-md-12 col-lg-12">
            <div class="imglogo">
                <div class="col-xs-3 col-md-3 col-lg-3 margin-bottom-15">
                    <img src="//bizweb.dktcdn.net/100/422/613/themes/814338/assets/doitac-img1.jpg?1717725773014" alt="Đối tác 1">
                </div>
                <div class="col-xs-3 col-md-3 col-lg-3 margin-bottom-15">
                    <img src="//bizweb.dktcdn.net/100/422/613/themes/814338/assets/doitac-img2.jpg?1717725773014" alt="Đối tác smartmen">
                </div>
                <div class="col-xs-3 col-md-3 col-lg-3 margin-bottom-15">
                    <img src="//bizweb.dktcdn.net/100/422/613/themes/814338/assets/doitac-img3.jpg?1717725773014" alt="Đối tác Winmart">
                </div>
                <div class="col-xs-3 col-md-3 col-lg-3 margin-bottom-15">
                    <img src="//bizweb.dktcdn.net/100/422/613/themes/814338/assets/doitac-img4.jpg?1717725773014" alt="Đối tác Aeon Mall">
                </div>
            </div>
        </div>
    </div>
    <section class="section-3">
        <img src="{{ asset('frontend/img/trangchu-1.png') }}" alt="">
    </section>
    
    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
