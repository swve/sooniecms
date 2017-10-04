<?php
// Database configuration 

	$host = "localhost";
	$user = "root";
	$passwd = "";
	$db_name = "sooniecms_db";

// Database connection 
 
 try{
    $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $db_name . ';charset=utf8', $user , $passwd );
    }

    catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
	
?>