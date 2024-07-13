<!-- resources/views/partials/header.blade.php -->
<header class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('frontend/img/logobanhang.png') }}" alt="Logo" style="height: 50px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Trang Chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/introduction') }}">Giới thiệu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/products') }}">Sản Phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('') }}">Dịch vụ giày</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/news') }}">Tin Tức</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('') }}">Liên hệ</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/notifications') }}">
                    <span class="icon-bell"><ion-icon name="notifications-outline"></ion-icon></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/cart') }}" id="cart-link">
                    <span class="icon-cart"><ion-icon name="cart-outline"></ion-icon></span>
                    <span class="badge badge-pill badge-danger" id="cart-count">0</span>
                </a>
                <div class="cart-dropdown">
                    <!-- Thực hiện hiển thị danh sách sản phẩm trong giỏ hàng bằng JavaScript và CSS -->
                </div>
            </li>
            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profile') }}">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/logout') }}">Đăng Xuất</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Đăng Nhập</a>
                </li>
            @endif
        </ul>
    </div>
</header>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
