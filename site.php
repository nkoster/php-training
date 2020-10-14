<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Chef {
    function makeChicken() {
        echo "Here's your chicken<br>";
    }
    function makeSalad() {
        echo "Here's your salad<br>";
    }
    function makeSpecialDish() {
        echo "Here's your special dish<br>";
    }
}

class ItalianChef extends Chef {
    function makePasta() {
        echo "Here's your pasta<br>";
    }
    function makeSpecialDish() {
        echo "Here's your special pasta<br>";
    }
}

$chef = new Chef();
$chef->makeChicken();
$chef->makeSpecialDish();
$fabio = new ItalianChef();
$fabio->makeSalad();
$fabio->makePasta();
$fabio->makeSpecialDish();
?>
</body>
</html>
