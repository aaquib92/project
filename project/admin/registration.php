
<?php 
session_start();

?>

<html>
	<head>
		<title>Admin Login</title>
        <link rel="stylesheet" href="registration.css" media="all">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      
	</head>

<body>

<form action="registration.php" method="post" enctype="multipart/form-data">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">

          <label for="name"> User Name:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_pass">
          
           </fieldset>
        
        
        <input type="submit" name="submit" value="Sign Up" class="btn">
      </form>
     
</body>
</html>

<?php 
include("includes/connect.php"); 

if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$user_name = $_POST['user_name'];
	$user_pass = $_POST['user_pass'];


	
	if($name=='' or $user_name=='' or $user_pass==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	}

	else {
	
	
	  $insert_query = "insert into admin_login (name,user_name,user_pass) values ('$name','$user_name','$user_pass')";
	
	if(mysql_query($insert_query)){
	
	echo "<script>alert('User Registered successfuly')</script>";
	 echo "<script>window.open('login.php','_self')</script>";
	
	}


}




?>

<?php } ?>
