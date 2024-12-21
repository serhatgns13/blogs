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
        <table id="studentTable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Sıra</th>
              <th>ID</th>
              <th>Etiket İsmi</th>
              <th>Slug</th>
              <th>İşlem</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>1</td>
              <td>En Çok tercih edenler</td>
              <td>Gonca</td>
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
              <td>Favoriler</td>
              <td>Bahar Ulu</td>
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

    <!-- Düzenleme İşlemi -->

    <div class="modal fade" id="tagsModalUpdate" tabindex="-1" aria-labelledby="tagsModal"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tagsModal">Etiket Düzenle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
            </div>
            <div class="modal-body">
                <form>
                    <!-- Etiket Adı -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Etiket Adı : </label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Etiket adı girin...">
                    </div>
                    <!-- Slug Adı -->
                    <div class="mb-3">
                        <label for="Slug" class="form-label">Slug Adı</label>
                        <input type="text" class="form-control" id="Slug" name="Slug"
                            placeholder="Slug adı girin...">
                    </div>

                    <!-- Kategori Durumu -->
                    <div class="mb-3">
                        <label for="tags_status" class="form-label">Etiket Durumu</label>
                        <select class="form-select" id="tags_status" name="tags_status">
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Etiket Güncelle</button>
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