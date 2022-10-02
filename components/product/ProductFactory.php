<?php

class ProductFactory
{
    public function create(
        string $name,
        string $description,
        string $imageLink,
        int $price,
        string $category
    ): Product {
        $product = new Product();
        $product->setId($this->getLastProductId());
        $product->setName($name);
        $product->setDescription($description);
        $product->setImageLink($imageLink);
        $product->setPrice($price);
        $product->setCategory($category);

        return $product;
    }

    private function getLastProductId(): int
    {
        if (file_exists('../product-data/products-data.json')) {
            $current_data = file_get_contents('../product-data/products-data.json');
            $array_data = json_decode($current_data, true);
            return $array_data[count($array_data) - 1]['id'] + 1;
        } else {
            return 1;
        }
    }
}