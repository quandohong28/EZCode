<div class="container relative">

    <div class="row">
        <div class="col-lg-8">
            <div class="subscription-form">
                <h3 class="d-flex align-items-center">
                    <span class="me-1">
                        <img src="<?= asset('img/icons/envelope-outline.svg') ?>" alt="Image" class="img-fluid">
                    </span>
                    <span>Đăng ký nhận thông tin mới nhất từ chúng tôi</span>
                </h3>

                <form action="#" class="row g-3">
                    <div class="col-auto">
                        <input type="text" class="form-control" placeholder="Họ và tên">
                    </div>
                    <div class="col-auto">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary">
                            <span class="fa fa-paper-plane"></span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="row g-5 mb-5">
        <div class="col-lg-4">
            <h1 class="navbar-brand">
                <a href="/">
                    <img src="<?= asset('img/icons/logo.svg') ?>" height="32">
                </a>
            </h1>
            <ul class="list-unstyled custom-social">
                <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
            </ul>
        </div>

        <div class="col-lg-8">
            <ul class="list-unstyled d-flex gap-5">
                <li><a href="#">Khám phá</a></li>
                <li><a href="#">Khoá học của tôi</a></li>
                <li><a href="#">Giảng viên</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
            <ul class="list-unstyled d-flex gap-5">
                <li><a href="#">Laravel</a></li>
                <li><a href="#">React</a></li>
                <li><a href="#">NodeJs</a></li>
                <li><a href="#">Backend</a></li>
                <li><a href="#">Frontend</a></li>
            </ul>
        </div>
    </div>

    <div class="border-top copyright">
        <div class="row pt-4">
            <div class="col-lg-6">
                <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script>. All Rights Reserved. &mdash; Designed with love by QuanDoHong
                </p>
            </div>

            <div class="col-lg-6 text-center text-lg-end">
                <ul class="list-unstyled d-inline-flex ms-auto">
                    <li class="me-4"><a href="#">Điều khoản &amp; Điều kiện</a></li>
                    <li><a href="#">Chính sách bảo mật</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>