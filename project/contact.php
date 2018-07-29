<html>
	<head>

<link rel="stylesheet" href="style.css" media="all">


</script> 

	</head>

<body>
<div><?php include("includes/navbar.php"); ?></div>

<div id="section">	
<div id ="course"><span id="cr">Contact Us</span></div>
<div id="form">
  <form method="post" action="contact.php" enctype="multipart/form-data">
    <label for="name"> Name</label>
    <input type="text" id="name" name="name" placeholder="Enter Your Name">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Enter Your Email">

    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" placeholder="Enter Your Phone No">
    
    <label for="message">Message</label>
    <input type="text" id="message" name="message" placeholder="Enter Your Message">
    <input type="submit" value="Submit" id="submit" name="submit">
  </form>
</div>
  
<?php 
include("includes/connect.php"); 

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
	
	if($name=='' or $email=='' or $phone=='' or $message==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	}

	else {
	
        $insert_query = "insert into contact_form (name,email,phone,message) values ('$name','$email','$phone','$message')";
        
	if(mysql_query($insert_query)){
	
        echo "<script>alert('Contact Form added successfuly')</script>";
        echo "<script>window.open('contact.php','_self')</script>";
	
	}

}


}

?>
  <hr class ="footer">
   <p class="para3">@Software Solutions All Rights Reserved</p>
</div>

</body>
</html>