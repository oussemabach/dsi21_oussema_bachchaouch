<?php
include 'dbconnexion.php';
$ID =$_GET['id'];
$req =$pdo->prepare('DELETE FROM students WHERE id= :param_id');
$req->bindParam (':param_id',$ID);
$req->execute();
header('location:index.php?notif=delete');
?>