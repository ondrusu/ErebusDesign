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
 <script src="lightbox/js/jquery-1.7.2.min.js"></script>
 <script src="lightbox/js/lightbox.js"></script> 
 <link href="lightbox/css/lightbox.css" rel="stylesheet" />
 <title>Eshopy - www.ErebusWebDesign.cz</title>
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
  <h1> E-shopy </h1>
  <p> Ano je to tak. Nabízíme i tvorbu E-shopů. Jejich součástí je i připravená DB (databáze) a vlastní redakční systém na míru přímo pro Vás.</p>
  <p> Pod tímto textem můžete vidět náhled námi vytvořeného ukázkového E-shopu a <a href="http://www.eshop-nabytek.thorx.cz/" title="eshop furniture">ZDE</a> je i přímý odkaz, aby ste si mohli E-shop i sami zažít a vyzkoušet si funkce.</p>
<a href="Image/eshopa.jpg" rel="lightbox[roadtrip]"><img src="Image/eshopa.jpg" alt="obrázek omítky ... Vyčkejte než se vám obrázek načte" id="obr_eshopy" /></a>
<a href="Image/eshopb.jpg" rel="lightbox[roadtrip]"><img src="Image/eshopb.jpg" alt="obrázek omítky ... Vyčkejte než se vám obrázek načte" id="obr_eshopy" /></a>
<a href="Image/eshopc.jpg" rel="lightbox[roadtrip]"><img src="Image/eshopc.jpg" alt="obrázek omítky ... Vyčkejte než se vám obrázek načte" id="obr_eshopy" /></a>
<a href="Image/eshope.jpg" rel="lightbox[roadtrip]"><img src="Image/eshope.jpg" alt="obrázek omítky ... Vyčkejte než se vám obrázek načte" id="obr_eshopy" /></a>
<a href="Image/eshopd.jpg" rel="lightbox[roadtrip]"><img src="Image/eshopd.jpg" alt="obrázek omítky ... Vyčkejte než se vám obrázek načte" id="obr_eshopy" /></a>  
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
<script>
Galleria.loadTheme('Galerie/galleria.classic.js');
$('#galleria').galleria();
</script>
</html>