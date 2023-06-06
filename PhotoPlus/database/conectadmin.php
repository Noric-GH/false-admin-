<?php require_once '../database/db.php';?>
<?php session_start();?>
<?php
$login=$_POST["login"];
$password=$_POST["password"];
$sql = $pdo->prepare("SELECT id FROM user WHERE login=:login AND password=:password"); 
$sql->execute(array(':login' =>$login,':password'=>$password));
$array=$sql->fetch(PDO::FETCH_ASSOC);
print_r($array);
var_dump($array); // вводит bool(false) 

// должно ввывести array ([id] =>1)



// $array=$sql->fetch(PDO::FETCH_ASSOC);

//     if ($array["id"]>0){
//         $_SESSION['login']=$array["login"];
//         header('Location:/admin.php');
//     }else{
//         header('Location:/loginbyadmin.php');
//     }