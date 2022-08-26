<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="panel.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Ana Sayfa
            </a>
          </li>
          <?php 
            $uyeler=mysqli_fetch_assoc($sorgu2);
            echo'
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="bilgilerim.php?id='.$uyeler['ÜyeID'].'">
                    <span data-feather="home" class="align-text-bottom"></span>
                    <i class="fa-solid fa-id-card"></i> Bilgilerim
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="aidatlarim.php?id='.$uyeler['ÜyeID'].'">
                    <span data-feather="home" class="align-text-bottom"></span>
                    <i class="fa-solid fa-money-bill-1-wave"></i> Aidatlarım
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="bagislarim.php?id='.$uyeler['ÜyeID'].'">
                    <span data-feather="home" class="align-text-bottom"></span>
                    <i class="fa-solid fa-hand-holding-dollar"></i> Bağışlarım
                </a>
            </li>
            <br>'; 
          ?>
        </ul>
      </div>
    </nav>