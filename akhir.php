<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .fade{
            margin-left: 180px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="alert alert-success alert-dismissible fade show text-center" style="width: 800px;" role="alert" id="liveAlertPlaceholder">
    <h3><b>Anda Sudah Melaksanakan Zakat Mal</b></h1>
    <h4><b>Alhamdulillah</b></h3>
    <a href="kalkuzakat.php"><button class="mt-2">Kembali</button></a>
    </div>
    </div>

</body>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Zakat Berhasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-color: #1e7e34;
            --primary-dark: #155724;
            --primary-light: #28a745;
            --success-color: #28a745;
            --success-light: #d4edda;
            --text-dark: #212529;
            --text-muted: #6c757d;
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
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        /* Success Container */
        .success-container {
            max-width: 600px;
            width: 100%;
            animation: slideUp 0.6s ease;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Success Card */
        .success-card {
            background: white;
            border-radius: 24px;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.1);
            padding: 3rem 2.5rem;
            text-align: center;
            border: 1px solid rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }

        /* Decorative Elements */
        .success-card::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, var(--primary-light), var(--success-color));
            border-radius: 50%;
            opacity: 0.1;
        }

        .success-card::after {
            content: '';
            position: absolute;
            bottom: -80px;
            left: -80px;
            width: 160px;
            height: 160px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
            border-radius: 50%;
            opacity: 0.1;
        }

        /* Success Icon */
        .success-icon {
            width: 120px;
            height: 120px;
            margin: 0 auto 2rem;
            background: linear-gradient(135deg, var(--success-color) 0%, var(--primary-light) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 24px rgba(40, 167, 69, 0.3);
            animation: scaleIn 0.5s ease 0.3s both;
            position: relative;
            z-index: 1;
        }

        @keyframes scaleIn {
            from {
                transform: scale(0);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .success-icon i {
            font-size: 4rem;
            color: white;
            animation: checkmark 0.6s ease 0.6s both;
        }

        @keyframes checkmark {
            0% {
                transform: scale(0) rotate(-45deg);
            }
            50% {
                transform: scale(1.2) rotate(10deg);
            }
            100% {
                transform: scale(1) rotate(0deg);
            }
        }

        /* Confetti Animation */
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background: var(--primary-light);
            opacity: 0;
            animation: confettiFall 3s ease-out;
        }

        @keyframes confettiFall {
            0% {
                opacity: 1;
                transform: translateY(0) rotate(0deg);
            }
            100% {
                opacity: 0;
                transform: translateY(400px) rotate(720deg);
            }
        }

        /* Text Content */
        .success-title {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 1rem;
            animation: fadeIn 0.6s ease 0.4s both;
            position: relative;
            z-index: 1;
        }

        .success-subtitle {
            color: var(--success-color);
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            animation: fadeIn 0.6s ease 0.5s both;
            position: relative;
            z-index: 1;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Message Box */
        .message-box {
            background: linear-gradient(135deg, var(--success-light) 0%, #e8f5e9 100%);
            border: 2px solid var(--success-color);
            border-radius: 16px;
            padding: 1.5rem;
            margin: 2rem 0;
            animation: fadeIn 0.6s ease 0.6s both;
            position: relative;
            z-index: 1;
        }

        .message-box p {
            color: var(--primary-dark);
            margin-bottom: 0.8rem;
            font-size: 1rem;
            line-height: 1.6;
        }

        .message-box p:last-child {
            margin-bottom: 0;
        }

        .message-box i {
            color: var(--success-color);
            font-size: 1.2rem;
            margin-right: 0.5rem;
        }

        /* Doa Box */
        .doa-box {
            background: linear-gradient(135deg, #fff8e1 0%, #fff3cd 100%);
            border: 2px solid #ffc107;
            border-radius: 16px;
            padding: 1.5rem;
            margin: 1.5rem 0;
            animation: fadeIn 0.6s ease 0.7s both;
            position: relative;
            z-index: 1;
        }

        .doa-arabic {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 0.8rem;
            line-height: 2;
            font-family: 'Traditional Arabic', serif;
        }

        .doa-translation {
            color: #856404;
            font-size: 0.9rem;
            font-style: italic;
        }

        /* Buttons */
        .button-group {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 2rem;
            animation: fadeIn 0.6s ease 0.8s both;
            position: relative;
            z-index: 1;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 0.9rem 2.5rem;
            font-weight: 600;
            font-size: 1.05rem;
            box-shadow: 0 4px 16px rgba(30, 126, 52, 0.25);
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
        }

        .btn-primary-custom:hover {
            background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-color) 100%);
            box-shadow: 0 6px 24px rgba(30, 126, 52, 0.35);
            transform: translateY(-2px);
            color: white;
        }

        .btn-secondary-custom {
            background: white;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            border-radius: 12px;
            padding: 0.9rem 2.5rem;
            font-weight: 600;
            font-size: 1.05rem;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
        }

        .btn-secondary-custom:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 16px rgba(30, 126, 52, 0.2);
        }

        /* Info Section */
        .info-section {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 1.2rem;
            margin-top: 1.5rem;
            animation: fadeIn 0.6s ease 0.9s both;
            position: relative;
            z-index: 1;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.6rem 0;
            border-bottom: 1px solid #dee2e6;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            color: var(--text-muted);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        .info-value {
            color: var(--text-dark);
            font-weight: 600;
            font-size: 0.95rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .success-card {
                padding: 2rem 1.5rem;
            }

            .success-icon {
                width: 100px;
                height: 100px;
            }

            .success-icon i {
                font-size: 3rem;
            }

            .success-title {
                font-size: 1.6rem;
            }

            .success-subtitle {
                font-size: 1.4rem;
            }

            .button-group {
                flex-direction: column;
            }

            .btn-primary-custom,
            .btn-secondary-custom {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 576px) {
            body {
                padding: 1rem;
            }

            .success-card {
                padding: 1.5rem 1rem;
                border-radius: 16px;
            }

            .success-title {
                font-size: 1.4rem;
            }

            .success-subtitle {
                font-size: 1.2rem;
            }

            .doa-arabic {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-card">
            <!-- Success Icon -->
            <div class="success-icon">
                <i class="bi bi-check-lg"></i>
            </div>

            <!-- Success Message -->
            <h1 class="success-title">
                Pembayaran Zakat Berhasil!
            </h1>
            <h2 class="success-subtitle">
                Alhamdulillah
            </h2>

            <!-- Message Box -->
            <div class="message-box">
                <p>
                    <i class="bi bi-check-circle-fill"></i>
                    <strong>Anda telah melaksanakan zakat mal dengan baik</strong>
                </p>
                <p>
                    <i class="bi bi-heart-fill"></i>
                    Semoga Allah SWT menerima ibadah Anda dan melimpahkan keberkahan
                </p>
                <p>
                    <i class="bi bi-star-fill"></i>
                    Zakat Anda akan sangat membantu saudara-saudara yang membutuhkan
                </p>
            </div>

            <!-- Doa Box -->
            <div class="doa-box">
                <div class="doa-arabic">
                    اَللّٰهُمَّ اجْعَلْهَا مَغْنَمًا وَلَا تَجْعَلْهَا مَغْرَمًا
                </div>
                <div class="doa-translation">
                    "Ya Allah, jadikanlah zakat ini sebagai keuntungan dan jangan jadikan ia sebagai kerugian"
                </div>
            </div>

            <!-- Info Section -->
            <div class="info-section">
                <div class="info-item">
                    <span class="info-label">
                        <i class="bi bi-calendar-check"></i>
                        Tanggal Pembayaran
                    </span>
                    <span class="info-value" id="currentDate"></span>
                </div>
                <div class="info-item">
                    <span class="info-label">
                        <i class="bi bi-clock"></i>
                        Waktu
                    </span>
                    <span class="info-value" id="currentTime"></span>
                </div>
                <div class="info-item">
                    <span class="info-label">
                        <i class="bi bi-check-circle"></i>
                        Status
                    </span>
                    <span class="info-value" style="color: var(--success-color);">
                        <i class="bi bi-check-circle-fill"></i> Berhasil
                    </span>
                </div>
            </div>

            <!-- Buttons -->
            <div class="button-group">
                <a href="kalkuzakat.php" class="btn-primary-custom">
                    <i class="bi bi-arrow-left-circle"></i>
                    Kembali ke Kalkulator
                </a>
                <a href="kalkuzakat.php" class="btn-secondary-custom">
                    <i class="bi bi-calculator"></i>
                    Hitung Lagi
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script>
        // Set current date and time
        function setCurrentDateTime() {
            const now = new Date();
            
            // Format date
            const options = { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric' 
            };
            const dateString = now.toLocaleDateString('id-ID', options);
            document.getElementById('currentDate').textContent = dateString;
            
            // Format time
            const timeString = now.toLocaleTimeString('id-ID', { 
                hour: '2-digit', 
                minute: '2-digit',
                second: '2-digit'
            });
            document.getElementById('currentTime').textContent = timeString;
        }

        // Create confetti effect
        function createConfetti() {
            const colors = ['#28a745', '#1e7e34', '#20c997', '#ffc107'];
            const confettiCount = 50;
            
            for (let i = 0; i < confettiCount; i++) {
                setTimeout(() => {
                    const confetti = document.createElement('div');
                    confetti.classList.add('confetti');
                    confetti.style.left = Math.random() * 100 + '%';
                    confetti.style.background = colors[Math.floor(Math.random() * colors.length)];
                    confetti.style.animationDelay = Math.random() * 0.5 + 's';
                    confetti.style.animationDuration = (Math.random() * 2 + 2) + 's';
                    document.querySelector('.success-card').appendChild(confetti);
                    
                    setTimeout(() => confetti.remove(), 3000);
                }, i * 30);
            }
        }

        // Initialize
        window.addEventListener('load', () => {
            setCurrentDateTime();
            createConfetti();
            
            // Update time every second
            setInterval(() => {
                const now = new Date();
                const timeString = now.toLocaleTimeString('id-ID', { 
                    hour: '2-digit', 
                    minute: '2-digit',
                    second: '2-digit'
                });
                document.getElementById('currentTime').textContent = timeString;
            }, 1000);
        });
    </script>
</body>
</html>