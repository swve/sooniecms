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


  <?php
	  include '../includes/access.php';
       include '../includes/left-menu.php';
  ?>




    <!--  Content -->

   <div class="col-5 dash_w animated fadeInLeft">
   	<h1>Soonie : Social links
   	</h1>
   	<div class="row dsh">
   	<div class="dash_appearanc">
   <form method="POST" class="adm_inputs" action="go.php">
   		<div class="adm_first_text">
   		<h2>Facebook page</h2>

   			<input   type="text" name="" placeholder="Facebook link">


   		</div>

   		<div class="adm_second_text">
   		<h2>Twitter account </h2>

   			<input   type="text" name="" placeholder="Twitter Link">

   		</div>

   		<div class="adm_copy_text">
   		<h2>Google Plus Page</h2>

   			<input   type="text" name="" placeholder="Google Plus Link">

   		</div>



		<div class="adm_submit">
   		<p><input type="submit" name="" value="Submit"></p>
		</div>

</form>
   	</div>
   </div>
   </div>
   <div class="col-5 animated fadeInLeft">

   <div class="row dsh">
    <div class="dash_appearanc">
      <div class="adm_copy_text">
      <h2>LinkedIn account</h2>
      <form method="POST" class="adm_inputs">
        <input   type="text" name="" placeholder="LinkedIn Link">
      </form>
      </div>
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
