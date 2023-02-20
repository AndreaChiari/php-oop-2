<?php
require __DIR__ . '/prodotti.php';
require __DIR__ . '/cucce.php';
require __DIR__ . '/cibo.php';
require __DIR__ . '/giochi.php';
require __DIR__ . '/categorie.php';


// cucce
$cuccia_domus = new Cuccia('Cuccia domus', 'https://arcaplanet.vtexassets.com/arquivos/ids/227348/canile-domus-extra-large.jpg?v=1763169243', 239, "lorem ipsium", 'XL', "nicedog", [$cani, $gatti]);
$cuccia_lodge = new Cuccia('Cuccia lodge', 'https://arcaplanet.vtexassets.com/arquivos/ids/225623/p-a-y--canile-eco-lodge-large.jpg?v=1763301184', 79, "lorem ipsium", 'XL', "nicedog", [$cani, $gatti]);

$cucce_cani = [$cuccia_domus, $cuccia_lodge];

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
        <div class="row dog-section">
            <h2 class="mb-5">SEZIONE CANI</h2>
            <h3 class="mb-4">CUCCE</h3>
            <?php foreach ($cucce_cani as $cuccia) : ?>
                <div class="card col-4" style="width: 18rem;">
                    <img src="<?= $cuccia->$img ?>" class="card-img-top" alt="<?= $cuccia->$nome ?>">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                <?php endforeach; ?>
                </div>

        </div>
        <div class="row cat-section">
            <h2>SEZIONE GATTI</h2>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

        </div>
    </main>
</body>


</html>