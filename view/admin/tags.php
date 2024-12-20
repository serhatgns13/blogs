<?php

include_once "template/header.php";

?>
<div class="container-fluid">
  <div class="row">

    <?php include_once "template/sidebar.php"; ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="row my-2">
          <div class="card">
            <h2 class="text-center">Etiketler</h2>
          </div>
        </div>
        <div class="col-12 col-md-2 my-3">
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Yeni Etiket Ekle
          </button>
        </div>
        <div class="container mt-5">
          <h2 class="mb-4">Etiket Listesi</h2>
          <table id="blogTable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Sıra</th>
                <th>ID</th>
                <th>Etiket İsmi</th>
                <th></th>
                <th>İşlem</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>1</td>
                <td>En Çok tercih edenler</td>
                <td></td>
                <td>
                  <div class="row text-center">
                    <div class="col-6"><div class="button"><button type="button" class="btn btn-success text-white">Düzenle</button></div></div>
                    <div class="col-6"><div class="button"><button type="button" class="btn bg-danger text-white"><span data-feather="trash-2"></span></button></div></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>2</td>
                <td>Favoriler</td>
                <td>Bahar Ulu</td>
                <td>
                  <div class="row text-center">
                    <div class="col-6"><div class="button"><button type="button" class="btn btn-success text-white">Düzenle</button></div></div>
                    <div class="col-6"><div class="button"><button type="button" class="btn bg-danger text-white"><span data-feather="trash-2"></span></button></div></div>
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
            <h5 class="modal-title" id="exampleModalLabel">Yeni Etiket Ekle</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="blog_title" class="form-label">Etiket İsmi</label>
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