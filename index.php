<?php
require __DIR__ . '/prodotti.php';
require __DIR__ . '/cucce.php';
require __DIR__ . '/cibo.php';
require __DIR__ . '/giochi.php';
require_once __DIR__ . '/categorie.php';

$cane = new Categoria('cane');
$gatto = new Categoria('gatto');

// cucce 
$cuccia_domus = new Cuccia('Cuccia domus', 'https://arcaplanet.vtexassets.com/arquivos/ids/227348/canile-domus-extra-large.jpg?v=1763169243', 239, "lorem ipsium", "nicedog", 'XL', $cane);
$cuccia_lodge = new Cuccia('Cuccia lodge', 'https://arcaplanet.vtexassets.com/arquivos/ids/225623/p-a-y--canile-eco-lodge-large.jpg?v=1763301184', 79, "lorem ipsium", "nicedog", 'XL', $cane);

$cucce_cani = [$cuccia_domus, $cuccia_lodge];

//giochi
$osso = new Gioco('osso di plastica', 'https://m.media-amazon.com/images/I/61rRP0sjhRL.jpg', '10 euro', "lorem ipsium", "nicedog", 'consistenza dura', $cane);
$pallina = new Gioco('pallina di gomma', 'https://cdn.manomano.com/images/images_products/25102394/P/56517915_1.jpg', '5 euro', "lorem ipsium", "nicedog", 'consistenza elastica', $cane);

$giochi_animali = [$osso, $pallina];

//cibo
$croccantini = new Cibo('croccantini Elite', 'https://cdn.easycoop.com/media/catalog/product/cache/6a235447ffaf2a4eb09bae5f60fe7f21/c/r/croccantini_misti_con_manzo__pollo__carote_e_riso__2_kg_20220608_6372305_1.jpg', '4,23 euro', 'lorem ipsium', 'amici speciali', '07/03/2025', 'croccantini', $gatto);
$biscotti = new Cibo('biscotti super', 'https://www.loradeglianimali.it/47446-large_default/oasy-per-gatto-sterilized-con-biscotti-ripieni-da-60-gr.jpg', '8,78 euro', 'lorem ipsium', 'oasy', '05/08/2025', 'biscotti', $gatto);

$cibi = [$croccantini, $biscotti];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- import bootstrap -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- import font awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>

<body>
    <header class="text-center mt-5">
        <h1>ARCABOOLNET</h1>
    </header>
    <main>
        <h1>CUCCE</h1>
        <div class="row">
            <?php foreach ($cucce_cani as $cuccia) : ?>
                <div class="col-2">
                    <div class="card mb-5">
                        <img src="<?= $cuccia->img ?>" class="card-img-top" alt="<?= $cuccia->nome ?>">
                        <div class="card-body">
                            <p class="card-text"><?= $cuccia->nome ?></p>
                            <p><?= $cuccia->prezzo ?></p>
                            <p><?= $cuccia->descrizione ?></p>
                            <p><?= $cuccia->marca ?></p>
                            <p><?= $cuccia->grandezza ?></p>
                            <p>categoria: <?= $cuccia->categoria->nome_animale ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <h2>GIOCHI</h2>
        <div class="row">
            <?php foreach ($giochi_animali as $gioco) : ?>
                <div class="col-2">
                    <div class="card">
                        <img src="<?= $gioco->img ?>" class="card-img-top" alt="<?= $gioco->nome ?>">
                        <div class="card-body">
                            <p class="card-text"><?= $gioco->nome ?></p>
                            <p><?= $gioco->prezzo ?></p>
                            <p><?= $gioco->descrizione ?></p>
                            <p><?= $gioco->marca ?></p>
                            <p><?= $gioco->consistenza ?></p>
                            <p>categoria: <?= $gioco->categoria->nome_animale ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <h2>CIBO</h2>
        <div class="row">
            <?php foreach ($cibi as $cibo) : ?>
                <div class="col-2">
                    <div class="card">
                        <img src="<?= $cibo->img ?>" class="card-img-top" alt="<?= $cibo->nome ?>">
                        <div class="card-body">
                            <p class="card-text"><?= $cibo->nome ?></p>
                            <p><?= $cibo->prezzo ?></p>
                            <p><?= $cibo->descrizione ?></p>
                            <p><?= $cibo->marca ?></p>
                            <p><?= $cibo->scadenza ?></p>
                            <p><?= $cibo->tipo ?></p>
                            <p>categoria: <?= $cibo->categoria->nome_animale ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>



</html>