<?php
include 'dbconnexion.php';
$ID =$_POST['id'];
$FirstName =$_POST['firstname'];
$LastName =$_POST['lastname'];
$Email =$_POST['email'];
$Phone =$_POST['phone'];

$req=$pdo->prepare('UPDATE students SET firstname= :param_FirstName,lastname= :param_LastName,email= :param_Email,phone=param_Phone WHERE id=:param_id ');
$req->bindParam (':param_id',$ID);
$req->bindParam (':param_FirstName',$FirstName);
$req->bindParam (':param_LastName',$LastName);
$req->bindParam (':param_Email',$Email);
$req->bindParam (':param_Phone',$Phone);

$req->execute();

header('location:index.php?notif=update');
?>