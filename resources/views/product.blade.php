<!-- resources/views/products.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/header.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.header')

    <div class="container mx-auto my-8">
        <div class="breadcrumb mb-4">
            <a href="/">Trang chủ</a> / <span>Dây giày</span>
        </div>
        <div class="grid grid-cols-4 gap-4">
            <!-- Sidebar -->
            <div class="col-span-1 bg-gray-100 p-4">
                <h3 class="font-bold mb-4">DANH MỤC</h3>
                <ul class="list-none">
                    <li><a href="#">Dụng cụ chăm sóc giày</a></li>
                    <li><a href="#">Xi đánh giày</a></li>
                    <li><a href="#">Chai vệ sinh giày</a></li>
                    <li><a href="#">Miếng lót giày</a></li>
                    <li><a href="#">Dụng cụ làm giãn giày</a></li>
                    <li><a href="#">Dây giày</a></li>
                    <li><a href="#">Đai chỉnh hình chân vòng kiềng</a></li>
                    <li><a href="#">Giày chỉnh hình cho bé</a></li>
                    <li><a href="#">Đai chống gù lưng trẻ em</a></li>
                </ul>

                <h3 class="font-bold mt-6 mb-4">BỘ LỌC SẢN PHẨM</h3>
                <form>
                    <div class="mb-2">
                        <input type="checkbox" id="price1">
                        <label for="price1">Giá dưới 100.000đ</label>
                    </div>
                    <div class="mb-2">
                        <input type="checkbox" id="price2">
                        <label for="price2">100.000đ - 200.000đ</label>
                    </div>
                    <div class="mb-2">
                        <input type="checkbox" id="price3">
                        <label for="price3">200.000đ - 500.000đ</label>
                    </div>
                    <div class="mb-2">
                        <input type="checkbox" id="price4">
                        <label for="price4">500.000đ - 1.000.000đ</label>
                    </div>
                    <div class="mb-2">
                        <input type="checkbox" id="price5">
                        <label for="price5">1.000.000đ - 2.000.000đ</label>
                    </div>
                    <div class="mb-2">
                        <input type="checkbox" id="price6">
                        <label for="price6">2.000.000đ - 5.000.000đ</label>
                    </div>
                    <div class="mb-2">
                        <input type="checkbox" id="price7">
                        <label for="price7">Giá trên 20000000đ</label>
                    </div>
                </form>
            </div>

            <!-- Main Content -->
            <div class="col-span-3">
                <h2 class="text-xl font-bold mb-4">Mua dây giày thể thao, giày tây, giày da chính hãng tại Hà Nội, TPHCM</h2>
                <div class="flex justify-between items-center mb-4 ">
                    <div class="mr-10">Xếp theo:
                        <input type="radio" name="sort" id="default" checked><label for="default">Mặc định</label>
                        <input type="radio" name="sort" id="az"><label for="az">Tên A-Z</label>
                        <input type="radio" name="sort" id="za"><label for="za">Tên Z-A</label>
                        <input type="radio" name="sort" id="low-high"><label for="low-high">Giá thấp đến cao</label>
                        <input type="radio" name="sort" id="high-low"><label for="high-low">Giá cao xuống thấp</label>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-4">
                    <div class="bg-white p-4 text-center">
                        <img src="https://via.placeholder.com/150" alt="Product 1" class="mx-auto mb-2">
                        <p>Dây Giày Phản Quang Yeezy Bản Tron Siêu Hot 12 Màu</p>
                        <p class="text-red-500 font-bold">30.000đ</p>
                    </div>
                    <div class="bg-white p-4 text-center">
                        <img src="https://via.placeholder.com/150" alt="Product 2" class="mx-auto mb-2">
                        <p>Dây giày thể thao Shoelaces</p>
                        <p class="text-red-500 font-bold">30.000đ</p>
                    </div>
                    <div class="bg-white p-4 text-center">
                        <img src="https://via.placeholder.com/150" alt="Product 3" class="mx-auto mb-2">
                        <p>Dây giày thể thao cơ bản kiểu trơn</p>
                        <p class="text-red-500 font-bold">30.000đ</p>
                    </div>
                    <div class="bg-white p-4 text-center">
                        <img src="https://via.placeholder.com/150" alt="Product 4" class="mx-auto mb-2">
                        <p>Dây giày tròn cho giày công sở, giày tây</p>
                        <p class="text-red-500 font-bold">30.000đ</p>
                    </div>
                    <div class="bg-white p-4 text-center">
                        <img src="https://via.placeholder.com/150" alt="Product 5" class="mx-auto mb-2">
                        <p>Dây giày 7 màu (Ngũ sắc)</p>
                        <p class="text-red-500 font-bold">30.000đ</p>
                    </div>
                    <div class="bg-white p-4 text-center">
                        <img src="https://via.placeholder.com/150" alt="Product 6" class="mx-auto mb-2">
                        <p>Dây giày phẳng 15 màu sắc khác nhau</p>
                        <p class="text-red-500 font-bold">30.000đ</p>
                    </div>
                </div>

                <div class="mt-8">
                    <h3 class="text-lg font-bold">Mua dây giày thể thao, dây giày tây, giày da chính hãng tại Hà Nội, TPHCM</h3>
                    <p class="mt-2">
                        Dây giày là một trong những phụ kiện không thể thiếu đối với bất kỳ đôi giày nào. Ngoài việc cố định đôi giày vững chắc trên chân, dây giày còn đóng vai trò quan trọng trong việc tạo nên phong cách và cá tính cho người sử dụng. Hãy cùng tìm hiểu thêm về dây giày trong bài viết dưới đây.
                    </p>
                    <h4 class="text-md font-bold mt-4">Các loại dây giày phổ biến</h4>
                    <p class="mt-2">
                        Trên thị trường hiện nay, có rất nhiều loại dây giày với các màu sắc và kiểu dáng khác nhau để người dùng lựa chọn. Dưới đây là một số loại dây giày phổ biến:
                    </p>
                    <ul class="list-disc pl-5 mt-2">
                        <li>Dây giày bằng cotton: Loại dây giày này được làm từ sợi bông tự nhiên, có độ bền cao và dễ dàng thay thế khi bị hư hỏng. Dây giày bằng cotton thường được sử dụng cho các mẫu giày cổ điển, trang nhã và xám.</li>
                        <li>Dây giày bằng da: Loại dây giày này được làm từ chất liệu da nhân tạo, có độ bền cao và tạo nên phong cách sang trọng và lịch lãm. Dây giày bằng da thường được sử dụng cho các mẫu giày công sở, giày tây.</li>
                    </ul>
                    <div class="text-center mt-4">
                        <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
</body>
</html>
