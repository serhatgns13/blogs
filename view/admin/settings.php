<?php

include_once "template/header.php";

?>
<div class="container-fluid">
    <div class="row">

        <?php include_once "template/sidebar.php"; ?>
        <?php include_once "template/notice.php"; ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <form action="/admin/Updatesettings/<?php echo $settingsValue["set_id"]; ?>" method="POST"
                enctype="multipart/form-data" class="row g-3 w-50 mx-auto mt-5 p-4 bg-light shadow-sm rounded">
                <h5 class="text-center text-success mb-4">Settings</h5>
                <div class="col-md-6">
                    <label for="set_images" class="form-label text-success">
                        <i class="bi bi-people-fill"></i> İmages
                    </label>
                    <input type="file" name="set_images" id="set_images" class="form-control border-success shadow-sm">
                </div>
                <div class="col-md-6">
                    <label for="Title" class="form-label text-success">
                        <i class="bi bi-envelope-fill"></i> Title
                    </label>
                    <input type="text" class="form-control border-success shadow-sm" id="title" name="set_title"
                        value="<?php echo $settingsValue["set_title"]; ?>">
                </div>
                <div class="col-md-6">
                    <label for="description" class="form-label text-success">
                        <i class="bi bi-key-fill"></i> description
                    </label>
                    <textarea name="set_description" id="set_description" cols="30" rows="10"
                        class="form-control border-success shadow-sm"><?php echo $settingsValue["set_description"]; ?></textarea>
                </div>
                <div class="col-md-6">
                    <label for="Keywords" class="form-label text-success">
                        <i class="bi bi-key-fill"></i> Keywords
                    </label>
                    <textarea name="set_keywords" id="set_keywords" cols="30" rows="10"
                        class="form-control border-success shadow-sm"><?php echo $settingsValue["set_keywords"]; ?></textarea>
                </div>

                <div class="col-md-6">
                    <label for="Author" class="form-label text-success">
                        <i class="bi bi-envelope-fill"></i> Author
                    </label>
                    <input type="text" class="form-control border-success shadow-sm" id="set_author" name="set_author"
                        value="<?php echo $settingsValue["set_author"]; ?>">
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label text-success">
                        <i class="bi bi-envelope-fill"></i> Email
                    </label>
                    <input type="email" class="form-control border-success shadow-sm" id="set_email" name="set_email"
                        value="<?php echo $settingsValue["set_email"]; ?>">
                </div>

                <input type="hidden" name="set_id" value="<?php echo $settingsValue["set_id"]; ?>">


                <div class="col-12 text-end">
                    <button class="btn btn-success btn-sm shadow" type="submit">
                        <i class="bi bi-check-circle-fill"></i> Kaydet
                    </button>

                </div>
            </form>







        </main>



        <?php include_once "template/footer.php"; ?>