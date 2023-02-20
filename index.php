<?php
require __DIR__ . '/prodotti.php';
require __DIR__ . '/cucce.php';
require __DIR__ . '/cibo.php';
require __DIR__ . '/giochi.php';



// cucce cani
$cuccia_domus = new Cuccia('Cuccia domus', 'https://www.komar.de/it/media/catalog/product/cache/8/image/9df78eab33525d08d6e5fb8d27136e95/v/d/vd-046-star-wars-official-poster-ep7.jpg', 239, "lorem ipsium", 'XL', "nicedog");
$cuccia_lodge = new Cuccia('Cuccia lodge', 'https://www.komar.de/it/media/catalog/product/cache/8/image/9df78eab33525d08d6e5fb8d27136e95/v/d/vd-046-star-wars-official-poster-ep7.jpg', 79, "lorem ipsium", 'XL', "nicedog");

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
        <h1>CUCCE</h1>
        <div class="row dog-section">
            <?php foreach ($cucce_cani as $cuccia) : ?>
                <div class="card col-6" style="width: 18rem;">
                    <img src="<?= $cuccia->img ?>" class="card-img-top" alt="<?= $cuccia->nome ?>">
                    <div class="card-body">
                        <p class="card-text"><?= $cuccia->nome ?></p>
                        <p><?= $cuccia->prezzo ?></p>
                        <p><?= $cuccia->descrizione ?></p>
                        <p><?= $cuccia->marca ?></p>
                        <p><?= $cuccia->grandezza ?></p>
                    </div>
                <?php endforeach; ?>
                </div>
        </div>
    </main>
</body>


</html>