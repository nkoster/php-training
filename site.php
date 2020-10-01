<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function getMax($n1, $n2, $n3) {
            if ($n1 > $n2 && $n1 > $n3) {
                return $n1;
            }
            if ($n2 > $n1 && $n2 > $n3) {
                return $n2;
            }
            return $n3;
        }
        echo getMax(1000, 200, 30);
    ?>
</body>
</html>
