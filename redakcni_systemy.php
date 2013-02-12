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
 <title>Redakční systém - www.ErebusWebDesign.cz</title>
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
  <h1> Redakční systémy </h1>
  <p>Nabízíme vytvoření Vašeho redakčního systému, přímo pro Vás dle zadaných parametrů tak, jak potřebujete, bez zbytečných částí, které nejsou potřeba pro Vaši práci, což ji urychlí i mnohdy i výrazně zjednodušší. </p>
  <h2>Co je vlastně Redakční systém?</h2>
  <p> Systém pro správu obsahu (CMS z anglického content management system) je software zajišťující správu dokumentů, nejčastěji webového obsahu. V dnešní době se jako CMS zpravidla chápou webové aplikace, někdy s případným doplňkovým programovým vybavením u klienta. Pro CMS se někdy používají i oborově podobné termíny redakční či publikační systém. </p>
  <h2>Základní funkce CMS</h2>
  <p>Mezi základní funkce CMS (obvykle se člení na administrátorské a uživatelské) patří:</p>
   <ul>
    <li> Tvorba, modifikace a publikace dokumentů (článků) zpravidla prostřednictvím webového rozhraní  </li>
    <li> řízení přístupu k dokumentům, zpravidla se správou uživatelů a přístupových práv   </li>
    <li> správa diskusí či komentářů, ať už k publikovaným dokumentům nebo obecných  </li>
    <li> správa souborů  </li>
    <li> správa obrázků či galerií  </li>
    <li> kalendářní funkce  </li>
    <li> statistika přístupů  </li>
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
