<!DOCTYPE html>
<html>
<head>
	<title>SoonieCMS : Panel </title>
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
	?>

    <!-- End Nav Bar -->


    <!--  Content -->

   <div class="col-10 dash_w animated fadeInLeft">
   	<h1>Welcome to soonie dashboard</h1>
   	<div class="row dsh">
   	<div class="dash_visitors_today">
   	<h2>TODAY</h2>
   	<h3>4656 Visitors</h3>
   </div>
   <div class="dash_visitors_month">
   	<h2>THIS MONTH</h2>
   	<h3>2K Visitors</h3>
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
