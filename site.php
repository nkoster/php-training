<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./site.php" method="get">
        Rose color: <input type="text" name="roseColor">
        Plural noun: <input type="text" name="pluralNoun">
        Celebrity: <input type="text" name="celebrity">
        <input type="submit">
    </form>
    <?php
        $roseColor = $_GET["roseColor"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];
        echo "Roses are $roseColor<br>";
        echo "$pluralNoun are blue<br>";
        echo "I love $celebrity<br>"
    ?>
</body>
</html>
