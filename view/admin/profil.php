<?php

include_once "template/header.php";

?>
<div class="container-fluid">
    <div class="row">

        <?php include_once "template/sidebar.php"; ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <form class="row g-3 w-50 mx-auto mt-5 p-4 bg-light shadow-sm rounded">
                <h5 class="text-center text-success mb-4">Profil Bilgilerim</h5>
                <div class="col-md-6">
                    <label for="user_name" class="form-label text-success">
                        <i class="bi bi-people-fill"></i> Kullanıcı Adı
                    </label>
                    <input type="text" class="form-control border-success shadow-sm" id="user_name" required
                        value="<?php echo $ByIdusers['user_name'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label text-success">
                        <i class="bi bi-envelope-fill"></i> Mail Adresi
                    </label>
                    <input type="email" class="form-control border-success shadow-sm" id="email" required
                        value="<?php echo $ByIdusers['email'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label text-success">
                        <i class="bi bi-key-fill"></i> Şifre
                    </label>
                    <input type="password" class="form-control border-success shadow-sm" id="password" required
                        value="<?php echo $ByIdusers["password"] ?>">
                </div>
                <div class="col-md-6">
                    <label for="role_id" class="form-label text-success">
                        <i class="bi bi-shield-lock-fill"></i> Rolü
                    </label>
                    <select class="form-select border-success shadow-sm" id="role_id" required>
                        <?php
                        if ($ByIdusers["role_id"] == 1) {
                            echo "<option value='1'>Admin</option>";
                        } else if ($ByIdusers["role_id"] == 2) {
                            echo "<option value='2'>Editör</option>";
                        } else if ($ByIdusers["role_id"] == 3) {
                            echo "<option value='3'>Kullanıcı</option>";
                        }
                        ?>
                        <option value="1">Admin</option>
                        <option value="2">Editör</option>
                        <option value="3">Kullanıcı</option>
                    </select>
                </div>
                <div class="col-12 text-end">
                    <button class="btn btn-success btn-sm shadow" type="submit">
                        <i class="bi bi-check-circle-fill"></i> Kaydet
                    </button>
                </div>
            </form>







        </main>



<?php include_once "template/footer.php"; ?>