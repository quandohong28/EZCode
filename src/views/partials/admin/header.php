<header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
        <!-- Logo -->
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
                <img src="<?= asset('img/icons/logo.svg') ?>" width="110" height="32" class="navbar-brand-image">
            </a>
        </h1>

        <div class="navbar-nav flex-row order-md-last">
            <div class="d-none d-md-flex">
                <!-- Theme -->
                <button id="enableDarkmodeButton" class="nav-link px-0" title="Chế độ tối" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                    </svg>
                </button>
                <button id="enableLightmodeButton" class="nav-link px-0" title="Chế độ sáng" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                        <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                    </svg>
                </button>

                <!-- Thông báo -->
                <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                        </svg>
                        <span class="badge bg-red"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Cập nhật mới nhất</h3>
                            </div>
                            <div class="list-group list-group-flush list-group-hoverable">
                                <?php for ($i = 0; $i < 10; $i++) : ?>
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span>
                                            </div>
                                            <div class="col text-truncate">
                                                <a href="#" class="text-body d-block">Example 1</a>
                                                <div class="d-block text-secondary text-truncate mt-n1">
                                                    Change deprecated html tags to text decoration classes (#29604)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url(<?= asset('img/avatars/person_1.jpg')?>)"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div>Paweł Kuna</div>
                        <div class="mt-1 small text-secondary">UI Designer</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="/profile" class="dropdown-item">Thông tin cá nhân</a>
                    <a href="#" class="dropdown-item">Phản hồi</a>
                    <div class="dropdown-divider"></div>
                    <a href="/settings" class="dropdown-item">Cài đặt</a>
                    <a href="/sign-in" class="dropdown-item">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>
</header>
<header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="fa-solid fa-house" style="color: #74C0FC;"></i>
                            </span>
                            <span class="nav-link-title">
                                Bảng điều khiển
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/category">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="fa-solid fa-layer-group" style="color: #FFD43B;"></i>
                            </span>
                            <span class="nav-link-title">
                                Danh mục
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/course">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="fa-solid fa-lines-leaning" style="color: #B197FC;"></i>
                            </span>
                            <span class="nav-link-title">
                                Khoá học
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/user">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="fa-regular fa-user" style="color: #e9fc22;"></i>
                            </span>
                            <span class="nav-link-title">
                                Tài khoản
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/payment">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="fa-solid fa-money-bill" style="color: #f54c4d;"></i>
                            </span>
                            <span class="nav-link-title">
                                Hoá đơn
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/post">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="fa-regular fa-newspaper" style="color: #ec65ff;"></i>
                            </span>
                            <span class="nav-link-title">
                                Bài viết
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                    <form action="./" method="get" autocomplete="off" novalidate>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                    <path d="M21 21l-6 -6" />
                                </svg>
                            </span>
                            <input type="text" value="" class="form-control" placeholder="Tìm kiếm…" aria-label="Search in website">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    // Xử lý theme
    var themeStorageKey = "tablerTheme";
    var defaultTheme = "light";

    function toggleTheme() {
        var selectedTheme = localStorage.getItem(themeStorageKey) || defaultTheme;

        selectedTheme = selectedTheme === 'dark' ? 'light' : 'dark';

        localStorage.setItem(themeStorageKey, selectedTheme);

        if (selectedTheme === 'dark') {
            document.body.setAttribute("data-bs-theme", selectedTheme);
        } else {
            document.body.removeAttribute("data-bs-theme");
        }

        updateButtonState(selectedTheme);
    }

    function updateButtonState(theme) {
        var enableDarkmodeButton = document.getElementById("enableDarkmodeButton");
        var enableLightmodeButton = document.getElementById("enableLightmodeButton");

        if (theme === 'dark') {
            enableDarkmodeButton.style.display = "none";
            enableLightmodeButton.style.display = "block";
            document.body.setAttribute("data-bs-theme", 'dark');
        } else {
            enableDarkmodeButton.style.display = "block";
            enableLightmodeButton.style.display = "none";
        }
    }

    updateButtonState(localStorage.getItem(themeStorageKey) || defaultTheme);

    var enableDarkmodeButton = document.getElementById("enableDarkmodeButton");
    if (enableDarkmodeButton) {
        enableDarkmodeButton.onclick = function() {
            toggleTheme();
        };
    }

    var enableLightmodeButton = document.getElementById("enableLightmodeButton");
    if (enableLightmodeButton) {
        enableLightmodeButton.onclick = function() {
            toggleTheme();
        };
    }

    // Xử lý active ở navmenu
    document.addEventListener('DOMContentLoaded', () => {
        const navItems = document.querySelectorAll('.nav-item');

        const activeIndex = localStorage.getItem('activeIndex');

        if (activeIndex !== null) {
            navItems[activeIndex].classList.add('active');
        }

        navItems.forEach((item, index) => {
            const navLink = item.querySelector('.nav-link');
            navLink.addEventListener('click', () => {
                navItems.forEach((item) => {
                    item.classList.remove('active');
                });

                item.classList.add('active');

                localStorage.setItem('activeIndex', index.toString());
            });
        });
    });
</script>