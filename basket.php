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
    <title>Корзина</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="color: #8c9fd8; margin: 20px 0;"><i class="glyphicon glyphicon-shopping-cart" style="padding-right: 15px;"></i>Корзина</h1>
            <table class="table">
                <tr>
                    <?php foreach ($productTitles as $productTitle) {
                        echo '<th>' . $productTitle . '</th>';
                    } ?>
                </tr>
                <?php foreach ($products as $product) : ?>
                <tr>
                    <td><i class="glyphicon glyphicon-th-list" style="padding-right: 10px"></i><?= $product['name']; ?></td>
                    <td><?= $product['price'] . '$'; ?></td>
                    <td><?= $product['quantity'] . ' шт'; ?></td>
                    <td><?= $product['ostatok'] . ' шт'; ?></td>
                    <?php if($product['name'] = 'Детский велосипед' && $product['quantity'] >= 3) : ?>
                        <td><?= '3 %'; ?></td>
                        <td><?= ($product['price'] - $product['price'] * 0.3 ) * $product['quantity'] . '$' ?></td>
                    <?php else: ?>
                        <td><?= $product['sale'] . ' %'; ?></td>
                        <td><?= ($product['price'] - $product['price'] * $product['sale'] / 100) * $product['quantity'] . '$' ?></td>
                    <?php endif; ?>
                </tr>
               <?php endforeach; ?>
            </table>
        </div>
        <?= totalSection($products); ?>
        <?= notification($products); ?>
        <?= discount($products); ?>
    </div>
</div>


</body>
</html>