<?php

ini_set('display_errors', 0);
if (isset($_POST["harga"]) && isset($_POST["diskon"])) {
    $harga = $_POST["harga"];
    $diskon = $_POST["diskon"];

    $hargadsk = ($diskon / 100) * $harga;
    $hargaskrg = $harga - $hargadsk;
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
                        <a class="nav-link active" aria-current="page" href="#">Diskon</a>
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

        <b><h1>Kalkulator Diskon</h1></b>
        <form action="kalkudiskon.php" method="post">
            <div class="d-flex">
                <div class="hrg">
                    <label for="">Harga Awal (Rupiah)</label>
                    <br>
                    <input type="text" name="harga" style="width: 500px;">
                </div>
                <div class="dsk ms-5">
                    <label for="">Diskon</label>
                    <br>
                    <input type="text" name="diskon" style="width: 500px;">
                </div>
            </div>


            <br>
            <input type="submit" value="Hitung Diskonnya" class="warna">
        </form>

        
        <div class="hasil">
            <?php 
            if (isset($_POST["harga"]) && isset($_POST["diskon"])) {
                echo '<h3 class="mt-3">Hasil Anda</h3>
                <table class="table table-bordered text-center">
                <tbody>
                  <tr>
                    <td>Harga Sebelum Diskon</td>
                    <td> '.$harga .'</td>
                  
                  </tr>
                  <tr>
                    <td class="pt-3">Besar Diskon</td>
                    <td>Diskon ('.$diskon.'%) <br>
                        Rp.'.$hargadsk.'
                    </td>
                    
                  </tr>
                  <tr>
                    <td>Harga Setelah Diskon </td>
                    <td>Rp.'.$hargaskrg.'</td>
                  </tr>
                </tbody>
              </table>';
            }
            ?>
        
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>