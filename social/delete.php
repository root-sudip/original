<?php
$dbusername="root";
$dbpassword="sudipdas";
$localhost="localhost";
$database="user_login_info";

$con=mysql_connect($localhost,$dbusername,$dbpassword) or die('database login problem');
mysql_select_db($database,$con) or die('database selection problem');
session_start();

$username=$_SESSION['admin_login'];


if ($_SESSION['admin_login'] == '')
{
    echo 'the session is empty';
}
else{


	$query = mysql_query("select * from info where username='$username';") or die('query error');
	while ($row = mysql_fetch_array($query)) {
		$password = $row['username'];
		$fullname = $row['fullname'];
		$emailid = $row['emailid'];
	}

	$query = mysql_query("insert into daccountinfo (username,password,fullname,emailid)values('$username','$password','$fullname','$emailid');") or die('query error');
	$query = mysql_query("delete from info where username = '$username'") or die('query_error');



echo $username;
echo $password;
}



?>

