<!DOCTYPE HTML>
<html>
<style>
body{
background-image:url('pic4.jpg');
background-size:1400px 700px;
background-repeat: no-repeat;>
}
</style

<body><br><br>
<center><h2>Library Management System</h2></center>
<br><br>
 
<?php
include("DbConnection.php");

if(isset($_POST['submit'])) 
{
$id=$_POST['Id'];

$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];

$query = "insert into book_info (Id,title,author,edition,publication) values ('$id','$title','$author','$edition','$publication')"; //Insert query to add book details into the book_info table
$result = mysqli_query($db,$query);


} 
?>
<h3> Book information is inserted successfully </h3>
 
 

<a href="searchbook.php"> To search for any Book information click here </a>
 
</body>
</html>