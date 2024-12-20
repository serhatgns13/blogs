<?php

include_once "template/header.php";

?>
<div class="container-fluid">
    <div class="row">

        <?php include_once "template/sidebar.php"; ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">


            <table class="table">
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
            </table>

        </main>
        <?php

        include_once "template/footer.php";

        ?>