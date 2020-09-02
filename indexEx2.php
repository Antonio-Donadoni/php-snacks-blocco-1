<?php

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

$isNameLongEnough = strlen ($name) > 3;

$isDotPresent = strpos ( $mail , ".");
$isAtPresent = strpos ( $mail , "@");
$isValidMail = (($isDotPresent !== false) && ($isAtPresent !== false);

$IsAgeNumber = is_numeric ($age)

 ?>

<h2>
<?php
  if ($isNameLongEnough && $isValidMail && $IsAgeNumber) {
    echo "ACCESSO RIUSCITO";
  }
  else {
    echo "ACCESSO NEGATO";
  }
   ?>
</h2>
