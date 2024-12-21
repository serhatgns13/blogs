<?php

include_once "template/header.php";

?>
<div class="container-fluid">
  <div class="row">

    <?php include_once "template/sidebar.php"; ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    
    <form class="row g-3 w-50 mx-auto mt-5 p-4 bg-white shadow-sm rounded">
                <div class="col-12">
                    <label for="user_name" class="form-label">
                        <i class="bi bi-person-circle icon-gray"></i> Kullanıcı Adı
                    </label>
                    <input type="text" class="form-control form-control-sm" id="user_name" placeholder="Kullanıcı Adı" required>
                </div>
        
                <div class="col-12">
                    <label for="email" class="form-label">
                        <i class="bi bi-envelope-fill icon-gray"></i> Mail Adresi
                    </label>
                    <input type="email" class="form-control form-control-sm" id="email" placeholder="Maili Giriniz" required>
                </div>
        
                <div class="col-12">
                    <label for="password" class="form-label">
                        <i class="bi bi-key-fill icon-gray"></i> Şifre
                    </label>
                    <input type="password" class="form-control form-control-sm" id="password" placeholder="Şifreyi Giriniz" required>
                </div>
        
                <div class="col-12">
                    <label for="role_id" class="form-label">
                        <i class="bi bi-shield-lock-fill icon-gray"></i> Rolü
                    </label>
                    <select class="form-select form-select-sm" id="role_id" required>
                        <option selected disabled value="">Rol Seçiniz...</option>
                        <option value="1">Admin</option>
                        <option value="2">Editör</option>
                        <option value="3">Kullanıcı</option>
                    </select>
                </div>
        
                <div class="col-12">
                    <label for="user_status" class="form-label">
                        <i class="bi bi-person-check-fill icon-gray"></i> Kullanıcı Durumu
                    </label>
                    <select class="form-select form-select-sm" id="user_status" required>
                        <option selected disabled value="">Durumu Seçiniz...</option>
                        <option value="1">Aktif</option>
                        <option value="0">Pasif</option>
                    </select>
                </div>
        
                <div class="col-12 text-end">
                    <button class="btn btn-success btn-sm" type="submit">
                        <i class="bi bi-check-circle-fill"></i> Kaydet
                    </button>
                </div>
            </form>

    </main>



 <?php include_once "template/footer.php"; ?>
