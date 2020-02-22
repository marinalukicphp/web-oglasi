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
  <a class="btn btn-outline-light" href="index.php">Pocetna</a>
  <a class="btn btn-outline-light" href="login.php">Moj nalog</a>
  </form>
</nav>

<br><br>


<?php

require_once '../model/DAO.php';

$dao=new DAO();

$svioglasi=$dao->sviOglasi();

$razlicitamesta=$dao->razlicitiOglasi();

$razlicitekategorije=$dao->razliciteKategorije();


 ?>



<div class="row">

<form class="col-2" action="rute.php" method="get">

<label>Kategorija</label>

<select class="form-control" name="kategorija">                                         

<option value=""></option>

<?php

foreach($razlicitekategorije as $k){

echo "<option value='$k[kategorija]'>$k[kategorija]</option>";


}


?>


</select><br>

<input type="submit" name="action" class="btn btn-dark" value="Izaberite kategoriju"><br><br>


</form>


<form class="col-2" action="rute.php" method="get">

<label>Mesto</label>

<select class="form-control" name="mesto">                                         

<option value=""></option>

<?php

foreach($razlicitamesta as $m){

echo "<option value='$m[mesto]'>$m[mesto]</option>";


}


?>


</select><br>

<input type="submit" name="action" class="btn btn-dark" value="Izaberite mesto"><br><br>


</form>


<form class="col-2" action="rute.php" method="get">


<label>Cena</label><input type="text" class="form-control" name="min" placeholder="Min"><br>


<input type="text" class="form-control" name="max" placeholder="Max"><br>   
 

<input type="submit" name="action" class="btn btn-dark" value="Unesite cenu"><br><br>


</form><br>

</div>


<br><br>


<h2 style='color:black;'>Oglasi:</h2><br>

<div class="table-responsive">
<table class="table table-bordered">
      
      
<?php


foreach($svioglasi as $o){ 


    ?>
   
  <tbody>
  <tr>
  <td class="text-center"><img class="img-thumbnail"  style="max-width: 100px;" src="../slike/<?php echo $o['slika'];?>"></td>
  <td class="text-center"><?php echo $o['naziv'];?></td> 
  <td class="text-center"><?php echo "$o[cena]"." EUR";?></td> 
  <td class="text-center"><?php echo $o['mesto'];?></td> 
  <td class="text-center"><?php echo $o['telefon'];?></td> 
  <td><a class="btn btn-dark" href="rute.php?action=vididetaljnije&id=<?php echo $o['id_oglasa'];?>">Detaljnije</a></td>
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