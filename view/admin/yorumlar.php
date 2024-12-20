<?php

include_once "template/header.php";

?>
<div class="container-fluid">
  <div class="row">

    <?php include_once "template/sidebar.php"; ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="row my-2">
          <div class="card">
            <h2 class="text-center"> <i>Sayfa Blog Yorumları</i> </h2>
          </div>

        </div>


        <hr>


        <div class="card p-2">
          <div class="container mt-5">

            <table id="studentTable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Sıra</th>
                  <th>Yorum İd</th>
                  <th>Blog Başlık</th>
                  <th>Blog Resim</th>
                  <th>Kullanıcı Adı</th>
                  <th>Durum</th>
                  <th>Eklenme Tarihi</th>
                  <th class="text-center">İşlemler</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>Blog Başlık</td>
                  <td class="text-center"><img src="/view/admin/assets/images/login.png" width="50" height="50" alt=""></td>
                  <td>Serhat Güneş</td>
                  <td class="text-center text-success"><span data-feather="check-circle"></span></td>
                  <td>12.25.2024</td>
                  <td>
                    <div class="row text-center">
                      <div class="col-6">
                        <div class="button"><button type="button" class="btn bg-primary text-white"
                            data-bs-toggle="modal" data-bs-target="#commentsModal">Düzenle</button></div>
                      </div>
                      <div class="col-6">
                        <div class="button"><button type="button" class="btn bg-danger text-white"><span
                              data-feather="trash-2"></span> </button></div>
                      </div>

                    </div>
                  </td>

                </tr>
                <tr>
                  <td>2</td>
                  <td>3</td>
                  <td>Blog Başlık</td>
                  <td class="text-center"><img src="/view/admin/assets/images/login.png" width="50" height="50" alt=""></td>
                  <td>Bahar Ulu</td>
                  <td class="text-center text-success"><span data-feather="check-circle"></span></td>
                  <td>12.25.2024</td>
                  <td>
                    <div class="row text-center">
                      <div class="col-6">
                        <div class="button"><button type="button" class="btn bg-primary text-white"
                            data-bs-toggle="modal" data-bs-target="#commentsModal">Düzenle</button></div>
                      </div>
                      <div class="col-6">
                        <div class="button"><button type="button" class="btn bg-danger text-white"><span
                              data-feather="trash-2"></span> </button></div>
                      </div>

                    </div>
                  </td>

                </tr>
                <tr>
                  <td>3</td>
                  <td>4</td>
                  <td>Blog Başlık</td>
                  <td class="text-center"><img src="/view/admin/assets/images/login.png" width="50" height="50" alt=""></td>
                  <td>Mehmet Reşit Akın</td>
                  <td class="text-center text-danger"><span data-feather="x-circle"></span></td>
                  <td>12.25.2024</td>
                  <td>
                    <div class="row text-center">
                      <div class="col-6">
                        <div class="button"><button type="button" class="btn bg-primary text-white"
                            data-bs-toggle="modal" data-bs-target="#commentsModal">Düzenle</button></div>
                      </div>
                      <div class="col-6">
                        <div class="button"><button type="button" class="btn bg-danger text-white"><span
                              data-feather="trash-2"></span> </button></div>
                      </div>

                    </div>
                  </td>

                </tr>


              </tbody>
            </table>
          </div>
        </div>


    </main>
    <div class="container mt-5">

<!-- Modal -->
<div class="modal fade" id="commentsModal" tabindex="-1" aria-labelledby="commentsUpdate" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="commentsUpdate">Yorum Düzenleme Kısmı</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
      </div>
      <div class="modal-body">
        <form>
          <!-- Yorum İçerik -->
          <div class="mb-3">
            <label for="content" class="form-label">Yorum İçerik</label>
            <textarea class="form-control" name="content" id="content"></textarea>
          </div>



          <!-- Yorum İçerik Durumu -->
          <div class="mb-3">
            <label for="comment_status" class="form-label">Yorum İçerik Durumu</label>
            <select class="form-select" id="comment_status" name="comment_status">
              <option value="1">Aktif</option>
              <option value="0">Pasif</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
            <button type="button" class="btn btn-primary">Güncelle</button>
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