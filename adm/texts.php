<!DOCTYPE html>
<html>
<head>
	<title>SoonieCMS : Appearance</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../adm/css/app.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500i,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>

	<?php
	if ($_COOKIE['status']=="connected") {
		?>

<div class="adm_all">
<div class="container-fluid">

    <!-- Nav Bar -->
  <?php
	     include '../includes/access.php';
       include '../includes/left-menu.php';
			 include '../includes/adm/texts.php';
			 include '../connect/connect.php';
  ?>

    <!-- End Nav Bar -->


    <!--  Content -->

   <div class="col-10 dash_w animated fadeInLeft">
   	<h1>Soonie : Texts
   	</h1>
   	<div class="row dsh">
   	<div class="dash_appearanc">
<form method="POST" class="adm_inputs" action="texts.php">
   		<div class="adm_first_text">
   		<h2>Home first text</h2>

   			<input   type="text" name="first_text" placeholder="First Text">


   		</div>

   		<div class="adm_second_text">
   		<h2>Home second text </h2>

   			<input   type="text" name="second_text" placeholder="Second Text">

   		</div>

   		<div class="adm_copy_text">
   		<h2>Copyright text</h2>

   			<input   type="text" name="copy_text" placeholder="Copyright Text">

   		</div>

		<div class="adm_submit">
   		<p><input type="submit" name="submit" value="Submit"></p>
		</div>
</form>

   	</div>
   </div>
   </div>





    <!-- End content -->


</div>
</div>
</div>





</div>

<?php
}
else {
	header('Location: index.php?connected=false');
}
?>

</body>
</html>
