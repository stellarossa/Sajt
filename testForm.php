<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prodaja automobila</title>
    <link rel="stylesheet" href="css/stilsajt.css">
     <!-- veci dio stranice je stilizovan u stilsajt.css ali ispod cemo jos da stilizujemo neke stvari-->
       <style>
        #veliki_okvir{
            width: 60%;
            margin: auto;
            border: 1px solid transparent;
        }
        
        #veliki_okvir span{
            font-size: 18px;
            font-weight: bold;
        }
        
               
        #div_lijevo{
            float: left;
            width: 65%;
            border: 1px solid transparent;
            padding: 10px;
            text-align: justify;
        }
        
        #div_lijevo h1{
            color: #b90504;
        }
        
        #div_lijevo img{
            margin-bottom: 15px;
        }
        
        #div_desno{
            width: 30%;
            float: left;
            border: 1px solid transparent;
            margin-left: 2%;
        }
        
        #div_desno span{
            color: #b90504;
           
        }
        
        #tabela{
            border: 1px solid transparent;
            width: 99%;
        }
        
        .desna{
            text-align: right;
            
            
        }
        
        .lijeva{
            font-weight: bold;
            padding: 10px;
        }
        
        #tabela hr{
            border: 0;
            height: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
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
 <div id="veliki_okvir">
 <?php

    $id=0;

    if(isset($_GET['id']))
    {

        $id=$_GET['id'];
        
          $conn= new mysqli('localhost','root','','baza_kora');

    
          $upit='SELECT * FROM auta WHERE id='.$id;

          $prikaz=$conn->query($upit);
        
          
            
          while($rows=$prikaz->fetch_assoc()){
            
         $html1='
                 
                 <div id="div_lijevo">
                  <img id="slikavozila" src="data:image/jpeg;base64,'.base64_encode($rows['Slika']).'"
                  <p><h1>'.$rows['Marka'].' '.$rows['Model'].'</h1><br><br>
                  
                  Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae mi. <br><br>Pellentesque molestie elit bibendum tincidunt semper. Aliquam ac volutpat risus. In felis felis, posuere commodo aliquet eget, sagittis sed turpis. Phasellus commodo turpis non nunc egestas, et egestas felis pretium. Pellentesque dignissim libero vitae tincidunt semper. Nam id ante nisi. Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu.
                  <br><br><br>
                  <h2>Cijena: '.$rows['Cijena'].' KM</h2>      
                  <br><br>
                  
                 </div>
                 
                 <div id="div_desno">
                  <p><span>SPECIFICATIONS</span></p><br><br>
                  <table id="tabela">
                  <tr><td class="lijeva">Marka</td> <td class="desna">'.$rows['Marka'].'</td></tr>
                  <tr><td colspan="2"><hr></td></tr>
                  <tr><td class="lijeva">Model</td> <td class="desna">'.$rows['Model'].'</td></tr>
                  <tr><td colspan="2"><hr></td></tr>
                  <tr><td class="lijeva">Godina</td> <td class="desna">'.$rows['Godina'].'</td></tr>
                  <tr><td colspan="2"><hr></td></tr>
                  <tr><td class="lijeva">Kilometraza</td> <td class="desna">'.$rows['Kilometraza'].'</td></tr>
                  <tr><td colspan="2"><hr></td></tr>
                  <tr><td class="lijeva">Gorivo</td> <td class="desna">'.$rows['Gorivo'].'</td></tr>
                  <tr><td colspan="2"><hr></td></tr>
                  <tr><td class="lijeva">Boja</td> <td class="desna">'.$rows['Boja'].'</td></tr>
                  <tr><td colspan="2"><hr></td></tr>
                  <tr><td class="lijeva">Tip</td> <td class="desna">'.$rows['Tip'].'</td></tr>
                  <tr><td colspan="2"><hr></td></tr>
                  <tr><td class="lijeva">KW</td> <td class="desna">'.$rows['KW'].'</td></tr>
                  <tr><td colspan="2"><hr></td></tr>
                  <tr><td class="lijeva">KS</td> <td class="desna">'.$rows['KS'].'</td></tr>
                  <tr><td colspan="2"><hr></td></tr>
                  <tr><td class="lijeva">Transmisija</td> <td class="desna">'.$rows['Transmisija'].'</td></tr>
                  <tr><td colspan="2"><hr></td></tr>
                  <tr><td class="lijeva">Brzine</td> <td class="desna">'.$rows['Brzina'].'</td></tr>
                  <tr><td colspan="2"><hr></td></tr>
                  <tr><td class="lijeva">Boja</td> <td class="desna">'.$rows['Boja'].'</td></tr>
                  <tr><td colspan="2"><hr></td></tr>
                  <tr><td class="lijeva">Broj vrata</td> <td class="desna">'.$rows['Vrata'].'</td></tr>
                  <tr><td colspan="2"><hr></td></tr>
                  <tr><td class="lijeva">Max brzina</td> <td class="desna">'.$rows['Max_brzina'].'</td></tr>
                  </table>
                 </div>';      
              
              //echo $rows['Marka'].$rows['Model'];
              
          }
        
        echo $html1;
        
    }

?>     
     
 </div>
   
       
</article>
   
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
    

   
</div> <!--ovde se zavrsava glavni div-->
    
    
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