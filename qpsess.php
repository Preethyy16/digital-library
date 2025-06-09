<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
        $_SESSION['add_name'] = 'preethi'; // Store 'preethi' in session
    }

  

$name = isset($_SESSION['add_name']) ? $_SESSION['add_name'] : 'cant read'; // Correct use of ternary operator





// Remove name from the session
if ($_SERVER['REQUEST_METHOD'] == 'POST' )&& isset($_POST['remove_name']){
    unset($_SESSION['add_name']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Example</title>
</head>
<body>

<?php
// Display the name if it exists in the session
if (isset($_SESSION['add_name'])) {
    echo "Hello, " . $_SESSION['add_name'] . "!<br><br>";
} else {
    echo "Name is not set in the session.<br><br>";
}
?>

<!-- Form to add your name to the session -->
<form method="post">
    <button type="submit" name="add_name">Add My Name to Session</button>
</form>

<!-- Form to remove your name from the session -->
<form method="post">
    <button type="submit" name="remove_name">Remove My Name from Session</button>
</form>

</body>
</html>
