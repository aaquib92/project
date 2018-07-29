<?php 
session_start();

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
<!-- <h2><a href="view_posts.php">View Posts</a></h2> -->
<h2><a href="index.php?insert=insert">Add Course Details</a></h2>
<h2><a href="view_course_details.php">View Course Details</a></h2>
<h2><a href="index.php?insert1=insert1">Add Job Openings </a></h2>
<h2><a href="view_job_openings.php">View Job Openings</a></h2>
<h2><a href="index.php?insert2=insert2">Add Recent Placements </a></h2>
<h2><a href="view_recent_placements.php">View Recent Placements</a></h2>
<!-- <h2><a href="#">View Comments</a></h2> -->


</div>

<div id="welcome1"> 

<h1>Welcome to your Admin Panel</h1>

<p> This is your admin panel, where you can manage your website files and content</p>


</div>
<?php 
	
	if(isset($_GET['insert'])){
	
	include("add_course_details.php");
	// include("add_job_openings.php");
	
	}
	if(isset($_GET['insert1'])){
		
	 include("add_job_openings.php");
		
		}

	if(isset($_GET['insert2'])){
		
	 include("add_recent_placements.php");
		
		}
?>

</body>
</html>

<?php } ?>