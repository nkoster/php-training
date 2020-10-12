<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Book {
    var $title;
    var $author;
    var $pages;
    function __construct($title, $author, $pages) {
        $this->title = $title;
        $this->author = $author;
        $this->$pages = $pages;
    }
}
$book1 = new Book("Harry Potter", "JK Rowling", 409);
$book2 = new Book("Rings", "Tokien", 1000);
echo "$book1->title<br>";
echo "$book2->title<br>";
?>
</body>
</html>
