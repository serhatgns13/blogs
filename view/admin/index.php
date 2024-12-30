<?php

include_once "template/header.php";

?>
<div class="container-fluid">
  <div class="row">

    <?php include_once "template/sidebar.php"; ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

      <?php echo $title; ?>
      <div class="app-content"> <!--begin::Container-->
          <div class="container-fluid">
               <!--begin::Row-->
              <div class="row"> <!--begin::Col-->
                
                 
                  <div class="col-lg-3 col-12"> <!--begin::Small Box Widget 3-->
                      <div class="small-box text-bg-warning">
                          <div class="inner">
                              <h3>44</h3>
                              <p><b style="color: white;">Tüm Kullanıcılar</b></p>
                          </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                              <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
                          </svg> <a href="ogrenciler.html" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                              Görüntüle <i class="bi bi-link-45deg"></i> </a>
                      </div> 
                  </div> 
                  <div class="col-lg-3 col-12"> 
                      <div class="small-box text-bg-danger">
                          <div class="inner">
                              <h3>15</h3>
                              <p><b style="color: white;">Blog</b></p>
                          </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                              <path clip-rule="evenodd" fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"></path>
                              <path clip-rule="evenodd" fill-rule="evenodd" d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"></path>
                          </svg> <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                              Görüntüle <i class="bi bi-link-45deg"></i> </a>
                      </div> <!--end::Small Box Widget 4-->
                  </div> 
                  <div class="col-lg-3 col-12"> 
                      <div class="small-box text-bg-primary">
                          <div class="inner">
                              <h3>5</h3>
                              <p><b style="color: white;">Kategoriler</b></p>
                          </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                              <path clip-rule="evenodd" fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"></path>
                              <path clip-rule="evenodd" fill-rule="evenodd" d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"></path>
                          </svg> <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                              Görüntüle <i class="bi bi-link-45deg"></i> </a>
                      </div> 
                  </div> 
                  <div class="col-lg-3 col-12"> 
                      <div class="small-box text-bg-primary">
                          <div class="inner">
                              <h3>5</h3>
                              <p><b style="color: white;">Gizlilik Politikası</b></p>
                          </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                              <path clip-rule="evenodd" fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"></path>
                              <path clip-rule="evenodd" fill-rule="evenodd" d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"></path>
                          </svg> <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                              Görüntüle <i class="bi bi-link-45deg"></i> </a>
                      </div> 
                  </div> 
              
              </div> 
           
            
          </div> 
      </div>

    </main>

    <?php

    include_once "template/footer.php";

    ?>