<?php
$a[] = "Aarti";
$a[] = "Aakash";
$a[] = "Bhautik";
$a[] = "Bholu";
$a[] = "Bhavin";
$a[] = "Bhumika";
$a[] = "Chandani";
$a[] = "Darshan";
$a[] = "Darshit";
$a[] = "Divya";
$a[] = "Fenil";
$a[] = "Farak";
$a[] = "Gaurav";
$a[] = "Ganesh";
$a[] = "Hitesh";
$a[] = "Harpal";
$a[] = "Ishan";
$a[] = "Imaran";
$a[] = "Jeky";
$a[] = "kevin";
$a[] = "krushik";
$a[] = "kajal";
$a[] = "kavita";
$a[] = "krishana";
$a[] = "sagar";
$a[] = "Mihir";
$a[] = "Aayush";
$a[] = "Aanad";
$a[] = "Janvi";
$a[] = "Parth";
$a[] = "Abhinay";
$a[] = "Vicky";

$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
