

<?php
require "header.php";
require "koneksi.php";
    $data=$koneksi->query("SELECT * FROM pertandingan WHERE kode_pertandingan='{$_GET['kode_pertandingan']}'");
    $r=$data->fetch_array();
    ?>
        <!-- Start Banner Area -->
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
                                <input type="text" class="form-control" name="id" placeholder="ID" value="<?php echo rand(000,999); ?>" readonly="true">
                               <!--  <span class="placeholder"></span> -->
                            </div>
                            
                            <div class="col-md-10 form-group p_star">
                                <h5>NAMA</h5>
                                <input type="text" class="form-control" name="nama" placeholder="...">
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
<?php include "footer.php"; ?>
</body>
</html>