<html>
	<head>
		<title>Admin Panel</title>
	
	<link rel="stylesheet" href="admin_style.css" />
	</head>
	
<body>
<div id="header">
<a href="index.php">
<h1>Welcome to the Admin Panel</h1></a>
<a href="logout.php" class="btn2">Logout</a>

</div> 

<div id="sidebar">

<h2><a href="index.php?insert=insert">Add Course Details</a></h2>
<h2><a href="view_course_details.php">View Course Details</a></h2>
<h2><a href="index.php?insert1=insert1">Add Job Openings </a></h2>
<h2><a href="view_job_openings.php">View Job Openings</a></h2>
<h2><a href="index.php?insert2=insert2">Add Recent Placements </a></h2>
<h2><a href="view_recent_placements.php">View Recent Placements</a></h2>


</div>
<?php 

include("includes/connect.php");

if(isset($_GET['edit'])){
	
	$edit_id = $_GET['edit'];
	
	$edit_query = "select * from job_openings where id='$edit_id'";
	
	$run_edit = mysql_query($edit_query); 
	
	while ($row=mysql_fetch_array($run_edit)){
	
		$id = $row['id']; 
        $job = $row['job'];
        $openings = $row['openings'];
        $experience = $row['experience'];
        $prerequisite	 = $row['prerequisite'];
        $jobid = $row['jobid'];
        $company = $row['company'];
// 	}
// }
?>

<form method="post" action="edit_job_openings.php?edit_form=<?php echo $edit_id; ?>" enctype="multipart/form-data">
	
	<table>
		
	
	<tr>
			<td align="center" bgcolor="grey" colspan="6"><h1 style="text-align:center;">Edit Job Opening</h1></td>
		</tr>
		
        <tr>
			<td align="right">Job Designation:</td>
			<td><input type="text" name="job" size="30" value ="<?php echo $job;?>"></td>
		</tr>
		
		<tr>
			<td align="right">No of Openings:</td>
			<td><input type="text" name="openings" size="30"  value ="<?php echo $openings;?>"></td>
		</tr>
		
		<tr>
			<td align="right">Experience:</td>
			<td><input type="text" name="experience" size="30" value ="<?php echo $experience;?>"></td>
		</tr>
		
		<tr>
			<td align="right">Prerequisite:</td>
			<td><input type="text" name="prerequisite" value ="<?php echo $prerequisite;?>"></td>
		</tr>
		
		<tr>
			<td align="right">Job Id:</td>
			<td><input type="text" name ="jobid" value ="<?php echo $jobid;?>"></td>
        </tr>
        <tr>
			<td align="right">Company Name:</td>
			<td><input type="text" name ="company" value ="<?php echo $company;?>"></td>
		</tr>
		<tr>
	
			<td align="center" colspan="6"><input type="submit" name="update" value="Update Now" class ="btn_update" style="margin-left:33%;"></td>
		</tr>		
	</table>

</form>
</body>
</html>
	<?php }} ?>
<?php
	
	if(isset($_POST['update'])){
	
	$update_id = $_GET['edit_form'];
    $job1 = $_POST['job'];
	$openings1 = $_POST['openings'];
	$experience1 = $_POST['experience'];
	$prerequisite1 = $_POST['prerequisite'];
    $jobid1 = $_POST['jobid'];
    $company1 = $_POST['company'];

	
	// if($course=='' or $start_date=='' or $end_date=='' or $timing=='' or $days==''){
	
	// echo "<script>alert('Any of the fields is empty')</script>";
	// exit();
	// }

	// else {
	
	
		
		$update_query = "update job_openings set job='$job1',openings='$openings1',experience='$experience1',prerequisite='$prerequisite1',jobid='$jobid1',company ='$company1' where id='$update_id'";
		
		if(mysql_query($update_query)){
		
		echo "<script>alert('Job openings has updated Successfully')</script>";
		
		echo "<script>window.open('view_job_openings.php','_self')</script>";
		
		// }
	
	}
	}



?>