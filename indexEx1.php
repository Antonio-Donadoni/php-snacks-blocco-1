<?php

  $primaGiornata = [
    "primo match" => [
      "squadraCasa" => "Olimpia Milano",
      "squadraTrasferta" => "Virtus Bologna",
      "risCasa" => 78,
      "risTrasferta" =>90
    ],
    "secondo match" => [
      "squadraCasa" => "Alma Trieste",
      "squadraTrasferta" => "Fortitudo Bologna",
      "risCasa" => 108,
      "risTrasferta" =>90
    ],
    "terzo match" => [
      "squadraCasa" => "Reyer Venezia",
      "squadraTrasferta" => "Pallacanestro Cantù",
      "risCasa" => 72,
      "risTrasferta" =>81
    ] ,
    "quarto match" => [
      "squadraCasa" => "Aquila Basket Trento",
      "squadraTrasferta" => "Dinamo Sassari",
      "risCasa" => 88,
      "risTrasferta" => 76
    ],
  ];


 ?>

<h2>
<?php
foreach ($primaGiornata as $elem => $value) {
  echo $value[squadraCasa] . "-" . $value[squadraTrasferta] . " | " . $value[risCasa] . "-" . $value[risTrasferta];
  echo "<br>";
}
   ?>
</h2>
