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
  new Food("Délices Croustillants", "Chiens", 15.99, "Cibo", 'dfsdf', 'Large', 'Poisson', 'Umido'),
  new Food("Knusperige Leckerbissen", "Hunde", 8.49, "Cibo", 'sdfsd', 'Medium', 'Huhn', 'Secco'),
  new Toy("Cordazzio", "Cani", 10.99, "Giocattolo", 'dsfsdf', 'Cellulosa', 'Adulto', 'Corda'),
  new Toy("Pallina Squeaky", "Cani", 7.49, "Giocattolo", "Squeaky", "Gomma", "Tutti", "Pallina"),
  new Toy("Tana del Topo", "Gatti", 12.99, "Giocattolo", "Rattling", "Peluche", "Tutti", "Tana"),
  new Kennel("HouseDoggy", "Gatti", 102.99, "Cuccia", 'dsfsdf', 80.55, 'Legno', 'Interni'),
  new Kennel("Kennel1", "Buddy", 89.99, "Dog House", 'xyz123', 65.75, 'Plastic', 'Interni'),
  new Kennel("Kennel2", "Max", 120.50, "Pet Cabin", 'abc456', 95.25, 'Wood', 'Esterni'),
];

$categorieCat->product = [
  new Food("GattoForte", "Gatti", 15.99, "Alimento", 'abc123', 'Medium', 'Pollo e riso', 'Umido'),
  new Food("PrimoGusto", "Gatti", 12.49, "Alimento", 'def456', 'Small', 'Salmone e patate dolci', 'Secco'),
  new Food("DeliziaFelina", "Gatti", 9.99, "Alimento", 'ghi789', 'Large', 'Tonno e verdure', 'Umido'),
  new Toy("PallaGatto", "Gatti", 5.49, "Giocattolo", 'def456', 'Plastica', 'Adult', 'Palla'),
  new Toy("TunnelGatto", "Gatti", 8.99, "Giocattolo", 'ghi789', 'Tessuto', 'Adult', 'Tunnel'),
  new Toy("PiumeGatto", "Gatti", 3.99, "Giocattolo", 'jkl012', 'Piume', 'Adult', 'Piume'),
  new Kennel("NidoAccogliente", "Gatti", 35.99, "Cuccia", 'ghi789', 40.35, 'Tessuto', 'Interni'),
  new Kennel("DogHaven", "Dogs", 49.99, "Doghouse", 'abc123', 45.75, 'Wood', 'Outdoor'),
  new Kennel("BunnyBungalow", "Rabbits", 29.99, "Hutch", 'def456', 30.20, 'Plastic', 'Outdoor'),
];
