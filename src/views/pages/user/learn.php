<section class="bg-white">
    <div class="d-flex justify-content-between">
        <div class="col-9">
            <div class="pt-3 ps-5">
                <iframe class="rounded" width="100%" height="550px" src="https://www.youtube.com/embed/x0KrS4sDZCI?si=qldZut_HgzwokJes?rel=0&showinfo=0" title="YouTube video player" frameborder="3" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="px-5">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link px-5 text-secondary fw-bold" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-5 fw-bold text-primary active" aria-current="page" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-5 text-secondary" href="#">Ghi chú</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-5 text-secondary" href="#">Reviews</a>
                    </li>
                </ul>
            </div>
            <div class=min-vh-100 ms-3"></div>
        </div>

        <div class="col-3 p-3">
            <h5 class="text-dark text-center">Nội dung khoá học</h5>
            <hr>
            <ol class="list-group">
                <?php for ($i = 0; $i < 20; $i++) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                        </div>
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">1. Subheading</div>
                            <i class="fa-regular fa-clock"></i>
                            <small>20 phút</small>
                        </div>
                    </li>
                <?php endfor ?>
            </ol>
        </div>
    </div>
    <hr class="p-0 m-0">
</section>

<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="seachModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    Tìm kiếm
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5">
                <form action="" method="get">
                    <div class="input-group input-group-sm mb-3">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">Tìm kiếm</button>
                        <input type="text" class="form-control form-control-sm" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>