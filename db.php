<?php
     $con=mysqli_connect("localhost", "root", "", "loginform");
     
		 $Name= $_POST['name'];
		 $Mobile= $_POST['mobile'];
		 $Email= $_POST['email'];
		 $Password= $_POST['password'];
		 
		 $sql= "insert into users(Name,Mobile,Email,Password) values('$Name', '$Mobile', '$Email', '$Password')";
		 $res=mysqli_query($con,$sql);
		 if($res==true)
		 {
			 echo 'ok';
		 }
		 else
		 {
			 echo 'error';
		 }
	
?>