<?php
$courses = $data['courses'][0];
?>

<section>
    <div class="container d-flex p-5 justify-content-between">
        <div class="col-9">
            <div class="mb-5">
                <h4 class="text-primary fw-bold"><?= $courses['course_name'] ?></h4>
                <div>
                    <?php for ($i = 0; $i < $courses['rate']; $i++) : ?>
                        <i class="fa fa-star text-warning"></i>
                    <?php endfor ?>
                </div>
                <span><?= $courses['description'] ?></span>
            </div>

            <div>
                <h5 class="text-primary mb-3">Bạn sẽ học được những gì?</h5>
                <div class="row">
                    <?php for ($i = 0; $i < 4; $i++) : ?>
                        <div class="col-6 mb-5">
                            <i class="fa-solid fa-check" style="color: #ff0009;"></i>
                            <span class="ms-2">Lorem ipsum dolor sit amet</span>
                        </div>
                    <?php endfor ?>
                </div>
            </div>

            <div class="mb-5">
                <h4 class="text-primary fw-bold">Nội dung Khoá học</h4>
                <span class="me-3"><i class="fa-regular fa-clock me-2"></i> <span class="fw-bold">30 </span>phút</span>
                <span>Số lượng bài học: <span class="fw-bold">12</span></span>
                <div class="list-group list-group-flush list-group-hoverable pe-5 mt-3 me-5">
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <div class="list-group-item rounded bg-light mb-2">
                            <div class="row align-items-center">
                                <div class="col text-truncate">
                                    <h6><?= $i ?> .Title</h6>
                                    <div class="d-block text-secondary text-truncate mt-n1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit dolores nemo accusamus a ipsa magni iusto ut quod optio molestias consequatur dolore omnis facere, dolor sequi dolorum dignissimos consequuntur perspiciatis?</div>
                                </div>
                                <div class="col-auto">
                                    <span class="me-3"><i class="fa-regular fa-clock me-2"></i> <span class="fw-bold">30 </span>phút</span>
                                </div>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>

            <div>
                <h4 class="text-primary fw-bold">Đánh giá của học viên</h4>
                <div class="row my-5">
                    <!-- render ra bình luận -->
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="mb-3 d-flex align-items-center gap-3">
                                <img src="<?= asset('img/person_1.jpg') ?>" class="rounded-circle" height="50px">
                                <span class="fw-bold">Đỗ Hồng Quân</span>
                            </div>
                            <h3>Rất hữu ích!!!</h3>
                            <p>Giảng viên dạy dễ hiểu, khoá học chi tiết và thực tế. Khoá học được sắp xếp theo đúng quy trình, có thể áp dụng kiến thức đi phỏng vấn ngay và luôn!</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="mb-3 d-flex align-items-center gap-3">
                                <img src="<?= asset('img/person_1.jpg') ?>" class="rounded-circle" height="50px">
                                <span class="fw-bold">Đỗ Hồng Quân</span>
                            </div>
                            <h3>Rất hữu ích!!!</h3>
                            <p>Giảng viên dạy dễ hiểu, khoá học chi tiết và thực tế. Khoá học được sắp xếp theo đúng quy trình, có thể áp dụng kiến thức đi phỏng vấn ngay và luôn!</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="mb-3 d-flex align-items-center gap-3">
                                <img src="<?= asset('img/person_1.jpg') ?>" class="rounded-circle" height="50px">
                                <span class="fw-bold">Đỗ Hồng Quân</span>
                            </div>
                            <h3>Rất hữu ích!!!</h3>
                            <p>Giảng viên dạy dễ hiểu, khoá học chi tiết và thực tế. Khoá học được sắp xếp theo đúng quy trình, có thể áp dụng kiến thức đi phỏng vấn ngay và luôn!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3 d-flex flex-column align-items-center">
            <img src="<?= asset('img/') ?>courses/cau-truc-du-lieu-va-giai-thuat.jpg" alt="" class="rounded-3" width="360px">
            <?php if ($courses['type'] == 1) : ?>
                <p class="h2 my-4 text-danger">Pro</p>
                <div class="mb-4">
                    <span class="h6 product-price text-decoration-line-through me-2">$75.00</span>
                    <span class="h5 product-price text-danger">$50.00</span>
                </div>
            <?php else : ?>
                <p class="h2 my-4 text-danger">Free</p>
            <?php endif ?>
            <a href="/checkout/<?= $courses['id'] ?>" class="btn btn-sm btn-primary mb-3">ĐĂNG KÝ NGAY</a>
            <ul class="list-unstyled">
                <li>
                    <i class="fa-solid fa-users-line me-3"></i>
                    <span class="fw-bold"><?= $courses['register'] ?></span>
                </li>
                <li>
                    <i class="fa-solid fa-film me-3"></i>
                    <span>Tổng số <span class="fw-bold">13 </span>Bài học</span>
                </li>
                <li>
                    <i class="fa-solid fa-battery-full me-3"></i>
                    <span>Học mọi lúc mọi nơi</span>
                </li>
            </ul>

        </div>
    </div>
</section>