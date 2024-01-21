<div class="blog-section pt-5">
    <div class="mb-3 px-5 d-flex justify-content-between">
    <div>
        <h3 class="fw-bold">Blog</h3>
    </div>
    <div>
        <a href="/post/create" class="btn btn-sm btn-secondary">
            <i class="fa fa-plus fa-fw"></i>
            Tạo bài viết
        </a>
    </div>

    </div>
    <div class="row">
        <div class="col-3 ps-5">
            <form action="./" method="get" autocomplete="off" novalidate>
                <div class="mb-3">
                    <h6 class="mb-2">Danh mục</h6>
                    <select name="" class="form-select form-select-sm">
                        <option>Laravel</option>
                    </select>
                </div>
                <div class="mb-3">
                    <h6 class="mb-2">Đánh giá</h6>
                    <div>
                        <label class="form-check">
                            <input type="radio" class="form-check-input" name="form-stars" value="5 stars" checked>
                            <span class="form-check-label">5 sao</span>
                        </label>
                        <label class="form-check">
                            <input type="radio" class="form-check-input" name="form-stars" value="4 stars">
                            <span class="form-check-label">4 sao</span>
                        </label>
                        <label class="form-check">
                            <input type="radio" class="form-check-input" name="form-stars" value="3 stars">
                            <span class="form-check-label">3 sao</span>
                        </label>
                        <label class="form-check">
                            <input type="radio" class="form-check-input" name="form-stars" value="2 and less stars">
                            <span class="form-check-label">
                                < 2 sao</span>
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h6 class="mb-2">Thẻ</h6>
                    <div class="mb-3">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" name="form-tags[]" value="business" checked>
                            <span class="form-check-label">business</span>
                        </label>
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" name="form-tags[]" value="evening">
                            <span class="form-check-label">evening</span>
                        </label>
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" name="form-tags[]" value="leisure">
                            <span class="form-check-label">leisure</span>
                        </label>
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" name="form-tags[]" value="party">
                            <span class="form-check-label">party</span>
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="subheader mb-2">Lọc theo ngày</div>
                    <div class="mb-3">
                        <div class="input-group input-group-sm">
                            <span class="input-group-text">From</span>
                            <input type="date" class="form-control form-control-sm" placeholder="from" value="3" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group input-group-sm">
                            <span class="input-group-text">To</span>
                            <input type="date" class="form-control form-control-sm" placeholder="to" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-sm btn-primary">Xác nhận</button>
                </div>
            </form>
        </div>
        <div class="col-9 px-5">
            <div class="row mb-5">
                <h3 class="fw-bold mb-5 text-primary">Bài đăng mới nhất</h3>
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <div class="col-12 col-sm-6 col-md-4 mb-5">
                        <div class="post-entry">
                            <a href="/post/<?= $i ?>" class="post-thumbnail"><img src="<?= asset('img/post-1.jpg') ?>" alt="Image" class="img-fluid"></a>
                            <div class="post-content-entry">
                                <h3><a href="#">First Time Home Owner Ideas</a></h3>
                                <div class="meta">
                                    <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor ?>
            </div>

            <div class="row mb-5">
                <h3 class="fw-bold mb-5 text-primary">Nhiều lượt xem nhất</h3>
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="col-12 col-sm-6 col-md-4 mb-5">
                        <div class="post-entry">
                            <a href="/post/<?= $i ?>" class="post-thumbnail"><img src="<?= asset('img/post-1.jpg') ?>" alt="Image" class="img-fluid"></a>
                            <div class="post-content-entry">
                                <h3><a href="#">First Time Home Owner Ideas</a></h3>
                                <div class="meta">
                                    <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </div>
</div>