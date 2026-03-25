<!DOCTYPE html>
<html lang="cs">
<head>
    <title>The Skin Hole Studio</title>

    <?php require 'includes/html_head.php'; ?>

    <link rel="stylesheet" href="/assets/css/sites/index.css">
</head>

<body>
    <?php require 'includes/nav.php'; ?>

    <div class="top-section">
        <img src="/assets/images/example_images/store-example.jpg" class="top-section-bg" draggable="false">
        <div class="top-section-overlay"></div>

        <img src="/assets/images/logo/logo.svg" class="top-section-logo" draggable="false">

        <div class="top-section-cta">
            <a href="/rezervace" class="cta-button-primary">Rezervovat termín</a>
            <a href="/o-nas" class="cta-button-secondary">O nás</a>
        </div>
    </div>

    <div class="about-section">
        <div class="about-section-image">
            <img src="/assets/images/example_images/test-image.jpg" draggable="false">
        </div>
        <div class="about-section-content">
            <h2>
                O Nás
            </h2>
            <p>
            Jsme nové profesionální piercingové studio v Ostravě, zaměřené na kvalitní šperky a precizní, hygienickou aplikaci piercingu. 
            Poskytujeme odbornou následnou péči a nabízíme také doplňky a přípravky pro správnou péči o piercing. 
            Naší prioritou je bezpečnost, kvalita a spokojenost každého klienta. 
            </p>
            
        </div>
    </div>

    <div class="instagram-section">
        
        <div class="ig-header">
            <h2><i class="fab fa-instagram"></i> Sleduj nás!</h2>
        </div>
        
        <div class="instagram-grid">
            <a href="https://www.instagram.com/p/DVx6hemDXNo/" target="_blank" class="instagram-post">
                <img src="/assets/images/instagram/ig3.webp" alt="Instagram post" draggable="false">
                <div class="instagram-overlay">
                    <i class="fab fa-instagram"></i>
                </div>
            </a>
            
            <a href="https://www.instagram.com/p/DThrh0IDfF2/" target="_blank" class="instagram-post">
                <img src="/assets/images/instagram/ig2.webp" alt="Instagram post" draggable="false">
                <div class="instagram-overlay">
                    <i class="fab fa-instagram"></i>
                </div>
            </a>

            <a href="https://www.instagram.com/p/DQChOYECLrl/" target="_blank" class="instagram-post">
                <img src="/assets/images/instagram/ig1.webp" alt="Instagram post" draggable="false">
                <div class="instagram-overlay">
                    <i class="fab fa-instagram"></i>
                </div>
            </a>
        </div>

        <div class="instagram-cta">
            <a href="https://www.instagram.com/theskinholestudio/" target="_blank" class="cta-button-instagram">
                Sledovat
            </a>
        </div>
    </div>
    
    <?php require 'includes/footer.php'; ?>
</body>
</html>