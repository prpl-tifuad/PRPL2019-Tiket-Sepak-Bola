<?php require 'headerA.php' ;
include("koneksi.php"); ?>



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
    <table border="3">
    <thead>
    <tr>
        <th>id</th>
        <th>nama</th>
        <th>klub yang bertanding</th>
        <th>tanggal & waktu</th>
        <th>stadion</th>
        <th>kelas</th>
        <th>total harga</th>
        <th>mode pembayaran</th>
        <th>liga</th>
        <th>opsi</th>
    </tr>
    </thead>

    <tbody>
        <?php
        $sql = "SELECT * FROM pemesanan ";
        $query = mysqli_query($koneksi, $sql);

        while($data = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$data['id']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['klub_b']."</td>";
            echo "<td>".$data['tanggal']."</td>";
            echo "<td>".$data['stadion']."</td>";
            echo "<td>".$data['kelas']."</td>";
            echo "<td>".$data['total']."</td>";
            echo "<td>".$data['pembayaran']."</td>";
            echo "<td>".$data['liga']."</td>";

            echo "<td>";
            echo "<a href='edit_admin.php?id=".$data['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$data['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </tbody>
    </table>
            <p>total: <?php echo mysqli_num_rows($query) ?> </p>        
                                
                    </div>
                </div>
            
    </div></div></section>

</body>
</html>