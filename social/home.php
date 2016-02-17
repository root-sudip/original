<?php
$host = "localhost";
$dbusername = "root";
$dbname = "user_login_info";
$dbpassword = "sudipdas";
$conn = mysql_connect($host,$dbusername,$dbpassword) or die('fail');
mysql_select_db($dbname,$conn) or die('unable');
session_start();

$username=$_SESSION['admin_login'];
if(!isset( $_SESSION['admin_login'])){
	header("index.php");

}
else{ ?>

	<html>
	<head>
		<?php 

			$query = mysql_query("select * from info where username='$username'") or die(mysql_error());
			while($row=mysql_fetch_array($query)){
				$t_fullname = $row['fullname'];
			}

			echo '<title>'.$t_fullname.'</title>';
		?>
		<link href="css\index.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
	<body>
		<div class="container">
      		<div class="header">
      			<font face="myFirstFont" size="6">Cloudroom <center class="center"> Welcome</center></font>
      		</div>
		</div>
	</body>
</html>
<?php

	echo '
	<html>
		<head>
			<link href="css\home.css"rel="stylesheet" type="text/css" media"screen" />';

	/*$html = <<<HTML
		<html>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

		</html>
HTML;  
	                     /////////////////error done
	echo $html;*/
	
	echo'
		</head>
		<body>

			<div id="chat_box" class="chat_box">

			</div>
		
			<div id="post_div" class="post_div">
				<form action="" method="post" >

				
				<input type="submit" value="POST" name="home_status_post" id="home_status_post" class="home_status_post">
				<textarea id="post_home" class="post_home" name="post_home" rows="4" cols="50" placeholder="Enter text here ..." ></textarea>
			</form>
			</div>';
}

?>

