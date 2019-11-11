<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
            <div class="jumbotron mt-3">
                <h1>Edit student</h1>
            </div>
    <?php require 'dbconnexion.php';
    $req=$pdo->prepare('SELECT * FROM students WHERE id=:param_id');
    $req=->bindParam(':param_id',$_GET['id']);
    $req->execute();
    $data=$req->fetch();
    ?>
    <div class="container">
    <div class="row">
    <div class="col-md-8">
        <form name="contact-form"  method="POST" action="update.php" id="contact-form">
        <div class="form-group">
        <label for="Name">First name</label>
        <input type="text" class="form-control" name="firstname" value="<?php  echo $data['firstname']?>" required>
        <input type="number" class="form-control" name="id" hidden value="<?php  $data['id']?>" >
        </div>
        <div class="form-group">
        <label for="Name">Last name</label>
        <input type="text" class="form-control" name="lastname" value="<?php  echo $data['lastname']?>" required>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="email" value="<?php  echo $data['email']?>" required>
        </div>
        <div class="form-group">
        <label for="Phone">Phone</label>
        <input type="text" class="form-control" name="phone" value="<?php  echo $data['phone']?>" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Edit</button>
        </form>
    </div>
</body>
</html>