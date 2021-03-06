<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Karyawan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Perekrutan Karyawan PT.KECAP ABC</h2>
                        <h4>Jalan Jendral Sudirman <br> Jakarta, 21231</h4>
                        <hr>
                        <h3>DATA SELURUH KARYAWAN TETAP</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th width="18%">Nama</th>
                                    <th>Alamat</th>
                                    <th width="10%">Tgl Lahir</th>
                                    <th><center>No.Telp</center></th>
                                    <th><center>Pendidikan Terakhir</center></th>
                                    <th><center>Tgl Masuk</center></th>
                                </tr>
                                </thead>
                            <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_karyawan";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['tgl_lahir'] ?></td>
                                    <td><?= $data['no_telp'] ?></td>
                                    <td><?= $data['p_terakhir'] ?></td>
                                    <td><?= $data['tgl_masuk'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                            </tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                       Jakarta<?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>PT.KECAP ABC<strong></u><br>
                                    </td>
                                </tr>
                            </tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>