<?php
     $host="localhost";
	 $user="kp_root";
	 $password="24862580";
	 $database="kpmath";
	 
$conn=mysqli_connect($host,$user,$password,$database);
	if($conn)
		echo "<br>true connected to database";
		$sql = "select * from users";    
?>

        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Id</td>    
                <td> Name</td>    
                <td>Mobile</td>    
                <td>state</td>    
                <td>Password</td>           
            </tr>    
<?php    
        $result = mysqli_query($conn,$sql);    
while($row = mysqli_fetch_object($result)){    
    
    
?>  
    <tr>   
        <td>  
            <?php echo $row->name;?>  
        </td>

        <td>  
            <?php echo $row->email;?>  
        </td> 		
        <td>  
            <?php echo $row->phone;?>  
        </td>  
        <td>  
            <?php echo $row->country;?>  
        </td>  
        <td>  
            <?php echo $row->password;?>  
        </td>  
	</tr>
	<?php } ?>
	