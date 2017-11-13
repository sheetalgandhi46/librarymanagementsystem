<!DOCTYPE HTML>
<html>
<style>
body{
background-image:url('pic5.jpg');
background-size:1400px 700px;
background-repeat: no-repeat;>
}
</style

<body><br><br>
<center><h2>Library Management System</h2></center>
<br>
 
<?php
include("DbConnection.php");
 
$search = $_REQUEST["search"];
 
$query = "select Id,Title,Author,Edition,Publication from book_info where Id=$search"; //search with a book id in the table book_info
$result = mysqli_query($db,$query);
 
if(mysqli_num_rows($result)>0)
 
{
?>
 
<table border="2" align="center" cellpadding="5" cellspacing="5">
 
<tr>
<th> Id </th>
<th> Title </th>
<th> Author </th>
<th> Edition </th>
<th> Publication </th>
</tr>
 
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Id"];?> </td>
<td><?php echo $row["Title"];?> </td>
<td><?php echo $row["Author"];?> </td>
<td><?php echo $row["Edition"];?> </td>
<td><?php echo $row["Publication"];?> </td>
</tr>
<?php
}
}
else
echo "<center>No books found in the library by the name $search </center>" ;
?>
</table>
</body>
</html>
<br>