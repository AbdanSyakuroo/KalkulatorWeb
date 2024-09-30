<?php
ini_set('display_errors', 0);
if (isset($_POST["perbulan"]) && isset($_POST["thr"])) {
    $pendapatan = $_POST["perbulan"];
    $bonus = $_POST["thr"];

    $setaun = $pendapatan * 12;
    $total = $pendapatan + $bonus;


    if ($setaun >= 82312725) {
        $zakat = $total * (25 / 1000);
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
      .kontak{
            background-color: antiquewhite;
            padding: 30px;
            border-radius: 10px;
        }
        .warna{
            background-color: blue;
            color: white;
            padding: 10px;
            border-radius: 10px;
        }
        .bayarinbank{
            margin-left: 470px;
        }
    </style>
</head>

<body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="#">Kalkulator</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-5">
                    <li class="nav-item ms-3">
                        <a class="nav-link active" aria-current="page" href="kalkudiskon.php">Diskon</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="kalkuzakat.php">Zakat</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->



    <div class="container mt-5 kontak">

        <h1>Kalkulator Zakat</h1>
        <form action="kalkuzakat.php" method="post">
            <div class="d-flex">
                <div class="hrg">
                    <label for="">Jumlah Pendapatan Perbulan</label>
                    <br>
                    <input type="text" name="perbulan"  style="width: 500px;" >
                </div>
                <div class="dsk ms-5">
                    <label for="">Bonus, THR, dan lainnya</label>
                    <br>
                    <input type="text" name="thr"  style="width: 500px;">
                </div>
            </div>


            <br>
            <input type="submit" value="Hitung Zakat" name="submit" class="warna">
        </form>

        <div class="hasil">
            <?php
            if (isset($_POST["perbulan"]) && isset($_POST["thr"])) {
                if ($setaun >= 82312725) {
                    echo '<h3 class="text-center mt-5">Jumlah Zakat Penghasilan Anda</h3>
                     <h1 class="text-center mt-2 mb-2">' . $zakat . '</h1>

                    <table class="table table-borderless text-center tabelbu">
                    <tbody>
                    <tr>
                        <td>Pendapatan per bulan : </td>
                        <td>Bonus, THR, dan lainnya :</td>
                    </tr>
                    <tr>
                        <td>Rp. ' . $pendapatan . '</td>
                        <td>Rp. ' . $bonus . '</td>
                    </tr>
                </tbody>
            </table> <br>
            <form action="pembayaran.php" method="post">
        <a href="pembayaran.php"> <input class="bayarinbank" type="submit" name="bayar" value="Pilih Pembayaran"></a>
        </form>';
                    echo '';
                } else if ($setaun < 82312725) {
                    echo '<h3 class="text-center mt-5">Jumlah Zakat Penghasilan Anda</h3>
                     <h1 class="text-center mt-2 mb-3"> Rp. 0</h1>
                     <p  class="text-center mt-2"> Penghasilan anda belum mencapai nishab. <br>
                     Anda tetap bisa menyempurnakan niat baik dengan bersedekah</p>
                    <table class="table table-borderless text-center tabelbu">
                    <tbody>
                    <tr>
                       <td>Pendapatan per bulan : </td>
                        <td>Bonus, THR, dan lainnya :</td>
                    </tr>
                    <tr>
                    <td>Rp. ' . $pendapatan . '</td>
                    <td>Rp. ' . $bonus . '</td>
                    </tr>
                </tbody>
            </table>';
                }
            }
            ?>
            
            </div>


          
        </div>

        

    




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>