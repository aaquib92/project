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
	<!--<tr>
		<td colspan="10" align="center" ><h1>View All Courses</h1></td>
	</tr>-->
	
	<tr>
	                <th>Course</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Timing</th>
                    <th>Days</th>
		           <th>Delete Course</th>
		           <th>Edit Course</th>
	</tr>
<?php 
include("includes/connect.php");

$select_course = "select * from course_details";

$run_course = mysql_query($select_course);

while($row=mysql_fetch_array($run_course)){

	$id = $row['id']; 
	$course = $row['course'];
	$start_date = $row['start_date'];
	$end_date = $row['end_date'];
    $timing = $row['timing'];
    $days = $row['days'];
?>
<tr align="center">
                    <td><?php echo $course; ?></td>
                    <td><?php echo $start_date; ?></td>
                    <td><?php echo $end_date; ?></td>
                    <td><?php echo $timing; ?></td>
                    <td><?php echo $days; ?></td>
		<td><a href="delete_course_details.php?del=<?php echo $id; ?>" class ="btn_delete">Delete</a></td>
		<td><a href="edit_course_details.php?edit=<?php echo $id; ?>" class="btn_update">Edit</a></td>
	</tr>
<?php } ?>

</table>


</body>
</html>

<?php } ?>