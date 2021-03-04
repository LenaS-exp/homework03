<?php

 $login = filter_var(trim($_POST['logreg']), FILTER_SANITIZE_STRING);
 $name = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_STRING);
 $pass = filter_var(trim($_POST['passreg']), FILTER_SANITIZE_STRING);
 $fam = filter_var(trim($_POST['secondname']), FILTER_SANITIZE_STRING);
 $third = filter_var(trim($_POST['thirdname']), FILTER_SANITIZE_STRING);
 $desc = filter_var(trim($_POST['desc']), FILTER_SANITIZE_STRING);
 $app = $_POST['appoint'];
 $work = $_POST['work'];
 $photo = $_POST['photo'];
 $act = 1;



 
$host = 'localhost';
$user = 'root';
$password = 'root';
$name = 'db2';


  $mysqli = new mysqli($host, $user, $password, $name);


  $mysqli->query("INSERT INTO `user` (`id`, `firstname`, `secondname`, `thirdname`, `login`, `password`, `description`, `id_appointment`, `id_workplace`, `photo`, `is_active`) VALUES (NULL, '$name', '$fam', '$third', '$login', '$pass', '$desc', '$app', '$work', '$photo', '$act')");
  header('Location: /');

  $mysqli -> close();
?>