<?php
session_start();
//echo md5("ratan@123$"); die;
require_once("config_db.php");
if($_POST['submit_k']){
	if($_POST['username'] && $_POST['pass']){
		$sql=$mysqli->query("select * from admin_user where username='".$_POST['username']."' and password='".md5(trim($_POST['pass']))."'");
		if($sql){
			$_SESSION['username']=$_POST['username'];
			header("Location: edit.php");
		}else{
			$error="username and password is not correct, Please retry";
		}
	}else{
		$error="Please fill username and password";
	}
}
/* close connection */
$mysqli->close();
?>

<html>
    <head>
        <title>Login for editing</title>
        <meta name="robots" content="noindex,nofollow">
    </head>
    <body>
    	<div class="Wrapper">
    		<div class="Logo"><?php if(!empty($error)){echo $error; $error="";}?></div>
    		<div class="form">
    			<form class="login_form" action="<?= $_PHPSELF ?>" method="post">
	    			<div class="fieldset">
	    				<input type="text" name="username" required="true">
	    				<input type="password" name="pass" required="true">
	    				<input type="submit" name="submit_k">
	    			</div>
    			</form>
    		</div>

    	</div>
    </body>

</html>
