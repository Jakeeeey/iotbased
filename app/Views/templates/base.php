<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $this->renderSection('title'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <?= $this->renderSection('script'); ?>
</head>

<body>

    <?php if (session()->has('user_id')) : ?>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <p class="text-white h2 mt-1 ms-5">IBOMS</p>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link me-5" href="<?= base_url() . "dashboard"; ?>">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" href="<?= base_url() . "notification"; ?>">Notification</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" href="<?= base_url() . "login/logout"; ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    <?php else : ?>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <p class="text-white h2 mt-1 ms-5">IBOMS</p>
                    </li>
                </ul>
            </div>
        </nav>

    <?php endif; ?>

    <?= $this->renderSection("body"); ?>

    <footer class="d-flex justify-content-around p-3 bg-dark text-white" style="bottom: 0; position: fixed; width: 100%">
        <div class="p-2">
            <h6>&copy; <?= date('Y', strtotime('now')) ?> IBOMS. All right reserved.</h6>
        </div>
        <div class="p-2"><a class="text-decoration-none text-white" href="">jayarbarrozo4@gmail.com</a></div>
        <div class="p-2">
            <a class="text-decoration-none text-white" href="https://web.facebook.com/jayarbarrozo4" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg></a>
        </div>
    </footer>

</body>

</html>