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
	
	$edit_query = "select * from course_details where id='$edit_id'";
	
	$run_edit = mysql_query($edit_query); 
	
	while ($row=mysql_fetch_array($run_edit)){
	
	
		$id = $row['id']; 
        $course = $row['course'];
        $start_date = $row['start_date'];
        $end_date = $row['end_date'];
        $timing = $row['timing'];
        $days = $row['days'];
// 	}
// }
?>

<form method="post" action="edit_course_details.php?edit_form=<?php echo $edit_id; ?>" enctype="multipart/form-data">
	
	<table>
		
	
	<tr>
			<td align="center" bgcolor="grey" colspan="6"><h1 style="text-align:center;">Edit Course</h1></td>
		</tr>
		
		<tr>
			<td align="right">Course Name:</td>
			<td><input type="text" name="course" size="30" value="<?php echo $course;?>"></td>
		</tr>
		
		<tr>
			<td align="right">Start Date:</td>
			<td><input type="date" name="start_date" size="30" value="<?php echo $start_date;?>"></td>
		</tr>
		
		<tr>
			<td align="right">End Date:</td>
			<td><input type="date" name="end_date" size="30" value="<?php echo $end_date;?>"></td>
		</tr>
		
		<tr>
			<td align="right">Timings:</td>
			<td><input type="text" name="timing" value="<?php echo $timing;?>"></td>
		</tr>
		
		<tr>
			<td align="right">Days:</td>
			<td><input type="text" name ="days" value="<?php echo $days;?>"></td>
		</tr>
	
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
	$course1 = $_POST['course'];
	$start_date1 = $_POST['start_date'];
	$end_date1 = $_POST['end_date'];
	$timing1 = $_POST['timing'];
	$days1 = $_POST['days'];

	
	// if($course=='' or $start_date=='' or $end_date=='' or $timing=='' or $days==''){
	
	// echo "<script>alert('Any of the fields is empty')</script>";
	// exit();
	// }

	// else {
	
	
		
		$update_query = "update course_details set course='$course1',start_date='$start_date1',end_date='$end_date1',timing='$timing1',days='$days1' where id='$update_id'";
		
		if(mysql_query($update_query)){
		
		echo "<script>alert('Course has been updated Successfully')</script>";
		
		echo "<script>window.open('view_course_details.php','_self')</script>";
		
		// }
	
	}
	}



?>