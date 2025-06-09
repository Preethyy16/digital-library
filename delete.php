<?php
include('confiig.php');  // Corrected file name

if (isset($_GET['accno'])) {
    $accno = $_GET['accno'];
    $sql = "DELETE FROM books WHERE accno='$accno'";

    if (mysqli_query($con, $sql)) {
        echo "Book deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
   
} else {
    echo "No book selected for deletion.";
}

mysqli_close($con);
?>
