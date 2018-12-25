<?php include 'db.php';
$q="SELECT * FROM details WHERE password='".$_POST['password']."'";
$run_sql=mysqli_query($conn,$q);
$nu=mysqli_num_rows($run_sql);
if($nu!="")
{
	$s="SELECT name FROM details WHERE password='".$_POST['password']."'";
	$rn=mysqli_query($conn,$s);
	$row=mysqli_fetch_array($rn);
	echo "Hi $row[name]";
	header("Location:register.php");
	exit();
}
else
{
	echo "Wrong password";
}
?>