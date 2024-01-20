<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="./src/views/assets/css/user/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./src/views/assets/css/user/tiny-slider.css" rel="stylesheet">
    <link href="./src/views/assets/css/user/style.css" rel="stylesheet">
    <title>Courses</title>
</head>

<body>
    <header>
        <?php include "partials/user/header.php" ?>
    </header>

    <main>
        <div class="cover">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="intro-excerpt">
                            <h1 class="text-warning">IT Mastery</h1>
                            <h1>Học Nhanh, Hiệu Quả</h1>
                            <p class="mb-4">Chinh Phục Kiến Thức Mới: Khoá Học Thú Vị Cho Mọi Lứa Tuổi và Ngành Nghề</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="cover-img-wrap">
                            <img src="./src/views/assets/img/course.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <h3 class="section-title">Khoá học miễn phí</h3>
                    </div>
                    <div class="col-md-6 text-start text-md-end">
                        <a href="#" class="more">Xem tất cả</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 my-5 mb-md-0">
                        <a class="product-item" href="cart.html">
                            <img src="./src/views/assets/img/courses/cau-truc-du-lieu-va-giai-thuat.jpg" class="img-fluid product-thumbnail rounded">
                            <h3 class="product-title">Cấu trúc dữ liệu và giải thuật</h3>
                            <span class="text-secondary"><i class="fa-solid fa-users-line"></i> 800.000</span>
                            <span class="icon-cross">
                                <img src="./src/views/assets/img/cross.svg" class="img-fluid">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Khoa hoc pro -->
        <div class="product-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <h3 class="section-title">Khoá học Pro</h3>
                    </div>
                    <div class="col-md-6 text-start text-md-end">
                        <a href="#" class="more">Xem tất cả</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 my-5 mb-md-0">
                        <a class="product-item" href="cart.html">
                            <img src="./src/views/assets/img/courses/cau-truc-du-lieu-va-giai-thuat.jpg" class="img-fluid product-thumbnail rounded">
                            <h3 class="product-title">Cấu trúc dữ liệu và giải thuật</h3>
                            <div class="text-secondary">
                                <i class="fa-solid fa-users-line"></i>
                                <span>800.000</span>
                            </div>
                            <strong class="product-price">$50.00</strong>
                            <span class="icon-cross">
                                <img src="./src/views/assets/img/cross.svg" class="img-fluid">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bài viết nổi bật -->
        <div class="blog-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <h3 class="section-title">Bài viết nổi bật</h3>
                    </div>
                    <div class="col-md-6 text-start text-md-end">
                        <a href="#" class="more">Xem tất cả</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-4 col-md-3 mb-3 mb-md-0">
                        <div class="post-entry">
                            <a href="#" class="post-thumbnail">
                                <img src="./src/views/assets/img/post-1.jpg" alt="Image" class="img-fluid roudned">
                            </a>
                            <div class="post-content-entry">
                                <h3><a href="#">Hướng dẫn cài đặt XAMPP trên Macbook</a></h3>
                                <div class="meta">
                                    <span>Đăng bởi <a href="#">Đỗ Hồng Quân</a></span> <span>lúc <a href="#">Dec 19, 2021</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <footer class="footer-section">
        <?php include "partials/user/footer.php" ?>
    </footer>


    <script src="./src/views/assets/js/bootstrap.bundle.min.js"></script>
    <script src="./src/views/assets/js/tiny-slider.js"></script>
    <script src="./src/views/assets/js/custom.js"></script>
</body>

</html>