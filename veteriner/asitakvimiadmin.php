<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Veteriner</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--Fonts Google-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="global.css">
	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" media="(max-width:1500px)" href="tablet.css">

    <meta name="keywords" content="e-veteriner,veteriner">
    <style type="text/css">
    .api{

        width: 600px;
        padding: 40px;
        position: absolute;
        top: 55%;
        left: 25%;
        font-family: 'Oswald', sans-serif;
        font-size:20px;

    }
    .apii{

        width: 600px;
        padding: 40px;
        position: absolute;
        top: 55%;
        left: 25%;
        font-family: 'Oswald', sans-serif;

    }
    .butonn{
        font-size: 16px;
        color:white;
        background-color:#008CBA;
        border-radius: 10px;


    }
    .butonn:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

    }
    .ppp{
        font-family: 'Oswald', sans-serif;
        font-size: 20px;

    }
    .h11{

      font-family: 'Oswald', sans-serif;
    }
    </style>
</head>
<body>
    <header class="bg-dark-blue">
        <div class="container">
             <nav id="navbar">
            <h1 class="heading-big">E-Veteriner</h1>
            <ul>
                <li><a href="indexadmin.php">Ana Sayfa</a></li>
                <li><a >Hizmetlerimiz</a>
                    <ul>

                        <li><a href="randevuadmin.php" title=""> 1.Randevu Y??netimi</a></li>

                        <li><a href="asitakvimiadmin.php" title=""> 2.A???? Takvimi Takibi</a></li>



                        <li><a href="gonullusahiplendirmeadmin.php" title="">3.G??n??ll?? Sahiplendirme</a></li>


                        <li><a href="evcilhayvanadmin.php" title="">4.Evcil Hayvan Y??netimi</a></li>

                        <li><a href="akillibildirimadmin.php" title="">5.Ak??ll?? Bildirimler</a></li>

                        <li><a href="mamalaradmin.php" title="">6.Mamalar</a></li>

                        <li><a href="faturaveodemeadmin.php" title="">7.Fatura ve ??deme Takibi</a></li>

                    </ul>
                </li>
                <li><a href="nobetciadmin.php">N??betci veterinerler</a></li>
                <li><a href="iletisimadmin.php">??leti??im</a></li>
                <li class="itemm">
             <a class="btnn" href="cikis.php"><i class="fas fa-sign-out-alt"></i>????k????</a>
         </li>

            </ul>
        </nav>
    </div>
    </header>



    <div class="logo">
        <img src="images/asa.png">
    </div>
    <div class="resim2">
        <img src="images/animal.png">
    </div>
    <div class="resim">
        <img src="images/veteriner.png">
    </div>

    <div id="clock">
        <h2>saat</h2>
        <div id="time">
            <div><span id="hour">00</span><span>Hours</span></div>
            <div><span id="minutes">00</span><span>Minutes</span></div>
            <div><span id="seconds">00</span><span>Seconds</span></div>
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

    <div class="middlee">
        <div class="menuu">
            <li class="itemm" id='profile'>
                <a href="#profile" class="btnn"><i class="fas fa-dog"></i>K??pekler Hakk??nda</a>
                <div class="smenu">
                  <a href="kopekbeslenme.php">K??peklerde Beslenme</a>
                  <a href="kopekhastal??k.php">K??pekler Hastal??klar??</a>
                </div>
            </li>
            <li class="itemm"id='messages'>
             <a href="#messages" class="btnn"><i class="fas fa-cat"></i>Kediler Hakk??nda</a>
             <div class="smenu">
               <a href="kedibeslenme.php">Kedilerde Beslenme</a>
               <a href="kedihastal??k.php">Kedi Hastal??klar??</a>

             </div>
         </li>
         <li class="itemm" id="settings">
             <a href="#settings" class="btnn"><i class="fas fa-paw"></i>Hamsterler Hakk??nda</a>
             <div class="smenu">
               <a href="hamsterbeslenme.php">Hamsterlarda Beslenme</a>
               <a href="hamsterhastal??k.php">Hamster Hastal??klar??</a>
             </div>
         </li>

        </div>
    </div>
   <div class="slider">
       <h1 class="h11">A???? Takvimi Takibi</h1>
       <br>
       <br>
       <h5 style="font-size:17px">A???? Takvimi b??l??m??ne ho??geldiniz. Dostunuzun a???? takvimini g??rebilmek i??in t??r??n?? ??ncelikle yaz??p 'se??im yap' butona t??klay??n??z.<br>
       <p>E??er bu a???? takvimini kopyas??n?? Mail olarak olmak isterseniz dostunuzun t??r??n?? se??tikten sonra mail adresinizi yaz??p 'g??nder' butonuna t??klay??n??z.</p><br>
       <p>??uanl??k sadece kedi ve k??pek i??in takvimlerimiz vard??r!</p></h5>
       <form action="" method="POST">
<br>
		<p class="ppp">Evcil Hayvan??n??z??n T??r??n?? Yaz??n??z:<p><br> <input type="text" name="tur" placeholder="t??r:"></input>
        <button type="submit" name="secim" class="butonn">se??im yap</button>

        <p class="ppp">Mail Adresinizi yaz??n??z:</p><p>(??nce hayvan t??r??n??z?? yaz??n??z!)</p><br> <input type="text" name="email" placeholder="mail:"></input>
        <button type="submit" name="gonderr2" class="butonn">g??nder</button>

        </form>


    </div>
    <?php


if(isset($_POST['secim']))
{

      $tur=$_POST['tur'];

      if($tur=="k??pek"|| $tur=="K??pek" ){

        $email=$_POST['email'];
      if(isset($_POST['gonderr2'])){
        include 'mail.php';
        };

          echo "
          <div class=api>
          <h3>K??peklerin A???? takvimi</h3>

          6. hafta : ????-d???? parazit uygulamas?? <br>
          8. hafta : Karma a???? / 1. doz <br>
          9. hafta : Bron??in a????s?? / 1. doz <br>
          10. hafta : Corona a????s?? / 1. doz <br>
          11. hafta : Karma a???? / 2. doz <br>
          12. hafta : Bron??in a????s?? / 2. doz <br>
          13. hafta : Corona a????s?? / 2. doz <br>
          14. hafta : Kuduz a????s??
          <br><br><br>
          <h4>K??pek A????lar??</h4>

        K??pekler ??nlem al??nmad??????nda bir??ok hastal????a yakalanabilir. Bu ??nlemler kimi zaman k??pekleri
        giydirmek, so??uk veya s??cak havalarda d????ar?? ????karmamak, kimi zaman da k??pek a????lar??yla ??nlenebilir. ??zellikle yavru k??pekler ve ba????????kl??k
        sistemi zay??f olan k??peklerin viral enfeksiyonlara yakalanma olas??l?????? olduk??a y??ksektir. Bu nedenle k??pek a????lar?? hayati ??neme sahiptir.
        <br><br><br>

        <h4>Yavru K??pek A????lar??</h4>
        Evcil hayvan??n??z??n a????lar??n?? yapt??rmaya ba??lamadan ??nce parazit tedavisi uygunlanm???? olmal??d??r. Parazitler k??peklerin ba????????kl??k sistemlerinin zay??flamas??na neden olur. Parazit tedavisi yap??lmam???? k??peklerde yap??lan k??pek
         a????lar?? etkili ve g??venli de??ildir. Aksine k??pe??inizi tehlikeye sokar. Evcil hayvan??n??z??n a???? ??ncesi genel sa??l??k kontrolleri yap??lmal??d??r. ????nk?? k??peklerde a????lama sadece sa??l??kl?? olan k??peklere yap??lmal??d??r.
         <br><br><br>

         <h4>Yavru K??peklerde A????lama Ne Zaman Yap??lmal??</h4>
         Yavru k??pekler 1-1,5 ayl??k olduklar??nda ilk a????lar??na ba??lanabilir. Bu a????lara Parvo-Distemper k??pek a????s?? ya da karma k??pek a????s?? ile ba??lanmal??d??r. 3 hafta ge??tikten sonra karma k??pek a????s??n??n 2.dozu yap??lmal??d??r. Bu a????lardan sonra yavru k??pe??inizin ba????????kl??k sistemi istenilen seviyeye ula??acakt??r.
         Yavru k??pekler 12 haftal??k olmadan k??pek kuduz a????lar??n??n da yap??lmas?? gerekir. Di??er a????lar?? da yap??ld??ktan sonra k??pek ba????????kl??k sisteminin g????l?? tutmak i??in y??ll??k a????lar??n??n her y??l yap??lmas?? gerekir.
         <br><br><br>

         <h4>K??pek A????lar?? Hakk??nda Bilinmesi Gerekenler</h4>
         K??pek a????lar?? hakk??nda sahiplerin bilmesi gerekenler konulara genel olarak bakacak olursak;
         - K??pek a????lar??, k??pe??inizin v??cut ??s??s??n??n y??kselmesine, k??pe??inizin ate??inin ????kmas??na neden olabilir. Bu durum v??cudun verdi??i fizyolojik bir tepkidir ve normaldir. Ancak daha da ciddi olabilecek ate??lenmeler s??z konusu olursa vakit kaybetmeden veteriner hekime ba??vurman??z?? ??neririz.
         - Bozuk, tarihi ge??mi?? ve so??ukta saklanmayan, so??uk zinciri korunmam???? k??pek a????lar?? kesinlikle kullan??lmamal??d??r.
         - Elde, cepte veya ??antada ta????nan a????lar??n uygulanmamas?? gerekir. A????lar??n buz bataryalar??yla veya buz kal??plar??yla ta????nm???? olmas??na dikkat edilmelidir.
         - Yap??lan k??pek a????s??n?? mutlaka k??pe??inizin a???? karnesine kaydettirin ve a????y?? yapan veterinere imzalatt??r??p onaylat??n.
         - A????lar tamamlan??ncaya kadar k??pe??inizi ba??ka hayvanlar??n yan??na yakla??mas??na, hatta soka??a ????kmas??na izin vermeyin.
         - K??pe??inizin a????lar?? tamamlansa bile %100 koruma sa??lanamad??????n?? unutmay??n ve gerekli ??nlemleri mutlaka al??n. A????lamam???? k??peklerle temas??ndan ka????n??n. Herhangi bir yerden bir ??ey yemesine izin vermeyin. Ba??ka k??peklerin d????k??yla temas etmesine m??saade etmeyin.


        </div>



          ";


      }
      else if($tur=="kedi"|| $tur=="Kedi"){

        $email=$_POST['email'];
        if(isset($_POST['gonderr2'])){
          include 'mail2.php';
          };

        echo "
        <div class=api>
        <h3>Kedilerin A???? takvimi</h3>

        6. hafta : Karma a???? / 1. doz  <br>
        9. hafta : Karma a???? / 2. doz <br>
        10. hafta : L??semi-1 a????  <br>
        12. hafta : Kuduz a????s??  <br>
        13. hafta : L??semi A????s??-2 <br>
        16. hafta : FIV A????s?? <br>
        <br><br><br>
        <h4>Kedi A????lar??</h4>

        ????te kedilere, hastal??k etmenleri ile kar????la??madan potansiyel riski olan hastal??klara kar???? a????lama yap??larak onlar??n antikor ??retmesi sa??lan??r. B??ylece risk al??nda olan kediler korumaya al??nm???? olur. A????lama ??zellikle tedavisi olmayan ya da tedavisi g????, kal??c?? hasarlar b??rakan hastal??klara kar???? yap??lmaktad??r.
         Hastal????a kar???? yap??lan a????lamada yeteri seviyede antikor ??retilmesi i??in a????lamalar tekrarlanmaktad??r. Koruyucu miktardaki antikor seviyesi kan tahlili ile ??l????lmektedir ve buna antikor titresi denilmektedir. Normal ??artlarda hastal????a yakalan??p atlatan kedilerde do??al antikorlar
        ??ekillenmektedir. Bu do??al antikorlar anne s??t?? ile yavrulara aktar??lmakta ve yavrular?? ilk aylarda korumaktad??r. Fakat yakla????k iki ayl??k d??neme gelen kedi yavrular??nda anne s??t?? ile  al??nan antikor miktar?? yeterli olmad??????ndan a????lamaya gerek duyulmaktad??r.
        <br><br><br>

         <h4>Yavru Kedi A????lar??</h4>
         ??zellikle kedi yavrular?? baz?? hastal??klar??n tehdidi alt??nda olduklar??ndan a????lamaya erken ya??ta ba??lanmal??d??r. Bilinen ve uygulanan karma a????, kuduz a????s??, l??semi a????s?? en fazla g??r??len ve tedavi  ??ans?? ??ok az olan hastal??klara kar???? ??retilmi?? kedi a????lar??d??r. A????lardan en fazla fayday?? alabilmek i??in kedilerin a????lama ??ncesinde
         parazitlerinden ar??nd??r??lm???? olmas?? ve stresten uzak olmalar?? gerekmektedir. Asla herhangi bir hastal?????? olan canl??ya a???? uygulanmaz. Bu sebeple Veteriner Hekimin a???? uygulamas??ndan ??nce parazit tedavisi yap??p kedinizi muayene etmesi esast??r. Yavru kedilerde a????lamaya iki ayl??kken ba??lamak en ??ok uygulanan y??ntemdir ve parazitinden ar??nd??r??lm????
          yavru kedinin ilk olarak karma a???? ile a???? program??na ba??lan??r. Bu a????lama en y??ksek antikor titresini elde etmek i??in 3 hafta sonra tekrarlanmal??d??r.



        </div>
        ";

    }
}
     ?>


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
	 <div class="icerik">


    </div>

</body>
</html>
