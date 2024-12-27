<?php

include_once "template/header.php";

?>
<div class="container-fluid">
    <div class="row">

        <?php include_once "template/sidebar.php"; ?>
        <?php include_once "template/notice.php"; ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <div class="row my-2">

            </div>

            <div class="container mt-5">
                <h2 class="mb-4">Blog Yazıları</h2>
                <div class="col-12 col-md-2 my-3">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Yeni Blog Ekle
                    </button>
                </div>
                <table id="studentTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Görsel</th>
                            <th>Başlık</th>
                            <th>İçerik</th>
                            <th>Yönetici</th>
                            <th>Durum</th>
                            <th>Görüntüleme</th>
                            <th>Kategori</th>
                            <th>Tarih</th>
                            <th class="text-center">İşlem</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php if (isset($posts) && is_array($posts)): ?>

                        <?php foreach ($posts as $key => $value):
   
                            ?>

                        <tr>
                            <td><?php echo ($key + 1) ?></td>
                            <td>
                                <img src="/view/catalog/assets/dist/image/blog/<?php print$value['image'] ?>" alt="Görsel"
                                    style="width: 50px; height: 50px;">
                            </td>
                            <td><?php echo $value['title']; ?> </td>
                            <td><?php echo mb_substr($value['content'], 0, length: 50) . '...'; ?></td>
                            <td>
                                <?php

                                    if ($value['role_id'] == 1) {
                                        echo 'Admin';
                                    } else if ($value['role_id'] == 2) {
                                        echo 'kullanıcı';
                                    } else if ($value['role_id'] == 3) {
                                        echo 'Misafir';
                                    }else {
                                        echo 'Tanımsız';
                                    }

                                    ?>
                            </td>

                            <td>
                                <?php

                                    if ($value['post_status'] == 1) {
                                        echo '<i class="container text-success bi bi-check2-circle"></i>';
                                    } else if ($value['post_status'] == 0) {
                                        echo '<i class="container text-danger bi bi-x-octagon"></i>';
                                    }

                                    ?>
                            </td>
                            <td><?php echo $value['view_count']; ?></td>
                            <td>
                                <?php print $value['name'] ; ?>
                            </td>
                            <td><?php echo date('d-m-Y', strtotime($value['created_date'])); ?></td>
                            <td>
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="button"><button type="button" class="btn btn-success text-white"><i
                                                    class="bi bi-pencil-square" data-bs-toggle="modal"
                                                    data-bs-target="#blogUpdateModal<?php print $value['post_id']; ?>"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <a href="/admin/blogs/deleteBlog/<?php echo $value['post_id']; ?>"
                                            class="btn bg-danger text-white"><i class="bi bi-trash"></i></a>
                                    </div>
                                </div>
            </div>
            </td>
            </tr>
            <!-- güncelleme modal Başlangıç -->
            <div class="container mt-5">
                <div class="modal fade" id="blogUpdateModal<?php print $value['post_id']; ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Blog Güncelle</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Kapat"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/admin/updateblog/<?php echo $value['post_id']; ?>" method="POST" enctype="multipart/form-data">
                                <input type="hidden" value="<?php echo $value['post_id']; ?>" name="id">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Blog Başlığı</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="<?php echo $value['title']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="content">Açıklama</label>
                                        <textarea name="content" class="form-control" id="content"
                                            rows="3"><?php print $value['content']; ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="post_status" class="form-label">Durum</label>
                                        <select class="form-select" id="post_status" name="post_status">



                                            <option value="1" <?php if ($value['post_status'] == 1){  echo 'selected';
                                                                } ?>>Aktif</option>
                                            <option value="0" <?php if ($value['post_status'] == 0){  echo 'selected';
                                                                } ?>>Pasif</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                    <img src="/view/admin/assets/images/blogs/<?php print$value['image'] ?>" alt="Görsel"
                                    style="width: 100px; height: 100px;">
                                        <label for="image" class="form-label">Görsel</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Kategori</label>
                                        <select name="category_id" id="" class="form-control">
                                            <option value="<?php echo $value['category_id'] ?>">Kategori Seç</option>
                                            <?php foreach ($CategoryName as $value): ?>
                                            <option value="<?php echo $value['category_id'] ?>">
                                                <?php echo $value['name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    
                                    <div class="modal-footer">

                                        <input type="submit" value="Kaydet" class="btn btn-success">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Kapat</button>
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
            <!-- güncelleme modal Başlangıç -->
            <?php  endforeach; ?>
            <?php else: ?>
            <script>
            showErrorMessage("<?php echo $_SESSION['error_message']; ?>");
            </script>
            <?php endif;  ?>
            </tbody>
            </table>
    </div>

    </main>

    <!-- Blog Ekleme Modal -->
    <div class="container mt-5">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yeni Blog Ekle</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/admin/create" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="title" class="form-label">Blog Başlığı</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="content">Açıklama</label>
                                <textarea name="content" class="form-control" id="content" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="post_status" class="form-label">Durum</label>
                                <select class="form-select" id="post_status" name="post_status">
                                    <option value="1">Aktif</option>
                                    <option value="0">Pasif</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Görsel</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Kategori</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="">Kategori Seç</option>
                                    <?php foreach ($CategoryName as $value): ?>
                                    <option value="<?php echo $value['category_id'] ?>"><?php echo $value['name']; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="modal-footer">

                                <input type="submit" value="Kaydet" class="btn btn-success">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
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