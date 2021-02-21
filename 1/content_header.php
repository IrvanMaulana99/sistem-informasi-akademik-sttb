<header class="main-header">
  <div class="logo">
<span class="logo-mini"><img src="../image/icon-sisfo.png" class="img-circle" alt="Logo" height="32" width="32"></span>
<span class="logo-lg"><b>Sistem Informasi</b></span>
</div>
  <nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- dropdown user -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <img src="../aset/foto/<?php echo "".$_SESSION["Foto"]."" ?>" class="user-image" alt="Foto">
    <span class="hidden-xs" style="text-transform:capitalize;"><?php echo "".$_SESSION["Username"]."" ?></span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
    <img src="../aset/foto/<?php echo "".$_SESSION["Foto"]."" ?>" class="img-circle" alt="Foto">
    <p style="text-transform:capitalize;">Hi <?php echo "".$_SESSION["Username"]."" ?>, </p>
    <p>Selamat Datang !</p>
            </li>
            <!-- footer -->
            <li class="user-footer">
    <div class="pull-left">
                <!-- button lockscreen -->
                <a href="../lockscreen.php" class="btn btn-primary">Lockscreen <i class="fa fa-lock"></i></a>
              </div>
              <div class="pull-right">
                <!-- button logout -->
                <a href="../logout.php" class="btn btn-primary">Logout <i class="fa fa-sign-out"></i></a>
              </div>
            </li>
        </li>
      </ul>
    </div>
  </nav>
</header>
