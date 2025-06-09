<?php
include('confiig.php');  // Correct file name for configuration

// Check if 'accno' is passed as a GET parameter and retrieve the book details
if (isset($_GET['accno'])) {
    $accno = $_GET['accno'];
    $sql = "SELECT * FROM books WHERE accno='$accno'";
    $res = mysqli_query($con, $sql);
    $book = mysqli_fetch_assoc($res);
}

if (isset($_POST['submit'])) {
    $accno = $_POST['accno'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $edition = $_POST['edition'];
    $sql = "UPDATE books SET title='$title', author='$author', edition='$edition' WHERE accno='$accno'";

    // Execute the update query
    if (mysqli_query($con, $sql)) {
        echo "Book updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

// Close the database connection
mysqli_close($con);
?>

<html>
<head>
    <title>Update Book</title>
</head>
<body>
    <form method="POST">
        Accession Number: <input type="text" name="accno" value="<?php echo isset($book['accno']) ? $book['accno'] : ''; ?>" readonly><br>
        Title: <input type="text" name="title" value="<?php echo isset($book['title']) ? $book['title'] : ''; ?>"><br>
        Authors: <input type="text" name="author" value="<?php echo isset($book['author']) ? $book['author'] : ''; ?>"><br>
        Edition: <input type="text" name="edition" value="<?php echo isset($book['edition']) ? $book['edition'] : ''; ?>"><br>
        
        <input type="submit" name="submit" value="Update Book">
    </form>
</body>
</html>
