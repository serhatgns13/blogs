<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo  $title; ?></title>

    <link rel="stylesheet" href="/view/admin/assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="/view/admin/assets/css/style.css">
    <script src="/view/admin/assets/node_modules/feather-icons/dist/feather.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <!-- Data table Telefon Görünüm Cdn -->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="/view/admin/assets/css/blogs-anasayfa.css">
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
        <div class="dropdown " style="margin-right:25px;">
      <a href="#" class=" col-10 d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Mehmet Reşit Akın</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow "  >
        <li><a class="dropdown-item" href="#">Yeni BLog</a></li>
        <li><a class="dropdown-item" href="#">Ayarlar</a></li>
        <li><a class="dropdown-item" href="/admin/profil">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="/admin/logout">Oturumu Kapat</a></li>
      </ul>
   

    <!-- </div>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="/view/admin/logout.php">Oturum Kapat</a>
            </div>
        </div>  -->
        
    </header>
