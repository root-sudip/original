<html>

	<head>
		<link href="css\index.css" rel="stylesheet" type="text/css" media="screen" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script>
				$(document).ready(function(){
    			$("#register_icon").click(function(){
        		$("#in_username").hide();
        		$("#in_password").hide();
        		$("#login_submit").hide();
        		$("#login_font").hide();
        		$("l1").hide();
        		$("l2").hide();
        		/*$("li1").show();
        		$("li2").show();
        		$("li3").show();
        		$("li4").show();*/
        		$("#signup_font").show();
        		$("#signup_font").show();
        		$("#up_fullname").show();
        		$("#up_emailid").show();
        		$("#up_password").show();
        		$("#up_username").show();
        		$("#signup_submit").show();
    				});
    			/*$("#show").click(function(){
       			$("p").show();
    				});*/
				});
		</script>
	</head>

	

		<!-- $(document).ready(function(){
    $("#hide").click(function(){
        $("p").hide();
    });
    $("#show").click(function(){
        $("p").show();
    });
}); -->

	

	<body>
		<div class="container">
      		<div class="header">
      			<font face="myFirstFont" size="6">Cloudroom <center class="center"> Welcome</center></font>
      		</div>
		</div>
		<div id="login_box" class="login_box">
			<font id="login_font" class="login_font">Login</font>
			<form action="login.php" method="post">
				<div id="input_field" class="input_field">
					<ul class="no-bullets">
    				<li id="l1" class="l1">
      					<input id="in_username" type="text" placeholder=": UserName" name="username">
    				</li>
    				<br>
    				<li id="l2" class="l2">
      					<input id="in_password" type="password" placeholder=": Password" class="focus" name="password">
    				</li>
  					</ul>
  				</div>


				<input type="submit" value="Login" name="login" class="login_submit" id="login_submit">
			</form>
			<font id="signup_font" class="signup_font">Signup</font>


			<!-- New start -->


			<form action="signup.php" method="post">
				<div id="input_field" class="input_field">
					<ul class="no-bullets">
					<li id="li1" class="li1">
      					<input id="up_fullname" class="up_fullname" type="text" placeholder=": FUllname" name="up_fullname">
    				</li>
    				<br>
    				<li id="li2" class="li2">
      					<input id="up_username" class="up_username" type="text" placeholder=": UserName" name="up_username">
    				</li>
    				<br>
    				<li id="li3" class="li3">
      					<input id="up_emailid" type="text" placeholder=": Emailid" class="up_emailid" name="up_emailid">
    				</li>
    				<br>
    				<li id="li4" class="li4">
      					<input id="up_password" type="password" placeholder=": Password" class="up_password" name="up_password">
    				</li>
  					</ul>
  				</div>


				<input type="submit" value="Signup" name="signup" class="signup_submit" id="signup_submit">
			</form>


			<!--  end -->







		</div>
		
		<img src="pic\images.png" id="register_icon" class="register_icon"></img>
	

	</body>

</html>