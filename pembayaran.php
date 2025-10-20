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

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Pembayaran Zakat</title>
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
            --border-color: #dee2e6;
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
            padding: 2rem 0;
        }

        /* Progress Steps */
        .progress-steps {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 3rem;
            padding: 0 1rem;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            flex: 1;
            max-width: 150px;
        }

        .step-number {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: white;
            border: 3px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--text-muted);
            margin-bottom: 0.5rem;
            transition: all 0.3s ease;
            z-index: 2;
        }

        .step.active .step-number {
            background: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
            box-shadow: 0 4px 12px rgba(30, 126, 52, 0.3);
        }

        .step.completed .step-number {
            background: var(--primary-light);
            border-color: var(--primary-light);
            color: white;
        }

        .step-label {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-muted);
            text-align: center;
        }

        .step.active .step-label {
            color: var(--primary-color);
        }

        .step-line {
            position: absolute;
            top: 25px;
            left: 50%;
            width: 100%;
            height: 3px;
            background: var(--border-color);
            z-index: 1;
        }

        .step.completed .step-line {
            background: var(--primary-light);
        }

        .step:last-child .step-line {
            display: none;
        }

        /* Main Container */
        .main-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Page Header */
        .page-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .page-header h1 {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 2.2rem;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .page-header p {
            color: var(--text-muted);
            font-size: 1rem;
        }

        /* Payment Card */
        .payment-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            padding: 2.5rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .payment-card h3 {
            color: var(--text-dark);
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .payment-card .subtitle {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        /* Payment Option */
        .payment-option {
            background: var(--bg-light);
            border: 2px solid var(--border-color);
            border-radius: 12px;
            padding: 1.2rem;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .payment-option:hover {
            border-color: var(--primary-light);
            background: #f0f9f4;
            transform: translateX(5px);
            box-shadow: 0 4px 12px rgba(30, 126, 52, 0.1);
        }

        .payment-option input[type="radio"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
            accent-color: var(--primary-color);
        }

        .payment-option input[type="radio"]:checked ~ .bank-logo {
            border-color: var(--primary-color);
        }

        .bank-logo {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            object-fit: contain;
            background: white;
            padding: 8px;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .bank-info {
            flex: 1;
        }

        .bank-name {
            font-weight: 600;
            color: var(--text-dark);
            font-size: 1.05rem;
            margin-bottom: 0.2rem;
        }

        .bank-description {
            color: var(--text-muted);
            font-size: 0.85rem;
        }

        .payment-option:has(input:checked) {
            border-color: var(--primary-color);
            background: linear-gradient(135deg, #f0f9f4 0%, #e8f5e9 100%);
            box-shadow: 0 4px 16px rgba(30, 126, 52, 0.15);
        }

        /* Doa Section */
        .doa-section {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            padding: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .doa-section h2 {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .doa-image {
            max-width: 100%;
            height: auto;
            border-radius: 16px;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }


        .doa-latin {
            font-style: italic;
            color: var(--text-dark);
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 1.05rem;
        }

        .doa-translation {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        .doa-content {
            background: linear-gradient(135deg, #f0f9f4 0%, #e8f5e9 100%);
            border-radius: 16px;
            padding: 2rem;
            border: 2px solid var(--primary-light);
        }

        /* Button */
        .btn-payment {
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
            margin-top: 2rem;
            text-decoration: none;
        }

        .btn-payment:hover {
            background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-color) 100%);
            box-shadow: 0 6px 24px rgba(30, 126, 52, 0.35);
            transform: translateY(-2px);
            color: white;
        }

        .btn-payment:active {
            transform: translateY(0);
        }

        .button-container {
            text-align: center;
        }

        /* Info Box */
        .info-box {
            background: linear-gradient(135deg, #fff8e1 0%, #fff3cd 100%);
            border: 2px solid var(--accent-color);
            border-radius: 12px;
            padding: 1rem 1.2rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .info-box i {
            font-size: 1.5rem;
            color: #f57c00;
            flex-shrink: 0;
        }

        .info-box-text {
            font-size: 0.9rem;
            color: #856404;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 1.8rem;
                flex-direction: column;
            }

            .payment-card {
                padding: 1.5rem;
            }

            .doa-section {
                padding: 1.5rem;
            }

            .doa-section h2 {
                font-size: 1.5rem;
                flex-direction: column;
            }

            .doa-arabic {
                font-size: 1.2rem;
            }

            .payment-option {
                padding: 1rem;
            }

            .bank-logo {
                width: 50px;
                height: 50px;
            }

            .btn-payment {
                width: 100%;
                justify-content: center;
            }

            .progress-steps {
                overflow-x: auto;
                justify-content: flex-start;
            }

            .step {
                min-width: 100px;
            }
        }

        @media (max-width: 576px) {
            body {
                padding: 1rem 0;
            }

            .payment-card,
            .doa-section {
                border-radius: 16px;
                padding: 1.2rem;
            }

            .doa-content {
                padding: 1.2rem;
            }

            .step-number {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }

            .step-label {
                font-size: 0.75rem;
            }
        }

        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .payment-card,
        .doa-section {
            animation: fadeIn 0.5s ease;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <!-- Progress Steps -->
        <div class="progress-steps">
            <div class="step completed">
                <div class="step-number"><i class="bi bi-check-lg"></i></div>
                <div class="step-label">Hitung Zakat</div>
                <div class="step-line"></div>
            </div>
            <div class="step active">
                <div class="step-number">2</div>
                <div class="step-label">Pilih Pembayaran</div>
                <div class="step-line"></div>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <div class="step-label">Konfirmasi</div>
            </div>
        </div>

        <!-- Page Header -->
        <div class="page-header">
            <h1>
                <i class="bi bi-credit-card-2-front"></i>
                Metode Pembayaran
            </h1>
            <p>Silakan pilih metode pembayaran yang Anda inginkan</p>
        </div>

        <!-- Payment Method Card -->
        <div class="payment-card">
            <h3>
                <i class="bi bi-bank"></i>
                Virtual Account
            </h3>
            <p class="subtitle">
                <i class="bi bi-info-circle"></i>
                Pilih Metode Pembayaran yang Tersedia
            </p>

            <div class="info-box">
                <i class="bi bi-shield-check"></i>
                <div class="info-box-text">
                    <strong>Pembayaran aman & mudah.</strong> Transfer langsung ke Virtual Account pilihan Anda.
                </div>
            </div>

            <form action="akhir.php" method="post" id="paymentForm">
                <!-- BSI -->
                <label class="payment-option">
                    <input type="radio" name="payment_method" value="bsi" required>
                    <img src="lgbsi.png" alt="BSI Logo" class="bank-logo" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2260%22 height=%2260%22%3E%3Crect fill=%22%2328a745%22 width=%2260%22 height=%2260%22 rx=%225%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dy=%22.3em%22 fill=%22white%22 font-size=%2220%22 font-weight=%22bold%22%3EBSI%3C/text%3E%3C/svg%3E'">
                    <div class="bank-info">
                        <div class="bank-name">BSI Virtual Account</div>
                        <div class="bank-description">Bank Syariah Indonesia - Proses cepat & mudah</div>
                    </div>
                    <i class="bi bi-chevron-right" style="color: var(--text-muted);"></i>
                </label>

                <!-- BCA -->
                <label class="payment-option">
                    <input type="radio" name="payment_method" value="bca" checked>
                    <img src="bca.png" alt="BCA Logo" class="bank-logo" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2260%22 height=%2260%22%3E%3Crect fill=%22%230066ae%22 width=%2260%22 height=%2260%22 rx=%225%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dy=%22.3em%22 fill=%22white%22 font-size=%2218%22 font-weight=%22bold%22%3EBCA%3C/text%3E%3C/svg%3E'">
                    <div class="bank-info">
                        <div class="bank-name">BCA Virtual Account</div>
                        <div class="bank-description">Bank Central Asia - Terpercaya & aman</div>
                    </div>
                    <i class="bi bi-chevron-right" style="color: var(--text-muted);"></i>
                </label>

                <!-- Mandiri -->
                <label class="payment-option">
                    <input type="radio" name="payment_method" value="mandiri">
                    <img src="mandiri.png" alt="Mandiri Logo" class="bank-logo" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2260%22 height=%2260%22%3E%3Crect fill=%22%23ffd700%22 width=%2260%22 height=%2260%22 rx=%225%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dy=%22.3em%22 fill=%22%23003d7a%22 font-size=%2214%22 font-weight=%22bold%22%3EMANDIRI%3C/text%3E%3C/svg%3E'">
                    <div class="bank-info">
                        <div class="bank-name">Mandiri Virtual Account</div>
                        <div class="bank-description">Bank Mandiri - Jaringan luas di seluruh Indonesia</div>
                    </div>
                    <i class="bi bi-chevron-right" style="color: var(--text-muted);"></i>
                </label>
            </form>
        </div>

        <!-- Doa Section -->
        <div class="doa-section">
            <h2>
                <i class="bi bi-book"></i>
                Niat Zakat Mal
            </h2>
            <img src="niat.jpg" alt="Niat Zakat" class="doa-image" onerror="this.style.display='none'">
            
            <div class="doa-content">
                <div class="doa-latin">
                    "Nawaitu an ukhrija zakaata maali fardhan lillahi ta'ala"
                </div>
                <div class="doa-translation">
                    Artinya: "Aku niat mengeluarkan zakat hartaku fardhu karena Allah Ta'ala"
                </div>
            </div>
        </div>

        <!-- Button -->
        <div class="button-container">
            <button type="submit" form="paymentForm" class="btn-payment">
                <i class="bi bi-check-circle-fill"></i>
                Lanjutkan Pembayaran
            </button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script>
        // Add smooth interaction for payment options
        document.querySelectorAll('.payment-option').forEach(option => {
            option.addEventListener('click', function() {
                const radio = this.querySelector('input[type="radio"]');
                radio.checked = true;
            });
        });

        // Form validation
        document.getElementById('paymentForm').addEventListener('submit', function(e) {
            const selectedPayment = document.querySelector('input[name="payment_method"]:checked');
            if (!selectedPayment) {
                e.preventDefault();
                alert('Silakan pilih metode pembayaran terlebih dahulu');
            }
        });
    </script>
</body>
</html>