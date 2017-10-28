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
  	<img src="<?php echo htmlspecialchars($data['logo_img']) ?>">
  </div>
  <div class="row">
  <div class="col content animated fadeIn">
  	<h1><?php echo htmlspecialchars($data['first_text']) ?></h1>
  	<h2><?php echo htmlspecialchars($data['second_text']) ?></h2>
  	<form class="mail" method="POST" action="index.php">
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
  		<a href="<?php echo htmlspecialchars($data['fb_link']) ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="<?php echo htmlspecialchars($data['tw_link']) ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="<?php echo htmlspecialchars($data['go_link']) ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        <a href="<?php echo htmlspecialchars($data['ln_link']) ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
  	</div>
</div>

  </div>


</div>
</div>

<?php
if (isset($_POST['email'])){
    $req = $bdd->prepare('INSERT INTO soonie_emails(email) VALUES(:email)');
    $req->execute(array(

        'email' => htmlspecialchars($_POST['email'])
    ));
}

?>

<?php
/* counter */

//opens countlog.txt to read the number of hits
$datei = fopen("adm/visitors.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;


// opens countlog.txt to change new hit number
$datei = fopen("adm/visitors.txt","w");
fwrite($datei, $count);
fclose($datei);
?>

</body>
</html>
