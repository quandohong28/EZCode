<section class="py-5">
    <div class="mb-5 container">
        <div class="d-flex g-2 align-items-center justify-content-between">
            <div>
                <h3 class="fw-bold text-primary">Giảng viên</h3>
            </div>
            <div>
                <div class="d-flex">
                    <input type="text" value="" class="form-control form-control-sm" placeholder="Tìm kiếm...">
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="container">
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