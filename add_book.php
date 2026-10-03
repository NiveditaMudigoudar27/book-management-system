<?php

include "db.php";

$title = $_POST["title"];
$author = $_POST["author"];
$price = $_POST["price"];
$category = $_POST["category"];

$sql = "INSERT INTO books (title, author, price, category)
        VALUES ('$title', '$author', '$price', '$category')";

if ($conn->query($sql) === TRUE) {
    echo "Book added successfully!";
    echo "<br><a href='index.php'>Add Another Book</a>";
    echo "<br><a href='books.php'>View Books</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>