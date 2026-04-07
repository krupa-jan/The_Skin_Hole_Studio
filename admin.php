<?php
require_once('Db.php');

// Jednoduchá funkce pro načtení .env
function loadEnv($path) {
    if (!file_exists($path)) return;
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        list($name, $value) = explode('=', $line, 2);
        $_ENV[trim($name)] = trim($value);
    }
}
loadEnv(__DIR__ . '/.env');

Db::connect(
    $_ENV['DB_HOST'], 
    $_ENV['DB_NAME'], 
    $_ENV['DB_USER'], 
    $_ENV['DB_PASS']
);

// --- ZPRACOVÁNÍ AKTUALIZACE STAVU ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_status'])) {
    $newStatus = $_POST['status'];
    $resId = $_POST['res_id'];
    
    Db::update('reservation', 
        ['Status' => $newStatus], 
        'WHERE Reservation_ID = ?', 
        $resId
    );
    
    header("Location: admin.php");
    exit();
}

// Načtení všech rezervací spojených s uživateli
$rezervace = Db::queryAll("
    SELECT r.*, u.Name, u.Surname, u.Email, u.PhoneNum, u.Birthday 
    FROM reservation r 
    JOIN user u ON r.User_ID = u.User_ID 
    ORDER BY r.Created_At DESC
");

$vsechnyPolozky = Db::queryAll("SELECT * FROM reservation_items");
$polozkyPodleRezervace = [];
foreach ($vsechnyPolozky as $polozka) {
    $polozkyPodleRezervace[$polozka['Reservation_ID']][] = $polozka;
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <title>Admin Panel | The Skin Hole Studio</title>

    <?php require 'includes/html_head.php'; ?>

    <link rel="stylesheet" href="/assets/css/sites/admin.css">
</head>
<body>
    <div class="security-warning">
        Tento administrátorský panel nemá žádné zabezpečení, kdokoliv se do něj může dostat! Slouží pouze pro výukové účely!
    </div>

    <header class="main-header">
        <div class="container">
            <h1>Správa rezervací</h1>
            <span class="count-badge">Počet záznamů: <?= count($rezervace) ?></span>
        </div>
    </header>

    <main class="container">
        <div class="orders-list">
            <?php foreach ($rezervace as $r): ?>
                <?php 
                    // Pomocná třída pro barvu stavu
                    $statusClass = strtolower(str_replace(' ', '-', $r['Status'])); 
                ?>
                <div class="res-card">
                    <div class="res-row header">
                        <span class="id">ID #<?= $r['Reservation_ID'] ?></span>
                        <span class="status <?= $statusClass ?>"><?= htmlspecialchars($r['Status']) ?></span>
                    </div>

                    <div class="res-section">
                        <label>Zákazník</label>
                        <div class="data-group">
                            <div class="name"><?= htmlspecialchars($r['Name'] . ' ' . $r['Surname']) ?></div>
                            <div class="detail">Email: <?= htmlspecialchars($r['Email']) ?></div>
                            <div class="detail">Tel: <?= htmlspecialchars($r['PhoneNum']) ?></div>
                        </div>
                    </div>

                    <div class="res-section">
                        <label>Termín</label>
                        <div class="datetime">
                            <strong><?= date("d. m. Y", strtotime($r['Date'])) ?></strong> v <strong><?= date("H:i", strtotime($r['Time'])) ?></strong>
                        </div>
                    </div>

                    <div class="res-section">
                        <label>Služby</label>
                        <table class="items-table">
                            <?php 
                            $id = $r['Reservation_ID'];
                            if (isset($polozkyPodleRezervace[$id])): 
                                foreach ($polozkyPodleRezervace[$id] as $item): ?>
                                    <tr>
                                        <td class="qty"><?= $item['Quantity'] ?>x</td>
                                        <td class="service"><?= htmlspecialchars($item['Service_Name']) ?></td>
                                    </tr>
                                <?php endforeach; 
                            endif; ?>
                        </table>
                    </div>

                    <div class="res-section actions">
                        <label>Změnit stav</label>
                        <form method="POST" class="action-form">
                            <input type="hidden" name="res_id" value="<?= $r['Reservation_ID'] ?>">
                            <input type="hidden" name="update_status" value="1">
                            <div class="btn-group">
                                <button type="submit" name="status" value="V procesu" class="btn-sm btn-process">V procesu</button>
                                <button type="submit" name="status" value="Dokončeno" class="btn-sm btn-done">Dokončeno</button>
                            </div>
                        </form>
                    </div>

                    <div class="res-footer">
                        Vytvořeno: <?= date("d. m. H:i", strtotime($r['Created_At'])) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>