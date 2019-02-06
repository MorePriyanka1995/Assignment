<?php


mysql_connect("localhost","root","")or die(mysql_error());

mysql_select_db("ecom") or die(mysql_error());


$userid=$_POST['userid'];
$password=$_POST['pwd'];

if(empty($userid))

{
echo ("Enter UserId or Password");
}

else

{

//$query=mysql_query("select*from adminlogin where Userid='".$userid."' and Password='".$password."' ");
$query = "INSERT INTO users (userid, password) 
					  VALUES('$userid','$password')";
					  echo"login"
$res=mysql_fetch_row($query);

if($res)



{
header("location:http://localhost//options.html");
}

else
{
echo("Incorrect Emailid or Password");
}
}

?>










