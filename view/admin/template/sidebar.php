<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="/admin">
              <i class="bi bi-house-door-fill"></i>

                Ana Sayfa
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="/admin/kullanici">
                <span data-feather="users"></span>
                Kullanıcılar
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="/admin/kategori">
                <span data-feather="users"></span>
                Kategori Yönetimi
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/blogs">
                <span data-feather="file"></span>
                Blog Listesi
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/yorumlar">
                <span data-feather="file"></span>
                Yorumlar Listesi
              </a>
            </li>
 
            <li class="nav-item">
              <a class="nav-link" href="/admin/tags">
                <span data-feather="layers"></span>
                Tags Listesi
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/admin/settings">
                <span data-feather="layers"></span>
                Settings
              </a>
            </li>


          </ul>
  
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>------------------------------------------</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
       
        </div>
        <div class="dropdown ">
      <a href="#" class=" col-12 d-flex align-items-center text-dark text-decoration-none dropdown-toggle fixed-bottom" id="dropdownUser1"
        data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong><?php print $ByIdusers['user_name']; ?></strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow ">
        <li><a class="dropdown-item" href="#">Yeni BLog</a></li>
        <li><a class="dropdown-item" href="#">Ayarlar</a></li>
        <li><a class="dropdown-item" href="/admin/profil">Profile</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="/admin/logout">Oturumu Kapat</a></li>
      </ul>

      </div>
      </nav>