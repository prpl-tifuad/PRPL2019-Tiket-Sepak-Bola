<?php
require 'headerA.php';
include("koneksi.php");

if( !isset($_GET['id']) ){
    header('Location: halamam_admin.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM pemesanan WHERE id='$id' ";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
</head>
<body>

<section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="active-banner-slider owl-carousel">
                        <!-- single-slide -->
                        <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h2>Football Ticket <br>League Indonesia!</h2>         
                                    
                                </div>
                            </div>
                        </div>
                            <br>
    <header>
        <h3>edit data costumer</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama" value="<?php echo $data['nama'] ?>" />
        </p>
        <p>
            <label for="klub_b">klub: </label>
            <input readonly="true" type="text" name="klub_b" placeholder="klub" value="<?php echo $data['klub_b'] ?>" />
        </p>
        <p>
            <label for="tanggal">tanngal: </label>
            <input readonly="true" type="text" name="tanggal" placeholder="tanggal" value="<?php echo $data['tanggal'] ?>" />
        </p>
        <p>
            <label for="stadion">stadion: </label>
            <input readonly="true" type="text" name="stadion" placeholder="stadion" value="<?php echo $data['stadion'] ?>" />
        </p>
        <p>
            <label for="kelas">kelas: </label>
            <input readonly="true" type="text" name="kelas" placeholder="kelas" value="<?php echo $data['kelas'] ?>" />
        </p>
        <p>
            <label for="total">total: </label>
            <input readonly="true" type="text" name="total" placeholder="total" value="<?php echo $data['total'] ?>" / >
        </p>
<!--        <p>
            <label for="pembayaran">pembayaran: </label>
            <input type="text" name="pembayaran" placeholder="pembayaran" value="<?php echo $data['pembayaran'] ?>" />
        </p>
-->        <p>
            <input type="hidden" name="liga" placeholder="liga" value="<?php echo $data['liga'] ?>" />
        </p>
        <p>
            <label for="pembayaran">mode pembayaran: </label>
            <?php $pembayaran = $data['pembayaran']; ?>
            <select name="pembayaran">
                <option <?php echo ($pembayaran == 'bca') ? "selected": "" ?>>bca</option>
                <option <?php echo ($pembayaran == 'bri') ? "selected": "" ?>>bri</option>
                <option <?php echo ($pembayaran == 'mandiri') ? "selected": "" ?>>mandiri</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>
                    </div></div></div></div></section>
    </body>
</html>