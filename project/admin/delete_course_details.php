<?php 
include("includes/connect.php"); 

if(isset($_GET['del'])){

	$delete_id = $_GET['del'];
	
	$delete_query = "delete from course_details where id='$delete_id' ";
	
	if(mysql_query($delete_query)){
	
	echo "<script>alert('Course has been Deleted')</script>";
	echo "<script>window.open('view_course_details.php','_self')</script>";
	
	}
	



}




?>