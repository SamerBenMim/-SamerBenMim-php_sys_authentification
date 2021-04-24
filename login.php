<?php
session_start();
if(isset($_SESSION['user']))        header('location:home.php');


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href = "node_modules/bootswatch/dist/lux/bootstrap.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>





<div class="container">
    <!-- --><?php  if(isset($_SESSION['error'])){ ?>
        <div class="alert alert-danger">  <?php echo $_SESSION['error'] ?>  </div>
    <?php         unset($_SESSION['error']);
    }



    ?>
    <form action ="processLogin.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email"
                    type="email"
                   class="form-control"
                   id="exampleInputEmail1"
                   aria-describedby="emailHelp"
                   placeholder="Enter email"

            >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="mdp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


</body>
</html>
