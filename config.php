 <?php
 $base_url="http://localhost/konnexion/" ;
 
 //function connection(){
	 $host="localhost";
	 $user="kp_root";
	 $password="24862580";
	 $database="kpmath";
	 $conn=mysqli_connect($host,$user,$password,$database);
 
 if($conn)
	 return true;
 
 ?>
 
 