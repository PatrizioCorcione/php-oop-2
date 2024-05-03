<?php

class Categories
{
  public $name;
  public $product = [];

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function addProduct(Products $product)
  {
    $this->product[] = $product;
  }
}
