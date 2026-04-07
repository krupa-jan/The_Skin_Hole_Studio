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

if ($_POST) {
    try {
        // --- ZPRACOVÁNÍ UŽIVATELE ---
        // Hledáme uživatele podle unikátního e-mailu
        $existujiciUzivatel = Db::queryOne("SELECT User_ID FROM user WHERE Email = ?", $_POST['email']);

        if ($existujiciUzivatel) {
            $userId = $existujiciUzivatel['User_ID'];
        } else {
            // Nový zákazník
            Db::insert('user', array(
                'Name'     => $_POST['jmeno'],
                'Surname'  => $_POST['prijmeni'],
                'Email'    => $_POST['email'],
                'PhoneNum' => $_POST['telefon'],
                'Birthday' => $_POST['datum_narozeni']
            ));
            $userId = Db::getLastId();
        }

        // --- ZPRACOVÁNÍ REZERVACE ---
        // Vložíme hlavní záznam o termínu
        Db::insert('reservation', array(
            'User_ID' => $userId,
            'Date'    => $_POST['datum_rezervace'],
            'Time'    => $_POST['cas_rezervace'],
            'Status'  => 'čeká'
        ));
        $reservationId = Db::getLastId();

        // --- ZPRACOVÁNÍ POLOŽEK (KOŠÍKU) ---
        // Dekódování JSON, který nám poslal JavaScript v hidden inputu
        $cartData = json_decode($_POST['cart_data'], true);

        if (!empty($cartData)) {
            foreach ($cartData as $serviceId => $item) {
                Db::insert('reservation_items', array(
                    'Reservation_ID' => $reservationId,
                    'Service_ID'     => $serviceId,
                    'Service_Name'   => $item['name'],
                    'Quantity'       => $item['quantity']
                ));
            }
        }

        // --- ÚSPĚCH ---
        header("Location: thanks.php");

    } catch (Exception $e) {
        echo "<h2 style='color: red;'>Chyba při ukládání:</h2> " . $e->getMessage();
    }
} else {
    header("Location: rezervace.php");
    exit();
}