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
                     <th>Name</th>
                    <th>Company</th>
                    <th>Position</th>
                    <th>Contact</th>
					<th>Date</th>
		           <th>Delete Placement </th>
		           <th>Edit Placement</th>
	</tr>
<?php 
include("includes/connect.php");

$select_placement = "select * from recent_placements";

$run_placement = mysql_query($select_placement);

while($row=mysql_fetch_array($run_placement)){

	$id = $row['id']; 
	$name = $row['name'];
	$company	 = $row['company'];
	$position = $row['position'];
    $contact	 = $row['contact'];
	$date = $row['date'];
?>
<tr align="center">
                    <td><?php echo $name; ?></td>
                    <td><?php echo $company	; ?></td>
                    <td><?php echo $position; ?></td>
                    <td><?php echo $contact; ?></td>
					<td><?php echo $date; ?></td>
		<td><a href="delete_recent_placements.php?del=<?php echo $id; ?>" class="btn_delete">Delete</a></td>
		<td><a href="edit_recent_placements.php?edit=<?php echo $id; ?>" class="btn_update">Edit</a></td>
	</tr>
<?php } ?>

</table>


</body>
</html>

<?php } ?>