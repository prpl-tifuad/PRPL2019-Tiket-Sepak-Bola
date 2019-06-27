<?php
        include 'config.php';
        $kode_pertandingan = $_GET['tiket'];
        $data = mysqli_query($mysqli,"SELECT *, Date(waktu_pertandingan) as tanggal, time(waktu_pertandingan) as waktu FROM pertandingan where liga = 'liga1' or liga='liga2' or liga='pialapresiden' and kode_pertandingan = '$kode_pertandingan'")
     ?>
     <?php if(mysqli_num_rows($data)>0){
        while($r = mysqli_fetch_array($data)){
            $pertandingan = $data['partai_pertandingan']; 
            $tanggal = $data['tanggal'];
            $waktu = $data['waktu'];
            $stadion = $data['stadion'];
            $harga = $data['harga_tiket'];
        }

    }?>

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
    <section class="checkout_area section_gap" >
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Isilah Pemesanan ini Dengan Tapat</h3>
                        <form class="row contact_form" action="input_pemesanan.php" method="POST">
                            <!-- <input type="text" name="liga" value="<?=$_GET['liga'];?>" readonly> -->
                            <div class="col-md-10 form-group p_star">
                                <!-- <h5>LIGA</h5> -->
                                <input type="text" class="form-control" name="liga" value="<?=$r['liga'];?>" readonly="true">
                               <!--  <span class="placeholder"></span> -->
                            </div>
                            <div class="col-md-10 form-group p_star">
                                <h5>ID</h5>
                                <input type="text" class="form-control" name="id" placeholder="ID" value="<?php rand(000,999); ?>" readonly="true">
                               <!--  <span class="placeholder"></span> -->
                            </div>
                            
                            <div class="col-md-10 form-group p_star">
                                <h5>NAMA</h5>
                                <input type="text" class="form-control" name="nama" placeholder="...">
                                <!-- <span class="placeholder"></span> -->
                            </div>
                            
                            <div class="col-md-10 form-group p_star">
                                <h5>klub</h5>
                                <input readonly="true" type="text" class="form-control" name="klub_b" placeholder="klub yang bertanding" value="<?=$r['partai_pertandingan'];?>">
                                <!-- <span class="placeholder"></span> -->
                            </div>
                            
                            <div class="col-md-10 form-group p_star">
                                <h5>tanggal & waktu</h5>
                                <input type="text" readonly="true" class="form-control" name="tanggal" value="<?=$r['waktu_pertandingan'];?>">
                            </div>                
                            <div class="col-md-10 form-group p_star">
                                <h5>stadion</h5>
                                <input class="form-control" readonly="true" name="stadion" placeholder="stadion" value="<?=$r['stadion'];?>">
                                <!-- <span class="placeholder"></span> -->
                            </div>

                            <div class="col-md-10 form-group p_star">
                                <h5>kelas</h5>
                                <select class="country_select" name="kelas" id="kelas">                       
                                    <option harga="<?=$r['harga_tiket'];?>">ekonomi</option>
                                    <option harga="<?=$r['harga_tiket2'];?>">vip</option>
                                    <!-- <option value="4">vvip</option> -->
                                </select>
                            </div>
                            
                            <div class="col-md-10 form-group p_star">
                                <h5>jumlah pembelian tiket</h5>
                                <input id="jumlah" type="number" class="form-control" name="jumlah" placeholder="..."oninput="naikjumlah()">
                                <!-- <span class="placeholder"></span> -->
                            </div>                 
                            <div class="col-md-10 form-group p_star">
                                <input type="text" id="harga" class="form-control" name="harga" placeholder="harga tiket" value="<?=$r['harga_tiket'];?>" hidden="true">
                            </div>

                            <div class="col-md-10 form-group p_star">
                                <h5>total harga</h5>
                                <input type="text" id="total" class="form-control" name="total" placeholder="total harga" value="" readonly="true">
                            </div>

                            <script>
                                function naikjumlah(){
                                    var k = $("#jumlah").val()
                                    var x = parseInt($("#kelas").find(":selected").attr("harga"))
                                    // var k = ;
                                    //var x = 7000;  
                                    var y = k * x;     
                                    document.getElementById('total').value=y;
                                }
                            </script>
                            
                            <div class="col-md-10 form-group p_star">
                                 <h5>pembayaran</h5>
                                <select class="country_select" name="pembayaran" id="pembayaran">
                                    <option>bca</option>
                                   <option>bri</option>
                                    <option>mandiri</option>
                                    <!-- <option value="4">vvip</option> -->
                                </select>
                            </div>

                         <div class="col-md-10 form-group p_star" align="right">
                            <input type="submit" name="submit" value="pesan">       
                        </div>
                        </form>                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

    <!-- start footer Area -->
<?php include "footer.php"; ?>
</body>

</html>
