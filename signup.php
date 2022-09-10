
<?php

$host="localhost";
$username="clini1495445";
$password="8djhrz9c9t";
$databasename="clini1495445";

$connect=mysql_connect($host,$username,$password,$databasename);
//$db=mysql_select_db($databasename);

if(isset($_POST['contact-form']))
{
 //$name=$_POST["user_name"];
 $email=$_POST["email"];
 
 mysql_query("insert into short_urls values('','$email')");
 echo "Thank You For Joining Our Newsletter";
}



?>