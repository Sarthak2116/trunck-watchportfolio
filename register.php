<?php include 'db.php';
if(isset($_POST['submit']))
{
$n=$_POST['name'];
$mno=$_POST['mno'];
$gender=$_POST['gender'];
$e=$_POST['email'];
$p=$_POST['password'];
$cp=$_POST['cp'];
if($p===$cp)
{
$c="INSERT INTO details (name,mno,gender,email,password) VALUES ('$n','$mno','$gender','$e','$p')";
$s=mysqli_query($conn,$c);
header("Location:login.php");
exit();
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register on Trunk</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	input:focus{ outline:none;}
	.big{ width:2em;
			height:2em;
			}
	</style>
	<script type="text/javascript" language="javascript">
	function validate()
	{
		var p=document.f1.password.value;
		var cp=document.f1.cp.value;
		if(p!=cp)
		{
			alert ("Password does not match");
		}

	}
	</script>
</head>
<body bgcolor="#E5E4F2">
	<form action="register.php" method="post" name="f1">
	<div  style="margin-top: 2px; width: 90%;margin-left:60px; box-shadow: 0px 0px 20px grey; background-color: white; position: absolute; height:640px;">
		<span style="float: left; margin-top:80px;"><img src="register.jpg" width="100%" height="100%"></span>
		<span align="center" style="font-weight:300; font-size:35px; margin-left: 7em; margin-top: .5em; position:absolute;">
		Register on Trunk
		</span>
		<br>
		<span align="right" style="margin-left:4em;margin-top:7%; position:absolute;">
		<input type="text" name="name" placeholder="Full Name" style="border-left:0; border-right:0; border-top:0; 
			   width:650px; height: 25px; padding-bottom:0.1em; font-weight:300; font-size:25px; padding-left:.2em;" required>
		</span>
		<span align="right" style="margin-left:4em;margin-top:14%; position:absolute;">
		<input type="text" name="mno" placeholder="Mobile No." style="border-left:0; border-right:0; border-top:0; 
			   width:650px; height: 25px; padding-bottom:0.1em; font-weight:300; font-size:25px; padding-left:.2em;" pattern="[0-9]{10}">
		</span>
		<span align="right"style="margin-left:2.6em; margin-top:21%;position:absolute; font-size:25px; font-weight: 300;">Gender:</span>
		<span style="color: grey;"><input type="radio" class="big" style="  margin-left:185px;"name="gender" value="male">
			<span style="margin-left:1px; font-size:25px;position:absolute; margin-top:260px;"><i class="fa fa-male"> Male</i></span>
			<input type="radio" class="big" style="margin-top:21.25%; margin-left:175px; " name="gender" value="female">
			<span style="margin-left:1px; font-size:25px;position:absolute; margin-top:260px;"><i class="fa fa-female"> Female</i></span>
		</span>
		<br><span align="right" style="margin-left:4em;margin-top:3%; position:absolute;">
		<input type="email" name="email" placeholder="Email" style="border-left:0; border-right:0; border-top:0; 
			   width:650px; height: 25px; padding-bottom:0.1em; font-weight:300; font-size:25px; padding-left:.2em;">
		</span>
		<span align="right" style="margin-left:4em;margin-top:8.5%; position:absolute;">
		<input type="password" name="password" placeholder="Set Password" style="border-left:0; border-right:0; border-top:0; 
			   width:650px; height: 25px; padding-bottom:0.1em; font-weight:300; font-size:25px; padding-left:.2em;">
		</span>
		<span align="right" style="margin-left:4em;margin-top:14%; position:absolute;">
		<input type="password" name="cp" placeholder="Confirm Password" style="border-left:0; border-right:0; border-top:0; 
			   width:650px; height: 25px; padding-bottom:0.1em; font-weight:300; font-size:25px; padding-left:.2em;">
		</span>
		<span align="right" style="margin-left:4em;margin-top:20%; position:absolute;">
		<input type="checkbox" class="big"></span>
		<span style="font-weight:300; font-size:20px; position:absolute; margin-top:251px; margin-left:100px;"> I agree to
		<a href="#" style="text-decoration:none;">Terms & Conditions</a></span>
		<span align="right" style="margin-left:27em;margin-top:20%; position:absolute;">
		<a href="login.php"><input type="submit" name="submit" value="Sign Up" onclick="validate()"
		style="cursor:pointer; background-color:#F7A200; text-align:center; color: white;border:0; width:290px; height:40px; font-size:20px; font-weight:300;">
		</a>
	</div>
	</form>
</body>
</html>
