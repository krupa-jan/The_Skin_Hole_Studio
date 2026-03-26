<!DOCTYPE html>
<html lang="cs">
<head>
    <title>Rezervace | The Skin Hole Studio</title>

    <?php require 'includes/html_head.php'; ?>

    <link rel="stylesheet" href="/assets/css/rezervace/rezervace.css">
    <link rel="stylesheet" href="/assets/css/rezervace/rezervace_template.css">
    <link rel="stylesheet" href="/assets/css/rezervace/notification.css">

    <?php 
    require_once 'includes/rezervace/data/ucho_data.php';
    require_once 'includes/rezervace/data/nos_data.php';
    require_once 'includes/rezervace/data/usta_oblicej_data.php';
    require_once 'includes/rezervace/data/jazyk_data.php';
    require_once 'includes/rezervace/data/oboci_data.php';
    require_once 'includes/rezervace/data/ostatni_casti_obliceje_data.php';
    require_once 'includes/rezervace/data/telo_data.php';
    require_once 'includes/rezervace/data/intimni_data.php';
    ?>
</head>

<body>
    <?php require 'includes/nav.php'; ?>

    <div id="notification-area"></div>
    
    <div class="page-header">
        <h1 class="page-title">Rezervace služeb</h1>
        <p class="page-subtitle">Vyberte si svůj vysněný piercing a vytvořte si rezervaci.</p>
    </div>

    <section class="booking-section">

        <div class="booking-container">

            <div class="services-area">
                
                <div class="tabs">
                    <button class="tab-btn active" onclick="switchTab('tab-ucho')">Ucho</button>
                    <button class="tab-btn" onclick="switchTab('tab-nos')">Nos</button>
                    <button class="tab-btn" onclick="switchTab('tab-usta')">Ústa a obličej</button>
                    <button class="tab-btn" onclick="switchTab('tab-jazyk')">Jazyk</button>
                    <button class="tab-btn" onclick="switchTab('tab-oboci')">Obočí</button>
                    <button class="tab-btn" onclick="switchTab('tab-ostatni')">Ostatní obličej</button>
                    <button class="tab-btn" onclick="switchTab('tab-telo')">Tělo</button>
                    <button class="tab-btn" onclick="switchTab('tab-intimni')">Intimní</button>
                </div>

                <div id="tab-ucho" class="tab-content active">
                    <div class="services-grid">
                        <?php 
                        foreach ($produkty_ucho as $produkt) {
                            include 'includes/rezervace/rezervace_template.php';
                        } 
                        ?>
                    </div>
                </div>
                
                <div id="tab-nos" class="tab-content">
                    <div class="services-grid">
                        <?php 
                        foreach ($produkty_nos as $produkt) {
                            include 'includes/rezervace/rezervace_template.php';
                        } 
                        ?>
                    </div>
                </div>

                <div id="tab-usta" class="tab-content">
                    <div class="services-grid">
                        <?php 
                        foreach ($produkty_usta_oblicej as $produkt) {
                            include 'includes/rezervace/rezervace_template.php';
                        } 
                        ?>
                    </div>
                </div>

                <div id="tab-jazyk" class="tab-content">
                    <div class="services-grid">
                        <?php 
                        foreach ($produkty_jazyk as $produkt) {
                            include 'includes/rezervace/rezervace_template.php';
                        } 
                        ?>
                    </div>
                </div>

                <div id="tab-oboci" class="tab-content">
                    <div class="services-grid">
                        <?php 
                        foreach ($produkty_oboci as $produkt) {
                            include 'includes/rezervace/rezervace_template.php';
                        } 
                        ?>
                    </div>
                </div>

                <div id="tab-ostatni" class="tab-content">
                    <div class="services-grid">
                        <?php 
                        foreach ($produkty_ostatni_casti_obliceje as $produkt) {
                            include 'includes/rezervace/rezervace_template.php';
                        } 
                        ?>
                    </div>
                </div>

                <div id="tab-telo" class="tab-content">
                    <div class="services-grid">
                        <?php 
                        foreach ($produkty_telo as $produkt) {
                            include 'includes/rezervace/rezervace_template.php';
                        } 
                        ?>
                    </div>
                </div>

                <div id="tab-intimni" class="tab-content">
                    <div class="services-grid">
                        <?php 
                        foreach ($produkty_intimni as $produkt) {
                            include 'includes/rezervace/rezervace_template.php';
                        } 
                        ?>
                    </div>
                </div>
            </div>

            <div class="cart-area">
                <div class="cart-box">
                    <h3>Vaše rezervace</h3>
                    <ul id="cart-items" class="cart-list">
                        <li class="empty-cart">Zatím jste nevybrali žádnou službu.</li>
                    </ul>
                    <button id="checkout-btn" class="btn-dark" onclick="submitReservation()" disabled>Přejít k objednávce</button>
                </div>
            </div>

        </div>
</section>

<?php require 'includes/footer.php'; ?>

<script src="/assets/js/rezervace/kosik.js"></script>
</body>
</html>