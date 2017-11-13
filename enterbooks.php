<!DOCTYPE HTML>
<html>
<style>
body{
background-image:url('pic4.jpg');
background-size:1400px 700px;
background-repeat: no-repeat;>
}
</style
<body>
<br><br>

<br><br><center><h2>Library Management System</h2></center><br>
<!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
<form action="InsertBooks.php" method="post">
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td>Enter Id :</td>
<td> <input type="text" name="Id" size="48"> </td>
</tr>
<tr>
<td> Enter Title :</td>
<td> <input type="text" name="title" size="48"> </td>
</tr>
<tr>
<td> Enter Author :</td>
<td> <input type="text" name="author" size="48"> </td>
</tr>
<tr>
<td> Enter Edition :</td>
<td> <input type="text" name="edition" size="48"> </td>
</tr>
<tr>
<td> Enter Publication: </td>
<td> <input type="text" name="publication" size="48"> </td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" value="submit" name="submit">
<input type="reset" value="reset">
</td>
</tr>
</table>
</form>
</body>
</html>