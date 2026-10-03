<!DOCTYPE html>
<html>
<head>

    <title>Book Management System</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📚 Book Management System</h1>

    <form action="add_book.php" method="POST">

        <label>Book Title</label>

        <input
            type="text"
            name="title"
            placeholder="Enter book title"
            required
        >

        <label>Author</label>

        <input
            type="text"
            name="author"
            placeholder="Enter author name"
            required
        >

        <label>Price</label>

        <input
            type="number"
            name="price"
            placeholder="Enter price"
            step="0.01"
            min="0"
            required
        >

        <label>Category</label>

        <input
            type="text"
            name="category"
            placeholder="Example: Programming"
            required
        >

        <button type="submit">
            ➕ Add Book
        </button>

    </form>

    <br><br>

    <div style="text-align:center;">
        <a href="books.php">📖 View All Books →</a>
    </div>

</div>

</body>
</html>