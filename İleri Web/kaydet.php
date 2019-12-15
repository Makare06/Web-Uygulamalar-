<?php

  $db = new PDO("mysql:host=localhost; dbname=test;charset=utf8","root","");

 $Eposta = $_POST['eposta'];
 $Sifre = $_POST['sifre'];
 
 if(!$Eposta  || !$Sifre){
	 echo "Lütfen Boş Alan Bırakmayınız.";
	 
 }
 else{
 $ekle = $db->prepare("INSERT INTO uyeler SET Eposta=? , Sifre=? ");
 $ekle->execute([$Eposta, $Sifre]);
 
 if($ekle){
	 echo "Kayıt Oldunuz";
	 
 }
 else{
	 echo "hata oluştu";
 }
 }
?>