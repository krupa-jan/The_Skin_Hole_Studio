<!DOCTYPE html>
<html lang="cs">
<head>
    <title>Děkujeme za rezervaci | The Skin Hole Studio</title>

    <?php require 'includes/html_head.php'; ?>

    <link rel="stylesheet" href="/assets/css/rezervace/thanks.css">
</head>

<body>
    <?php require 'includes/nav.php'; ?>

    <main class="thanks-container">
        <div class="thanks-card">
            <div class="success-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
            </div>
            
            <h1>Rezervace přijata!</h1>
            <p>Děkujeme za Vaši rezervaci. Právě jsme obdrželi tvou žádost o termín a brzy se ti ozveme pro potvrzení.</p>
            
            <div class="thanks-actions">
                <a href="/" class="btn-primary">Zpět na úvodní stránku</a>
                <p class="small-info">Máš otázky? <a href="/o-nas">Napiš nám</a></p>
            </div>
        </div>
    </main>

    <?php require 'includes/footer.php'; ?>

    <script>
        localStorage.removeItem('skin_hole_cart');
    </script>
</body>
</html>