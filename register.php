<?php
require 'config.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password1=$_POST['password'];
	$name=$_POST['name'];
	//$conn=connection();
	echo "$name.<br>$email.$password1.$mobile";
	echo md5($password);
	$host="localhost";
	 $user="kp_root";
	 $password="24862580";
	 $database="kpmath";
	 $conn=mysqli_connect($host,$user,$password,$database);
	if($conn)
		echo "<br>true connected to database";
    $sql="INSERT INTO `users`(`name`, `email`, `phone`, `country`, `password`, `forgot_password_code`) VALUES ('$name','$email','$password','null','$password','null')";
    echo $sql;
	if($conn)
		echo "<br>true";

}
?>

<div class="box">
        <div class="input-wrapper">
          <br>
          <h1 style="text-align: center;color: purple; "><b>Book Your Class</b></h1>
          <p style="color: gray;text-align: center;">Learn from the best</p>
          <h3 style="text-align: center;color: black;"><hr><b>Enter Your details </b></h3>
          <br>
		  
		  <script>
		  function myfun(){
		  alert('Form Submitted.'); 
		  }
		  </script>
		  
          <form action="" method="POST" class="float1">
            <input class="input1" type="text" id="name" name="name" placeholder="Enter your name">
            <br>
            
            <input class="input1" type="text" id="mobile" name="mobile" placeholder="Enter your number">
            <br>
      
            <select class="input1" id="sate" name="state" >
              <option value="delhi">Delhi</option>
              <option value="kolkata">Kolkata</option>
              <option value="chennai">Chennai</option>
            </select>
            <br>
            <input class="input1" type="email" id="email" name="email" placeholder="Enter your email">
            <br>
			<input class="input1" type="password" id="password" name="password" placeholder="Enter Password">
            <br>
            <input class="input1" type="submit" id='submit' value="Submit" onclick="myfun()">
            <br>
			
          </form>
        </div>
    </div>