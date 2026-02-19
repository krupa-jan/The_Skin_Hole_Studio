<!DOCTYPE html>
<html lang="cs">
<head>
    <title>Rezervace | The Skin Hole Studio</title>

    <?php require 'includes/html_head.php'; ?>

    <link rel="stylesheet" href="/assets/css/sites/rezervace.css">
</head>

<body>
    <?php require 'includes/nav.php'; ?>

    <img src="/assets/images/example_images/store-example.jpg" class="background-image" draggable="false">
    <div class="background-image-overlay"></div>

    <section class="reservation-section">
        <div class="form-container">
            <h2 class="form-title">Rezervovat <span>termín</span></h2>
            <p class="form-subtitle">Vyplňte údaje níže a my se postaráme o zbytek.</p>

            <form action="DOPLNIT ZDE PHP - CHYBÍ JEŠTĚ UDĚLAT" method="POST" class="reservation-form">
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="jmeno">Jméno</label>
                        <input type="text" id="jmeno" name="jmeno" required placeholder="Jan">
                    </div>
                    <div class="form-group">
                        <label for="prijmeni">Příjmení</label>
                        <input type="text" id="prijmeni" name="prijmeni" required placeholder="Novák">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required placeholder="jan.novak@email.cz">
                    </div>
                    <div class="form-group">
                        <label for="telefon">Telefon</label>
                        <input type="tel" id="telefon" name="telefon" required placeholder="+420 123 456 789">
                    </div>
                </div>

                <div class="form-group">
                    <label for="datum_narozeni">Datum narození</label>
                    <input type="date" id="datum_narozeni" name="datum_narozeni" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="datum_rezervace">Datum rezervace</label>
                        <input type="date" id="datum_rezervace" name="datum_rezervace" required>
                    </div>
                    <div class="form-group">
                        <label for="cas_rezervace">Čas rezervace</label>
                        <select id="cas_rezervace" name="cas_rezervace" required>
                            <option value="" disabled selected>Vyberte čas...</option>
                            <option value="09:00">09:00</option>
                            <option value="09:30">09:30</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="13:00">13:00</option>
                            <option value="13:30">13:30</option>
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                            <option value="15:00">15:00</option>
                            <option value="15:30">15:30</option>
                            <option value="16:00">16:00</option>
                            <option value="16:30">16:30</option>
                            <option value="17:00">17:00</option>
                            <option value="17:30">17:30</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn-submit">Potvrdit rezervaci</button>
            </form>
        </div>
    </section>

    <?php require 'includes/footer.php'; ?>
</body>
</html>