<!DOCTYPE html>
<?php
	include_once 'header_footer/header.html';
?>
<html>
	<head>
		<title> </title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<article>
			<div class="container">
				<div id="head">
			<h2 style="text-align: center;"><span style="color: #ff00ff;"><strong>WE NEED YOUR SUPPORT.YOU CAN CONTACT US BY FILLING THE FOLLOWING FOAM.</strong></span></h2>
		</div>
		<div id="form">
			<form  method="POST" action="contact.php" enctype="multipart/form-data">
				<table id="table">
					<tr align="center">
						<td colspan="6" >
							<h4>CONTACT US</h4>
						</td>
					</tr>
		
					<tr>
						<td align="right"><h6><strong>FULL NAME:</strong></h6></td>
						<td>
							<input type="text" name="firstname" placeholder="ENTER YOUR NAME" required="yes">
						</td>
					</tr>
					
					<tr>
						<td align="right"><h6><strong>EMAIL:</strong></h6></td>
						<td>
							<input type="text" name="email" placeholder="ENTER YOUR EMAIL">
						</td>
					</tr>
					<tr>
						<td align="right"><h6><strong>STATE:</strong></h6></td>
						<td>
							<select name="state" required="yes">
								<option>IMO</option>
								<option>ABIA</option>
								<option>ENUGU</option>
								<option>ANAMBRA</option>
								<option>RIVERS</option>
							</select>
						</td>
				
					</tr>
					
					<tr>
						<td align="right"><h6><strong>PHONE NUMBER:</strong></h6></td>
						<td>
							<input type="number" name="number" placeholder="ENTER YOUR PHONE NUMBER" required="yes">
						</td>
					</tr>
					<tr>
						<td align="right"><h6><strong>ADDRESS:</strong></h6></td>
						<td>
							<textarea type="text" name="address" placeholder="ENTER YOUR ADDRESS" cols="20" rows="5"></textarea>
						</td>
					</tr><tr>
						<td align="right"><h6><strong>MESSAGE:</strong></h6></td>
						<td>
							<textarea type="text" name="comment" placeholder="WRITE YOUR COMMENTS" cols="20" rows="5" required="yes"></textarea>
						</td>
					</tr>
					<tr>
						<td align="right"><h6><strong>GENDER:</strong></h6></td>
						<td>
							MALE:<input type="radio" name="gender" value="male" required="yes">
							FEMALE:<input type="radio" name="gender"  value="female" required="yes" >
						</td>
					</tr>
					<tr align="center">
						<td colspan="6"><input type="submit" name="register" value="CLICK TO SUBMIT" class="button_1"></td>
					</tr>	
				</table>
			</form>	
		</div>
			</div>
			
		</article>
		<aside>
			<div class="container">
				<div id="sidebar">
					
				</div>
			</div>
		</aside>
		<?php
			include_once 'header_footer/footer.html';
		?>
		
	</body>
</html>
<?php
$con=mysqli_connect("localhost", "root" ,"", "contact");
	if(isset($_POST["register"])){
		$firstname=mysqli_real_escape_string($con,$_POST["firstname"]);
		$email=mysqli_real_escape_string($con,$_POST["email"]);
		$state=mysqli_real_escape_string($con,$_POST["state"]);
		$phone= mysqli_real_escape_string($con,$_POST["number"]);
		$address= mysqli_real_escape_string($con,$_POST["address"]);
		$comment= mysqli_real_escape_string($con,$_POST["comment"]);
		$gender= mysqli_real_escape_string($con,$_POST["gender"]);
		
			if($firstname=="" OR $comment==""){
				echo"<script>alert('PLEASE FILL IN THE FOLLOWING FIELDS BEFORE YOU CONTINUE')</script>";
				exit();
			}
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				echo"<script>alert('PLEASE ENTER A VALID EMAIL')</script>";
				exit();
			}
					else{
						 $insert ="insert into data (name,email,state,number,address,message,gender,time) values ('$firstname','$email','$state','$phone',
						 '$address','$comment','$gender',NOW())";
						$run_insert=mysqli_query($con,$insert);
							if($run_insert){
									echo"<script>alert('THANK YOU DEAR CUSTOMER,WE WILL GET BACK TO YOU SHORTLY.')</script>";
									echo"<script>window.open('index.html','_self')</script>";
									
			
							}
					}
	}
?>