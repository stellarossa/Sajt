<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet"  href="css/stilsajt.css">
    <style>
        
        
        #kosmomidugme:hover{
            opacity: 0.6;
            
        }
        
        #strjelica{
            position: fixed;
            bottom: 5%;
            right: 3%;
            height: 30px;
            width: 30px;
            border: 1px solid black;
            background: #999;
            color: #e8e8e8;
            font-size: 35px;
            font-weight: bold;
            border: 0px;
            border-radius: 4px;
            transition: "2 s";
            
        }
        
        #strjelica:hover{
            opacity: 0.5;
            
        }
        
        .karakteristike{
            border: 1px solid transparent;
            width: 28%;
        }
        
    </style>
   
</head>
<body>
  <div id="glavni">
    
 <header>
		<!--div top u njemu su logo i tel-->
		<div id="top">
			<p class="icon"> <img src="https://vjezbanjephp.000webhostapp.com/adress.png" alt="lokacija"> </p>
			<p id="adresa">Adresa: Spasovdanska bb I.Sarajevo</p>
			<!--logo privremeno staviti u komentar <img id="logo" src="img/logo1.png" alt="logo">-->
			<p class="icon"> <img src="https://vjezbanjephp.000webhostapp.com/tel.png" alt="telefon">  </p>
			<p id="tel">Telefon: +387 65 834 669 </p>
			<p class="icon1"> <a href="#" ><img src="https://vjezbanjephp.000webhostapp.com/google.png" alt="google"></a>  
			<p class="icon1"> <a href="https://www.olx.ba/profil/stella_rossay" target="blank"><img src="https://vjezbanjephp.000webhostapp.com/olx.png" alt="olx"></a>
			<p class="icon1"> <a href="https://www.facebook.com/prodajaautomobila15/" target="blank"><img src="https://vjezbanjephp.000webhostapp.com/fb.png" alt="facebook"></a>		
		</div>

		<!--div nav u njega ide nav meni-->
		<div id="nav">
		<nav>
		<ul id="meni">
			<li><a href="pocetna.php">Početna</a></li>
			<li><a href="onama.html">O nama</a></li>
			<li><a href="vozila.php">Vozila</a></li>
			<li><a href="kontakt.php">Kontakt</a></li>
		</ul>
	    </nav>

		</div>
		<!--ovde se zavrsava header-->
</header>
	
	<!--nakon sto smo zavrsili header napravit cemo baner-->
	<div id="baner"><img class="slikeBaner" src="https://vjezbanjephp.000webhostapp.com/baner_a4.jpg" alt="baner">
	                <img class="slikeBaner" src="https://vjezbanjephp.000webhostapp.com/passat.jpg" alt="baner1">
	
	<div><p></p></div>

	</div>
	
<article>
<h2 id="tekstnaslov">PRODAJA VOZILA</h2><br><br>

<div id="tekstnaslov1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc..Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div><br><br>
<?php
  $conn= new mysqli('localhost','root','','baza_kora');
  /*
  if($conn->connect_error){
      echo "Greska";
  }
else
{
    echo "Sve je OK";
}
*/
    
$upit='SELECT * FROM auta LIMIT 6';
    
$prikaz=$conn->query($upit);
    
$html='<div id="glavniokvir">';
    
while($rows=$prikaz->fetch_assoc()){
    
    $html.='<div id="okvirauta">
            <img id="slikavozila" src="data:image/jpeg;base64,'.base64_encode($rows['Slika']).'" <br><br>
            <h3   id="markavozila"> <a style="text-decoration:none;color: #b90504;"  href="testForm.php?id='.$rows['id'].'">'.$rows['Marka'].' '.$rows['Model'].'</a></h3><br>
            <HR id="linija">
            <p id="tekst_opis">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard</p>
            
            <div id="za_karakteristike">
            
            <p class="karakteristike"><img src="img/ikonice/gorivo.png">'.$rows['Gorivo'].'</p>
            <p class="karakteristike"><img src="img/ikonice/mjenjac.png">'.$rows['Transmisija'].'</p>
            <p class="karakteristike"><img src="img/ikonice/highway.png">'.$rows['Kilometraza'].'</p>
            <p class="karakteristike"><img src="img/ikonice/kilowat.png">'.$rows['KW'].'</p>
            <p class="karakteristike"><img src="img/ikonice/kalendar.png">'.$rows['Godina'].'</p>
            <p class="karakteristike"><img src="img/ikonice/cijena.png">'.$rows['Cijena'].' KM</p>
            
            </div>
            </div>';
}    

$html.='</div>';

echo $html;
    
?>


</article>   
   
   
<div id="kosmomi">
    <h2>WE ARE THE BEST</h2><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc..</p><br>
    
    <div class="kosmomi1">
    <img src="https://vjezbanjephp.000webhostapp.com/kvalitet.png"><br><br>
    <h4>Kvalitet</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
    </div>
    
     <div class="kosmomi1">
    <img src="https://vjezbanjephp.000webhostapp.com/garancija.png"><br><br>
    <h4>Garancija</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
    </div>
    
     <div class="kosmomi1">
    <img src="https://vjezbanjephp.000webhostapp.com/iskustvo.png"><br><br>
    <h4>Iskustvo</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
    </div>
    
     <div class="kosmomi1">
    <img src="https://vjezbanjephp.000webhostapp.com/price.png"><br><br>
    <h4>Cijena</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
    </div><br><br>
    
    <a href="onama.html"><input type="submit" value="Ko smo mi" id="kosmomidugme"></a>
    
</div>
   
<!--ovde cemo napraviti dugme za top page-->

  <input type="button" value="^" onclick="top_page()" id="strjelica"/>
  
   <!--sada pravimo footer-->
   <footer>
    <div id="divuf">
   
	<div class="footerdiv">
	<h3 >Kontakt</h3><br>
    <hr><br>
	<p><img src="https://vjezbanjephp.000webhostapp.com/adress.png" alt="lokacija"><a href="kontakt.php">Spasovdanska bb</a></p><br>
	<p><img src="https://vjezbanjephp.000webhostapp.com/email.png" alt="lokacija">  prodajaautomobila15@gmail.com</p><br>
	<p><img src="https://vjezbanjephp.000webhostapp.com/tel.png" alt="telefon">  +387 65/834-669</p><br>
	


	</div>

	<div class="footerdiv">
	<h3 >Istaknute stavke</h3><br>
	<hr><br>
	<a href="onama.html">O nama</a><br>
	<a href="vozila.html">Nasa vozila</a><br>
	<a href="kontakt.php">Kontakt</a><br>
	</div>

	<div class="footerdiv">
	<h3>Linkovi</h3><br>
	<hr><br>
	<a href="https://www.olx.ba/profil/stella_rossay" target="blank">Prodaja automobila - OLX</a><br>
	<a href="https://www.facebook.com/prodajaautomobila15/" target="blank">Prodaja automobila - FB stranica</a><br>
	</div>
	
	</div>

	
	<div id="kraj">
	<p>Copyright © 2018 Prodaja automobila. All rights reserved.</p>	
	</div>

</footer>
    <!--kraj footer-a-->
    
    
    </div><!--ovde zatvaramo glavni div-->

<!--sada kucamo kod za slider - baner-->

<script >
    
var slikaIndex=0;
baner();

function baner(){
    var i =0;
    var x=document.getElementsByClassName("slikeBaner");
    for(i=0;i<x.length;i++){
    x[i].style.display="none";
    }
    
    slikaIndex++;
    if(slikaIndex>x.length){
        slikaIndex=1
    };
    x[slikaIndex-1].style.display="block";
    setTimeout(baner,5000);
    
}
    
    
// kod za top page
    
function top_page(){
    window.scrollTo(0,0);
}
</script>


</body>
</html>