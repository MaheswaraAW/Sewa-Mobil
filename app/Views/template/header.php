<!doctype html>
<html lang="en" style="position:relative; min-height:100%; padding-bottom:100px">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
</head>
  <body style="height:100%">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #0F0E20; height: 75px;">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/') ?>">Rental Mobil</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <?php if (isset($_SESSION['Nama'])&&$_SESSION['Status']==0){ ?>
                            <a class="nav-link" href="<?= base_url('/Home/indexadmin')?>">Home</a>
                        <?php } elseif (isset($_SESSION['Nama'])&&$_SESSION['Status']==1){ ?>     
                            <a class="nav-link" href="<?= base_url('/Home/indexclient')?>">Home</a>
                        <?php } else {?>
                            <a class="nav-link" href="<?= base_url('/')?>">Home</a>
                        <?php } ?>
                    </li>
                    <?php if (!isset($_SESSION['Nama'])){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('tentang_kami')?>">Tentang Kami</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('faqs')?>">Faqs</a>
                    </li>
                    <?php } ?>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li> -->
                    <li class="nav-item ml-4">
                        <?php
                        // if($dtakun!=NULL){
                            // foreach ($dtakun as $ak) : ?>
                                <?//php if ($ak['Nama'] != NULL && $ak['Status'] == 0) { ?>
                                <?php if (isset($_SESSION['Nama'])&&$_SESSION['Status']==0){ ?>
                                    <div class="dropdown">
                                    <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user"></i> admin <?php echo $_SESSION['Nama']//echo $ak['Nama']; ?>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="<?= base_url('CLogin/logout') ?>">Logout</a>
                                        <!-- <a class="dropdown-item" href="<?//= base_url('auth/logout') ?>">Ganti Pass</a> -->
                                        <!-- <a class="dropdown-item" href="<?//= base_url('auth/logout') ?>">Daftar Akun</a> -->
                                        <!-- <a class="dropdown-item" href="<?//= base_url('auth/ganti_password') ?>"><i
                                                class="fas fa-lock"></i> Ganti Password</a> -->
                                    </div>
                                </div>
                                <?php } elseif(isset($_SESSION['Nama'])&&$_SESSION['Status']==1) { ?>
                                    <div class="dropdown">
                                    <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user"></i><?php echo $_SESSION['Nama'] ?>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="<?= base_url('CLogin/logout') ?>">Logout</a>
                                        <!-- <a class="dropdown-item" href="<?//= base_url('auth/logout') ?>">Ganti Pass</a> -->
                                        <!-- <a class="dropdown-item" href="<?//= base_url('auth/ganti_password') ?>"><i
                                                class="fas fa-lock"></i> Ganti Password</a> -->
                                    </div>
                                </div>
                                <?php } else{//endforeach; } else { ?>
                                <div class="mt-2">
                                    <a class="text-white" style="text-decoration: none" href="<?= base_url('/login') ?>"><i
                                            class="fas fa-sign-in-alt"></i> Login </a>
                                </div>
                                <?php } ?>
                                

                    </li>
                </ul>
            </div>
        </div>
    </nav>