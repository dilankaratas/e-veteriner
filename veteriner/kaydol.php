<!DOCTYPE html>
<html lang="tr">
<head>
	<title>E-Veteriner(Kaydol)</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
	crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-
	DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
	crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
	crossorigin="anonymous"></script>
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" media="(max-width:1500px)" href="tablet.css">
    <meta name="keywords" content="e-veteriner,veteriner">
	
</head>
<body>
<form action="" method="POST">
<header class="bg-dark-blue">
        <div class="container">
             <nav id="navbar">
            <h1 class="heading-big">E-Veteriner</h1>
            <ul>
                <li><a href="index.php">Ana Sayfa</a></li>
                <li><a >Hizmetlerimiz</a>
                    <ul>
					
                        <li><a href="randevu.php" title=""> 1.Randevu Yönetimi</a></li>
					
                        <li><a href="asitakvimi.php" title=""> 2.Aşı Takvimi Takibi</a></li>
					
                        <li><a href="yatanhasta.php" title="">3.Yatan Hasta Konaklama Takibi</a></li>
					
                        <li><a href="gonullusahiplendirme.php" title="">4.Gönüllü Sahiplendirme</a></li>
					
					
                        <li><a href="evcilhayvan.php" title="">5.Evcil Hayvan Yönetimi</a></li>
					
                        <li><a href="akillibildirim.php" title="">6.Akıllı Bildirimler</a></li>
					
                        <li><a href="mamalar.php" title="">7.Mamalar</a></li>
					
                        <li><a href="faturaveodeme.php" title="">8.Fatura ve Ödeme Takibi</a></li>
					
                    </ul>
                </li>
                <li><a href="nobetci.php">Nöbetci veterinerler</a></li>
                <li><a href="iletisim.php">İletişim</a></li>
                <li><a href="welcome.php">Giriş</a></li>
                <li><a href="kaydol.php">Kaydol</a></li>
            </ul> 
        </nav>
    </div>
</header>


<div class="logo">
        <img src="img/asa.png">
    </div>
	<div id="clock">
        <h2>saat</h2>
        <div id="time">
            <div><span id="hour">00</span><span>Saat</span></div>
            <div><span id="minutes">00</span><span>Dakika</span></div>
            <div><span id="seconds">00</span><span>Saniye</span></div>
        </div>
         </div>
		 <script type="text/javascript">
        function clock(){
            var hours=document.getElementById('hour');
            var minutes=document.getElementById('minutes');
            var seconds=document.getElementById('seconds');
    
            var h=new Date().getHours();
            var m=new Date().getMinutes();
            var s=new Date().getSeconds();
    
            hours.innerHTML=h;
            minutes.innerHTML=m;
            seconds.innerHTML=s;
        }
        var interval=setInterval(clock,1000);
        </script>
		 <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first">
                <img src="img/vet1.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/vet2.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/vet3.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/vet4.jpeg" alt="">
            </div>
            <div class="navigation-auto">
                <div class= "auto-btn1"></div>
                <div class= "auto-btn2"></div>
                <div class= "auto-btn3"></div>
                <div class= "auto-btn4"></div>
            </div>

        </div>
        <div class="navigation-manuel">
            <label for="radio1" class="manuel-btn"></label>
            <label for="radio2" class="manuel-btn"></label>
            <label for="radio3" class="manuel-btn"></label>
            <label for="radio4" class="manuel-btn"></label>
        </div>
</div>
<script type="text/javascript">
    var counter =1;
    setInterval(function(){
document.getElementById('radio'+counter).checked=true;
counter++;
if(counter>4){
    counter=1;
}
    },5000);
    </script>
    
<form name="form1" action="" method="POST">
<div>
<h1 align="center">KİŞİSEL BİLGİLER</h1>
	<div class="row">
		<div class="col">
			<b>Adınız:</b><input type="text" class="form-control" placeholder="Adınız" name="adiniz" required size="50">
		</div>
		<div class="col">
			<b>Soyadınız:</b><input type="text" class="form-control" placeholder="Soyadınız" name="soyadiniz" required size="50">
		</div>
	</div>
   <br>
   <br>
	<div class="row">
		<div class="col">
			<b>Telefon:</b><input type="text" class="form-control" placeholder="Telefon" name="telefon" required size="20">
		</div>
		<div class="col">
			<b>E-mail:</b><input type="text" class="form-control" placeholder="E-mail" name="mail" required>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col">
		<b>İl:</b><input type="text" class="form-control" placeholder="İl giriniz" name="il">
    </div>
    <div class="col">
      <b>İlçe:</b><input type="text" class="form-control" placeholder="İlçe giriniz" name="ilce">
    </div>
	<div class="col">
      <b>Mahalle:</b><input type="text" class="form-control" placeholder="Mahalle giriniz" name="mahalle">
    </div>
</div> 
<br>
<div class="form-group">
    <b>Adres:</b><input type="text" class="form-control" id="inputAddress" placeholder="Adresi giriniz" name="adres">
</div>
<br>
<br>
<h1 align="center">EVCİL HAYVAN BİLGİLERİ</h1>
<br>
<div class="form-row">
	<div class="form-group col-md-4">
      <b>Adı:</b><input type="text" class="form-control" placeholder="Evcil hayvanınızın adı" name="hayvanAdi" required size="60">
    </div>
	<div class="form-group col-md-4">
		<b>Tür:</b>
		<select id="inputState" class="form-control" name="tur">
			<option>...</option>
			<option value="1">Köpek</option>
			<option value="2">Kedi</option>
			<option value="3">Kuş</option>
			<option value="4">Tavşan</option>
			<option value="5">Hamster</option>
			<option value="6">Kaplumbağa</option>
			<option value="7">Bukelamun</option>
			<option value="8">Diğer</option>
		</select>
    </div>
	<div class="form-group col-md-4">
		<b>Yaş:</b>
		<select id="inputState" class="form-control" name="yas">
			<option value="1">...</option>
			<option value="2">0-1</option>
			<option value="3">1-3</option>
			<option value="4">3-6</option>
			<option value="5">6-7</option>
			<option value="6">8+</option>
		</select>
    </div>
</div>
<br>
<div class="form-row">
	<div class="form-group col-md-4">
		<b>Cinsiyet:</b>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="cins" value="erkek" id="exampleRadios1"  checked>
			<label class="form-check-label" for="exampleRadios1">
				Erkek
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="cins" value="erkek" id="exampleRadios2" >
			<label class="form-check-label" for="exampleRadios2">
				Kız
			</label>
		</div>
	</div>
	
</div>

<div class="form-group">
    <b>Açıklama:</b>
	<textarea type="text" class="form-control" id="inputAddress" placeholder="Evcil hayvanınıza ait, sağlık, geçmiş aşı bilgisi, şikayet vs... bilgilerini yazabilirsiniz" name="aciklama"></textarea>
</div>
	<div class="row">
		<div class="col">
			<b>Şifre:</b><input type="password" class="form-control" placeholder="şifre giriniz" name="sifre" required>
		</div>
		<div class="col">
			<b>Şifre Tekrar:</b><input type="password" class="form-control" placeholder="şifre tekrar giriniz" name="sifreTekrar" required>
	</div>
	</div>
	<br>
<center><button type="submit" class="btn btn-primary" name="kaydol">KAYDOL</button></center>
</form>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
       <script src="js/main.js"></script>
</form>
</body>
</html>
<?php

$db = new PDO("mysql:host=localhost;dbname=veteriner",'root','');

if(isset($_POST['kaydol']))
{
	$adi=$_POST['adiniz'];
	$soyadi=$_POST['soyadiniz'];
	$telefon=$_POST['telefon'];
	$mail=$_POST['mail'];
	$il=$_POST['il'];
	$ilce=$_POST['ilce'];
	$mahalle=$_POST['mahalle'];
	$adres=$_POST['adres'];
	$hayvanAdi=$_POST['hayvanAdi'];
	$tur=$_POST['tur'];
	$yas=$_POST['yas'];
	$cins=$_POST['cins'];
	$aciklama=$_POST['aciklama'];
	$sifre=$_POST['sifre'];
	$sifreTekrar=$_POST['sifreTekrar'];
	
	
	
	if($db)
	{
	$ekle=$db->exec("INSERT INTO kaydol (adi, soyadi, telefon, mail, il, ilce, mahalle, adres, hayvanAdi, tur, yas, cins, aciklama, sifre, sifreTekrar) VALUES ('$adi', '$soyadi', '$telefon', '$mail', '$il', '$ilce', '$mahalle', '$adres', '$hayvanAdi', '$tur', '$yas', '$cins', '$aciklama', '$sifre', '$sifreTekrar')");
	
	if($ekle)
	{
		echo "Kayıt Başarılı Olmuştur";
	}
	else
	{
		echo "Kayıt İşlemi Başarısız Olmuştur. Lütfen Tekrar Deneyiniz";
	}
	
	
}

}





?>
