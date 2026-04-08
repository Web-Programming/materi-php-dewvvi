<?php
require_once "app/product/Item.php";
include "app/services/Item.php";

//menggunakan alias utk menghindari konflik nama
use app\product\Item as ProductItem;
use app\services\Item as ServicestItem;

//membuat instance
$product = new ProductItem("Laptop");
$services = new ServicestItem ("Perbaikan Laptop");

//menampilkan hasil
echo $produk->info() . "\n";
echo $services->info();
