<?php

session_start();   //sesijos masyvas ijungiamas


print_r($_POST);
if ($_POST["slaptazodis1"]==$_POST["slaptazodis2"]){
  $_SESSION['zinute'] = "maladiec, sutampa slaptazodziai";
}else {
  $_SESSION['zinute'] = "slaptazodziai nesuampa!!!";
}
//redirect - perkelimas i kita puslapi
header('location: ../index.php');
exit();






 ?>
