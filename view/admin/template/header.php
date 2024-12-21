<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo  $title; ?></title>

    <link rel="stylesheet" href="/view/admin/assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="/view/admin/assets/css/style.css">
    <script src="/view/admin/assets/node_modules/feather-icons/dist/feather.js"></script>

</head>

<body>



    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img src="/view/admin/assets/images/login.png" width="40"
                alt=""> Full Stack</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Kelime Ara..." aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="/view/admin/logout.php">Oturum Kapat</a>
            </div>
        </div>
    </header>