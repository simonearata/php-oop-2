<?php

  class Product{

    public $nome;
    public $prezzo;
    public $colore;
    
    // costruttore
    public function __construct($_nome, $_prezzo, $_colore)
    {
      $this->nome = $_nome;
      $this->prezzo = $_prezzo;
      $this->colore = $_colore;
    }

    public function getProduct()
    {
      return "Stai acquistando: " . $this->nome . "al presso di " . $this->prezzo . "$";
    }
  }

?>