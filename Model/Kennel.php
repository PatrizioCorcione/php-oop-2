<?php
class Kennel extends Products
{
  public $kennelsize;
  public $kennelmatirial;
  public $kenneltype;

  function __construct(string $_name, string $_categorie, float $_price, string $_type, string $_img, float $_size, string $_matirial, string $_kenneltype)

  {
    parent::__construct($_name,  $_categorie,  $_price,  $_type,  $_img);
    $this->kennelsize = $_size;
    $this->kennelmatirial = $_matirial;
    $this->kenneltype = $_kenneltype;
  }
}
