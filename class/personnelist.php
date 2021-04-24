<?php
include_once '../autoload.php';
$bd = ConnexionBD::getInstance();

$req="select * from personne";
$reponse =$bd-> query($req);

$pers = $reponse->fetchAll(PDO::FETCH_OBJ );
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href = "../node_modules/bootswatch/dist/lux/bootstrap.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container">
  <table class="table">
      <tr>
          <th>NOM</th>
          <th>PRENOM</th>
          <th>AGE</th>
      </tr>
      <?php  foreach($pers as $personne ) { ?>

      <tr>
          <td> <?= $personne->NOM ?> </td>


              <td>   <?= $personne->PRENOM ?></td>


              <td>  <?= $personne->AGE ?></td>
          </tr>
      <?php } ?>

  </table>

</div>


</body>
</html>
