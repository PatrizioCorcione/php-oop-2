<?php
require_once __DIR__ . '/Model/Products.php';
require_once __DIR__ . '/Model/Categories.php';
require_once __DIR__ . '/Model/Food.php';

$trainer = new Food("Croccantini Trainer", "Cani", 12.12, "fdgdgfdfg", 'dsfsdf');
$kitty = new Food("Croccantini Kitty", "Gatti", 12.12, "fdgdgfdfg", 'dsfsdf');

$categoriaCani = new Categories("Cani");
$categoriaGatti = new Categories("Gatti");
$categoriaCani->addProduct($trainer);
$categoriaGatti->addProduct($kitty);
var_dump($categoriaCani);
var_dump($categoriaGatti);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>

</html>