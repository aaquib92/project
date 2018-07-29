<?php 
include("includes/connect.php"); 

if(isset($_GET['del'])){

	$delete_id = $_GET['del'];
	
	$delete_query = "delete from job_openings where id='$delete_id' ";
	
	if(mysql_query($delete_query)){
	
	echo "<script>alert('Job opening has been Deleted')</script>";
	echo "<script>window.open('view_job_openings.php','_self')</script>";
	
	}
	



}




?>