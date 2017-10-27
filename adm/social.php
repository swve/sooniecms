<!DOCTYPE html>
<html>
<head>
	<title>SoonieCMS : Appearance</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
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
   <form method="POST" class="adm_inputs" action="social.php">
   		<div class="adm_first_text">
   		<h2>Facebook page</h2>

   			<input   type="text" name="fb_link" placeholder="Facebook link">


   		</div>
   		<div class="adm_second_text">
   		<h2>Twitter account </h2>

   			<input   type="text" name="tw_link" placeholder="Twitter Link">

   		</div>

   		<div class="adm_copy_text">
   		<h2>LinkedIn Page</h2>

   			<input   type="text" name="ln_link" placeholder="Linked In Link">

   		</div>



		<div class="adm_submit">
   		<p><input type="submit"  value="Submit"></p>
		</div>

</form>
   	</div>
   </div>
   </div>
   <div class="col-5 animated fadeInLeft">










    <!-- End content -->


</div>
</div>
</div>





</div>

        <?php
        include '../connect/connect.php';

        $req = $bdd->prepare('UPDATE soonie_social SET fb_link = :fb_link, tw_link = :tw_link ,  ln_link = :ln_link   WHERE id = :id');
        $req->execute(array(
            'fb_link' => $_POST['fb_link'],
            'tw_link' => $_POST['tw_link'],
            'ln_link' => $_POST['ln_link'],
            'id'=> '1'

        ));


        ?>

<?php
}
else {
	header('Location: index.php?connected=false');
}
?>

</body>
</html>
