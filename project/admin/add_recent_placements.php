<?php 
// session_start();
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 

if(!isset($_SESSION['user_name'])){

header("location: login.php");
}
else {

?>


<html>
	<head>
		<title>inserting course details</title>
	</head>
	
<body>
<form method="post" action="add_recent_placements.php" enctype="multipart/form-data">
	
	<table width="600" align="center" border="10">
		
		<tr>
			<td align="center" bgcolor="yellow" colspan="6"><h1>Add Recent Placement details</h1></td>
		</tr>
		
		<tr>
			<td align="right"> Name of Student:</td>
			<td><input type="text" name="name" size="30"></td>
		</tr>
		
		<tr>
			<td align="right">Company Name</td>
			<td><input type="text" name="company" size="30"></td>
		</tr>
		
		<tr>
			<td align="right">Position:</td>
			<td><input type="text" name="position" size="30"></td>
		</tr>
		
		<tr>
		    <td align="right">Contact (Email id):</td>
			<td><input type="text" name="contact"></td>
		</tr>
		
		<tr>
			<td align="right">Date:</td>
			<td><input type="date" name ="date"></td>
		</tr>
		<tr>
			<td align="center" colspan="6"><input type="submit" name="submit" value="Add"></td>
		</tr>

	
	</table>
</form>
</body>
</html>
<?php 
include("includes/connect.php"); 

if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$company = $_POST['company'];
	$position = $_POST['position'];
	$contact = $_POST['contact'];
	$date = $_POST['date'];

	
	if($name=='' or $company=='' or $position=='' or $contact=='' or $date==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	}

	else {
	
	
	  $insert_query = "insert into recent_placements (name,company,position,contact,date) values ('$name','$company','$position','$contact','$date')";
	
	if(mysql_query($insert_query)){
	
	echo "<script>alert('Recent Placement details addeded successfuly')</script>";
	 echo "<script>window.open('view_recent_placements.php','_self')</script>";
	
	}


}


}

?>

<?php } ?>