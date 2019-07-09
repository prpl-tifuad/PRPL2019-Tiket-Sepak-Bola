<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/ft.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>pemesanan tiket bola</title>

    <!--
            CSS
            ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body id="category">

    <!-- Start Header Area -->
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="halaman_costumer.php"><img src="img/pssi.png" width="100px" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="halaman_costumer.php">Home</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">LIGA 1</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="jadwal1.php">jadwal pertandingan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="kategori1.php">beli tiket liga 1</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">LIGA 2</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="jadwal2.php">Jadwal pertandingan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="kategori2.php">beli tiket liga 2</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Piala presiden</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="jadwal3.php">jadwal pertandingan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="kategori3.php">tiket piala presiden</a></li>
                                </ul>
                            </li>
                            <!-- <li class="nav-item"><a class="nav-link" href="#">login</a></li> -->
                            <li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
                            <li class="nav-item">
                                <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Pembelian Tiket <br>Piala Presiden</h1>
                    <nav class="d-flex align-items-center">
                        <a href="halaman_costumer.php">pesan<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">isi pemesanan<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">cetak</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="sidebar-categories">
                    <div class="head">pembelian tiket lain</div>
                    <ul class="main-categories">
                        <li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable"><span
                                 class="lnr lnr-arrow-right"></span>LIGA 2<span class="number">(2)</span></a>
                            <ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
                                <li class="main-nav-list child"><a href="#">Jadwal Pertandingan</a></li>
                                <li class="main-nav-list child"><a href="#">Beli Tiket Liga 2</a></li>
                            </ul>
                        </li>

                        <li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false" aria-controls="meatFish"><span
                                 class="lnr lnr-arrow-right"></span>Piala Presiden<span class="number">(2)</span></a>
                            <ul class="collapse" id="meatFish" data-toggle="collapse" aria-expanded="false" aria-controls="meatFish">
                                <li class="main-nav-list child"><a href="#">Jadwal pertandingan</a></li>
                                <li class="main-nav-list child"><a href="#">beli tiket piala presiden</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-filter mt-50">
                    <div class="common-filter"></div>
                    <div class="common-filter"></div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7">
                <!-- Start Filter Bar -->
<?php
include "koneksi.php";

$query = mysqli_query($koneksi,"SELECT * FROM pertandingan where liga = 'pialapresiden'");?>
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting mr-auto"></div>
                    <div class="pagination"></div>
                </div>
                <section class="lattest-product-area pb-40 category-list">
                    <div class="row">
                        <!-- single product -->
                        <?php if(mysqli_num_rows($query)>0){ ?>
                        <?php
            while($data = mysqli_fetch_array($query)){ ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="img/product/pialapresiden/<?php echo $data['gambar'];?>" alt="">
                                <div class="product-details">
                                    <h6><?php echo $data["partai_pertandingan"];?></h6>
                                    <div class="price">
                                        Rp&nbsp;<h6><?php echo $data["harga_tiket"];?></h6>
                                    </div>
                                    <div class="prd-bottom">

                                        <a href="pemesanan.php?kode_pertandingan=<?=$data['kode_pertandingan'];?> &liga=piala presiden" class="social-info">
                                            <span class="ti-bag"></span>
                                            <p class="hover-text">pesan</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }} ?>
                    </div>
                </section>
                <!-- End Best Seller -->

                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting mr-auto"></div>
                    <div class="pagination">
                        <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                        <a href="#">6</a>
                        <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Filter Bar -->
            </div>
        </div>
    </div>

    <!-- Start related-product Area -->
    <section class="related-product-area section_gap">
        <div class="container">
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End related-product Area -->

    <!-- start footer Area -->
 <?php include "footer.php"; ?>
</body>

</html>