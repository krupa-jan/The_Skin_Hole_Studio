<!DOCTYPE html>
<html lang="cs">
<head>
    <title>O Nás | The Skin Hole Studio</title>

    <?php require 'includes/html_head.php'; ?>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <link rel="stylesheet" href="/assets/css/sites/o-nas.css">

    <?php 
    $zamestnanci = [
        [
            'jmeno' => 'Marie Wagnerová',
            'pozice' => 'Jednatelka, Účetnictví',
            'popis' => 'V naší firmě jsem odpovědná za práci jednatele a také mám na starost účetnictví našeho piercingového studia.',
            'telefon' => '+420 548 753 956',
            'email' => 'wagnerovam@tshs.cz',
            'fotka' => '/assets/images/o-nas/wagnerova.webp', 
            'certifikat' => null
        ],
        [
            'jmeno' => 'Eliška Svobodová',
            'pozice' => 'Marketing, Soc. sítě',
            'popis' => 'V naší firmě se starám o marketing, sociální sítě a o kvalitní propagaci našich služeb a naší kamenné prodejny v Ostravě. Můžete mě potkat u nás v prodejně na recepci, abych vám s čímkoliv poradila nebo vám nabídla občerstvení.',
            'telefon' => '+420 621 751 482',
            'email' => 'svobodovae@tshs.cz',
            'fotka' => '/assets/images/o-nas/svobodova.webp', 
            'certifikat' => null
        ],
        [
            'jmeno' => 'Anna Hosnedlová',
            'pozice' => 'Marketing, Grafika',
            'popis' => 'V naší firmě mám na starost grafiku a náš firemní marketing. Také zajišťuji kvalitní fotografie na naši propagaci a prošla jsem vzdělávacím kurzem pro provádění aplikace piercingu.',
            'telefon' => '+420 963 456 123',
            'email' => 'hosnedlovaa@tshs.cz',
            'fotka' => '/assets/images/o-nas/hosnedlova.webp', 
            'certifikat' => '/assets/documents/certifikaty/hosnedlova.pdf' 
        ],
        [
            'jmeno' => 'Viktorie Windischová',
            'pozice' => 'Aplikace piercingu, Obchodní oddělení',
            'popis' => 'V naší firmě provádím aplikaci piercingu, na což jsem se nechala odborně vzdělávat určitou dobu. Také se starám o naše obchodní oddělení a zajištění prodeje společně s příjemným prostředím u nás v prodejně. ',
            'telefon' => '+420 458 785 333',
            'email' => 'windischovav@tshs.cz',
            'fotka' => '/assets/images/o-nas/windischova.webp', 
            'certifikat' => '/assets/documents/certifikaty/windischova.pdf' 
        ]
    ];
    ?>
</head>

<body>
    <?php require 'includes/nav.php'; ?>

    <section class="about-section">
        <div class="about-container">
            <div class="page-header">
                <h1 class="page-title">Náš Tým</h1>
                <p class="page-subtitle">Poznejte lidi, kteří tvoří The Skin Hole Studio.</p>
            </div>

            <div class="team-list">
                <?php foreach ($zamestnanci as $clen): ?>
                    <div class="employee-card">
                        
                        <div class="employee-photo-wrapper">
                            <img src="<?= htmlspecialchars($clen['fotka']) ?>" alt="Fotografie <?= htmlspecialchars($clen['jmeno']) ?>" class="employee-photo" onerror="this.src='/assets/images/example_images/placeholder.jpg'">
                        </div>

                        <div class="employee-info">
                            <h2><?= htmlspecialchars($clen['jmeno']) ?></h2>
                            <h3 class="role"><?= htmlspecialchars($clen['pozice']) ?></h3>
                            <p class="description"><?= htmlspecialchars($clen['popis']) ?></p>
                            
                            <div class="contact-boxes">
                                <div class="contact-box">
                                    <span class="material-symbols-outlined">call</span> 
                                    <span><?= htmlspecialchars($clen['telefon']) ?></span>
                                </div>
                                <div class="contact-box">
                                    <span class="material-symbols-outlined">mail</span> 
                                    <span><?= htmlspecialchars($clen['email']) ?></span>
                                </div>
                            </div>

                            <?php if (!empty($clen['certifikat'])): ?>
                                <a href="<?= htmlspecialchars($clen['certifikat']) ?>" target="_blank" class="cert-btn">
                                    Zobrazit osvědčení
                                </a>
                            <?php endif; ?>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php require 'includes/footer.php'; ?>
    </body>
</html>