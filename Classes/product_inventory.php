<?php
/*
 * Project: Product Inventory
 * Description: Create an application which manages an inventory of products. 
 *                   Create a product class which has a price, id, and quantity on hand. 
 *                   Create an inventory class which keeps track of various products and can sum up the inventory value.
 * Date: October 2nd, 2013
 * Author: Nolan Knill
 */
 
class Product{
  private $id, $name, $cost, $quantity;
  
  public function __construct($id, $name, $cost, $quantity){
    $this->id = $id;
    $this->name = $name;
    $this->cost = $cost;
    $this->quantity = $quantity;
  }
  
  public function __set($property, $value){
    if (property_exists(Product, $property)){
      $this->$property = $value;
    }
  }
  
  public function __get($property){
    if (property_exists(Product, $property)){
      return $this->$property;
    }
  }
}

class Inventory{
  private $products = array();
  
  function __construct($products){
    $this->products = $products;
  }
  
  public function printInventory(){
    foreach ($this->products as $product){
      echo "\n\nProduct id: ".$product->id."\nName: ".$product->name."\nCost: $".$product->cost."\nQuantity: ".$product->quantity."\n\n";
    }
  }
  
}


$products[] = new Product(12, "First", 30.25, 14);
$products[] = new Product(12, "First", 30.25, 14);
$products[] = new Product(12, "First", 30.25, 14);
$products[] = new Product(12, "First", 30.25, 14);
$products[] = new Product(12, "First", 30.25, 14);
$products[] = new Product(12, "First", 30.25, 14);
$products[] = new Product(12, "First", 30.25, 14);
$inv = new Inventory($products);
$inv->printInventory();
