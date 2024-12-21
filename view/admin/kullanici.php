<?php

include_once "template/header.php";

?>
<div class="container-fluid">
    <div class="row">

        <?php include_once "template/sidebar.php"; ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">



            <div class="row my-2">
                <div class="card">
                    <h2 class="text-center"> Kullanıcı Yönetimi </h2>
                </div>

            </div>

            <div class="col-12 col-md-2 my-3">

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Kullanıcı Ekle
                </button>
            </div>


            <div class="container mt-5">
                <h2 class="mb-4">Kullanıcı Bilgileri</h2>
                <table id="studentTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Kullanıcı Adı</th>
                            <th>E-posta</th>
                            <th>Rol</th>
                            <th>Durum</th>
                            <th class="text-center">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Serhat Güneş</td>
                            <td>serhat@gmail.com</td>
                            <td>Admin</td>
                            <td class="text-center text-danger"><span data-feather="check-circle"></span></td>
                            <td>
                                <div class="row text-center">
                                    <div class="col-6">
                                        <div class="button"><button type="button" class="btn bg-primary text-white"
                                                data-bs-toggle="modal"
                                                data-bs-target="#usersUpdateModal">Düzenle</button></div>
                                    </div>
                                    <div class="col-6">
                                        <div class="button"><button type="button" class="btn bg-danger text-white"><i class="bi bi-trash"></i> </button></div>
                                    </div>

                                </div>
                            </td>

                        </tr>
                       

                    </tbody>
                </table>
            </div>


        </main>

        <?php if (isset($_SESSION['success_message']) || isset($_SESSION['error_message']) || isset($_SESSION['warning_message'])): ?>

            <script>
                <?php if (isset($_SESSION['success_message'])): ?>
                    showSuccessMessage("<?php echo $_SESSION['success_message']; ?>");
                <?php endif; ?>

                <?php if (isset($_SESSION['error_message'])): ?>
                    showErrorMessage("<?php echo $_SESSION['error_message']; ?>");
                <?php endif; ?>

                <?php if (isset($_SESSION['warning_message'])): ?>
                    showWarningMessage("<?php echo $_SESSION['warning_message']; ?>");
                <?php endif; ?>
            </script>

            <?php unset($_SESSION['success_message'], $_SESSION['error_message'], $_SESSION['warning_message']); ?>
        <?php endif; ?>

        <div class="container mt-5">

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="userCreateModal"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="userCreateModal">Kullanıcı Ekle</h5>


                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/admin/register" method="POST">
                                <!-- Kullanıcı Adı -->
                                <div class="mb-3">
                                    <label for="user_name" class="form-label">Kullanıcı Adı : </label>
                                    <input type="text" class="form-control" id="user_name" name="user_name"
                                        placeholder="Kullanıcı adınızı girin">
                                </div>

                                <!-- E-posta -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-posta : </label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="E-posta adresinizi girin">
                                </div>

                                <!-- Şifre -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Şifre </label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Şifrenizi girin">
                                </div>

                                <!-- Rol -->
                                <div class="mb-3">
                                    <label for="role_id" class="form-label">Rol : </label>
                                    <select class="form-select" id="role_id" name="role_id">
                                        <option value="1">Admin</option>
                                        <option value="2">Kullanıcı</option>
                                        <option value="3">Misafir</option>
                                    </select>
                                </div>

                                <!-- Kullanıcı Durumu -->
                                <div class="mb-3">
                                    <label for="user_status" class="form-label">Kullanıcı Durumu : </label>
                                    <select class="form-select" id="user_status" name="user_status">
                                        <option value="1">Aktif</option>
                                        <option value="0">Pasif</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Kapat</button>
                                    <input type="submit" class="btn btn-primary" value="Kullanıcı ekle">

                                </div>

                            </form>
                            <?php if (isset($data['error'])): ?>
                                <p style="color: red;"><?php echo $data['error']; ?></p>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="usersUpdateModal" tabindex="-1" aria-labelledby="userCreateModal"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="userCreateModal">Kullanıcı Düzenle</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/admin/register" method="POST">
                                <!-- Kullanıcı Adı -->
                                <div class="mb-3">
                                    <label for="user_name" class="form-label">Kullanıcı Adı : </label>
                                    <input type="text" class="form-control" id="user_name" name="user_name"
                                        placeholder="Kullanıcı adınızı girin">
                                </div>

                                <!-- E-posta -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-posta : </label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="E-posta adresinizi girin">
                                </div>

                                <!-- Şifre -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Şifre </label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Şifrenizi girin">
                                </div>

                                <!-- Rol -->
                                <div class="mb-3">
                                    <label for="role_id" class="form-label">Rol : </label>
                                    <select class="form-select" id="role_id" name="role_id">
                                        <option value="1">Admin</option>
                                        <option value="2">Kullanıcı</option>
                                        <option value="3">Misafir</option>
                                    </select>
                                </div>

                                <!-- Kullanıcı Durumu -->
                                <div class="mb-3">
                                    <label for="user_status" class="form-label">Kullanıcı Durumu : </label>
                                    <select class="form-select" id="user_status" name="user_status">
                                        <option value="1">Aktif</option>
                                        <option value="0">Pasif</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Kapat</button>
                                    <button type="button" class="btn btn-primary">Kullanıcı Güncelle</button>
                                </div>

                            </form>
                            <?php if (isset($data['error'])): ?>
                                <p style="color: red;"><?php echo $data['error']; ?></p>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php

        include_once "template/footer.php";

        ?>