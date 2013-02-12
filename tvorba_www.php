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
 <title>Tvorba webů - www.ErebusWebDesign.cz</title>
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
  <h1> Tvorba www a webdesign </h1>
  <p> Vytvoříme poutavé webové stránky, které vystihují oblast Vašeho zaměření. Webové stránky, které Vám vytvoříme jsou již optimalizované, takže můžete očekávat nejen moderní vzhled, ale i velkou návštěvnost díky předním pozicím vyhledávačů!</p>
  <p> Tvorba Webových stránek, které pro Vás uděláme, není jen tvorba www stránek, ale také dlouhodobá spolupráce a nejmodernější propagace Vaší společnosti.
Nechtějte webové stránky na to, aby jste nějaké měli, ale chtějte nástroj na získání nových zákazníků přes internet.</p>
<p>Naše webové stránky budou Vaší cestou k úspěchu! </p>
<h2>Webdesign úvodní strany zdarma</h2>
<p>Pokud máte zájem o kompletní web, redesign a nebo vytvoření grafického návrhu čehokoliv, ale máte špatné zkušenosti s webdesignery nebo menšími firmami, uděláme Vám nárvh úvodní strany zdarma! Pokud se Vám návrh nebude líbit nevadí, nebudete platit ani korunu. My si návrh necháme a Vy si najdete někoho jiného.</p>
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