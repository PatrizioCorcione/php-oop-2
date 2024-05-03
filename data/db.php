<?php
require_once __DIR__ . '/../Model/Products.php';
require_once __DIR__ . '/../Model/Categories.php';
require_once __DIR__ . '/../Model/Food.php';
require_once __DIR__ . '/../Model/Toy.php';
require_once __DIR__ . '/../Model/Kennel.php';

$categorieDog = new Categories("Cani");
$categorieCat = new Categories("Gatti");

$categorieDog->product  = [
  new Food("Croccantini Trainer", "Cani", 12.99, "Cibo", 'dsfsdf', 'Small', 'Manzo', ' Secco'),
  new Toy("Cordazzio", "Cani", 10.99, "Giocattolo", 'dsfsdf', 'Cellulosa', 'Adulto', 'Corda'),
  new Kennel("HouseDoggy", "Gatti", 102.99, "Cuccia", 'dsfsdf', 80.55, 'Legno', 'Interni')
];

$categorieCat->product = [
  new Food("GattoForte", "Gatti", 15.99, "Alimento", 'abc123', 'Medium', 'Pollo e riso', 'Umido'),
  new Toy("PallaGatto", "Gatti", 5.49, "Giocattolo", 'def456', 'Plastica', 'Adult', 'Palla'),
  new Kennel("NidoAccogliente", "Gatti", 35.99, "Cuccia", 'ghi789', 40.35, 'Tessuto', 'Interni'),

];
