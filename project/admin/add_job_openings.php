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
		<title>inserting job openings</title>
	</head>
	
<body>
<form method="post" action="add_job_openings.php" enctype="multipart/form-data">
	
	<table width="600" align="center" border="10">
		
		<tr>
			<td align="center" bgcolor="yellow" colspan="6"><h1>Add New Job Opening</h1></td>
		</tr>
		
		<tr>
			<td align="right">Job Designation:</td>
			<td><input type="text" name="job" size="30"></td>
		</tr>
		
		<tr>
			<td align="right">No of Openings:</td>
			<td><input type="text" name="openings" size="30"></td>
		</tr>
		
		<tr>
			<td align="right">Experience:</td>
			<td><input type="text" name="experience" size="30"></td>
		</tr>
		
		<tr>
			<td align="right">Prerequisite:</td>
			<td><input type="text" name="prerequisite"></td>
		</tr>
		
		<tr>
			<td align="right">Job Id:</td>
			<td><input type="text" name ="jobid"></td>
        </tr>
        <tr>
			<td align="right">Company Name:</td>
			<td><input type="text" name ="company"></td>
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

	$job = $_POST['job'];
	$openings = $_POST['openings'];
	$experience = $_POST['experience'];
	$prerequisite = $_POST['prerequisite'];
    $jobid = $_POST['jobid'];
    $company = $_POST['company'];

	
	if($job=='' or $openings=='' or $experience=='' or $prerequisite=='' or $jobid=='' or $company=='' ){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	}

	else {
	
	
	  $insert_query = "insert into job_openings (job,openings,experience,prerequisite,jobid,company) values ('$job','$openings','$experience','$prerequisite','$jobid','$company')";
	
	if(mysql_query($insert_query)){
	
	echo "<script>alert('Job openings added successfuly')</script>";
	 echo "<script>window.open('view_job_openings.php','_self')</script>";
	
	}


}


}

?>

<?php } ?>