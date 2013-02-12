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
 <title>Grafika - www.ErebusWebDesign.cz</title>
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
  <h1> Grafika </h1>
  <p> Vše co tvoříme, průběžně konzultujeme s klientem, aby nedošlo k nedorozumění. Na Vaše připomínky nebo žádosti během tvorby je brán maximální zřetel.</p>                                                                                                                                                                                                              
  <p> Grafik zpracovává barvy i typ písma nejen podle jejich vzájemného souznění, ale také na základě jejich psychologických vlastnosti a bere v úvahu i Vaše chtěné, nebo oblíbené barvy a na tomto základu může doporučit ideální barevnou kombinaci nejen pro grafické návrhy, ale i pro ostatní námi nabízené produkty.</p>
  <p> Jestli si necháte poradit, nebo budete trvat na své původní koncepci záleží už pouze na Vás.</p> <br>
  <p>Nabízíme tvorbu těchto věcí: Vizitky, samolepky, kalendáře stolní i peněženkové, reklamní plakáty malé a střední velikosti, loga a logotypy s dokumentací, fotomontáže, potisky CD/DVD a dalších podobných produktů, podpisové fotografie (především pro sportovce), vodotisky na Vaše autorská díla (např. Fotografie apod.), flashové prolínací hlavičky pro Váš web, PDF dokumenty a nakonec i kontrolu formátování textu, umístění obrázků do textu a sázení řádků. Nenašli jste v našem výpisu to, co sháníte? Napište nám do KONTAKTU dotaz, zda-li to zvládneme také. Odpověď přijde nejdéle do 24 hodin od odeslání dotazu.</p>   
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
