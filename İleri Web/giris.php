<html>
<head>
<style>
#ust{
margin-left:15px;
margin-top:45px;
}
.butn{
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
#orta #yazi4{
	font-family:tahoma;
	font-size:11;
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
</style>
 </head>
<body background="ArkaPlan.jpg">
<div id="ust">
<a href="/anasayfa.php" >
<button class="butn" ><strong>Kaydol</strong></button>
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
<form method="POST" action="">
<input class="form-control" placeholder="  E-posta veya telefon" type="text" name="E-posta" />
<input class="form-control" type="password" name="sifre" placeholder="  Parola"/>
<button class="btn-btn1" type="submit"> Oturum Aç</button>
</form>
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
</div> 
</body>
</html>