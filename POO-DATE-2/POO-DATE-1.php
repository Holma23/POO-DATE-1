<?php
for ($i = 2005; $i < 2011; $i++) {
    ((date("l", mktime(00, 00, 00, 05, 01, $i) === 'Saturday') ||
        (date("l", mktime(00, 00, 00, 05, 01, $i) === 'Sunday')))) ?
        $affichage = "Désolé !" : $affichage = " Week-end prolongé !";
    echo $i . ":" . $affichage . "<br>";
}