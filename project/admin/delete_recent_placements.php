<?php 
include("includes/connect.php"); 

if(isset($_GET['del'])){

	$delete_id = $_GET['del'];
	
	$delete_query = "delete from recent_placements where id='$delete_id' ";
	
	if(mysql_query($delete_query)){
	
	echo "<script>alert('Recent placement has been Deleted')</script>";
	echo "<script>window.open('view_recent_placements.php','_self')</script>";
	
	}
	



}




?>