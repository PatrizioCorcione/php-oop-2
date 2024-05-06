<?php
class Products
{
  public $name;
  public $categorie;
  private $price;
  public $type;
  public $img;

  function __construct(string $_name, string $_categorie, float $_price, string $_type, string $_img)
  {
    if ($_name == '') {
      throw new Exception("L' articolo deve avere un nome.");
    }

    $this->name = $_name;
    $this->categorie = $_categorie;
    $this->set_price($_price);
    $this->type = $_type;
    $this->img = $_img;
  }
  function set_price($_price)
  {
    $this->price = $_price;
  }

  function get_price()
  {
    return $this->price;
  }
}
