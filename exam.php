<?php
echo "Orginal String:Hello world! aeiou"."<br>";
$str="Hello world! aeiou";
$s="";
for($i=0;$i<strlen($str);$i++)
{
	$s=$str{$i}.$s;
}
$str=$s;
echo $str;
?>