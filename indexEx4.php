<?php
  function getArrayOfIntegers($min, $max, $nItems)
  {
  $newArray = [];
  while (count($newArray) < $nItems) {
  $number = rand($min, $max);
  if (!in_array($number, $newArray)) {
  $newArray[] = $number;
  }
  }
  return $newArray;
  }
?>

<h2>
<?php
  $numberArr = getArrayOfIntegers(1,100,15);

  foreach  ($numberArr as $key => $value) {
    echo $value;
    echo "<br>";
  }
   ?>
</h2>
