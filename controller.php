
<?php

require_once '../model/DAO.php';

class Controller{

public function registracija(){

$ime=isset($_POST['ime'])?$_POST['ime']:"";
$email=isset($_POST['email'])?$_POST['email']:"";
$password=isset($_POST['password'])?$_POST['password']:"";
$adresa=isset($_POST['adresa'])?$_POST['adresa']:"";
$telefon=isset($_POST['telefon'])?$_POST['telefon']:"";

$greska=array();

if(empty($ime)){

$greska['ime']="Unesite ime i prezime";


}

if(empty($email)){

    $greska['email']="Unesite email";
    

    }
    

    if(empty($password)){

        $greska['password']="Unesite password";
        
        
        }
        

        if(empty($adresa)){

            $greska['adresa']="Unesite adresu";
            
            
            }
            

            if(empty($telefon)){

                $greska['telefon']="Unesite telefon";
                
                
                }
                
         if(count($greska)==0)   {

         $dao=new DAO();

         $korisnik=$dao->registracija($ime,$email,$password,$adresa,$telefon);

         $poruka="Korisnik registrovan";
         include 'login.php';


         }else{


         $poruka="Morate popuniti sva polja korektno";
         include 'login.php';


         }
    


}


public function login(){

$email=isset($_POST['email'])?$_POST['email']:"";
$password=isset($_POST['password'])?$_POST['password']:"";

if(!empty($email)&& !empty($password)){

$dao=new DAO();

$korisnik=$dao->login($email,$password);

if($korisnik){

session_start();

$_SESSION['korisnik']=$korisnik;

$poruka="Korisnik ulogovan";
include 'dodajoglas.php';




}else{


$poruka="Pogresan email i/ili password";
include 'login.php';



}



}else{


$poruka="Morate uneti email i password";
include 'login.php';


}



}


public function dodajOglas(){

$naziv=isset($_POST['naziv'])?$_POST['naziv']:"";
$kategorija=isset($_POST['kategorija'])?$_POST['kategorija']:"";
$cena=isset($_POST['cena'])?$_POST['cena']:"";
$opis=isset($_POST['opis'])?$_POST['opis']:"";
$mesto=isset($_POST['mesto'])?$_POST['mesto']:"";
$telefon=isset($_POST['telefon'])?$_POST['telefon']:"";


if(isset($_FILES['slika'])){
    $slika=$_FILES['slika']['name'];
    $fajl=$_FILES['slika']['tmp_name'];
    

$greska=array();


if(empty($slika)){

    $greska['slika']="Izaberite sliku";
    
    }


if(empty($naziv)){

$greska['naziv']="Unesite naziv";

}


if(empty($kategorija)){

    $greska['kategorija']="Izaberite kategoriju";
    
    }
    
if(empty($cena)){

    $greska['cena']="Unesite cenu";
    
    }

    
if(empty($opis)){

    $greska['opis']="Unesite opis";
    
    }


    
    if(empty($mesto)){

        $greska['mesto']="Unesite mesto";
        
        }
    

    
        if(empty($telefon)){

            $greska['telefon']="Unesite telefon";
            
            }

        

 if(count($greska)==0){

 move_uploaded_file($fajl,"../slike/$slika");

 $dao=new DAO();


 $oglas=$dao->dodajOglas($slika,$naziv,$kategorija,$cena,$opis,$mesto,$telefon);

 $poruka="Oglas dodat";
 include 'dodajoglas.php';



 }else{

 $poruka="Morate popuniti sva polja korektno";
 include 'dodajoglas.php';


 }

}

}


public function logout(){

session_start();

session_unset();

session_destroy();

include 'index.php';

}


public function izaberiKategoriju(){

    $kategorija=isset($_GET['kategorija'])?$_GET['kategorija']:"";
    
    if(!empty($kategorija)){
    
    $dao=new DAO();
    
    $oglasipokategoriji=$dao->oglasiPoKategoriji($kategorija);
    
    
    include 'oglasipokategoriji.php';
    
    }else{
    
    $poruka="Morate izabrati kategoriju";
    
    include 'oglasipokategoriji.php';
    
    }
    
    
    
    }

public function izaberiMesto(){

$mesto=isset($_GET['mesto'])?$_GET['mesto']:"";

if(!empty($mesto)){

$dao=new DAO();

$oglasipomestu=$dao->oglasiPoMestu($mesto);


include 'oglasipomestu.php';

}else{

$poruka="Morate izabrati mesto";

include 'oglasipomestu.php';

}



}

public function izaberiCenu(){

$min=isset($_GET['min'])?$_GET['min']:"";
$max=isset($_GET['max'])?$_GET['max']:"";

if(!empty($min)&&!empty($max)){

$dao=new DAO();

$cene=$dao->minIMaxCene($min,$max);

include 'oglasipoceni.php';

}else{

 $poruka="Morate popuniti oba polja";

 include 'oglasipoceni.php';

}



}

public function vidiDetaljnije(){

$id=isset($_GET['id'])?$_GET['id']:"";

if(!empty($id)){

$dao=new DAO();

$oglas=$dao->oglasPoIdu($id);

include 'oglas.php';


}



}


















}

?>