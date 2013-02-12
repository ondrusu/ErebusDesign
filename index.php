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
 <title>O nás - www.ErebusWebDesign.cz</title>
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
    <h1> Vítejte na ErebusWebDesign </h1>
    <p>
     Jsme tým kreativních, mladých lidí, zabývající se tvorbou webových stránek a webdesignu na profesionální úrovni.
     Nabízíme Vám zhotovení webových stránek, grafických návrhů a další služby, dle Vašich představ.
     Rádi pro vás vytvoříme originální e-shopy, redakční systémy, samolepky, vizitky, fotomontáže, reklamní letáky a další. 
     Vše zhotovíme v domluveném termínu, dle Vašich představ a hlavně za přiměřené ceny oproti konkurenci  
   </p>  
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

