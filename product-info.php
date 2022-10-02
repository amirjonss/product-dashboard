<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
</head>

<body>
    <?php
        include "header.php";
    ?>
    <?php
    $data = file_get_contents('product-data/products-data.json');
    $products = json_decode($data, true);

    foreach ($products as $product): ?>
        <?php
        if ($product['id'] === (int)$_GET['id']) : ?>
            <div class="card mb-3 " style="margin: 50px 40px 0 40px">
                <div class="row ">
                    <div class="col-md-4">
                        <img src="<?= $product['imageLink'] ?>"
                             class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title">Name: <?= $product['name'] ?></h2>
                            <p class="card-text">Description: <?= $product['description'] ?></p>
                            <p class="card-text">Category: <?= $product['category'] ?></p>
                            <p class="card-text">Price <?= $product['price'] ?>$</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endif; ?>
    <?php
    endforeach; ?>
</body>




