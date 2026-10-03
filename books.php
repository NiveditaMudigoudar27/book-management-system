<?php

include "db.php";

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>All Books</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📚 All Books</h1>

    <?php if ($result->num_rows > 0) { ?>

    <table>

        <thead>

        <tr>

            <th>ID</th>

            <th>Title</th>

            <th>Author</th>

            <th>Price</th>

            <th>Category</th>

            <th>Action</th>

        </tr>

        </thead>

        <tbody>

        <?php while ($row = $result->fetch_assoc()) { ?>

        <tr>

            <td>
                <?php echo $row["id"]; ?>
            </td>

            <td>
                <?php echo htmlspecialchars($row["title"]); ?>
            </td>

            <td>
                <?php echo htmlspecialchars($row["author"]); ?>
            </td>

            <td>
                ₹<?php echo $row["price"]; ?>
            </td>

            <td>
                <?php echo htmlspecialchars($row["category"]); ?>
            </td>

            <td>

                <a
                    class="delete-btn"
                    href="delete_book.php?id=<?php echo $row["id"]; ?>"
                    onclick="return confirm('Are you sure you want to delete this book?');"
                >
                    🗑 Delete
                </a>

            </td>

        </tr>

        <?php } ?>

        </tbody>

    </table>

    <?php } else { ?>

        <div class="success">
            📚 No books found. Add your first book!
        </div>

    <?php } ?>

    <br><br>

    <div style="text-align:center;">

        <a href="index.php">
            ← Add New Book
        </a>

    </div>

</div>

</body>

</html>

<?php

$conn->close();

?>