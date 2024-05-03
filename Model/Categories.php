<?php

class Categories
{
  protected $name;
  protected $product = [];

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function addProduct(Products $product)
  {
    $this->product[] = $product;
  }
}
