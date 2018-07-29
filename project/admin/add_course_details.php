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
<form method="post" action="add_course_details.php" enctype="multipart/form-data">
	
	<table width="600" align="center" border="10">
		
		<tr>
			<td align="center" bgcolor="yellow" colspan="6"><h1>Add New Course</h1></td>
		</tr>
		
		<tr>
			<td align="right">Course Name:</td>
			<td><input type="text" name="course" size="30"></td>
		</tr>
		
		<tr>
			<td align="right">Start Date:</td>
			<td><input type="date" name="start_date" size="30"></td>
		</tr>
		
		<tr>
			<td align="right">End Date:</td>
			<td><input type="date" name="end_date" size="30"></td>
		</tr>
		
		<tr>
			<td align="right">Timings:</td>
			<td><input type="text" name="timing"></td>
		</tr>
		
		<tr>
			<td align="right">Days:</td>
			<td><input type="text" name ="days"></td>
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

	$course = $_POST['course'];
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	$timing = $_POST['timing'];
	$days = $_POST['days'];

	
	if($course=='' or $start_date=='' or $end_date=='' or $timing=='' or $days==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	}

	else {
	
	
	  $insert_query = "insert into course_details (course,start_date,end_date,timing,days) values ('$course','$start_date','$end_date','$timing','$days')";
	
	if(mysql_query($insert_query)){
	
	echo "<script>alert('course added successfuly')</script>";
	 echo "<script>window.open('view_course_details.php','_self')</script>";
	
	}


}


}

?>

<?php } ?>