<?php

class FileHandler {

public $FileName;
public $FileExtension;
public $FileSize;

function __construct($FileName){
  $this->FileName = $FileName;

}

function CreateUpdateForm(){
  return "<textarea>" . $this->Read() . "</textarea>";
}
function Create(){
  return $theFile = fopen($this->FileName,"w");

  // if (file_exists($this->FileName) == true)
  //   echo "File already exist";
  //   else
  //   echo "File has been created";

}
function Read(){
  $theFile = fopen($this->FileName,"r");
  $this->FileSize = FileSize($this->FileName);

  return fread($theFile,$this->FileSize);

}

// function Update(){
//
// }

function Delete(){
  unlink($this->FileName);
  echo "File has been deleted";
}

};



?>
