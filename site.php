<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="post">
        Grade <input type="text" name="grade"><br>
        <input type="submit">
    </form>
    <?php
        $grade = $_POST["grade"];
        echo "$grade<br>";
        switch($grade) {
            case "A":
                echo "Amazing!";
                break;
            case "B":
                echo "Okay";
                break;
            case "C":
                echo "Come on";
                break;
            default:
                echo "Serious?";
        }
    ?>
</body>
</html>
