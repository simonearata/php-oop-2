<?php

  require_once __DIR__ . "/Customer.php";

  class Specialcustomer extends Customer {
    
    public $purchase;
    public $points = 0;

    public function __construct($_nome, $_cognome, $_eta, $_purchase) {

      parent::__construct($_nome, $_cognome, $_eta);
      $this->purchase = $_purchase;
      $this->setDiscount();
    }

    public function addPurchase($_purchase) {
      $this->purchase = $this->calcPurchase($_purchase);
    }

    public function calcPurchase($_purchase) {
      if($this->purchase > 30){
        $this->points = 50;
      }elseif($this->purchase > 50){
        $this->points = 80;
      }
      return $this->points;
    }

    private function setDiscount(){

      if($this->points > 50 && $this->points < 80){
        $this->discount = 30;
      }elseif($this->points > 80){
        $this->discount = 40;
      }
    }




  }

?>