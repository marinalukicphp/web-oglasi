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

<?php

$poruka=isset($poruka)?$poruka:"";

if($poruka){

 echo "<span class='alert alert-info'role='alert'>$poruka</span>";


}

$greska=isset($greska)?$greska:array();

?>
<br><br>

   <div class="row">


  <form class="col-3" action="rute.php" method="post">

  <h3>Registracija:</h3>

 <input type="text" class="form-control" name="ime" placeholder="Ime i prezime">
 <span style='color:red;'><?php if(array_key_exists('ime',$greska)) echo $greska['ime'];?></span>
 <br>

 <input type="text" class="form-control"  name="email" placeholder="Email">
 <span style='color:red;'><?php if(array_key_exists('email',$greska)) echo $greska['email'];?></span>
 <br>

 <input type="password" class="form-control"  name="password" placeholder="Password">
 <span style='color:red;'><?php if(array_key_exists('password',$greska)) echo $greska['password'];?></span>
 <br>

<textarea  class="form-control" name="adresa" rows="5" cols="22" placeholder="Adresa"></textarea>
<span style='color:red;'><?php if(array_key_exists('adresa',$greska)) echo $greska['adresa'];?></span>
<br>

<input type="text" class="form-control" name="telefon" placeholder="Telefon">
<span style='color:red;'><?php if(array_key_exists('telefon',$greska)) echo $greska['telefon'];?></span>
 <br>

<input type="submit" name="action" class="btn btn-dark" value="Registracija">

  </form>

  


    <form class="col-3" action="rute.php" method="post">

    <h3>Ulogujte se:</h3>

    <input type="text" class="form-control" name="email" placeholder="Email">
 <br>

 <input type="password" class="form-control" name="password" placeholder="Password">
 <br>

 <input type="submit" name="action" class="btn btn-dark"  value="Ulogujte se">


    </form>

</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</div>
</body>
</html>