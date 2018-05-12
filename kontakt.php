<!DOCTYPE html>
<html>
<head>
	<title>Prodaja automobila 15</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stilsajt.css">
	<link rel="stylesheet" type="text/css" href="stil_kontakt.css">
	 <!-- veci dio stranice je stilizovan u stilsajt.css i stil_kontakt.css ali ispod cemo jos da stilizujemo neke stvari-->
   <style>
    #naslov_kontakt{
    width: 40%;
    margin: auto;
    text-align: center;
}
    #kontakt_info{
    width: 60%;
    margin: auto;
    border: 1px solid transparent;
    height: 100px;
            
}
    .info_kont{
    float:left;
    width: 24%;
    margin-bottom: 15px;
    text-align: center;
    font-size: 13px;
    border: 1px solid transparent;

}
    .info_kont img{
    width: 8%;    
}
    #kont_forma {
    width: 60%;
    border: 1px solid transparent;
    margin: 0px auto;
    text-align: center;
}    
    #div_lijevo{
    float: left;
    width: 50%;
    border: 1px solid transparent;
} 
    #unesenoime,#uneseniemail,#unesenipredmet,#unesenitel {
    width: 99%;   
    height: 30px;
    border: 0.5px solid #e8e8e8;
    border-radius: 4px;
}
        
    #unesenaporuka{
    float: left;
    width: 42%;
    margin-left: 4%;
    border: 0.5px solid #e8e8e8;
    border-radius: 4px;
    height: 170px;
    padding: 5px;
}
    #zadugme{
    clear: both;
    width: 100%;
    margin: auto;
    border: 1px solid transparent;
} 
    #dugme{
    height: 30px;
    width: 80px;
    border-radius: 3px;
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
            
        }
        
        #strjelica:hover{
            opacity: 0.5;
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
	
<!--sada cemo da napravimo div u koji cemo ubaciti google maps - div 'map'-->
<article>
<div id="nasl_kont"><h5>Za sve informacije javite nam se putem kontakt forme,emal-a ili navedenih telefonskih brojeva.</h5></div>
<div id="map"></div><br><br>

<div id="naslov_kontakt">
<h2>KONTAKT</h2><br>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc..</p>
</div><br><br><br><br>

<div id="kontakt_info">
    <div class="info_kont"><img src="https://vjezbanjephp.000webhostapp.com/adresa1.png"><br><br><p>Adresa</p><br><h5>Spasovdansa bb, I.Sarajevo</h5></div>
    <div class="info_kont"><img src="https://vjezbanjephp.000webhostapp.com/tel1.png"><br><br><p>Telefon</p><br><h5>+387 65 834 669</h5></div>
    <div class="info_kont"><img src="https://vjezbanjephp.000webhostapp.com/email1.png"><br><br><p>E-mail adresa</p><br><h5>prodajaautomobila15@gmail.com</h5></div>
    <div class="info_kont"><img src="https://vjezbanjephp.000webhostapp.com/fax1.png"><br><br><p>Fax</p><br><h5>+387 57 375 580</h5></div>
</div>

<div id="kont_forma">
<br><br>
<form  onsubmit="return provjera()" method="post">
<div id="div_lijevo">
<input name="nam" type="text" id="unesenoime" placeholder="  Ime"><br><br>
<input type="text" id="uneseniemail" placeholder="  Email"><br><br>
<input name="subject" type="text" id="unesenipredmet" placeholder="  Subject"><br><br>
<input name="msg" type="text" id="unesenitel" placeholder="  Telefon"><br><br>
</div>


<textarea name="msg" id="unesenaporuka" placeholder=" Unesite prateci komentar..." cols="30" rows="10"></textarea>

<div id="zadugme"><input type="submit" name="sub" value="Posalji" id="dugme" ></div>


    
</form>    
    
</div>



</article>
	
	

<!--pocetak footer-->
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


<!--ovde cemo napraviti dugme za top page-->

  <input type="button" value="^" onclick="top_page()" id="strjelica"/>  

</footer>


</div>
<script src="elementi.html"></script>


<script>

function instalacija(){
var kordinate= {lat:43.807604,  lng: 18.374467};
    
var map= new google.maps.Map(document.getElementById('map'),{
    zoom: 11,
    center: kordinate
});
    
var lokacija= new google.maps.Marker({
    position:kordinate,
    map: map
})
}
    
</script>

 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3thZ5JmXD4_Jhq4ms7XRqXwSvO-1uOjY&callback=instalacija">
    </script>
    
    
<script>
    var ime1=document.getElementById("unesenoime");
    var email1=document.getElementById("uneseniemail");
    var subject1=document.getElementById("unesenipredmet");
    var tel1=document.getElementById("unesenitel");
    var poruka1=document.getElementById("unesenaporuka");
        
    var dugme1=document.getElementById("dugme");
        
    dugme1.addEventListener('click',provjera);
    ime1.addEventListener('focus',brisi);   
    email1.addEventListener('focus',brisi); 
    subject1.addEventListener('focus',brisi); 
    tel1.addEventListener('focus',brisi); 
    poruka1.addEventListener('focus',brisi);   
    
        
    function provjera(){
    if(ime1.value=="" || ime1.value=="Popuni"){
        ime1.value="Popuni";
        ime1.style.color="red";
        return false;
    }
      if(email1.value=="" || email1.value=="Popuni"){
        email1.value="Popuni";
        email1.style.color="red";
        return false;
    }
        if(subject1.value=="" || subject1.value=="Popuni"){
        subject1.value="Popuni";
        subject1.style.color="red";
        return false;
    }
        
        if(tel1.value=="" || tel1.value=="Popuni"){
        tel1.value="Popuni";
        tel1.style.color="red";
        return false;
     }
        if(poruka1.value=="" || poruka1.value=="Popuni"){
        poruka1.value="Popuni";
        poruka1.style.color="red";
        return false;
    }
        
        return true;
}
    
        
    function brisi(){
     
        this.value="";
        this.style.color="black";
        
        
    }
    
    
// kod za top page
    
function top_page(){
    window.scrollTo(0,0);
}

</script>
</body>
</html>




<?php

   if(isset($_POST['sub']))  
    {
      mail('marko6071@gmail.com',$subject1,$msg1);
        
      /* $name = $_POST['nam'];
        echo $name;*/
       
       $subject1 = $_POST['subject'];
        
       
       $msg1 = $_POST['msg'];
        
        
    }
       
       
          
?>
