<?php
  
  require_once __DIR__ . "/Indirizzo.php";
  require_once __DIR__ . "/Creditcard.php";
  

  class Customer{

    use Indirizzo;
    use Creditcard;
    public $nome;
    public $cognome;
    public $eta;
    public $email;

    protected $discount = 0;


    //costruttore
    public function __construct($_nome, $_cognome, $_eta)
    {
      $this->nome = $_nome;
      $this->cognome = $_cognome;
      $this->eta = $_eta;
      $this->setDiscount();
    }

    // Metodi pubblici
    public function getInfo()
    {
      return "Ciao " . $this->nome . " " . $this->cognome . ".";
    }

    public function getDiscount()
    {
      return $this->discount;
    }

    public function Indirizzo($_via, $_citta, $_paese, $_cap)
    {
      $this->via = $_via;
      $this->citta = $_citta;
      $this->paese = $_paese;
      $this->cap = $_cap;
    }

    public function getIndirizzo()
    {
      return "indirizzo: " . $this->via . ", " . $this->citta . ", " . $this->paese . ", " . $this->cap;
    }

    public function creditCard($_titolare, $_numero, $_scadenza, $_cvv){
      $this->titolare = $_titolare;
      $this->numero = $_numero;
      $this->scadenza = $_scadenza;
      $this->cvv = $_cvv;
    }
  
    public function getCreditCard()
    {
      return "Numero: " . "********". substr($this->numero, 10);
    }

    //Metodi privati
    private function setDiscount()
    {
      if ($this->eta < 25) {
        $this->discount = 10;
      }elseif($this->eta > 50) {
        $this->discount = 25;
      }
    }








  }

?>