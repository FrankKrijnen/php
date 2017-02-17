<?php

class Book{
var $title;
var $numPages;
function __construct(){
  $this->numPages = 250;
}
function setNumPages($numOfPages)
{
  $numPages = $numOfPages;
}
function getNumPages()
{
  return $numPages;
}
function setTitle($Title)
{
  $title = $Title;
}
function getTitle()
{
  return $title;
}

}
$yellowPages = new Book();

print $yellowPages->numPages;


?>
