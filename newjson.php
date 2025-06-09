<!DOCTYPE html>
<html>
<head>
    <title>Creating Object JSON with JavaScript</title>
    <script>
        var JSONObj = {
            "name": "manipal.edu",
            "dept": "Computer Applications"
        };

        document.addEventListener("DOMContentLoaded", function () {
            document.write("<h1>JSON with JavaScript example</h1>");
            document.write("<h3>Website Name = " + JSONObj.name + "</h3>");
            document.write("<h3>Department = " + JSONObj.dept + "</h3>");
        });
    </script>
</head>
<body>
</body>
</html>
