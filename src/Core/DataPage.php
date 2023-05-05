<?php

namespace src\Core;

class DataPage {
    private $coffeeJSON = 
       '{"kind": "AROMISTICO Coffee", "weight": 1, "country": "Brazil", "price": 6.99, "urlimg": "coffee-default.jpg"},
        {"kind": "AROMISTICO Coffee", "weight": 1, "country": "Kenya", "price": 9.99, "urlimg": "coffee-default.jpg"},
        {"kind": "AROMISTICO Coffee", "weight": 1, "country": "Columbia", "price": 12.00, "urlimg": "coffee-default.jpg"},
        {"kind": "AROMISTICO Coffee", "weight": 1, "country": "Brazil", "price": 8.30, "urlimg": "coffee-default.jpg"},
        {"kind": "AROMISTICO Coffee", "weight": 1, "country": "Brazil", "price": 12.99, "urlimg": "coffee-default.jpg"},
        {"kind": "AROMISTICO Coffee", "weight": 1, "country": "Columbia", "price": 10.00, "urlimg": "coffee-default.jpg"},
        {"kind": "AROMISTICO Coffee", "weight": 1, "country": "Brazil", "price": 15.99, "urlimg": "coffee-default.jpg"}, 
        {"kind": "AROMISTICO Coffee", "weight": 1, "country": "Kenya", "price": 7.50, "urlimg": "coffee-default.jpg"},
        {"kind": "AROMISTICO Coffee", "weight": 1, "country": "Kenya", "price": 12.00, "urlimg": "coffee-default.jpg"}',
      $topCoffeeJSON = '{"kind": "Solimo Coffee Beans 2 kg", "price": 10.73, "img": "best01.jpg"},
      {"kind": "Presto Coffee Beans 1 kgg", "price": 15.99, "img": "best02.jpg"},
      {"kind": "AROMISTICO Coffee 1 kg", "price": 6.99, "img": "best03.jpg"}', $coffeeList = [], $topCoffeeList = [];    


      function __construct() {
        self::JSONtoArray($this->coffeeJSON, $this->coffeeList);
        self::JSONtoArray($this->topCoffeeJSON, $this->topCoffeeList);
      }

      private static function JSONtoArray($json, $array) {
        return $array = json_encode($json, true);
      }

      public function getCoffeeList() {
        return  $this->coffeeList;
      }

      public function getTopCoffeeList() {
        return $this->topCoffeeList; 
      }

}