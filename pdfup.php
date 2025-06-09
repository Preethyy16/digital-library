<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if a file was uploaded and there was no error
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
        // Get file information
        $fileTmpName = $_FILES['resume']['tmp_name'];
        $fileName = $_FILES['resume']['name'];

        // Set the upload directory
        $uploadDir = 'uploads/';

        // Check if the uploads directory exists, if not, create it
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Move the uploaded file to the uploads folder
        if (move_uploaded_file($fileTmpName, $uploadDir . $fileName)) {
            echo "Your resume has been uploaded successfully!";
        } else {
            echo "There was an error uploading your file.";
        }
    } else {
        echo "No file was uploaded or there was an error with the file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Resume</title>
</head>
<body>

    <h2>Upload Your Resume (PDF format only)</h2>

    <form action="" method="POST" enctype="multipart/form-data">
        <label for="resume">Choose a resume (PDF only):</label><br>
        <input type="file" name="resume" id="resume" accept=".pdf" required><br><br>
        <input type="submit" value="Upload Resume">
    </form>

</body>
</html>
