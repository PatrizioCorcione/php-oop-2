<?php
class Food extends Products
{
  public $size;
  public $taste;
  public $foodtype;

  function __construct(string $_name, string $_categorie, float $_price, string $_type, string $_img, float $_size, string $_taste, string $_foodtype)

  {
    parent::__construct($_name,  $_categorie,  $_price,  $_type,  $_img);
    $this->size = $_size;
    $this->taste = $_taste;
    $this->foodtype = $_foodtype;
  }
  // tipe matirial age 
  // matirial size tipe 
}
