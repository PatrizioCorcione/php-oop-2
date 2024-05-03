<?php
class Toy extends Products
{
  public $matirial;
  public $age;
  public $toytype;

  function __construct(string $_name, string $_categorie, float $_price, string $_type, string $_img, string $_matirial, string $_age, string $_toytype)

  {
    parent::__construct($_name,  $_categorie,  $_price,  $_type,  $_img);
    $this->matirial = $_matirial;
    $this->age = $_age;
    $this->toytype = $_toytype;
  }
}
