<?php

include_once "template/header.php";

?>
<div class="container-fluid">
    <div class="row">

        <?php include_once "template/sidebar.php"; ?>
        <?php include_once "template/notice.php"; ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <div class="row my-2">
                <div class="card">
                    <h2 class="text-center"> Kategoriler </h2>
                </div>

            </div>

            <div class="col-12 col-md-2 my-3">

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#categoryCreate">
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
                            <th>Kategori Durum</th>
                            <th>Kategori Ekleme Tarih</th>
                            <th class="text-center">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($categoryvariable) && is_array($categoryvariable)): ?>
                            <?php foreach ($categoryvariable as $key => $value): ?>
                                <tr>
                                    <td><?php print ($key + 1); ?></td>
                                    <td><?php print $value['name']; ?></td>
                                    <td class="text-center ">
                                        <?php if ($value['category_status'] == 1) { ?>
                                            <i class="text-success bi bi-check-circle-fill"></i>
                                        <?php } elseif ($value['category_status'] == 0) { ?>
                                            <i class="text-danger bi bi-x-octagon-fill"></i>
                                        <?php } ?>
                                    </td>
                                    <td><?php print $value['created_date']; ?></td>
                                    <td>
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <div class="button"><button type="button" class="btn bg-primary text-white"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#categoryModalUpdate<?php echo $value['category_id']; ?>">Düzenle</button>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <a href="/admin/kategori/deleteKategori/<?php echo $value['category_id']; ?>"
                                                    class="btn bg-danger text-white"><i class="bi bi-trash"></i></a>
                                            </div>

                                        </div>
                                    </td>

                                </tr>
                                <div class="container mt-5">
                                    <!-- Güncelleme Modal -->

                                    <div class="modal fade" id="categoryModalUpdate<?php echo $value['category_id']; ?>"
                                        tabindex="-1" aria-labelledby="categoryModal" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="categoryModal">Kategori Düzenle</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Kapat"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/admin/updateKategori/<?php echo $value['category_id']; ?>"
                                                        method="POST">
                                                        <!-- Kategori Adı -->
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label">Kategori Adı : </label>
                                                            <input type="text" class="form-control" id="name" name="name"
                                                                value="<?php print $value['name']; ?>">
                                                        </div>

                                                        <!-- Kategori Durumu -->
                                                        <div class="mb-3">
                                                            <label for="category_status" class="form-label">Kategori Durumu :
                                                            </label>

                                                            <select class="form-select" id="category_status"
                                                                name="category_status">
                                                                <option value="1" <?php if ($value['category_status'] == 1) {
                                                                    echo 'selected';
                                                                } ?>>Aktif</option>
                                                                <option value="0" <?php if ($value['category_status'] == 0) {
                                                                    echo 'selected';
                                                                } ?>>Pasif</option>

                                                        </div>

                                                        <input type="hidden" name="category_id"
                                                            value="<?php echo $value['category_id']; ?>">

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Kapat</button>
                                                            <button type="submit" class="btn btn-primary">Kategori
                                                                Güncelle</button>
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
                        <?php endif; ?>


                    </tbody>
                </table>
            </div>


        </main>

        <div class="container mt-5">

            <!--Kategori Ekleme Modal  -->
            <div class="modal fade" id="categoryCreate" tabindex="-1" aria-labelledby="categoryModal"
                aria-hidden="true">
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
                                    <label for="category_status" class="form-label">Kategori adı</label>
                                    <select class="form-select" id="parent_id" name="parent_id">
                                        <option value="0">Ana Kategori</option>
                                        <?php

                                        $mainCategories = [];
                                        $subCategories = [];

                                        // Kategorileri ana ve alt kategoriler olarak ayır
                                        foreach ($categoryvariable as $value) {
                                            if ($value['parent_id'] == 0) {
                                                $mainCategories[] = $value;
                                            } else {
                                                $subCategories[] = $value;
                                            }
                                        }

                                        // Ana kategorileri ve alt kategorileri yazdır
                                        foreach ($mainCategories as $mainCategory) {
                                            ?>
                                            <option value="<?php echo $mainCategory['category_id']; ?>">
                                                <?php echo $mainCategory['name']; ?>
                                            </option>
                                            <?php
                                            foreach ($subCategories as $subCategory) {
                                                if ($subCategory['parent_id'] == $mainCategory['category_id']) {
                                                    ?>
                                                    <option value="<?php echo $subCategory['category_id']; ?>">
                                                        -- <?php echo $subCategory['name']; ?>
                                                    </option>
                                                    <?php
                                                }
                                            }
                                        }
                                        ?>

                                    </select>

                                </div>

                                <div class="mb-3">
                                    <label for="name" class="form-label">Kategori Adı</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Kategori adı girin">
                                </div>

                                <div class="mb-3">
                                    <label for="category_status" class="form-label">Durum</label>
                                    <select class="form-select" id="category_status" name="category_status">
                                        <option value="1">Aktif</option>
                                        <option value="0">Pasif</option>
                                    </select>
                                </div>


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Kapat</button>
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