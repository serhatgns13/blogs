<?php

include_once "template/header.php";

?>
<div class="container-fluid">
    <div class="row">

        <?php include_once "template/sidebar.php"; ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <div class="row my-2">
                <div class="card">
                    <h2 class="text-center"> Kategoriler </h2>
                </div>

            </div>

            <div class="col-12 col-md-2 my-3">

                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                    data-bs-target="#categoryCreate">
                    Yeni Kategori Ekle
                </button>
            </div>


            <div class="container mt-5">
                <h2 class="mb-4">Kategori Yönetimi</h2>
                <table id="studentTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Kategori Ad</th>
                            <th>Slug</th>
                            <th>Kategori Durum</th>
                            <th>Kategori Ekleme Tarih</th>
                            <th class="text-center">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($categoryvariable) && is_array($categoryvariable)): ?>
                            <?php foreach ($categoryvariable as $key => $value): ?>
                                <tr>
                                    <td><?php print($key + 1); ?></td>
                                    <td><?php print $value['name']; ?></td>
                                    <td><?php print $value['slug']; ?></td>
                                    <td class="text-center ">
                                        <?php if ($value['category_status'] == 1) { ?>
                                            <i class="text-success bi bi-check-circle-fill"></i>
                                        <?php    } elseif ($value['category_status'] == 0) { ?>
                                            <i class="text-danger bi bi-x-octagon-fill"></i>
                                        <?php } ?>
                                    </td>
                                    <td><?php print $value['created_date']; ?></td>
                                    <td>
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <div class="button"><button type="button" class="btn bg-primary text-white"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#categoryModalUpdate<?php echo $value['id']; ?>">Düzenle</button></div>
                                            </div>
                                            <div class="col-6">
                                                <a href="/admin/kategori/deleteKategori/<?php echo $value['id']; ?>"
                                                    class="btn bg-danger text-white"><i class="bi bi-trash"></i></a>
                                            </div>

                                        </div>
                                    </td>

                                </tr>
                                <div class="container mt-5">
                                    <!-- Güncelleme Modal -->

                                    <div class="modal fade" id="categoryModalUpdate<?php echo $value['id']; ?>" tabindex="-1" aria-labelledby="categoryModal"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="categoryModal">Kategori Düzenle</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/admin/updateKategori" method="POST">
                                                        <!-- Kategori Adı -->
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label">Kategori Adı : </label>
                                                            <input type="text" class="form-control" id="name" name="name"
                                                                value="<?php print $value['name']; ?>">
                                                        </div>
                                                        <!-- Slug Adı -->


                                                        <!-- Kategori Durumu -->
                                                        <div class="mb-3">
                                                            <label for="category_status" class="form-label">Kategori Durumu :
                                                            </label>
                                                            <select class="form-select" id="category_status" name="category_status">
                                                                <?php if ($value['category_status'] == 1) { ?>
                                                                    <option value="1">Aktif</option>
                                                                    <option value="0">Pasif</option>
                                                                   
                                                                <?php    } elseif ($value['category_status'] == 0) { ?>
                                                                    <option value="0">Pasif</option>
                                                                    <option value="1">Aktif</option>
                                                                 
                                                                   
                                                                <?php } ?>


                                                            </select>
                                                        </div>
                                                        <input type="hidden" value="<?php echo $value['id']; ?>" name="id">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                                            <button type="submit" class="btn btn-primary">Kategori Güncelle</button>
                                                        </div>

                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <script>
                                showErrorMessage("<?php echo $_SESSION['error_message']; ?>");
                            </script>
                        <?php endif;  ?>


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

            <!--Kategori Ekleme Modal  -->
            <div class="modal fade" id="categoryCreate" tabindex="-1" aria-labelledby="categoryModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="categoryModal">Kategori Ekle</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/admin/createKategori" method="POST">
                                <!-- Kategori Adı -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Kategori Adı</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Kategori adı girin">
                                </div>


                                <!-- Kategori Durumu -->
                                <div class="mb-3">
                                    <label for="category_status" class="form-label">Kategori Durumu</label>
                                    <select class="form-select" id="category_status" name="category_status">
                                        <option value="1">Aktif</option>
                                        <option value="0">Pasif</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                    <button type="submit" class="btn btn-primary">Kaydet</button>
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