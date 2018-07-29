
<?php 
session_start();

?>

<html>
	<head>
		<title>Admin Login</title>
        <link rel="stylesheet" href="login.css" media="all">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
        $('.message a').click(function(){
             $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
           });
        </script>
	</head>

<body bgcolor ="grey">
	<div class="login-page">
  <div class="form">
    <form class="login-form" method ="post" action ="login.php">
      <input type="text" placeholder="username" name="user_name"/>
      <input type="password" placeholder="password" name ="user_pass"/>
      <input type="submit" value ="Login" name ="login" class="btn"/>
      <!-- <button>login</button> -->
      <p class="message">Not registered? <a href="registration.php">Create an account</a></p>
    </form>
  </div>
</div>

	<!-- <form method="post" action="login.php">
	
		
	</form> -->

</body>
</html>
<?php 
include("includes/connect.php");

if(isset($_POST['login'])){
	
	$user_name = mysql_real_escape_string($_POST['user_name']);
	$user_pass = mysql_real_escape_string($_POST['user_pass']);
	
	$encrypt = md5($user_pass);

	$admin_query = "select * from admin_login where user_name='$user_name' AND user_pass='$user_pass'";

	$run = mysql_query($admin_query); 
	
	if(mysql_num_rows($run)>0){
	
	$_SESSION['user_name']=$user_name;
	
	echo "<script>window.open('index.php','_self')</script>";
	}
	else {
	
	echo "<script>alert('User name or password is incorrect')</script>";
    }
    // if($user_name == ''){
    //     echo "<script>alert('Please Enter Username')</script>";
    // }
    // if($user_pass == ''){
    //     echo "<script>alert('Please Enter Password')</script>";
    // }
}



?>