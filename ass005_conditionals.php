<?php
$aNumber = 5;

if ($aNumber == 5) {
  print "aNumber is equal to 5";
}
$plant = "cactus";

if ($plant == "cactus") {
  print "<br/>Great choice";
}
else {
  print "<br/>still a great choice, though cacti are better";
}

$x = 7;

if ($x == 5) {
  print "x is equal to 5";
}
elseif ($x == 7) {
  print "x is equal to 7";
}
print "gaat door";
switch ($x) {
  case 1:
  print "x is equal to 1";
  break;
  case 2:
  print "x is equal to 2";
  break;
  case 3:
  print "x is equal to 3";
  break;
  case 7:
  print "x is equal to 7";
  break;
  default:
  print "x is not equal to any of the values specified";

}
$y = 9;
$x = ($y==4) ? 5: 15;
print "<br/>x = " . $x;
 ?>
