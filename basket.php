<?php
/**
 * Created by PhpStorm.
 * User: Desawer
 * Date: 01.01.2017
 * Time: 12:59
 */
include("functions.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="color: #8c9fd8;">Корзина</h1>

            <table class="table">
                <tr>
                    <?php foreach ($productTitles as $productTitle) {
                        echo '<th>' . $productTitle . '</th>';
                    } ?>
                </tr>

                <tr>
                    <td><?= $products[0]['name']; ?></td>
                    <td><?= $products[0]['price'] . '$'; ?></td>
                    <td><?= $products[0]['quantity'] . ' шт'; ?></td>
                    <td><?= $products[0]['ostatok'] . ' шт'; ?></td>
                    <td><?= $products[0]['sale'] . ' %'; ?></td>
                </tr>
                <tr>
                    <td><?= $products[1]['name']; ?></td>
                    <td><?= $products[1]['price'] . '$'; ?></td>
                    <td><?= $products[1]['quantity'] . ' шт'; ?></td>
                    <td><?= $products[1]['ostatok'] . ' шт'; ?></td>
                    <td><?= $products[0]['sale'] . ' %'; ?></td>
                </tr>
                <tr>
                    <td><?= $products[2]['name']; ?></td>
                    <?php if($products[2]['quantity'] >= 3) : ?>
                        <td><?= $products[2]['price'] - $products[2]['price'] * 0.3 . '$'; ?></td>
                    <?php else : ?>
                        <td><?= $products[2]['price'] . '$'; ?></td>
                    <?php endif; ?>
                    <td><?= $products[2]['quantity'] . ' шт'; ?></td>
                    <td><?= $products[2]['ostatok'] . ' шт'; ?></td>
                    <td><?= $products[0]['sale'] . ' %'; ?></td>
                </tr>
            </table>
        </div>
        <?= totalSection($products); ?>
        <?= notification($products); ?>
        <?= discount($products); ?>
    </div>
</div>


</body>
</html>