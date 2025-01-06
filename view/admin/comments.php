<?php include_once "template/header.php"; ?>
<div class="container-fluid">
  <div class="row">

    <?php include_once "template/sidebar.php"; ?>
    <?php include_once "template/notice.php"; ?>

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
                <th>Yorum Yapan</th>
                <th>Blog Başlık</th>
                <th>Blog Resim</th>
                <th>Cevaplayan</th>
                <th>Durum</th>
                <th>Tarih</th>
                <th class="text-center">İşlemler</th>
              </tr>
            </thead>
            <tbody>


              <?php

              if (isset($CommentsValue) && !empty($CommentsValue)):

                foreach ($CommentsValue as $key => $comment):

                  ?>
                  <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $comment["name"]; ?></td>
                    <td><?php echo $comment["title"]; ?> / <a
                        href="<?php echo APP_URL; ?>detail/<?php echo $comment["slug"] ?>">Sayfaya git</a></td>
                    <td class="text-center"><img
                        src="<?php echo APP_URL; ?>view/catalog/assets/dist/image/blog/<?php echo $comment["image"]; ?>"
                        width="50" height="50" alt="">
                    </td>
                    <td><?php echo $comment["reply_name"]; ?></td>

                    <td class="text-center text-success"><?php if ($comment["comment_status"] == 1): echo "<b>Cevaplandı</b>";
                    elseif ($comment["comment_status"] == 2):
                      echo "<b class='text text-danger'>Onaylanmadı</b>";
                    else:
                      echo "<b class='text text-warning'>Pasif</b>";
                    endif; ?></td>
                    <td><?php echo $this->timeConvert($comment["created_date"]); ?></td>

                    <td>
                      <div class="row text-center">

                        <div class="col-4">
                          <div class="button"><button type="button" class="btn bg-info text-white" data-bs-toggle="modal"
                              data-bs-target="#commentsModal-<?php echo $comment["c1_userID"]; ?>">Düzenle </button></div>

                        </div>

                        <div class="col-4">
                          <div class="button"><button type="button" class="btn bg-info text-white" data-bs-toggle="modal"
                              data-bs-target="#commentsModal<?php echo $comment["reply_id"]; ?>">Cevapla </button></div>

                        </div>

                        <div class="col-4">
                          <div class="button"><a href="comments/deleteComments/<?php echo $comment["c1_userID"]; ?>"><button
                                type="button" class="btn bg-danger text-white"><span
                                  data-feather="trash-2"></span>SİL</button></a></div>


                        </div>

                      </div>
                    </td>

                  </tr>

                  <div class="modal fade" id="commentsModal-<?php echo $comment["c1_userID"]; ?>" tabindex="-1"
                    aria-labelledby="commentsUpdate" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="ReplyadminAdd">Yorumu düzenle</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                        </div>
                        <div class="modal-body">
                          <form action="/admin/replyadminEdit/<?php echo $comment["c1_userID"]; ?>" method="post">
                            <!-- Yorum İçerik -->

                            <div class="mb-3">
                              <label for="reply_content" class="form-label">Yorum İçerik</label>
                              <textarea class="form-control" name="reply_content"
                                id="reply_content"><?php echo $comment["reply_content"]; ?></textarea>
                            </div>

                            <!-- Yorum İçerik Durumu -->
                            <div class="mb-3">
                              <label for="comment_status" class="form-label">Yorum İçerik Durumu</label>

                              <select class="form-select" id="comment_status" name="comment_status">
                                <option value="1" <?php echo $comment["comment_status"] == 1 ? 'selected' : ''; ?>>Onayla
                                </option>
                                <option value="2" <?php echo $comment["comment_status"] == 2 ? 'selected' : ''; ?>>Onaylama
                                </option>
                              </select>
                            </div>


                            <input type="hidden" name="reply_userID" value="<?php echo $comment["c1_userID"]; ?>">

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                              <button type="submit" class="btn btn-primary">Yorum Yap</button>

                            </div>

                          </form>

                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="commentsModal<?php echo $comment["reply_id"]; ?>" tabindex="-1"
                    aria-labelledby="commentsUpdate" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="ReplyadminAdd">Yorumu düzenle</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                        </div>
                        <div class="modal-body">
                          <form action="/admin/ReplyadminAdd" method="post">
                            <!-- Yorum İçerik -->

                            <div class="mb-3">
                              <label for="reply_content" class="form-label">Yorum İçerik</label>
                              <textarea 
                                  class="form-control" 
                                  name="reply_content" 
                                  id="reply_content" 
                                  <?php echo !empty($comment["reply_content"]) ? 'disabled' : ''; ?>
                              ><?php echo $comment["reply_content"]; ?></textarea>
                          </div>

                            <!-- Yorum İçerik Durumu -->
                            <div class="mb-3">
                              <label for="reply_status" class="form-label">Yorum İçerik Durumu</label>

                              <select class="form-select" id="reply_status" name="reply_status">
                                <option value="1" <?php echo $comment["reply_status"] == 1 ? 'selected' : ''; ?>>Onayla
                                </option>
                                <option value="2" <?php echo $comment["reply_status"] == 2 ? 'selected' : ''; ?>>Onaylama
                                </option>
                              </select>
                            </div>


                            <input type="hidden" name="reply_userID" value="<?php echo $comment["c1_userID"]; ?>">
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                              <button type="submit" class="btn btn-primary">Yorum Yap</button>

                            </div>

                          </form>

                        </div>

                      </div>
                    </div>
                  </div>


                <?php endforeach;
              endif;
              ?>

            </tbody>
          </table>
        </div>
      </div>


    </main>
    <div class="container mt-5">

      <!-- Modal -->


    </div>

    <?php

    include_once "template/footer.php";

    ?>