<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $teamName = "The Penguins";
      $teamState = "Connecticut";
      $numWins = 12;
      $numLosses = 2;

      print "the name of the team is " . $teamName;
      print "<br/> The team is from " . $teamState;
      print "<br/>" . $teamName . " have won " . $numWins .
      " games and have lost " . $numLosses . " games";
      printMessage("Frank");

      function printMessage($name){
        print "Hello, " . $name;
      }
      function subtract($num1, $num2){
        print "<br>". $num1 - $num2;
      }
      subtract(10, 5);

     ?>
  </body>
</html>
