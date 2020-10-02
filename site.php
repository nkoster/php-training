<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="post">
        First number <input type="number" step="0.1" name="n1"><br>
        Operator <input type="text" name="operator"><br>
        Second number <input type="number" step="0.1" name="n2"><br>
        <input type="submit">
    </form>
    <?php
        $op = $_POST["operator"];
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        echo "$n1 $op $n2 = ";
        if ($op == "+") {
            echo $n1 + $n2;
        } elseif ($op == "-") {
            echo $n1 - $n2;
        } elseif ($op == "/") {
            echo $n1 / $n2;
        } elseif ($op == "*") {
            echo $n1 * $n2;
        } else {
            echo "error";
        }
    ?>
</body>
</html>
