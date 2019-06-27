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
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

        <?php include 'header.php'; ?>


    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>pemesanan tiket</h1>
                    <nav class="d-flex align-items-center">
                        <a href="halaman_costumer.php">isi pemesanan<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">cetak</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <?php
        include 'config.php';
        $kode_pertandingan = $_GET['tiket'];
        $query = mysqli_query($mysqli,"SELECT *, Date(waktu_pertandingan) as tanggal, time(waktu_pertandingan) as waktu FROM pertandingan where liga = 'liga1' or liga='liga2' or liga='pialapresiden' and kode_pertandingan = '$kode_pertandingan'")
     ?>
     <?php if(mysqli_num_rows($query)>0){
        while($data = mysqli_fetch_array($query)){
            $pertandingan = $data['partai_pertandingan']; 
            $tanggal = $data['tanggal'];
            $waktu = $data['waktu'];
            $stadion = $data['stadion'];
            $harga = $data['harga_tiket'];
        }

    }?>
    <section class="checkout_area section_gap" >
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Isilah Pemesanan ini Dengan Tepat</h3>
                        <form class="row contact_form" action="prosespesan.php" method="post" novalidate="novalidate">
                            <input type="text" hidden="yes" value="<?= $kode_pertandingan ?>" class="form-control" name="kode" placeholder="klub yang bertanding">
                            <input type="text" hidden="yes" value="<?= $harga ?>" class="form-control" name="ekonomi" placeholder="klub yang bertanding">
                            <!-- <div class="col-md-10 form-group p_star">
                                <input type="text" class="form-control" name="id" placeholder="ID">
                                <span class="placeholder"></span>
                            </div> -->
                            <div class="col-md-10 form-group p_star">
                                <input type="text" class="form-control" name="nama" placeholder="nama lengkap">
                                <!-- <span class="placeholder"></span> -->
                            </div>
                            <div class="col-md-10 form-group p_star">
                                <input type="text" class="form-control" name="email" placeholder="email">
                                <!-- <span class="placeholder"></span> -->
                            </div>
                            <div class="col-md-10 form-group p_star">
                                <input type="text" class="form-control" name="jumlah_tiket" placeholder="jumlah tiket">
                                <!-- <span class="placeholder"></span> -->
                            </div>
                            
                            <div class="col-md-10 form-group p_star">
                                <h5>kelas</h5>
                                <select class="country_select" name="kelas"> 
                                    <option value="">Pilih Kelas</option>                            
                                    <option value="Ekonomi">Ekonomi</option>
                                    <option value="Vip">Vip</option>
                                    <!-- <option value="4">vvip</option> -->
                                </select>
                            </div>
                            
                            <div class="col-md-10 form-group p_star">
                                 <h5>pembayaran</h5>
                                <input type="text" disabled="yes" name="" class="form-control" value="BRI (999123123)">
                            </div>

                            <div class="col-md-10 form-group">
                                <input type="submit" class="btn btn-primary" name="submit">   
                                
                                <button class="btn btn-link">Kembali</button></a>    
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <h3>Tiket Pertandingan</h3>
                                <!-- <span class="placeholder"></span> -->
                            <div class="col-md-10 form-group p_star">
                                <label>Pertandingan</label>
                                <input type="text" disabled="yes" value="<?= $pertandingan ?>" class="form-control" name="klubbbb" placeholder="klub yang bertanding">
                                <!-- <span class="placeholder"></span> -->
                            </div>
                            <div class="col-md-10 form-group p_star">
                                <label>Tanggal</label>
                                <input type="text" disabled="yes" value="<?= $tanggal ?>" class="form-control" name="klub" >
                                <!-- <span class="placeholder"></span> -->
                            </div>
                            <div class="col-md-10 form-group p_star">
                                <label>Waktu</label>
                                <input type="text" disabled="yes" value="<?= $waktu ?> WIB" class="form-control" name="klub" >
                                <!-- <span class="placeholder"></span> -->
                            </div>
                            <div class="col-md-10 form-group p_star">
                                <label>Stadion</label>
                                <input type="text" disabled="yes" value="<?= $stadion ?>" class="form-control" name="klub" >
                                <!-- <span class="placeholder"></span> -->
                            </div>
                            <div class="col-md-10 form-group p_star">
                                <div class="row">
                                <div class="col">
                                    <label>Harga Ekonomi</label>
                                <input type="text" disabled="yes" value="<?= $harga ?>" class="form-control" name="klub" >
                                </div>    
                                <div class="col">
                                    <label>Harga VIP</label>
                                <input type="text" disabled="yes" value="<?= $harga + 100000 ?>" class="form-control" name="klub" >
                                </div>
                                </div>
                                
                                <!-- <span class="placeholder"></span> -->
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

    <!-- start footer Area -->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore dolore
                            magna aliqua.
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
                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
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