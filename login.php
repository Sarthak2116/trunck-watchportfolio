<?php include 'db.php';
$p=0;
if(isset($_POST['sub']))
{
$q="SELECT * FROM details WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'";
$run_sql=mysqli_query($conn,$q);
$nu=mysqli_num_rows($run_sql);
if($nu!="")
{
	$s="SELECT name FROM details WHERE password='".$_POST['password']."'";
	$rn=mysqli_query($conn,$s);
	$row=mysqli_fetch_array($rn);
	$k;
	session_start();
	$_SESSION['k']=$row['name'];
	$_SESSION['p1']=1;
	header("Location:home.php");
	exit;
}
else
{
	$p=1;
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	after{opacity:1;}
	before{opacity:0;}
	input:focus{ outline:none; }
	tab3 { padding-left: .5em;}
	.box1{
		background-color: #F7A200;
		margin-top: 2em;
		margin-left: 1.4em;
		padding: 15px 170px;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		cursor: pointer;
		text-align: center;
		border: none;
		color: white;
	}
	.box2{
		background-color: #02143B;
		margin-top: 2em;
		margin-left: 1.4em;
		padding: 15px 160px;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		cursor: pointer;
		text-align: center;
		color: white;
		border: none;
		transition-duration: .4s;
	}
	.box3
	{
	margin-top:.5em;
	margin-left: 1.4em;
	padding: 10px 50px;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		cursor: pointer;
		text-align: left;
		color: white;
		border: none;
	}
</style>
</head>
<body bgcolor="#E5E4F2">
	<form action="login.php" method="post">
	<div  style="margin-top: 75px; width: 50%;margin-left:300px; box-shadow: 0px 0px 20px grey; background-color: white; position: absolute; height:520px;">
		<span style="float: left;"><img src="Log.png" width="100%" height="100%;"></span>
		<span class="<?php if($p==1){echo "#after";}else{echo "before";} ?>" style="margin:5em; background-color:<?php if($p==1){echo "#B20000;";}else{echo "white;";}?> color: white;">
		Username and password does not match</span><br>
		<span align="center" style="font-weight: 300; font-size: 25px; margin-left:.75em; margin-top: .5em; position: absolute;">
		Login/Sign Up On Trunk
		</span>
		<span align="right">
		<input type="email" placeholder="Enter Email" name="email"
		style="width: 380px;border-right:0; border-left:0;border-top:0; border-bottom: 1; margin-top: 12%; margin-left:1em; padding: .5em;">
		</span>
		<span align="right">
		<input type="password" placeholder="Enter Password" name="password"
		style="width: 380px;border-right:0; border-left:0;border-top:0; border-bottom: 1; margin-top: 5%; margin-left:1em; padding: .5em;">
		</span>
		<input type="submit" class="box1" style="margin-bottom: .3em;" name="sub" value="Login"></form>
		<form action="register.php"><a href="#" style="text-decoration: none;"><div align="right" style="color: blue; margin-right:3em; font-size:10px;">Trouble Logging In?</div></a>
		<input type="submit" class="box2" style="margin-bottom: 1em; margin-top: 2em;" value="Register">
		<br><br>
		<div style="text-align:center; color: grey; font-size: 12px;">Or Sign Up Using</div>
		<br>
		<button class="box3" style="margin-bottom: 1em; background-color: #3b5998;"><i class="fa fa-facebook" style="color: white;"><tab3>Facebook
		</tab3></i></button>
		<button class="box3" style="margin-bottom: 1em; background-color: #d34836;"><i class="fa fa-google-plus-official" style="color: white"><tab3>Google
		</tab3></i></button>
	</div>
	</form>
</body>
</html>