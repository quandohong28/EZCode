<section>
    <div class="cover p-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1 class="text-light">Giảng viên</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5 container">
        <form action="/teacher/search" class="text-end d-flex justify-content-end mb-5" method="get">
            <div class="col-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-primary rounded me-3" type="submit">Tìm kiếm</button>
                    </div>
                    <input type="text" class="form-control rounded" placeholder="Laravel">
                </div>
            </div>
        </form>
        <div class="row row-cards">
            <?php for ($i = 1; $i < 15; $i++) : ?>
                <div class="col-sm-4 col-lg-3 mb-5">
                    <div class="card card-sm rounded">
                        <img src="<?= asset('img/person_') . $i . '.jpg' ?>" class="card-img-top">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <span class="avatar me-3 rounded" style="background-image: url(./static/avatars/000m.jpg)"></span>
                                <div>
                                    <h6 class="fw-bold mb-3">Paweł Kuna</h6>
                                    <div class="text-secondary">
                                        <span class="me-5"><span class="fw-bold">3 </span>Khoá học</span>
                                        <span>
                                            <i class="fa-solid fa-heart fa-fw" style="color: #ff0400;"></i>
                                            <span class="fw-bold">300+ </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>
</section>