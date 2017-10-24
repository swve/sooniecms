<?php
setcookie('status', 'disconnected', time() + 365*24*3600, null, null, false, true);
?>
<!DOCTYPE html>
<html>
<head>
	<title>SoonieCMS Administration</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../adm/css/app.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500i,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>

<!--  Includes -->

<?php

			include '../includes/access.php';


 ?>

 <!--  Disconnected user URL redirect   -->

<?php
if (isset($_GET['connected'])) {



if (htmlspecialchars($_GET['connected'])=="false") {
?>
<div class="popup animated slideInDown">
	<p><i class="fa fa-exclamation-circle" aria-hidden="true"></i>&nbsp; Please sign in to access administration panel  </p>
</div>
<?php
}
}

 ?>


<!--  Username and password verification -->

<?php
if (isset($_POST['login'])) {
	if (!empty(htmlspecialchars($_POST['user'])) && !empty(htmlspecialchars($_POST['pass']))) {

			if (htmlspecialchars($_POST['user'])==user AND htmlspecialchars($_POST['pass'])==pass ) {
				setcookie('status', 'connected', time() + 365*24*3600, null, null, false, true);
				header('Location: panel.php');
			}

			else {
				?>
				<div class="popup animated slideInDown">
					<p><i class="fa fa-unlock-alt" aria-hidden="true"></i> &nbsp; Your username and password are incorrect, please retry  </p>
				</div>
				<?php
			}


	}
	else {

?>



<div class="popup animated slideInDown">
	<p><i class="fa fa-unlock-alt" aria-hidden="true"></i>&nbsp; Your username and password are missing , please try again  </p>
</div>


	<?php
	}
}

?>

<!--  Connection page content and form -->


<div class="all container-fluid">
 <div class="container content animated fadeInDown">
 	<img class="" src="../img/adm_logo_v2.png">
 	<div class="login_block ">
 		<form method="post" action="index.php">
 		<p><input type="text" name="user" placeholder="Username"></p>
 		<p><input type="password" name="pass" placeholder="Password"></p>
 		<p><input type="submit" value="LOGIN" name="login"></p>
 		</form>
 	</div>
 </div>

</div>




</body>
</html>
