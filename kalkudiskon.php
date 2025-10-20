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
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Diskon - Profesional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-color: #1e7e34;
            --primary-dark: #155724;
            --primary-light: #28a745;
            --secondary-color: #20c997;
            --accent-color: #ff6b6b;
            --accent-light: #ff8787;
            --text-dark: #212529;
            --text-muted: #6c757d;
            --bg-light: #f8f9fa;
            --card-bg: #ffffff;
            --success-bg: #d4edda;
            --discount-color: #e74c3c;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #fff5f5 0%, #ffe3e3 50%, #fff5f5 100%);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            min-height: 100vh;
            color: var(--text-dark);
        }

        /* Navbar Professional - RED THEME FOR DISCOUNT */
        .navbar {
            background: linear-gradient(135deg, #c0392b 0%, #e74c3c 100%) !important;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            padding: 1.2rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand {
            color: white !important;
            font-weight: 700;
            font-size: 1.5rem;
            letter-spacing: -0.5px;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        .navbar-brand i {
            font-size: 1.6rem;
            margin-right: 0.5rem;
            vertical-align: middle;
        }

        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.3);
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            font-weight: 500;
            padding: 0.6rem 1.2rem !important;
            border-radius: 8px;
            margin: 0 0.3rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.15);
            color: white !important;
        }

        .nav-link.active {
            background-color: rgba(255, 255, 255, 0.25);
            color: white !important;
        }

        /* Main Container */
        .main-container {
            padding: 3rem 0;
        }

        .calculator-card {
            background: var(--card-bg);
            border-radius: 24px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            padding: 3rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        /* Header Section */
        .calculator-header {
            text-align: center;
            margin-bottom: 2.5rem;
            padding-bottom: 2rem;
            border-bottom: 2px solid var(--bg-light);
        }

        .calculator-header h1 {
            color: var(--accent-color);
            font-weight: 700;
            font-size: 2.2rem;
            margin-bottom: 0.8rem;
            letter-spacing: -0.5px;
        }

        .calculator-header p {
            color: var(--text-muted);
            font-size: 1rem;
            margin: 0;
        }

        /* Form Styling */
        .form-section {
            margin-bottom: 2rem;
        }

        .form-label {
            color: var(--text-dark);
            font-weight: 600;
            margin-bottom: 0.6rem;
            font-size: 0.95rem;
            display: block;
        }

        .form-label i {
            color: var(--accent-color);
            margin-right: 0.4rem;
            font-size: 1.1rem;
        }

        .input-group {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .input-group:focus-within {
            box-shadow: 0 4px 16px rgba(231, 76, 60, 0.15);
            transform: translateY(-1px);
        }

        .input-group-text {
            background-color: var(--bg-light);
            border: 2px solid #dee2e6;
            border-right: none;
            color: var(--accent-color);
            font-weight: 700;
            padding: 0.75rem 1.2rem;
            font-size: 1.1rem;
        }

        .form-control {
            border: 2px solid #dee2e6;
            border-left: none;
            padding: 0.75rem 1.2rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: white;
        }

        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: none;
            background-color: white;
        }

        .input-group:focus-within .input-group-text {
            border-color: var(--accent-color);
        }

        /* Button Styling */
        .btn-calculate {
            background: linear-gradient(135deg, var(--accent-color) 0%, var(--accent-light) 100%);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 1rem 3rem;
            font-weight: 600;
            font-size: 1.1rem;
            box-shadow: 0 4px 16px rgba(231, 76, 60, 0.25);
            transition: all 0.3s ease;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            margin: 2rem auto 0;
        }

        .btn-calculate:hover {
            background: linear-gradient(135deg, var(--accent-light) 0%, var(--accent-color) 100%);
            box-shadow: 0 6px 24px rgba(231, 76, 60, 0.35);
            transform: translateY(-2px);
        }

        .btn-calculate:active {
            transform: translateY(0);
        }

        /* Result Card Styling */
        .result-card {
            background: linear-gradient(135deg, var(--accent-color) 0%, var(--accent-light) 100%);
            border-radius: 20px;
            padding: 2.5rem;
            margin-top: 2.5rem;
            color: white;
            box-shadow: 0 10px 40px rgba(231, 76, 60, 0.25);
            animation: slideUp 0.5s ease;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .result-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .result-header h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .result-header i {
            font-size: 2rem;
        }

        /* Savings Badge */
        .savings-badge {
            background: rgba(255, 255, 255, 0.95);
            color: var(--accent-color);
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            margin-bottom: 2rem;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .savings-label {
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
            opacity: 0.8;
        }

        .savings-amount {
            font-size: 3rem;
            font-weight: 700;
            margin: 0.5rem 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            letter-spacing: -1px;
        }

        .savings-percentage {
            font-size: 1.5rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
        }

        /* Result Details */
        .result-details {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 16px;
            padding: 2rem;
            backdrop-filter: blur(10px);
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .detail-row:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .detail-row.final {
            margin-top: 1rem;
            padding-top: 1.5rem;
            border-top: 2px solid rgba(255, 255, 255, 0.3);
            font-size: 1.2rem;
            font-weight: 700;
        }

        .detail-label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
        }

        .detail-value {
            font-weight: 600;
            font-size: 1.1rem;
        }

        /* Center Content Helper */
        .text-center-btn {
            text-align: center;
        }

        /* Discount Badge */
        .discount-badge {
            display: inline-block;
            background: white;
            color: var(--accent-color);
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-weight: 700;
            font-size: 1.1rem;
            margin-left: 0.5rem;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .calculator-card {
                padding: 2rem;
            }
            
            .savings-amount {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .main-container {
                padding: 2rem 0;
            }

            .calculator-card {
                padding: 1.5rem;
                border-radius: 16px;
            }

            .calculator-header h1 {
                font-size: 1.8rem;
            }

            .savings-amount {
                font-size: 2rem;
            }

            .btn-calculate {
                width: 100%;
                justify-content: center;
            }

            .detail-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }

            .detail-row.final {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 576px) {
            .calculator-card {
                padding: 1.2rem;
            }

            .result-card {
                padding: 1.5rem;
            }

            .result-details {
                padding: 1.2rem;
            }

            .navbar-brand {
                font-size: 1.2rem;
            }

            .savings-badge {
                padding: 1.5rem;
            }
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <!-- Navbar - RED THEME FOR DISCOUNT -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                Kalkulator Diskon
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="kalkudiskon.php">
                            <i class="bi bi-tag-fill"></i>Diskon
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kalkuzakat.php">
                            <i class="bi bi-cash-coin"></i>Zakat
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container main-container">
        <div class="calculator-card">
            <div class="calculator-header">
                <h1><i class="bi bi-tags-fill"></i> Kalkulator Diskon</h1>
                <p>Hitung berapa besar potongan harga dan harga akhir dengan mudah</p>
            </div>

            <form action="kalkudiskon.php" method="post">
                <div class="row form-section">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <label for="harga" class="form-label">
                            <i class="bi bi-cash-stack"></i>Harga Awal (Rupiah)
                        </label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Contoh: 500000" required min="0">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="diskon" class="form-label">
                            <i class="bi bi-percent"></i>Persentase Diskon
                        </label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="diskon" name="diskon" placeholder="Contoh: 25" required min="0" max="100">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>

                <div class="text-center-btn">
                    <button type="submit" name="submit" class="btn-calculate">
                        <i class="bi bi-calculator"></i>
                        Hitung Diskon Sekarang
                    </button>
                </div>
            </form>

            <!-- Result Section -->
            <?php
            if (isset($_POST["harga"]) && isset($_POST["diskon"])) {
                echo '
                <div class="result-card">
                    <div class="result-header">
                        <h3>
                            <i class="bi bi-check-circle-fill"></i>
                            Hasil Perhitungan Diskon
                        </h3>
                    </div>
                    
                    <div class="savings-badge">
                        <div class="savings-label">Anda Hemat</div>
                        <div class="savings-amount">Rp ' . number_format($hargadsk, 0, ',', '.') . '</div>
                        <div class="savings-percentage">
                            <i class="bi bi-arrow-down-circle-fill"></i>
                            ' . $diskon . '% OFF
                        </div>
                    </div>
                    
                    <div class="result-details">
                        <div class="detail-row">
                            <span class="detail-label">
                                <i class="bi bi-tag"></i>
                                Harga Sebelum Diskon
                            </span>
                            <span class="detail-value">Rp ' . number_format($harga, 0, ',', '.') . '</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">
                                <i class="bi bi-dash-circle"></i>
                                Potongan Harga
                            </span>
                            <span class="detail-value">
                                - Rp ' . number_format($hargadsk, 0, ',', '.') . '
                                <span class="discount-badge">' . $diskon . '%</span>
                            </span>
                        </div>
                        <div class="detail-row final">
                            <span class="detail-label">
                                <i class="bi bi-cash-coin"></i>
                                Harga Setelah Diskon
                            </span>
                            <span class="detail-value">Rp ' . number_format($hargaskrg, 0, ',', '.') . '</span>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>