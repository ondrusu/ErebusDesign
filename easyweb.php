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
 <title>Jednoduchý web - www.ErebusWebDesign.cz</title>
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
<h1> Jednoduchý web </h1>
  <p> Jednoduchý web je vhodný pro velmi nenáročné prezentace bez pokročilých funkcí. Výhodou je nízká cena. Je ideální pro webové stránky, které se příliš často neaktualizují, protože aktualizaci musí provádět webdesigner pomocí úprav HTML kódu. </p>
  <h2>Tento web zahrnuje:</h2>
   <ul>
    <li>grafický návrh, design</li>
    <li>nakódování stránek, otestování</li>
    <li>rozsah do 10 prezentačních stran</li>
    <li>jazyková korektura textů</li>
    <li>zařazení do katalogů námi hotových prací</li>
    <li>základní optimalizace pro vyhledávače</li>
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
