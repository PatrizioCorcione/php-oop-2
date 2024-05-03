<?php
class Products
{
  public $name;
  public $categorie;
  public $price;
  public $tipe;
  public $img;

  function __construct(string $_name, string $_categorie, float $_price, string $_tipe, string $_img)
  {
    $this->name = $_name;
    $this->categorie = $_categorie;
    $this->price = $_price;
    $this->tipe = $_tipe;
    $this->img = $_img;
  }
}
