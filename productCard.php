<?php

if (!file_exists('product-data/products-data.json')) {
    print '<h1 style="display: flex; justify-content: center"> No products </h1>';
    return;
}

$data = file_get_contents('product-data/products-data.json');
$products = json_decode($data, true);
foreach ($products as $index => $product): ?>
    <div class="col-12 col-md-4 col-xl-3 p-2">
        <div class="card">
            <img src="<?= $product['imageLink']; ?>"
                 class="card-img-top" alt="...">
            <div class="card-body">
                    <h5 class="card-title"><?= $product['name']; ?></h5>
                    <p class="card-text"><?= $product['description']; ?></p>
                    <p class="card-text">price: <?= $product['price']; ?>$</p>
                    <p class="card-text">category: <?= $product['category']; ?></p>
                    <input type="submit" name="id" value="<?= $product['id']?>" class="btn btn-primary" style="display: none">
                    <a href="product-info.php?id=<?= $product['id'] ?>" class="btn btn-primary">About product</a>
            </div>
        </div>
    </div>
<?php
endforeach; ?>
