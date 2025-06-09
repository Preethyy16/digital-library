<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = [
        "name" => $_POST["name"],
        "age" => (int)$_POST["age"],
        "email" => $_POST["email"],
        "skills" => explode(",", $_POST["skills"]) // Convert comma-separated skills into an array
    ];

    // Convert to JSON and save to file
    file_put_contents("output.json", json_encode($data, JSON_PRETTY_PRINT));
    echo "Data saved successfully!";
}
?>
<!-- HTML Form -->
<form method="POST">
    Name: <input type="text" name="name"><br>
    Age: <input type="number" name="age"><br>
    Email: <input type="email" name="email"><br>
    Skills (comma-separated): <input type="text" name="skills"><br>
    <button type="submit">Submit</button>
</form>
