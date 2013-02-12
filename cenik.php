<?php
 require("pripojeni.php");
 session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
 <meta http-equiv="content-type" content="text/html; charset=utf-8">
 <meta name="generator" content="PSPad editor, www.pspad.com">
 <meta name="description" content="Grafika a webdesign Thorx Pardubice" />
 <meta name="keywords" content="web,webdesign,thorx,grafika,vizitky,redakční systém,e-shopy,reference,www,webové stránky" />
 <link rel="stylesheet" href="style.css" type="text/css" />
 <link rel="shortcut icon" type="image/x-icon" href=""/>
 <title>Ceník - www.ErebusWebDesign.cz</title>
</head>
<body>
 <div id="hlavni">
  <div id="hldole"></div>
  <div id="menu">
   <p class="text_menu">MENU </p> 
   <ul><?php
    require("r_menu.php");
    print '</ul>';
    require("pocitadlo.php");
   ?>
  </div>
  <div id="menu_nahore">
   <ul><?php
    require("r_menu-nad.php");
   ?></ul>
  </div>      
  <div id="obsah">
   <span id="text">
     <h1> Ceník </h1>
    <p class="text">
    Specializujeme se převážně na živnostníky, malé a střední firmy. Protože se
webdesignem a tvorbou www stránek "zatím" neživíme jsou naše ceny minimálně
2x nižší než běžné ceny těchto služeb.</p>
<h2>Definice položek ceníku</h2>
<h3><a href="easyweb.php">Jednoduchý web</a></h3>
<h3><a href="standardweb.php">Standardní web</a></h3>
<h3><a href="pokrocilyweb.php">Pokročilá řešení</a></h3>
 <p>Ceny závisí především na složitosti Vašeho zadání.</p>
  <table align="center" id="cenik">
<tr>
<td> Druh webu nebo aplikace</td>
<td> Bližší specifikace </td>
<td> Cena </td>
</tr>
<tr>
<td> Jednoduchý web </td>
<td> Bez následné správy </td>
<td> Od 2000 KČ </td>
</tr>
<tr>
<td> Standardní web</td>
<td> Bez následné správy </td>
<td> Od 3500 KČ </td>
</tr> 				
</tr>
<tr>
<td> Standardní web </td>
<td> S následnou správou	 </td>
<td> Od 5000 KČ </td>
</tr>   				
<tr>
<td>E-shop</td>
<td>Bez následné správy </td>
<td>Od 10 000 KČ </td>
</tr>  					
<tr>
<td>E-shop</td>
<td>S následnou správou  </td>
<td>Od 15 000 KČ </td>
</tr>
<tr>
<td> Redakční systém </td>
<td> Komplet</td>
<td> Od 5000 KČ </td>
</tr>
</table> <br>
<table align="center" id="cenik" class="white">
<tr>
<td> Grafika </td>
<td> Provedení	 </td>
<td>	Cena </td>
</tr> 					
<tr>
<td> Vizitka</td>
<td> Grafika bez tisku </td>
<td> Od 200 KČ </td>
</tr>
 <tr>
<td> Vizitka </td>
<td> Grafika s tiskem</td>
<td> Od 300 KČ + náklady na tisk</td>
</tr>  					
 <tr>
<td> Reklamní plakát A4</td>
<td> Grafika bez tisku </td>
<td> Od 500 KČ</td>
</tr>  		 
<tr>
<td> Reklamní plakát A4 </td>
<td> Grafika s tiskem	</td>
<td> Od 600 KČ + náklady na tisk</td>
</tr>  		 			                                
</table>
<p>Pokud jste v ceníku nenašli to, co hledáte, nezoufejte! Ceník je pouze pro představu o cenách. 
   Kdyby jsme měli uvádět všechny naše služby, jen těžko by ste se dohledali konce. Napište nám přes KONTAKT 
  co chcete a "obratem" Vám přijde cenová kalkulace za chtěnou grafiku či web s přihlédnutím ke složitosti zadání na Váš E-mail.</p>  
   </span>
  </div>
  <div id="nad-obsah"> 
   <span id="logo"></span>
   <p class="text_nad-obsah">Odkazové náhledy našich prací:  </p>
    <div id="galerie">
     <?php
     require("galerie.php"); 
     ?>
    </div> 
  </div> 
  <div id="copy"><center><p>© Erebus WebDesign</p></center></div>
  </div>
</body>
</html>