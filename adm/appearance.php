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
	if (htmlspecialchars($_COOKIE['status']=="connected")) {
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
   	<h1>Soonie : Appearance
   	</h1>
   	<div class="row dsh">
   	<div class="dash_appearanc">

   		<form method="POST" class="adm_inputs" action="appearance.php" enctype="multipart/form-data">

   		<div class="adm_gradients">
   		<h2>Gradient Colors</h2>

   			<input  class=""  type="text" name="gradient_color1" placeholder="First Color Hex">
   			<input  class="" type="text" name="gradient_color2" placeholder="Second Color Hex">

   		</div>

   		<div class="adm_backgrounds">
   		<h2>Logo Image</h2>

   			<input class=""  type="file" name="logo_img" placeholder="">

   		</div>


   		<div class="adm_gradients_opacity">
   		<h2>Gradient Opacity </h2>

   			<input class=""  type="range" name="gradient_opacity" placeholder="">

   		</div>

   		<div class="adm_backgrounds">
   		<h2>Background Image</h2>

   			<input class=""  type="file" name="bg_img" placeholder="">

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
        //$max_filesize = 9000000;
        //$filesize = filesize($_FILES['bg_img']['tmp_name']);
        //$extensions = array('.png', '.gif', '.jpg', '.jpeg');
        //$extension = strrchr($_FILES['avatar']['name'], '.');
        //if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
        //{
            //$erreur = 'Allowed file extensions .png .gif . jpg .jpeg';
        //}
        //if($taille>$taille_maxi)
        //{
            //$erreur = '8 mo max size';
        //}

        if(isset($_FILES['logo_img']))
        {
            $folder = '../upload/';
            $file1= basename($_FILES['logo_img']['name']);
            if(move_uploaded_file($_FILES['logo_img']['tmp_name'], $folder . $file1))
            {
                echo 'Upload Success!! !';
            }
            else
            {
                echo 'Upload Fail..';
            }
        }
        if(isset($_FILES['bg_img']))
        {
            $folder = '../upload/';
            $file2= basename($_FILES['bg_img']['name']);
            if(move_uploaded_file($_FILES['bg_img']['tmp_name'], $folder . $file2))
            {
                echo 'Upload effectué avec succès !';
            }
            else
            {
                echo 'Echec de l\'upload !';
            }
        }
        ?>

        <?php
        include '../connect/connect.php';

            if (isset($_POST['submit'])){
                $req = $bdd->prepare('UPDATE soonie_appearance SET gradient_color1 = :gradient_color1, gradient_color2 = :gradient_color2 , logo_img = :logo_img , gradient_opacity = :gradient_opacity , bg_img = :bg_img WHERE id = :id');
                $req->execute(array(
                    'gradient_color1' => htmlspecialchars($_POST['gradient_color1']),
                    'gradient_color2' => htmlspecialchars($_POST['gradient_color2']),
                    'logo_img' => $site_address . "/upload/" . $file1,
                    'gradient_opacity' => htmlspecialchars($_POST['gradient_opacity']),
                    'bg_img' => $site_address . "/upload/" . $file2,
                    'id'=> '1'

                ));
            }
            else{

            }


        ?>

<?php
}
else {
	header('Location: index.php?connected=false');
}
?>

</body>
</html>
