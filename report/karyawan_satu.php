<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Karyawan Tetap</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_karyawan WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Perekrutan Karyawan PT.KECAP ABC </h2>
                        <h4>Jalan Jendral Sudirman<br>Jakarta, 21231</h4>
                        <hr>
                        <h3>DATA KARYAWAN TETAP</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
                                <tr>
                                    <td>Nama</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Alamat</td> <td><?= $data['alamat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tgl Lahir</td> <td><?= $data['tgl_lahir'] ?></td>
                                </tr>
                                <tr>
                                    <td>No.Telp</td> <td><?= $data['no_telp'] ?></td>
                                </tr>
                                <tr>
                                    <td>Pendidikan Terakhir</td> <td><?= $data['p_terakhir'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tgl Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Jakarta  <?= date("d-m-Y") ?>
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