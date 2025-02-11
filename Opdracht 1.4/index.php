<?php
// Definieer de variabelen
$a = 10; // integer
$b = 3.14; // float
$c = "PHP"; // string

// Verander de waarden van de variabelen
$a = "Tien"; // string
$b = 3; // integer
$c = false; // boolean

// Toon de nieuwe waarden op het scherm met echo
echo "a: " . $a . "<br>";
echo "b: " . $b . "<br>";
echo "c: " . ($c ? 'true' : 'false') . "<br>";

// Toon de nieuwe waarden met var_dump()
var_dump($a);
var_dump($b);
var_dump($c);