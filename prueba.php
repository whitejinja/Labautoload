<?php

require("App/User.php");
require("DataBase/Model/ProductModel.php");

use App\User;
use DataBase\Model\ProductModel;

$user = new User();

echo $user->getname();

echo "\n";

$product = new ProductModel();

echo $product->getId();
