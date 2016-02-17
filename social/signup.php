<?php
$dbusername="root";
$dbpassword="sudipdas";
$localhost="localhost";
$database="user_login_info";

$con=mysql_connect($localhost,$dbusername,$dbpassword) or die('database login problem');
mysql_select_db($database,$con) or die('database selection problem');
session_start();

$username=$_POST['up_username'];
$password=$_POST['up_password'];
$emailid=$_POST['up_emailid'];
$fullname=$_POST['up_fullname'];
echo $username;


	$query = mysql_query("insert into info (username,password,fullname,emailid)values('$username','$password','$fullname','$emailid');") or die('query error');
	/*if(mysql_num_rows($query) != null){
		 $_SESSION['admin_login']=$username;

		echo "login success \n";
		header('Location:http://localhost:80/home.php');

	}
	else{
		echo "failed \n";
	}*/
	echo "insert successfully!!";




echo $username;
echo $password;



?>