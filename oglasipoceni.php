<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style=background-color:#bfbfbf>
<div class="container">

<nav class="navbar navbar-dark bg-dark">
  <form class="form-inline">
  <a class="btn btn-outline-light" href="index.php">Pocetna</a><br><br>
    <a class="btn btn-outline-light" href="login.php">Moj nalog</a>
  </form>
</nav>

<br><br>

<div class="table-responsive">
<table class="table table-bordered">
     
<?php

$poruka=isset($poruka)?$poruka:"";

if($poruka){


  echo "<span class='alert alert-info'role='alert'>$poruka</span>";
   
  


}

require_once '../model/DAO.php';

$dao=new DAO();

$cene=$dao->minIMaxCene($min,$max);

foreach($cene as $c){
 
    ?>

  <tbody>
  <tr>
  <td class="text-center"><img class="img-thumbnail"  style="max-width: 100px;" src="../slike/<?php echo $c['slika'];?>"></td>
  <td class="text-center"><?php echo "$c[naziv]<br>"; echo "$c[opis]";?></td> 
  <td class="text-center"><?php echo "$c[cena]"." EUR";?></td> 
  <td class="text-center"><?php echo $c['mesto'];?></td> 
  <td class="text-center"><?php echo $c['telefon'];?></td> 
</tr>


<?php

}

?>

</tbody>
</table>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</div>
</body>
</html>