<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
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

<body>

    <!-- Start Header Area -->
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="img/pssi.png" width="100px" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item submenu dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">liga 1</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="jadwal1.php">jadwal pertandingan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="kategori1.php">tiket liga 1</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">liga 2</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="jadwal2.php">jadwal pertandingan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="kategori2.php">tiket liga 2</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">piala presiden</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="jadwalpres.php">jadwal pertandingan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="kategoripres.php">tiket piala presiden</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="login.php">login</a></li>
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
                <form class="d-flex justify-content-between" action="jadwalpres.php?" method="get">
                    <input type="text" class="form-control" name="cari" id="search_input" placeholder="Search Here">
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
                    <h1>jadwal pertandingan <br> 
                    piala presiden</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="jadwalpres.php">jadwal club<span class="lnr lnr-arrow-right"></span></a>
                        <a href="kategoripres.php">Pesan Tiket</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->

<?php
include "config.php";
    if ($_GET)
    {
        $cari=$_GET['cari'];
        $query = mysqli_query($mysqli,"SELECT * FROM pertandingan where liga = 'pialapresiden' and partai_pertandingan like '%$cari%' OR waktu_pertandingan like '%$cari%' OR stadion like '%$cari%'");
    }else{
        $query = mysqli_query($mysqli,"SELECT * FROM pertandingan where liga = 'pialapresiden'");
}?>
                            <?php if(mysqli_num_rows($query)>0){ ?>
            
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner text-center">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">KLUB</th>
                                <th scope="col">STADION</th>
                                <th scope="col">TANGGAL MAIN</th>
                                <!-- <th scope="col">JAM MAIN</th> -->
                            </tr>
                        </thead>
                        <tbody>
<?php
            while($data = mysqli_fetch_array($query)){
        ?>
                            <tr>
                                <td>
                                    <div class="media">
                                        <!-- <div class="d-flex">
                                            <img src="Piala presiden/<?php echo $data['gambar'];?>" alt="" width='100px' height='100px'>
                                        </div> -->
                                        <div class="media-body">
                                            <img src="Piala presiden/<?php echo $data['gambar'];?>" alt="" width='100px' height='100px'>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p><?php echo $data["partai_pertandingan"];?></p>
                                </td>
                                <td>
                                    <P><?php echo $data["stadion"];?></P>
                                </td>
                                <td>
                                    <p><?php echo $data["waktu_pertandingan"];?> WIB</p>
                                </td>
                               <!--  <td>
                                    <p><?php echo $data["jam"];?> WIB</p>
                                </td> -->
                            </tr>
                            <?php }
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
<?php }
else{
    ?>
    <section class="cart_area">
    <div class="container">
        <div class="cart_inner">
        <h4>Data tidak ada.</h4>
    </div>
    </div>
</section>
    <?php
} ?>

    <!--================End Cart Area =================-->

    <!-- start footer Area -->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Whatsapp :  - 0822 3929 7595 DIKY<br>
                                        - 0878 3891 6161 YUNUS<br>
                                        - 0822 6634 4725 IQBAL<br>
                            Instagram : - bolatiket
                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">

                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">

                                <div class="d-flex flex-row">

                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                            aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                            type="text">
                                    </div>

                                    <!-- <div class="col-lg-4 col-md-4">
                                                    <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                                </div>  -->
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Instragram Feed</h6>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="img/i1.jpg" alt=""></li>
                            <li><img src="img/i2.jpg" alt=""></li>
                            <li><img src="img/i3.jpg" alt=""></li>
                            <li><img src="img/i4.jpg" alt=""></li>
                            <li><img src="img/i5.jpg" alt=""></li>
                            <li><img src="img/i6.jpg" alt=""></li>
                            <li><img src="img/i7.jpg" alt=""></li>
                            <li><img src="img/i8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
     crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>