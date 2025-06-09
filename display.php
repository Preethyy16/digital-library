 <?php
include('confiig.php');
$sql='select *from books';
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0)
{
    while($row=mysqli_fetch_assoc($res))
    {
        echo"<br><br>Id:".$row['accno']."---------title:".$row['title']."-----------author:".$row['author']."-------edition".$row['edition']."<a href='update.php?accno=" . $row['accno'] . "'>update</a><br>";
        echo " | <a href='delete.php?accno=" . $row['accno'] . "' onclick=\"return confirm('Are you sure you want to delete this book?');\">Delete</a><br>";
    }
}else{
        echo "No books found";
    }

mysqli_close($con);
?>