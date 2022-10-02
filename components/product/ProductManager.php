<?php

class ProductManager
{
    public function save(Product $product, bool $isNeedFlush = false)
    {
        if ($isNeedFlush && file_put_contents("../product-data/products-data.json", $this->getData($product))) {
            header('Location: ../add-product-layout.php');
        } else {
            echo '<div style="color: red">error</div>';
        }
    }

    private function getData(Product $product): string
    {
        if (file_exists('../product-data/products-data.json')) {
            $current_data = file_get_contents('../product-data/products-data.json');
            $array_data = json_decode($current_data, true);
            $array_data[] = $product;
            return json_encode($array_data);
        } else {
            mkdir('../product-data');
            $newData = array();
            $newData[] = (array)$product;
            return json_encode($newData);
        }
    }
}