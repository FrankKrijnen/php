<?php
//this is a for ldap
for ($a = 2; $a < 11; $a=$a+2) {
  echo $a . " ";
}
//this is a while loop
$num = 0;
while ($num < 25) {
  $num = $num + 5;
  print  "<br>" . $num;
  break;
}
for ($a=0; $a < 10; $a++) {
  if ($a == 5) {
    break;
  }
  print "<br>" . $a;
}

 ?>
