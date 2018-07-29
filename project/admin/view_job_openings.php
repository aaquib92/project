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
<h3 style="margin-left:32%; color:#fff;"> Welcome <br><?php echo $_SESSION['user_name']; ?></h3>

<!-- <h2><a href="logout.php">Logout</a></h2> -->
<h2><a href="index.php?insert=insert">Add Course Details</a></h2>
<h2><a href="view_course_details.php">View Course Details</a></h2>
<h2><a href="index.php?insert1=insert1">Add Job Openings </a></h2>
<h2><a href="view_job_openings.php">View Job Openings</a></h2>
<h2><a href="index.php?insert2=insert2">Add Recent Placements </a></h2>
<h2><a href="view_recent_placements.php">View Recent Placements</a></h2>


</div>

<table> 

	
	<tr>
                    <th>Job</th>
                    <th>Opening</th>
                    <th>Experience</th>
                    <th>Prerequisite</th>
					<th>JobId</th>
					<th>JD</th>
		           <th>Delete Opening </th>
		           <th>Edit Opening</th>
	</tr>
<?php 
include("includes/connect.php");

$select_job = "select * from job_openings";

$run_job = mysql_query($select_job);

while($row=mysql_fetch_array($run_job)){

	$id = $row['id']; 
	$job = $row['job'];
	$openings = $row['openings'];
	$experience = $row['experience'];
    $prerequisite	 = $row['prerequisite'];
	$jobid = $row['jobid'];
	$company = $row['company'];
?>
<tr align="center">
                    <td><?php echo $job; ?></td>
                    <td><?php echo $openings; ?></td>
                    <td><?php echo $experience; ?></td>
                    <td><?php echo $prerequisite; ?></td>
					<td><?php echo $jobid; ?></td>
					<td><?php echo $company; ?></td>
		<td><a href="delete_job_openings.php?del=<?php echo $id; ?>" class ="btn_delete">Delete</a></td>
		<td><a href="edit_job_openings.php?edit=<?php echo $id; ?>" class="btn_update">Edit</a></td>
	</tr>
<?php } ?>

</table>


</body>
</html>

<?php } ?>