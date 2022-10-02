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
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-sm-8 col-md-6 col-xl-6 p-5">
            <h1>Add product</h1>
            <form method="post" action="product/AddProductAction.php">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="form-select mb-3" aria-label="Default select example" name="category">
                        <option value="perfumery" selected>Парфюмерия</option>
                        <option value="dairy">Молочка</option>
                        <option value="sweets">Сладости</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">Image link</label>
                    <input class="form-control" list="datalistOptions" id="exampleDataList" name="image" placeholder="Type to search...">
                    <datalist id="datalistOptions">
                        <option value="https://media.baamboozle.com/uploads/images/67401/1603107243_125437">
                        <option value="https://images.all-free-download.com/images/graphicwebp/tomatoes_and_basil_516555.webp">
                        <option value="https://images.all-free-download.com/images/graphicwebp/winter_freshness_517716.webp">
                        <option value="https://images.all-free-download.com/images/graphicwebp/beer_beverage_breakfast_cookie_cup_drink_food_glass_603382.webp">
                        <option value="https://images.all-free-download.com/images/graphiclarge/animal_cat_curiosity_cute_eyes_feline_fur_grey_603544.jpg">
                    </datalist>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>