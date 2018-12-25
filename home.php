<?php
if (session_status() == PHP_SESSION_NONE) 
{
session_start();
if(isset($_SESSION['p1']))
{
$_SESSION['d']="Hi, $_SESSION[k]";
}
else
{
	$_SESSION['d']="";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Trunk E-Store - Official online store
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	after{opacity:1;}
	before{opacity:0;}
	input:focus{ outline: none;}
	header {
    background-color: #02143B;
	height: 60px;
	margin-top: 0.1em;
	margin-bottom:2px;
	overflow: hidden;
	}
	header h1 {
    margin: 0;
	}
	html, body {
    margin: 0;
    padding: 0;
	}
	.header1{ margin-top: 0; margin-bottom: 0; margin-right: 6px; padding-top: 1px; padding-bottom: 0px; font-size: 15px;}
	tab1 { padding-left: 2em; }
	tab2{ padding-left: .5em;}
	tab3 { padding-left: 1em;}
	.SearchBar {
     position: absolute;
     top: 42px;
     left: 300px;
	 border-radius:25px;
	 
}
.SearchButton{
	position: relative;
	left: 507px;
	top: -31px;
	background-color: #C0FF1E;
	padding-left: 1em;
	padding-right: 1em;
	border-radius:25px;
	height: 29px;
	width: 15px;
	margin: 0;
}
.SearchBar input {
     height: 29px;
	 border: 0;
     width: 575px;
	 padding-left: 1em;
	  border-radius:25px;
}
.padder{
	padding-left: .5em;
	padding-right: 1.3em;
	padding-top: 0.1em;
	padding-bottom: 1px;
}
.circle{
	opacity: 1;
	width: 300px;
	height: 300px;
	border-radius:50%;
	background-size: cover;
	overflow: hidden;
	margin-left:50px;
}
.text{ font-size: 20px; font-weight: 200; opacity: 0;
    transition: opacity 500ms;
	  background: rgba(0, 0, 0, 0.75);
	  width: 300px;
	  height: 300px;
	  border-radius: 50%;
	  vertical-align: middle;
	  text-align: center;
	  position: relative;
	  display: inline-block;
  }
.circle:hover .text{
	width: 300px;
	height:300px;
	border-radius: 50%;
	opacity: 1;
	position: relative;
	
}
#plus {
  font-family: Helvetica;
  color: rgba(255, 255, 255, 0.85);
  font-size: 25px;
  text-align: center;
  padding-top: 4.5em;
}
.container{
	margin-left: 5px;
	margin-top:  8px;
	margin-right: 5px;
	background-size: 650px 250px;
	overflow: hidden;
	background-repeat: no-repeat;
}
.overlay{ font-size: 20px; font-weight: 200; opacity: 0;
    transition: opacity 500ms;
	  background: rgba(0, 0, 0, 0.50);
	  width: 650px;
	  height: 250px;
	  vertical-align: middle;
	  text-align: center;
	  position: relative;
	  display: inline-block;
  }
.container:hover .overlay{
	width: 650px;
	height:250px;
	opacity: 1;
	position: relative;
}
	</style>
</head>
<body bgcolor="#E5E4F2">
	<div class="header1" align="right">
		<table>
			<tr>
				<td><tab3><i class="fa fa-location-arrow" style="color: red;"></i>Store Locator</tab3></td>
				<td><tab3>Help Center</tab3></td>
				<td><tab3>Track Order</tab3></td>
				<td><tab3><i class="fa fa-phone"></i>1800-1860-918</tab3></td>
			</tr>
		</table>
	</div>
	<header>
		<div class="padder">
			<div style="color:white;">
				<a href="home.php"><img src="self.png" width="150px" height="64px"></a>
				<span style="float: right; padding-top: 1.25em; padding-right:1.25em">
				<tab2><span class="<?php if(isset($_SESSION['p1'])){echo "after";}else{echo "before";} ?>" style="color: white;"><?php echo $_SESSION['d']; ?></span></tab2>
				<tab1><a href="#" style="text-decoration: none; color: white;"><i class="fa fa-shopping-cart"><tab2>Cart</tab2></i></a></tab1>
				<tab1><a href="logout.php" style="text-decoration: none; color: white;" ><i class="fa fa-user-o"><tab2><?php if (!isset($_SESSION['p1'])){echo "Login";}else{echo "Logout";}?> 
				</tab2></i></a></tab1></span>
			</div>
		</div>
		<div class="SearchBar">
			<input type="text" placeholder="Search for a Product , Brand or Category">
			<div style="font-size: 28px;"><a href="#"><span class="SearchButton"><i class="fa  fa-search" style="color:black;"></i></span></a></div>
		</div>
	</header>
	<img src="sonata.jpg" width="100%" height="450px" style="margin-top: 0;">
	<hr width="80%">
	<div align="center" style="font-size: xx-large; font-family: Courier New">Shop By Category</div>
	<br><br>
	<table align="center">
		<tr>
			<td>
				<a href="#"><div class="circle" style="background-image: url(img2.jpg)"><div class="text"><div id="plus">Smart<br>Watch</div></div></div></a>
			</td>
			<td>
				<a href="#"><div class="circle" style="background-image: url(img1.jpg)"><div class="text"><div id="plus">Analog<br>Watch</div></div></div></a>
			</td>
			<td>
				<a href="#"><div class="circle" style="background-image: url(img3.jpg)"><div class="text"><div id="plus">Digital<br>Watch</div></div></div></a>
			</td>
		</tr>
	</table>
	<br><br>
	<div align="center" style="font-size: xx-large; font-family: Courier New">Shop By Brand</div>
	<br>
	<table align="center">
		<tr>
			<td><a href="#">
			<div class="container" style="background-image: url(timex.jpg)"><div class="overlay"><div id="plus">45 Products</div></div></div>
			</a>
			</td>
			<td><a href="#">
			<div class="container" style="background-image: url(Titan.jpg)"><div class="overlay"><div id="plus">37 Products</div></div></div>
			</a>
			</td>
		</tr>
		<tr>
			<td><a href="#">
			<div class="container" style="background-image: url(fastrack.jpg)"><div class="overlay"><div id="plus">26 Products</div></div></div>
			</a>
			</td>
			<td><a href="#">
			<div class="container" style="background-image: url(tm.jpg) "><div class="overlay"><div id="plus">20 Products</div></div></div>
			</a>
			</td>
		</tr>
		<tr>
			<td><a href="#">
			<div class="container" style="background-image: url(g.jpg)"><div class="overlay"><div id="plus">51 Products</div></div></div></td>
			</a>
			</td>
			<td><a href="#">
			<div class="container" style="background-image: url(watch1.jpg);"><div class="overlay"><div id="plus">67 Products</div></div></div>
			</a>
			</td>
		</tr>
	</table>
	<br><br>
	<div class="container" style="margin:1em;"><a href="#"><img src="ad1.png" width="105%"></a></div>
	<div style="background-color:white; margin:1em;">
	<span style="float:left; width:230px; height:284px;margin-left:0em;"><img src="dod.jpg"width="300px"></span>
	<span style="float:left; width:230px; height:284px;margin-left:5em;"><img src="w1.jpg">
	</span>
	<span style="width:230px; height:284px;margin-left:.5em;position:relative;"><img src="w3.png" height="260px" width="200px" style="margin:0;"></span>
	<span style="width:230px; height:284px;margin-left:1em;"><img src="w4.jpg" height="260px" width="200px" style="margin:0;"></span>
	<span style="width:230px; height:284px;margin-left:1em;"><img src="w5.jpg" height="260px" width="200px" style="margin:0;"></span>
	</div>
</body>
</html>