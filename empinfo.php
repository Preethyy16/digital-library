<?php
$jsondata=file_get_contents('emp.json');
$emps=json_decode($jsondata,true);
if($emps){
    echo"<h2>EMPLOYE DETAIL</h2>";
    echo"<table border='1'>";
    echo"<tr><th>id</th><th>name</th><th>age</th></tr>";
    foreach($emps as $em){
        echo"<tr>";
        echo"<td>".$em['id']."</td>";
        echo"<td>".$em['name']."</td>";
          echo"<td>".$em['age']."</td>";
          echo"<tr>";

    }
    echo"</table>";
}else{
    echo "No employee data found.";
}
?>