<?php

require_once '../config/db.php';



class DAO{

private $db;


private $REGISTRACIJA="INSERT INTO korisnici(ime_prezime,email,password,adresa,telefon)VALUES(?,?,?,?,?)";
private $LOGIN="SELECT * FROM korisnici WHERE email=? AND password=?";
private $DODAJOGLAS="INSERT INTO oglasi(slika,naziv,kategorija,cena,opis,mesto,telefon)VALUES(?,?,?,?,?,?,?)";
private $SVIOGLASI="SELECT * FROM oglasi";
private $RAZLICITAMESTA="SELECT DISTINCT mesto FROM oglasi";
private $OGLASIPOMESTU="SELECT * FROM oglasi WHERE mesto=?";
private $MINIMAXCENE="SELECT * FROM oglasi WHERE cena BETWEEN ? AND ? ";
private $RAZLICITEKATEGORIJE="SELECT DISTINCT kategorija FROM oglasi";
private $OGLASIPOKATEGORIJI="SELECT * FROM oglasi WHERE kategorija=?";
private $OGLASPOIDU="SELECT * FROM oglasi WHERE id_oglasa=?";




public function __construct(){

$this->db=DB::CreateInstance();

}


public function registracija($i,$e,$p,$a,$t){

$statement=$this->db->prepare($this->REGISTRACIJA);

$statement->bindValue(1,$i);
$statement->bindValue(2,$e);
$statement->bindValue(3,$p);
$statement->bindValue(4,$a);
$statement->bindValue(5,$t);

$statement->execute();

}


public function login($e,$p){

$statement=$this->db->prepare($this->LOGIN);

$statement->bindValue(1,$e);
$statement->bindValue(2,$p);

$statement->execute();

$result=$statement->fetch();

return $result;

}

public function dodajOglas($s,$n,$k,$c,$o,$m,$t){

$statement=$this->db->prepare($this->DODAJOGLAS);


$statement->bindValue(1,$s);
$statement->bindValue(2,$n);
$statement->bindValue(3,$k);
$statement->bindValue(4,$c);
$statement->bindValue(5,$o);
$statement->bindValue(6,$m);
$statement->bindValue(7,$t);


$statement->execute();


}


public function sviOglasi(){

$statement=$this->db->prepare($this->SVIOGLASI);

$statement->execute();

$result=$statement->fetchAll();

return $result;




}


public function razliciteKategorije(){

    $statement=$this->db->prepare($this->RAZLICITEKATEGORIJE);
   
    $statement->execute();
       
    $result=$statement->fetchAll();
       
    return $result;
       
   
   
   
   
   
   }
   
   public function oglasiPoKategoriji($k){
   
   $statement=$this->db->prepare($this->OGLASIPOKATEGORIJI);
   
   $statement->bindValue(1,$k);
   
   $statement->execute();
   
   $result=$statement->fetchAll();
   
   return $result;
   
   
   }


public function razlicitiOglasi(){

 $statement=$this->db->prepare($this->RAZLICITAMESTA);

 $statement->execute();
    
 $result=$statement->fetchAll();
    
 return $result;
    





}

public function oglasiPoMestu($m){

$statement=$this->db->prepare($this->OGLASIPOMESTU);

$statement->bindValue(1,$m);

$statement->execute();

$result=$statement->fetchAll();

return $result;


}

public function minIMaxCene($min,$max){

$statement=$this->db->prepare($this->MINIMAXCENE);

$statement->bindValue(1,$min);

$statement->bindValue(2,$max);

$statement->execute();

$result=$statement->fetchAll();

return $result;


}


public function oglasPoIdu($i){

    $statement=$this->db->prepare($this->OGLASPOIDU);
    
    $statement->bindValue(1,$i);
    
    $statement->execute();
    
    $result=$statement->fetchAll();
    
    return $result;
    
    
    }











}



?>