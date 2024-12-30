<?php include_once "template/header.php"; ?>

<div class="container-fluid">
  <div class="row">
    <?php include_once "template/sidebar.php"; ?>
    <?php include_once "template/notice.php"; ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="container mt-5">
        <h2 class="mb-3 text-center">Gizlilik Politikası</h2>
        <div class="col-12 col-md-2 my-3">
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
            Yeni Gizlilik Politikası Ekle
          </button>
        </div>

        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Sıra</th>
              <th>Başlık</th>
              <th>İçerik</th>
              <th class="text-center">İşlemler</th>
            </tr>
          </thead>
          <tbody>
            <?php if (isset($privacyPolicies) && is_array($privacyPolicies)): ?>
              <?php foreach ($privacyPolicies as $key => $value): ?>
                <tr>
                  <td><?php echo ($key + 1); ?></td>
                  <td><?php echo htmlspecialchars($value['title'], ENT_QUOTES, 'UTF-8'); ?></td>
                  <td><?php echo htmlspecialchars($value['content'], ENT_QUOTES, 'UTF-8'); ?></td>
                  <td class="text-center">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $value['privacy_id']; ?>">
                      Düzenle
                    </button>
                    <a href="/admin/privacy/deletePrivacy/<?php echo $value['privacy_id']; ?>" class="btn btn-danger">Sil</a>
                  </td>
                </tr>

                <!-- Düzenle Modal -->
                <div class="modal fade" id="editModal<?php echo $value['privacy_id']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Gizlilik Politikası Düzenle</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="/admin/privacy/updatePrivacy" method="POST">
                          <input type="hidden" name="privacy_id" value="<?php echo $value['privacy_id']; ?>">
                          <div class="mb-3">
                            <label for="title" class="form-label">Başlık</label>
                            <input type="text" class="form-control" name="title" value="<?php echo htmlspecialchars($value['title'], ENT_QUOTES, 'UTF-8'); ?>" required>
                          </div>
                          <div class="mb-3">
                            <label for="content" class="form-label">İçerik</label>
                            <textarea class="form-control" name="content" required><?php echo htmlspecialchars($value['content'], ENT_QUOTES, 'UTF-8'); ?></textarea>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Güncelle</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="4" class="text-center">Henüz gizlilik politikası eklenmemiş.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<?php include_once "template/footer.php"; ?>
