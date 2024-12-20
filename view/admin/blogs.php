<?php

include_once "template/header.php";

?>
<div class="container-fluid">
    <div class="row">

        <?php include_once "template/sidebar.php"; ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <!--? Serhat hocamın yaptıgı cekme işlemi başlangıç  -->
            <!-- <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sıra</th>
                        <th scope="col">Başlık</th>
                        <th scope="col">Detay</th>
                        <th scope="col">Durum</th>
                        <th scope="col">Tarih</th>
                        <th scope="col">İşlem</th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($posts as $key => $value) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo ($key + 1) ?></th>
                            </th>
                            <td><?php echo $value['title']; ?></td>
                            <td><?php echo mb_substr($value['content'], 0, length: 50) . '...'; ?></td>


                            <td><?php

                                if ($value['post_status'] == 1) {
                                    echo '<span class="text-center text-success" data-feather="check-circle"></span>';
                                } else if ($value['post_status'] == 0) {
                                    echo '<span class="text-center text-danger" data-feather="x-circle"></span>';
                                }
                                ?></td>
                            <td><?php echo $value['created_date']; ?></td>
                            <td><button class="btn btn-primary">Düzenle</button> <button class="btn btn-danger">Sil</button>
                            </td>
                        </tr>

                    <?php
                    }

                    ?>


                </tbody>
            </table> -->


            <!--? Serhat hocamın yaptıgı cekme işlemi Bitiş  -->

            <div class="row my-2">
                <div class="card">
                    <h2 class="text-center">Blog</h2>
                </div>
            </div>
            <div class="col-2 my-3">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Yeni Blog Ekle
                </button>
            </div>
            <div class="container mt-5">
                <h2 class="mb-4">Blog Yazıları</h2>
                <table id="blogTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>ID</th>
                            <th>Başlık</th>
                            <th>İçerik</th>
                            <th>Görüntüleme Sayısı</th>
                            <th>Görsel</th>
                            <th>Tarih</th>
                            <th class="text-center">İşlem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Blog Başlığı 1</td>
                            <td>Reşit Bey</td>
                            <td>15</td>
                            <td>
                                <img src="image_url_1.jpg" alt="Görsel" style="width: 50px; height: 50px;">
                            </td>
                            <td>2024-12-19</td>
                            <td>
                                <div class="row text-center">
                                    <div class="col-6">
                                        <div class="button"><button type="button" class="btn btn-success text-white">Düzenle</button></div>
                                    </div>
                                    <div class="col-6">
                                        <div class="button"><button type="button" class="btn bg-danger text-white"><span data-feather="trash-2"></span></button></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>Blog Başlığı 2</td>
                            <td>Bahar Ulu</td>
                            <td>25</td>
                            <td>
                                <img src="image_url_2.jpg" alt="Görsel" style="width: 50px; height: 50px;">
                            </td>
                            <td>2024-12-18</td>
                            <td>
                                <div class="row text-center">
                                    <div class="col-6">
                                        <div class="button"><button type="button" class="btn btn-success text-white">Düzenle</button></div>
                                    </div>
                                    <div class="col-6">
                                        <div class="button"><button type="button" class="btn bg-danger text-white"><span data-feather="trash-2"></span></button></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </main>

        <!-- Modal -->
        <div class="container mt-5">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Yeni Blog Ekle</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="blog_title" class="form-label">Blog Başlığı</label>
                                    <input type="text" class="form-control" id="blog_title" name="blog_title" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="blog_description">Açıklama</label>
                                    <textarea name="blog_description" class="form-control" id="blog_description" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="blog_status" class="form-label">Durum</label>
                                    <select class="form-select" id="blog_status" name="blog_status">
                                        <option value="Aktif">Aktif</option>
                                        <option value="Pasif">Pasif</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="blog_image" class="form-label">Görsel</label>
                                    <input type="file" class="form-control" id="blog_image" name="blog_image">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Kaydet</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php

        include_once "template/footer.php";

        ?>