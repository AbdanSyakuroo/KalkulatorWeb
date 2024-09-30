<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        img{
            width: 50px;
        }
        
        .bank{
            background-color: wheat;
            width: 450px;
            box-shadow: 0 0 0 10px (0,0,0,0.1);
            border-radius: 10px;
            padding: 30px;
            margin-left: 420px;
        }

        .asik{
            width: 700px;
            margin-left: 280px;
        }

        .bayarinbank{
            margin-left: 610px;
        }

        
    </style>
</head>
<body>
<div class="metode">
                <h2 class="text-center mt-5">Metode Pembayaran</h2>
                <p class="text-center">Silahkan Pilih Metode Pembayaran</p>
                <div class="bank">
                    <h3><b>Virtual Account</b></h3>
                    <p>Minimal pembayaran Rp. 10.001</p>

                    <div class="form-check">
                        <img src="lgbsi.png" alt="">
                        <label class="form-check-label mt-1 ms-4 " for="flexRadioDefault1">
                            BSI Virtual Account
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            
                    </div>
                    <div class="form-check">
                        <img src="bca.png" alt="">
                        <label class="form-check-label mt-1 ms-4" for="flexRadioDefault2">
                            BCA Virtual Account
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    </div>
                    <div class="form-check">
                        <img src="mandiri.png" alt="">
                        <label class="form-check-label mt-1 ms-4 " for="flexRadioDefault2">
                            Mandiri Virtual Account
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    </div>
                </div>
            </div>


            <div class="doa mt-5">
                <h1 class="text-center"><b>Niat Zakat Mal</b></h1>
                <img class="asik text-center" src="niat.jpg" alt="">
                <p class="text-center"><b>"Nawaitu an ukhrija zakaata maali fardhan lillahi ta'ala" <br>
                </b>Aku niat mengeluarkan zakat hartaku fardhu karena Allah ta'ala</p>
               
            </div>

            <form action="akhir.php" method="post">
        <a href="akhir.php"> <input class="bayarinbank" type="submit" name="bayar" value="Bayar"></a>
        </form>'



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>