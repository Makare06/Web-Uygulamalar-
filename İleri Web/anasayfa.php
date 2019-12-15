

<html>
<head>
<style>
#ust{
margin-left:15px;
margin-top:45px;
}
.btn{
font-weight:bold;
font-family:tahoma; 
font-size:14px;
width:130px;
height:45px; 
color:#3f2f31;
background-color:#eaebec;
border-radius:10px;  
cursor:pointer;
}
#orta{
width:438px;
height:670px;
background-image: url('Beyaz.jpg');
margin-left:449px;
margin-top:-70px;
border-radius:9px;
}
#orta .Resim1{
	margin-left:190px;
	margin-top:25px;
}
#orta .yazi1{
	margin-left:0px;
	font-size:15;
	text-align:center;
	margin-top:-20px;
	font-weight:bold;
    font-family:tahoma; 
	color:#3f2f31;
	line-height:1.5;
}
#orta .yazi2{
	text-align:center;
	margin-left:0px;
	color:gray;
	margin-top:-10px;
	font-size:17;
	font-family:tahoma;
}
#orta .yazi3{
	text-align:center;
	font-weight:bold;
	font-size:13;
	margin-top:-10px;
	color:#353132;
}
.form-control{
	width:267px;
	height:40px;
	border-radius:3px;
	margin:10px 85px 0px;
	border-color:#aca0a0;
	border-style:solid;
	border-width:1px;
	font-size:15px;
	font-family:tahoma;
}
.btn-btn1{
	width:267px;
	height:45px;
	margin:10px 85px 0px;
	border-radius:7px;
	color:white;
	background-color:#b60d2c;
	font-weight:bold;
	font-size:15;
	cursor:pointer;
	border:0px;

}
.btn-btn2{
	width:267px;
	height:40px;
	margin:10px 85px 0px;
	color:white;
	font-weight:bold;
	font-size:15;
	cursor:pointer;
	background-color:#3b5998;
	border-radius:7px;
	border:0px;
	
}
.btn-btn2 .facebook{
	margin-left:-30px;
	margin-right:20px;
	vertical-align: middle;
}
#Baglantılar .btn-btn3{
	width:267px;
	height:40px;
	margin:10px 85px 0px;
	color:white;
	font-weight:bold;
	font-size:15;
	cursor:pointer;
	background-color:#1A81F3;
	border-radius:7px;
	border:0px;
	display:table;
	
}
.btn-btn3 .google{
	margin-left:-40px;
	margin-right:30px;
	vertical-align: middle;
}
#kutu{
	background-image:url('Adsız12.png');
	margin-top:-258px;
	margin-left:910px;
	width:270;
	border-top-right-radius:200px;
	border-bottom-right-radius:200px;
	border-top-left-radius:200px;
	border-bottom-left-radius:40px;
	height:270;
}
#yazi6{
	margin-left:930px;
	color:white;
	font-size:20;
	font-weight:bold;
	font-family:tahoma;
	margin-top:-170px;
     
}
#orta #yazi4{
	font-family:tahoma;
	font-size:10;
	margin:15 0 0 ;
	color:#a9b5b1;
	text-align:center;
}
#orta #yazi4 .link1{
	text-decoration:none;
	color:#4c4e4e;
	font-weight:bold;
	font-size:10;
}
#orta #yazi4 .link1:hover{
	color:black;
}
#orta #yazi4 .link2:hover{
	color:black;
}
#orta #yazi4 .link2{
	text-decoration:none;
	color:#4c4e4e;
	font-weight:bold;
	font-size:10;
}
#orta #yazi5{
	font-family:tahoma;
	font-size:12;
	margin:20 0 0 ;
	color:#a9b5b1;
	text-align:center;
	font-weight:bold;
}
#orta #yazi5 .link3{
	text-decoration:none;
	color:#4c4e4e;
}
#orta #yazi5 .link3:hover{
	text-decoration:underline;
	color:black;
}
#orta #ortaalt{
	background-color:#ededed;
	 width:438px;
	 height:45px;
	 margin-top:19px;
	 border-bottom-left-radius:9px;
	 border-bottom-right-radius:9px;
	 display: table;
	 
}
#orta > a {
	text-decoration:none;
	text-align:center;
	font-weight:bold;
	color:#333534;
	font-family:tahoma;
	font-size:15;
	
}
#orta #ortaalt .ortaaltyazi{
		display: table-cell;
	vertical-align: middle;
}
#alt{
	margin-top:110px;
	margin-left:200px;
	font-size:12px;
}
#alt a{
	color:white;
	align:center;
	text-decoration:none;
	padding:0 10 0 0 ;
}
</style>
</head>

<body background="ArkaPlan.jpg">
<div id="ust">
<a href="/giris.php" >
<button class="btn" ><strong>Oturum Aç</strong></button>
</a>
</div>
<div id="orta">

<image src="Resim1.png" class="Resim1"  />
<div class="yazi1">
<h1> Daha fazlasını <br /> görmek için <br /> kaydolun </h1>
</div>
<div class="yazi2" >
Ücretsiz bir hesap ile Pinterest'in en iyi <br /> fikirlerine erişin
</div>
<div class="textler">
<form method="POST" action="kaydet.php">
<input class="form-control" placeholder="  E-posta" type="text" name="eposta" />
<input class="form-control" type="password" name="sifre" placeholder="  Bir parola oluşturun"/>
<button class="btn-btn1" type="submit" value="Kayıt Ol"> Devam Et </button>
</form>
<?php

?>
</div>
<div class="yazi3">
Veya
</div>
<div id="Baglantılar">
<button class="btn-btn2" type="submit"> <img src="facebook.png" class="facebook" />    Facebook ile devam et </button>
<button class="btn-btn3" type="submit"> <img src="google.png" class="google" /> Google ile devam et </button>
</div>
<div id="yazi4">
Devam ederek Pinterest'in <a href="#" class="link1">Hizmet Şartları </a>'nı ve <br /> <a href="#" class="link2">Gizlilik Politikası</a>'nı kabul etmiş olursunuz.
</div>
<div id="yazi5">
<a href="#" class="link3"> Zaten üye misiniz? Oturum Aç </a>
</div>
<a href="#" class="ortason">
<div id="ortaalt">
<font class="ortaaltyazi" >Bir işletme hesabı oluşturun</font>
</div>
</a>
</div> 
<div id="kutu">
</div>
<div id="yazi6"> Pinterest, denenecek <br /> fikirler bulmanızda <br /> yardımcı olur. 
</div>
<div id="alt">

<a href="#"> Pinterest Hakkında   </a>
<a href="#"> Blog </a>
<a href="#"> İşletmeler </a>
<a href="#"> Hizmet Şartları </a>
<a href="#"> Gizlilik Politikası </a>
<a href="#"> Yardım </a>
<a href="#"> İphone Uygulaması </a>
<a href="#"> Android Uygulaması </a>
<a href="#"> Kullanıcılar </a>
<a href="#"> Koleksiyonlar </a>
<a href="#"> Konular </a>
<a href="#"> Uluslararası </a>

</div>
</body>

</html>