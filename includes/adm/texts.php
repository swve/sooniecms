<?php


if (isset($_POST['submit'])) {
  $first_text=$_POST['first_text'];

mysql_query("UPDATE `soonie_texts` SET `first_text`=". $first_text ." WHERE `id`=0;");
echo $first_text;
}
else {

}

 ?>
