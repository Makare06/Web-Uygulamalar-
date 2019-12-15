<?php
ob_start();

$baglanti = mysqli_connect("localhost","root","","uyelik");

if (mysqli_connect_errno())
  {
  echo "Bağlantı Yapılamadı. Hata :" . mysqli_connect_error();
  }


$baglanti->set_charset("utf8");
$baglanti->query('SET NAMES utf8');
ob_flush();
?>