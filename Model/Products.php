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
    try {
      if ($_price <= 0) {
        throw new Exception("Il prezzo non può essere negativo.");
      }

      $this->name = $_name;
      $this->categorie = $_categorie;
      $this->set_price($_price);
      $this->type = $_type;
      $this->img = $_img;
    } catch (Exception $err) {
      echo $err->getMessage();
    }
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
