<div class="service-card">
    <div class="service-image">
        <img src="<?= htmlspecialchars($produkt['obrazek']) ?>" 
             alt="<?= htmlspecialchars($produkt['nazev']) ?>"
             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div class="image-placeholder" style="display: none;">
            <span>Bez obrázku</span>
        </div>
    </div>

    <div class="service-content">
        <h3><?= htmlspecialchars($produkt['nazev']) ?></h3>
        <p><?= htmlspecialchars($produkt['popis']) ?></p>
        <button class="btn-pink" onclick="addToCart('<?= htmlspecialchars($produkt['nazev']) ?>', '<?= htmlspecialchars($produkt['id']) ?>')">Rezervovat</button>
    </div>
</div>