<?php
require_once __DIR__ . '/Model/Products.php';
require_once __DIR__ . '/Model/Categories.php';
require_once __DIR__ . '/Model/Food.php';
require_once __DIR__ . '/Model/Toy.php';
require_once __DIR__ . '/Model/Kennel.php';

$trainer = new Food("Croccantini Trainer", "Cani", 12.12, "fdgdgfdfg", 'dsfsdf', 'small', 'fragola', 'kibbles');
$kitty = new Food("Croccantini Kitty", "Gatti", 12.12, "fdgdgfdfg", 'dsfsdf', 'small', 'fragola', 'kibbles');
$king = new Toy("Croccantini Kitty", "Gatti", 12.12, "fdgdgfdfg", 'dsfsdf', 'plastica', 'adult', 'rope');
$kong = new Kennel("Croccantini Kitty", "Gatti", 12.12, "fdgdgfdfg", 'dsfsdf', 80.50, 'wood', 'intern');

$categorieDog = new Categories("Cani");
$categorieCat = new Categories("Gatti");
$categorieDog->addProduct($trainer);
$categorieDog->addProduct($king);
$categorieCat->addProduct($kitty);
$categorieDog->addProduct($kong);

var_dump($categorieDog);
var_dump($categorieCat);
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