<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Student {
    var $name;
    var $major;
    var $gpa;
    function __construct($name, $major, $gpa) {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
    }
    function hasHonors() {
        if ($this->gpa >= 3.5) {
            return "true";
        }
        return "false";
    }
}
$student1 = new Student("Jaap", "IT", 3.4);
$student2 = new Student("Henk", "Art", 3.6);
echo "$student1->major<br>";
echo $student1->hasHonors();
echo $student2->hasHonors();
?>
</body>
</html>
