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
 <title>Standartní web - www.ErebusWebDesign.cz</title>
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
  <h1> Standardní web </h1>
  <p> Pokročilý web, jsou moderní aktualizované stránky. Pomocí administračního rozhraní si můžete upravovat a přidávat obsah. Stejně jednoduše, jako upravujete dokumenty ve Wordu.
   Moderní technologie, jakou jsou stránky tvořeny, umožňuje neomezené rozšiřování, přidávání podstránek, dalších modulů (např. ankety) a úpravy na míru. </p>
  <h2>Standardní web zahrnuje:</h2>
  <ul>
   <li>grafický návrh, design</li>
   <li>nakódování stránek, otestování</li>
   <li>chráněná administrační sekce</li>
   <li>jazyková korektura textů</li>
   <li>správa obrázků a dokumentů</li>
   <li>fotogalerie</li>
   <li>kniha návštěv</li>
   <li>základní statistiky</li>
   <li>kontaktní formulář s antispamem</li>
   <li>plánování zveřejnění obsahu</li>
   <li>jednoduchá editace textů jako ve Wordu (WYSIWYG)</li>
   <li>základní rozsah cca do 20 stran</li>
   <li>volitelně fórum, ankety, komentáře, objednávky</li>
  </ul> 
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
