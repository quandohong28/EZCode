<!doctype html>
<html lang="en">

<head>
    <title>Admin - Trang quản trị</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="./src/views/static/logo-small.svg" type="image/x-icon">
    <!-- CSS libraries -->
    <link href="./src/views/assets/css/tabler.css" rel="stylesheet" />
    <link href="./src/views/assets/css/tabler-flags.css" rel="stylesheet" />
    <link href="./src/views/assets/css/tabler-payments.css" rel="stylesheet" />
    <link href="./src/views/assets/css/tabler-vendors.css" rel="stylesheet" />
    <link href="./src/views/assets/css/demo.css" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <script src="./src/views/assets/js/demo-theme.js"></script>
    <header>
        <?php include "partials/admin/header.php" ?>
    </header>
    <main class="min-vh-100 d-flex justify-content-center align-items-center">
        <h1>ADMIN PAGE</h1>
    </main>
    <script src="./src/views/assets/libs/apexcharts/dist/apexcharts.js" defer></script>
    <script src="./src/views/assets/libs/jsvectormap/dist/js/jsvectormap.js" defer></script>
    <script src="./src/views/assets/libs/jsvectormap/dist/maps/world.js" defer></script>
    <script src="./src/views/assets/libs/jsvectormap/dist/maps/world-merc.js" defer></script>
    <!-- Tabler Core -->
    <script src="./src/views/assets/js/tabler.js" defer></script>
    <script src="./src/views/assets/js/demo.js" defer></script>
    <footer>
        <?php include "partials/admin/footer.php" ?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>