<nav class="sb-topnav navbar navbar-expand navbar-dark bg-secondary" style="position:absolute;">
    <!-- Navbar Brand-->
    
    <!-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button> -->
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <a class="nav-link active" style="margin-right:10px;" ><i style="margin-right:5px;" class="fas fa-user fa-fw"></i><strong><?=$this->session->userdata('nama');?></strong></a>
        <a class="nav-link btn btn-lg btn-dark" style="margin-bottom:-10px;" role="button" href="<?=base_url()?>/auth/logout"><b>LOGOUT</b></a>
    </ul>
</nav>