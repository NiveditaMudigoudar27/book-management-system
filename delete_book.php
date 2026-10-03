<?php

include "db.php";

$id = intval($_GET["id"]);

$sql = "DELETE FROM books WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: books.php");
    exit();
} else {
    echo "Error deleting book: " . $conn->error;
}

$conn->close();

?>