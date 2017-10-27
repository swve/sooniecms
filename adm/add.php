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

    <div class="adm_all">
        <div class="container-fluid">

            <!-- Nav Bar -->
            <?php 
       include '../connect/connect.php';
       include '../includes/left-menu.php';
       
  ?>



            <!-- End Nav Bar -->


            <!--  Content -->

            <div class="col-10 dash_w animated fadeInLeft">
                <h1>Soonie : Texts
                </h1>
                <div class="row dsh">
                    <div class="dash_appearanc">

                        <form method="POST" class="adm_inputs" action="go.php">

                            <div class="adm_first_text">
                                <h2>Admin Username</h2>

                                <input class="adm_first_text" type="text" name="adm_username" placeholder="First Text">


                            </div>

                            <div class="adm_second_text">
                                <h2>Admin Password </h2>

                                <input class="adm_second_text" type="text" name="adm_password" placeholder="Second Text">

                            </div>

                            <div class="adm_copy_text">
                                <h2>Admin Email</h2>

                                <input class="adm_copy_text" type="text" name="adm_email" placeholder="Copyright Text">

                            </div>

                            <div class="adm_copy_text">

                                <p><input class="adm_submit" type="submit" name="adm_add" value="Add" onclick="submitForms()"></p>


                            </div>

                        </form>
                    </div>
                </div>
            </div>





            <!-- End content -->


        </div>
    </div>


</body>

</html>
