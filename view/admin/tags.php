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
        <h2 class="mb-3 text-center">Etiket Listesi</h2>
        <div class="col-12 col-md-2 my-3">
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Yeni Etiket Ekle
          </button>
        </div>
        <table id="studentTable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Sıra</th>
              <th>Etiket İsmi</th>
              <th class="text-center">İşlemler</th>
            </tr>
          </thead>
          <tbody>
          <?php if (isset($ticketvariable) && is_array($ticketvariable)): ?>
            <?php foreach ($ticketvariable as $key => $value): ?>
              <tr>
                <td><?php print ($key + 1); ?></td>
                <td><?php print $value['name'];?></td>
                <td>
                  <div class="row text-center">
                    <div class="col-6">
                        <div class="button"><button type="button" class="btn bg-success text-white"
                          data-bs-toggle="modal"data-bs-target="#tagsModalUpdate<?php echo $value['tags_id']; ?>">Düzenle</button>
                        </div>
                    </div>
                    <div class="col-6">
                      <a href="/admin/kategori/deleteTags/<?php echo $value['tags_id']; ?>"class="btn bg-danger text-white"><i class="bi bi-trash"></i></a>          
                    </div>
                </td>
              </tr>

              <!-- MODAL GÜNCELLEME -->
              <div class="modal fade" id="tagsModalUpdate<?php echo $value['tags_id']; ?>" tabindex="-1" aria-labelledby="tagsModal" aria-hidden="true">

 
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="tagsModal">Etiket Düzenle</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                    </div>
                    <div class="modal-body">
                      <form action="/admin/updateTags/<?php echo $value['tags_id']; ?>" method="POST">
                        <div class="mb-3">
                          <label for="name" class="form-label">Etiket Adı:</label>
                          <input type="text" class="form-control" id="name" name="name" value="<?php echo $value['name']; ?>">
                        </div>
                        <input type="hidden" name="tags_id" value="<?php echo $value['tags_id']; ?>">
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success">Etiket Güncelle</button>
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <p class="text-center">Henüz etiket eklenmemiş.</p>
          <?php endif; ?>
          </tbody>
        </table>

    </main>
    <!-- Modal Ekleme -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Yeni Etiket Ekle</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
          </div>
          <div class="modal-body">
            <form action="/admin/creatTags" method="POST">
              <div class="mb-3">
                <label for="blog_title" class="form-label">Etiket İsmi</label>
                <input type="text" class="form-control" id="blog_title" name="blog_title" placeholder="">
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

    <?php

    include_once "template/footer.php";

    ?>
