<style>
    .fondo-nav{
        background-color: rgba(25, 54, 96, 0.9) ;
    }
</style>
<!--<nav class="row py-3 pt-sm-3 pb-sm-3 pe-1 text-center justify-content-end fs-5 shadow fondo-nav mx-1 shadow">
    <a href="index.php" class="navbar-brand"><div class="col-8 justify-content-start text-start"><img src="/IMG/Logo.png" class="img-fluid" width="30" height="" alt=""></div></a>
    <div class="d-none d-sm-block col-sm-3 col-md-2 col-lg-1 "><a href="index.php" class="link-light text-decoration-none">Inicio</a>       </div>
    <div class="d-none d-sm-block col-sm-3 col-md-2 col-lg-1 "><a href="Nosotros.php" class="link-light text-decoration-none">Nosotros</a>  </div>
    <div class="d-none d-sm-block col-sm-3 col-md-2 col-lg-1 "><a href="Contacto.php" class="link-light text-decoration-none">Contacto</a>  </div>
    <div class="d-none d-sm-block col-sm-3 col-md-2 col-lg-1 "><a href="Servicios.php" class="link-light text-decoration-none">Servicios</a></div>
    <div class="d-block d-sm-none ">
        <div class="collapse " id="navbarToggleExternalContent">
            <div class="fondo-nav p-4 ">
                <div class="text-end">
                <a href="index.php" class="link-light text-decoration-none pb-2">Inicio</a><br>
                <a href="Nosotros.php" class="link-light text-decoration-none pb-2">Nosotros</a><br>
                <a href="Contacto.php" class="link-light text-decoration-none pb-2">Contacto</a><br>
                <a href="Servicios.php" class="link-light text-decoration-none pb-2">Servicios</a>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-dark fondo-nav ">
            <div class="container-fluid ">
                <p class="text-light lead">RCConsultora</p>
                <button class="navbar-toggler justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>



            <button
                class="btn btn-dark dropdown-toggle "
                type="button"
                id="dropdown-1"
                data-bs-toggle="dropdown"
                aria-expanded="false"
            >
            Menú
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdown-1">
                <li><a href="index.php" class="dropdown-item">Inicio</a></li>
                <li><a href="Nosotros.php" class="dropdown-item">Nosotros</a></li>
                <li><a href="Contacto.php" class="dropdown-item">Contacto</a></li>
                <li><a href="Servicios.php" class="dropdown-item">Servicios</a></li>
            </ul>
    </div>
</nav>-->
<nav class="navbar navbar-expand-md fondo-nav navbar-light text-end">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="/IMG/LogoNavbar.png" class="img-fluid" width="150" alt=""></a>
    <button 
        class="navbar-toggler bg-light"
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" 
        aria-controls="navbarNav" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-end fs-5 align-items-center" id="navbarNav">
      <ul class="navbar-nav  pt-2 pt-md-0">
        <li class="nav-item pe-md-5">
          <a class="link-light text-decoration-none" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item pe-md-5">
          <a class="link-light text-decoration-none" href="Nosotros.php">Sobre mí</a>
        </li>
        <li class="nav-item pe-md-5">
            <a href="#mi-modal" class="link-light text-decoration-none" data-bs-toggle="modal" data-bs-target="#mi-modal">Contacto</a>
            <?php require('Contacto.php') ?>
        </li>
        <li class="nav-item pe-md-5">
          <a class="link-light text-decoration-none" href="Servicios.php">Servicios</a>
        </li>
      </ul>
    </div>
  </div>
</nav>