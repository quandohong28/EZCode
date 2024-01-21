<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="<?= asset('img/udemy-icon.svg') ?>" type="image/x-icon">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="<?= asset('css/user/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?= asset('css/user/tiny-slider.css') ?>" rel="stylesheet">
    <link href="<?= asset('css/user/style.css') ?>" rel="stylesheet">
    <title><?= $data['title'] ?></title>
</head>

<body>
    <header>
        <?php include "partials/user/header.php" ?>
    </header>

    <main class="min-vh-100">
        <?php include $content ?>
    </main>


    <footer class="footer-section">
        <?php include "partials/user/footer.php" ?>
    </footer>


    <script src="<?= asset('js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= asset('js/tiny-slider.js') ?>"></script>
    <script src="<?= asset('js/custom.js') ?>"></script>
</body>

</html>