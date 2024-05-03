<?php
require_once __DIR__ . '/Model/Products.php';
require_once __DIR__ . '/Model/Categories.php';
require_once __DIR__ . '/Model/Food.php';

$trainer = new Food("Croccantini Trainer", "Cani", 12.12, "fdgdgfdfg", 'dsfsdf', 80.50, 'fragola', 'big');
$kitty = new Food("Croccantini Kitty", "Gatti", 12.12, "fdgdgfdfg", 'dsfsdf', 80.50, 'fragola', 'big');
$ciccio = new Food("Croccantini Trainer", "Cani", 12.12, "fdgdgfdfg", 'dsfsdf', 80.50, 'fragola', 'big');
$pasticcio = new Food("Croccantini Kitty", "Gatti", 12.12, "fdgdgfdfg", 'dsfsdf', 80.50, 'fragola', 'big');

$categoriaCani = new Categories("Cani");
$categoriaGatti = new Categories("Gatti");
$categoriaCani->addProduct($trainer);
$categoriaGatti->addProduct($kitty);
$categoriaCani->addProduct($ciccio);
$categoriaGatti->addProduct($pasticcio);
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