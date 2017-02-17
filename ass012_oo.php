<?php
include("FileHandler.class.php");
$newFile = new FileHandler("filetwo.txt");
// $tekst = print_r($newFile->read());




// $newFile->Create();
// $newFile->Read();
echo $newFile->CreateUpdateForm();
// $newFile->Delete();
 ?>
