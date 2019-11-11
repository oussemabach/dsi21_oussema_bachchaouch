<?php
include 'dbconnexion.php';
$FirstName =$_POST['firstname'];
$LastName =$_POST['lastname'];
$Email =$_POST['email'];
$Phone =$_POST['phone'];

$req=$pdo->prepare('INSERT INTO students SET firstname= :param_FirstName,lastname= :param_LastName,email= :param_Email,phone=param_Phone ');
$req->bindParam (':param_FirstName',$FirstName);
$req->bindParam (':param_LastName',$LastName);
$req->bindParam (':param_Email',$Email);
$req->bindParam (':param_Phone',$Phone);

$req->execute();
header('location:index.php?notif=new');
?>