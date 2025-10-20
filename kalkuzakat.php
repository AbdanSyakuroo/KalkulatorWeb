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
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Zakat Penghasilan - Profesional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-color: #1e7e34;
            --primary-dark: #155724;
            --primary-light: #28a745;
            --secondary-color: #20c997;
            --accent-color: #ffc107;
            --text-dark: #212529;
            --text-muted: #6c757d;
            --bg-light: #f8f9fa;
            --card-bg: #ffffff;
            --success-bg: #d4edda;
            --warning-bg: #fff3cd;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #e8f5e9 0%, #f1f8e9 50%, #e8f5e9 100%);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            min-height: 100vh;
            color: var(--text-dark);
        }

        /* Navbar Professional */
        .navbar {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%) !important;
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
            color: var(--primary-color);
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
            color: var(--primary-color);
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
            box-shadow: 0 4px 16px rgba(30, 126, 52, 0.15);
            transform: translateY(-1px);
        }

        .input-group-text {
            background-color: var(--bg-light);
            border: 2px solid #dee2e6;
            border-right: none;
            color: var(--primary-color);
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
            border-color: var(--primary-color);
            box-shadow: none;
            background-color: white;
        }

        .input-group:focus-within .input-group-text {
            border-color: var(--primary-color);
        }

        /* Button Styling - FIXED */
        .btn-calculate {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 1rem 3rem;
            font-weight: 600;
            font-size: 1.1rem;
            box-shadow: 0 4px 16px rgba(30, 126, 52, 0.25);
            transition: all 0.3s ease;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            margin: 2rem auto 0;
        }

        .btn-calculate:hover {
            background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-color) 100%);
            box-shadow: 0 6px 24px rgba(30, 126, 52, 0.35);
            transform: translateY(-2px);
        }

        .btn-calculate:active {
            transform: translateY(0);
        }

        /* Result Card Styling */
        .result-card {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
            border-radius: 20px;
            padding: 2.5rem;
            margin-top: 2.5rem;
            color: white;
            box-shadow: 0 10px 40px rgba(30, 126, 52, 0.25);
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
            margin-bottom: 1.5rem;
        }

        .result-header h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            opacity: 0.95;
        }

        .result-header i {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            display: block;
        }

        .result-amount {
            text-align: center;
            font-size: 3.5rem;
            font-weight: 700;
            margin: 1.5rem 0;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.15);
            letter-spacing: -1px;
        }

        .result-details {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 16px;
            padding: 2rem;
            margin-top: 2rem;
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
            font-weight: 700;
            font-size: 1.1rem;
        }

        .detail-label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
        }

        .detail-value {
            font-weight: 600;
            font-size: 1.05rem;
        }

        /* Button Payment - FIXED */
        .btn-payment {
            background: white;
            color: var(--primary-color);
            border: 2px solid white;
            border-radius: 12px;
            padding: 1rem 2.5rem;
            font-weight: 600;
            font-size: 1.05rem;
            margin-top: 2rem;
            transition: all 0.3s ease;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            text-decoration: none;
        }

        .btn-payment:hover {
            background: var(--bg-light);
            color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .btn-payment:active {
            transform: translateY(0);
        }

        /* Alert Info Custom */
        .alert-info-custom {
            background: linear-gradient(135deg, #fff8e1 0%, #fff3cd 100%);
            border: 2px solid var(--accent-color);
            border-radius: 16px;
            padding: 1.5rem;
            color: #856404;
            margin: 1.5rem 0;
            display: flex;
            align-items: start;
            gap: 1rem;
        }

        .alert-info-custom i {
            font-size: 2rem;
            flex-shrink: 0;
        }

        .alert-info-custom strong {
            display: block;
            margin-bottom: 0.5rem;
            color: #664d03;
        }

        /* Center Content Helper */
        .text-center-btn {
            text-align: center;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .calculator-card {
                padding: 2rem;
            }
            
            .result-amount {
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

            .result-amount {
                font-size: 2rem;
            }

            .btn-calculate {
                width: 100%;
                justify-content: center;
            }

            .btn-payment {
                width: 100%;
                justify-content: center;
            }

            .detail-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
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
        }

        /* Loading Animation */
        .form-control:focus {
            animation: pulse 0.3s ease;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(30, 126, 52, 0.4); }
            100% { box-shadow: 0 0 0 8px rgba(30, 126, 52, 0); }
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Remove default button styles */
        button, input[type="submit"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                Kalkulator Zakat
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="kalkudiskon.php">
                            <i class="bi bi-tag-fill"></i>Diskon
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="kalkuzakat.php">
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
                <h1><i class="bi bi-cash-stack"></i> Kalkulator Zakat Penghasilan</h1>
                <p>Hitung zakat penghasilan Anda dengan mudah dan akurat sesuai syariat Islam</p>
            </div>

            <form action="kalkuzakat.php" method="post">
                <div class="row form-section">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <label for="perbulan" class="form-label">
                            <i class="bi bi-wallet2"></i>Jumlah Pendapatan Per Bulan
                        </label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control" id="perbulan" name="perbulan" placeholder="Contoh: 10000000" required min="0">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="thr" class="form-label">
                            <i class="bi bi-gift-fill"></i>Bonus, THR, dan Lainnya
                        </label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control" id="thr" name="thr" placeholder="Contoh: 5000000" required min="0">
                        </div>
                    </div>
                </div>

                <div class="text-center-btn">
                    <button type="submit" name="submit" class="btn-calculate">
                        <i class="bi bi-calculator"></i>
                        Hitung Zakat Sekarang
                    </button>
                </div>
            </form>

            <!-- Result Section -->
            <?php
            if (isset($_POST["perbulan"]) && isset($_POST["thr"])) {
                if ($setaun >= 82312725) {
                    echo '
                    <div class="result-card">
                        <div class="result-header">
                            <i class="bi bi-check-circle-fill"></i>
                            <h3>Jumlah Zakat Penghasilan Anda</h3>
                        </div>
                        <div class="result-amount">Rp ' . number_format($zakat, 0, ',', '.') . '</div>
                        
                        <div class="result-details">
                            <div class="detail-row">
                                <span class="detail-label">
                                    <i class="bi bi-calendar-month"></i>
                                    Pendapatan Per Bulan
                                </span>
                                <span class="detail-value">Rp ' . number_format($pendapatan, 0, ',', '.') . '</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">
                                    <i class="bi bi-gift"></i>
                                    Bonus & THR
                                </span>
                                <span class="detail-value">Rp ' . number_format($bonus, 0, ',', '.') . '</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">
                                    <i class="bi bi-cash-stack"></i>
                                    Total Pendapatan Tahunan
                                </span>
                                <span class="detail-value">Rp ' . number_format($setaun, 0, ',', '.') . '</span>
                            </div>
                        </div>
                        
                        <div class="text-center-btn">
                            <form action="pembayaran.php" method="post" style="display: inline;">
                                <button type="submit" name="bayar" class="btn-payment">
                                    <i class="bi bi-credit-card-fill"></i>
                                    Pilih Metode Pembayaran
                                </button>
                            </form>
                        </div>
                    </div>';
                } else {
                    echo '
                    <div class="result-card">
                        <div class="result-header">
                            <i class="bi bi-info-circle-fill"></i>
                            <h3>Jumlah Zakat Penghasilan Anda</h3>
                        </div>
                        <div class="result-amount">Rp 0</div>
                        
                        <div class="alert-info-custom">
                            <i class="bi bi-exclamation-triangle-fill"></i>
                            <div>
                                <strong>Penghasilan Anda belum mencapai nishab</strong>
                                Nishab zakat penghasilan adalah <strong>Rp 82.312.725</strong> per tahun (setara dengan 85 gram emas).<br>
                                Penghasilan tahunan Anda: <strong>Rp ' . number_format($setaun, 0, ',', '.') . '</strong><br><br>
                                Anda tetap bisa menyempurnakan niat baik dengan bersedekah.
                            </div>
                        </div>
                        
                        <div class="result-details">
                            <div class="detail-row">
                                <span class="detail-label">
                                    <i class="bi bi-calendar-month"></i>
                                    Pendapatan Per Bulan
                                </span>
                                <span class="detail-value">Rp ' . number_format($pendapatan, 0, ',', '.') . '</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">
                                    <i class="bi bi-gift"></i>
                                    Bonus & THR
                                </span>
                                <span class="detail-value">Rp ' . number_format($bonus, 0, ',', '.') . '</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">
                                    <i class="bi bi-cash-stack"></i>
                                    Total Pendapatan Tahunan
                                </span>
                                <span class="detail-value">Rp ' . number_format($setaun, 0, ',', '.') . '</span>
                            </div>
                        </div>
                    </div>';
                }
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>