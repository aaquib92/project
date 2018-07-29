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
	
	$edit_query = "select * from recent_placements where id='$edit_id'";
	
	$run_edit = mysql_query($edit_query); 
	
	while ($row=mysql_fetch_array($run_edit)){
	
	
        $id = $row['id']; 
        $name = $row['name'];
        $company	 = $row['company'];
        $position = $row['position'];
        $contact	 = $row['contact'];
        $date = $row['date'];
// 	}
// }
?>

<form method="post" action="edit_recent_placements.php?edit_form=<?php echo $edit_id; ?>" enctype="multipart/form-data">
	
	<table>
	<tr>
			<td align="center" bgcolor="grey" colspan="6"><h1 style="text-align:center;">Edit Recent Placement</h1></td>
		</tr>
		
		<tr>
			<td align="right"> Name of Student:</td>
			<td><input type="text" name="name" size="30" value="<?php echo $name; ?>"></td>
		</tr>
		
		<tr>
			<td align="right">Company Name</td>
			<td><input type="text" name="company" size="30"  value="<?php echo $company; ?>"></td>
		</tr>
		
		<tr>
			<td align="right">Position:</td>
			<td><input type="text" name="position" size="30"  value="<?php echo $position; ?>"></td>
		</tr>
		
		<tr>
			<td align="right">Contact (Email id):</td>
			<td><input type="text" name="contact"  value="<?php echo $contact; ?>"></td>
		</tr>
		
		<tr>
			<td align="right">Date:</td>
			<td><input type="date" name ="date"  value="<?php echo $date; ?>"></td>
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
    $name1 = $_POST['name'];
	$company1 = $_POST['company'];
	$position1 = $_POST['position'];
	$contact1 = $_POST['contact'];
	$date1 = $_POST['date'];

	
	// if($course=='' or $start_date=='' or $end_date=='' or $timing=='' or $days==''){
	
	// echo "<script>alert('Any of the fields is empty')</script>";
	// exit();
	// }

	// else {
	
	
		
		$update_query = "update recent_placements set name='$name1',company='$company1',position='$position1',contact='$contact1',date='$date1' where id='$update_id'";
		
		if(mysql_query($update_query)){
		
		echo "<script>alert('Recent Placement has been updated Successfully')</script>";
		
		echo "<script>window.open('view_recent_placements.php','_self')</script>";
		
		// }
	
	}
	}



?>