<!DOCTYPE html>
<html>
<head>
	<title>SoonieCMS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.php">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500i,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
<?php
include 'connect/connect.php';
$req = $bdd->query('SELECT * FROM soonie_appearance,soonie_texts,soonie_social');
$data = $req->fetch();
?>
<div class="container-fluid">
<div class="container">
  <div class="row logo animated fadeInDown">
  	<img src="<?php echo $data['logo_img'] ?>">
  </div>
  <div class="row">
  <div class="col content animated fadeIn">
  	<h1><?php echo $data['first_text'] ?></h1>
  	<h2><?php echo $data['second_text'] ?></h2>
  	<form class="mail" method="POST" action="send.php">
  		<input class="mail_text" type="text" name="email" placeholder="Get notified by mail">
  		<input class="mail_submit" type="submit" name="submit" value="Subscribe">
  	</form>

  </div>
  </div>

  <div class="row footer animated fadeIn">
<div class="col-10">
	<p><?php echo $data['third_text'] ?></p>
</div>
<div class="col-2">
	<div class="social">
  		<a href="<?php echo $data['fb_link'] ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="<?php echo $data['tw_link'] ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="<?php echo $data['go_link'] ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        <a href="<?php echo $data['ln_link'] ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
  	</div>
</div>

  </div>


</div>
</div>

</body>
</html>
