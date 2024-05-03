<?php
class Products
{
  public $name;
  public $categorie;
  public $price;
  public $type;
  public $img;

  function __construct(string $_name, string $_categorie, float $_price, string $_type, string $_img)
  {
    $this->name = $_name;
    $this->categorie = $_categorie;
    $this->price = $_price;
    $this->type = $_type;
    $this->img = $_img;
  }
}
