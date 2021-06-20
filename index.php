<?php
  require_once __DIR__ . '/classes/Customer.php';
  require_once __DIR__ . '/classes/Specialcustomer.php';
  require_once __DIR__ . '/classes/Product.php';

  // cliente 1
  $cliente1 = new Customer('Ugo', 'Bianchi', 55);
  $cliente1->email = "bianchi@gmail.com";
  $cliente1->Indirizzo("via Augusto 08", "Roma", "Italia", 1490);
  $cliente1->creditCard('Ugo Bianchi', 4542547474444, "24/01/26", 555);

  // cliente 2
  $cliente2 = new Customer('John', 'Neri', 25);
  $cliente2->email = "bianchi@gmail.com";
  $cliente2->Indirizzo("via Nerone 112", "Genova", "Italia", 3520);
  $cliente2->creditCard('John Neri', 45428484818444, "27/01/26", 478);

  // cliente speciale 3
  $cliente3 = new Specialcustomer('Giuseppe', 'Rossi', 37, 55);
  $cliente3->email = "rossi@gmail.com";
  $cliente3->Indirizzo("via Cesare 92", "Roma", "Italia", 9201);
  $cliente3->creditCard('Giuseppe Rossi', 45984951651512, "24/01/28", 989);
  
  var_dump($cliente1);
  var_dump($cliente2);
  var_dump($cliente3);

  // prodotto 1
  $prodotto1 = new Product('jeans', 50, 'blue');

  var_dump($prodotto1)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php-oop-2</title>
</head>
<body>

  <h1>E-commerce</h1>
  <h2><?php echo $cliente1->getInfo() ?></h2>
  <h3>Hai appena acquistato un paio di <?php echo $prodotto1->nome ?></h3>
  <h3>Li spediremo all' <?php echo $cliente1->getIndirizzo() ?></h3>
  <h3>Hai pagato con  carta <?php echo $cliente1->getCreditCard() ?></h3>


</body>
</html>
