<?php
$con=mysqli_connect("localhost", "root" ,"", "subscribe");
	if(isset($_POST["register"])){
		$email=mysqli_real_escape_string($con,$_POST["email"]);
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				echo"<script>alert('PLEASE ENTER A VALID EMAIL')</script>";
				echo"<script>window.open('index.html','_self')</script>";
				exit();
			}
			$sel_email="select * from customers where email='$email'"; 
			$run_email= mysqli_query($con,$sel_email);
				$check_email= mysqli_num_rows($run_email);
					if($check_email==1){
						echo"<script>alert('PLEASE THE EMAIL ALREADY EXIST')</script>";
						echo"<script>window.open('index.html','_self')</script>";
				exit();
					}
			else{
				 $insert ="insert into customers (email,time) values ('$email',NOW())";
				$run_insert=mysqli_query($con,$insert);
				if($run_insert){
				echo"<script>alert('Thank you dear customer for subscribing with us.')</script>";
				echo"<script>window.open('index.html','_self')</script>";
									
			
							}
					}			
		
	}


?>