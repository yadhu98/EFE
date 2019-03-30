<?php
$host="localhost";
$username="root";
$password="yadhu1998";
$db_name="ssn";
$tbl_name="login";
$conn = mysql_connect("$host","$username","$password")or die("Error");
mysql_select_db("$db_name")or die("cant connect");
$myusername=$_POST('usr');
$mypassword=$_POST('pwd');
$myusername=striplashes($myusername);
$mypassword=striplashes($mypassword);
$myusername=mysql_real_escape_string($myusername);
$mypassword=mysql_real_escape_string($mypassword);
$sql="select * from $tbl_name where passwd='$mypassword' AND name='$myusername'";
$result=mysql_query($sql,$conn);
$count=mysql_num_rows($result);
if($count == 1)
{
  echo "Login Success!";
}
else {
  echo "unsuccessfull";
}


 ?>
