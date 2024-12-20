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
                                <th>id</th>
                                <th>Kategori Ad</th>
                                <th>Slug</th>
                                <th>kategori Id</th>
                                <th>Kategori Durum</th>
                                <th>Kategori Ekleme Tarih</th>
                                <th class="text-center">İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>Haberler</td>
                                <td>serhat@gmail.com</td>
                                <td>1</td>
                                <td class="text-center text-success"><span data-feather="check-circle"></span></td>
                                <td>20.12.2024</td>
                                <td>
                                    <div class="row text-center">
                                        <div class="col-6">
                                            <div class="button"><button type="button" class="btn bg-primary text-white"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#categoryModalUpdate">Düzenle</button></div>
                                        </div>
                                        <div class="col-6">
                                            <div class="button"><button type="button"
                                                    class="btn bg-danger text-white"><span
                                                        data-feather="trash-2"></span> </button></div>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2</td>
                                <td>Futbol</td>
                                <td>serhat@gmail.com</td>
                                <td>2</td>
                                <td class="text-center text-danger"><span data-feather="x-circle"></span></td>
                                <td>20.12.2024</td>
                                <td>
                                    <div class="row text-center">
                                        <div class="col-6">
                                            <div class="button"><button type="button" class="btn bg-primary text-white"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#categoryModalUpdate">Düzenle</button></div>
                                        </div>
                                        <div class="col-6">
                                            <div class="button"><button type="button"
                                                    class="btn bg-danger text-white"><span
                                                        data-feather="trash-2"></span> </button></div>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>3</td>
                                <td>Teknoloji</td>
                                <td>serhat@gmail.com</td>
                                <td>3</td>
                                <td class="text-center text-success"><span data-feather="check-circle"></span></td>
                                <td>20.12.2024</td>
                                <td>
                                    <div class="row text-center">
                                        <div class="col-6">
                                            <div class="button"><button type="button" class="btn bg-primary text-white"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#categoryModalUpdate">Düzenle</button></div>
                                        </div>
                                        <div class="col-6">
                                            <div class="button"><button type="button"
                                                    class="btn bg-danger text-white"><span
                                                        data-feather="trash-2"></span> </button></div>
                                        </div>

                                    </div>
                                </td>

                            </tr>


                        </tbody>
                    </table>
                </div>


    </main>
    <div class="container mt-5">

<!-- Modal -->
<div class="modal fade" id="categoryCreate" tabindex="-1" aria-labelledby="categoryModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryModal">Kategori Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
            </div>
            <div class="modal-body">
                <form>
                    <!-- Kategori Adı -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Kategori Adı</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Kategori adı girin">
                    </div>
                    <!-- Slug Adı -->
                    <div class="mb-3">
                        <label for="Slug" class="form-label">Slug Adı</label>
                        <input type="text" class="form-control" id="Slug" name="Slug"
                            placeholder="Kategori adı girin">
                    </div>

                    <!-- Kategori Durumu -->
                    <div class="mb-3">
                        <label for="user_status" class="form-label">Kategori Durumu</label>
                        <select class="form-select" id="user_status" name="user_status">
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                        <button type="button" class="btn btn-primary">Kaydet</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="categoryModalUpdate" tabindex="-1" aria-labelledby="categoryModal"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryModal">Kategori Düzenle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
            </div>
            <div class="modal-body">
                <form>
                    <!-- Kategori Adı -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Kategori Adı : </label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Kategori adı girin">
                    </div>
                    <!-- Slug Adı -->
                    <div class="mb-3">
                        <label for="Slug" class="form-label">Slug Adı</label>
                        <input type="text" class="form-control" id="Slug" name="Slug"
                            placeholder="Slug adı girin">
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
                        <button type="button" class="btn btn-primary">Kategori Güncelle</button>
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