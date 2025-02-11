<?php

$score = rand(0, 100);

switch (true) {
    case ($score > 90):
        echo "Geweldig<br>";
        break;
    case ($score > 75):
        echo "Goed<br>";
        break;
    case ($score > 55):
        echo "Voldoende<br>";
        break;
    default:
        echo "Onvoldoende<br>";
        break;
}

echo ($score > 55 ? "Geslaagd" : "Gezakt");