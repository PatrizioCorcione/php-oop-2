<?php
require_once __DIR__ . '/Materials.php';
class Kennel extends Products
{

  use Materials;

  public $kennelsize;
  public $kenneltype;

  function __construct(string $_name, string $_categorie, float $_price, string $_type, string $_img, float $_size, string $_kenneltype)

  {
    parent::__construct($_name,  $_categorie,  $_price,  $_type,  $_img);
    $this->kennelsize = $_size;
    $this->kenneltype = $_kenneltype;
  }
}
