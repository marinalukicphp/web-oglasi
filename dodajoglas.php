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
  <form class="form-inline my-2 my-lg-0">
 <a  class="btn btn-outline-danger" href="rute.php?action=logout">Izlogujte se</a>
    </form>
</nav>
<br><br>
<?php

require_once '../model/DAO.php';

$dao=new DAO();

$kategorije=$dao->razliciteKategorije();

$poruka=isset($poruka)?$poruka:"";

if($poruka){

    echo "<span class='alert alert-info'role='alert'>$poruka</span>";
   
   
   }
   
$greska=isset($greska)?$greska:array();


?>

<br><br>
    <h3 style='color:black;'>Dodajte oglas:</h3>

 <form class="col-3" action="rute.php" method="post" enctype="multipart/form-data">

 <input type="file" class="form-control" name="slika">
 <span style='color:red;'><?php if(array_key_exists('slika',$greska)) echo $greska['slika'];?></span>
 <br>

 <input type="text"  class="form-control" name="naziv" placeholder="Naziv">
 <span style='color:red;'><?php if(array_key_exists('naziv',$greska)) echo $greska['naziv'];?></span>
 <br>

 <select class="form-control"  name="kategorija" >
 <option value="">Kategorija</option>
 
 <?php
 
 foreach ($kategorije as $k){

 
 echo "<option value='$k[kategorija]'>$k[kategorija]</option>";


 }
 

 ?>
 
 </select>

 <span style='color:red;'><?php if(array_key_exists('kategorija',$greska)) echo $greska['kategorija'];?></span>
<br>

 <input type="text"  class="form-control" name="cena" placeholder="Cena">
 <span style='color:red;'><?php if(array_key_exists('cena',$greska)) echo $greska['cena'];?></span>
 <br>

<textarea class="form-control" name="opis" rows="5" cols="21" placeholder="Opis"></textarea>
<span style='color:red;'><?php if(array_key_exists('opis',$greska)) echo $greska['opis'];?></span>
<br>

<input type="text" class="form-control" name="mesto" placeholder="Mesto">
<span style='color:red;'><?php if(array_key_exists('mesto',$greska)) echo $greska['mesto'];?></span>
 <br>

 <input type="text" class="form-control" name="telefon" placeholder="Telefon">
 <span style='color:red;'><?php if(array_key_exists('telefon',$greska)) echo $greska['telefon'];?></span>
 <br>

<input type="submit" class="btn btn-dark" name="action" value="Objavite oglas">
<br>

 </form>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</div>
</body>
</html>