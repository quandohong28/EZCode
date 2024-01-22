<div class="blog-section container pt-5">
    <div class="text-end mb-3">
        <a href="/post/create" class="btn btn-sm btn-secondary">
            <i class="fa fa-plus fa-fw"></i>
            Tạo bài viết
        </a>
    </div>
    <div class="">
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