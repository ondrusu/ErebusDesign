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
 <title>Kontakt - www.ErebusWebDesign.cz</title>
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
    <h1> Kontakt </h1>
    <p> Napište nám, pokud se chcete na cokoli zeptat. Odpovíme co nejdříve.</p> 
<?php
require("PHPmailer/class.phpmailer.php");

class Kontakt
{
  public $chyba;
 public function formular_kontakt()
 {
  print '
  
	<table id="kontakt_formular" align="center">  
  <form action="kontakt.php" method="post" accept-charset="UTF-8">
  <tr>
			<td class="white">Jméno:*</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td class="white">Telefon:</td>
			<td><input type="text" name="phone_no"></td>
		</tr>
		<tr>
			<td class="white">E-mail:*</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td class="white">Dotaz:*</td>
			<td><textarea name="question"></textarea></td>
		</tr>
    <tr>
     <td class="white"> *Nutno vyplnit</td>
     <td align="right"> <input type="reset" name="Reset" value="Reset"> <input type="submit" name="Submit" value="Odeslat"></td>
    </tr>
    </form> 
	</table>
  
 '; 
 }
 public function odeslat_mail()
 {
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->IsHTML(true);
  $mail->Host = "ssl://smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Port = 465;
  $mail->Username = "hubert.janota@educanet.cz"; 
  $mail->Password = "Speedy";
  $mail->From = "thorx.cz"; 
  $mail->FromName = "info-kontakt";
  $mail->AddAddress("hubert.janota@educanet.cz"); 
  $mail->AddAddress("ondrej.cepec@educanet.cz"); 
  $mail->Subject = "Thorx-dotaz"; 
  $mail->Body = " 
  <h1> Dotaz ze serveru thorx.cz </h1>
  Jméno: ".$_POST["name"]."<br />
  Email: ".$_POST["email"]."<br />
  Telefonní číslo: ".$_POST["phone_no"]."<br />
  Dotaz: ".$_POST["question"].""; 
  $mail->WordWrap = 50;   // je vhodné taky nastavit zalomení (po 50 znacích)
  $mail->CharSet = "UTF-8";   // nastavíme kódování, ve kterém odesíláme e-mail
  if(!$mail->Send())
  {  // odešleme e-mail
    echo 'Došlo k chybě při odeslání e-mailu.';
    echo 'Chybová hláška: ' . $mail->ErrorInfo;
  }   
 }
 public function kontrola_emailu()
 {
  if($_POST["name"] != "" and $_POST["email"] != "" and $_POST["question"])
  {
   if(!(ereg("^.+@.+\\..+$", $_POST["email"])))
   {
    echo "Email není ve správném tvaru!<br />";
    $this->chyba = 1;
   } 
   if(is_numeric($_POST["name"]))
   {
    echo "Ve jméně nesmí být čísla!<br />";
    $this->chyba = 1;
   }
   $delka_tel = StrLen($_POST["phone_no"]);
   if(!empty($_POST["phone_no"]))
   {
    if(!is_numeric($_POST["phone_no"]))
    {
     echo "Telefonní číslo musí být číslo!<br />";
     $this->chyba = 1;
    }
    if($delka_tel != 9)
    {
     echo "Telefonní číslo musí být na 9 znaků!<br />";
     $this->chyba = 1;
    }  
   }
  }
  else
  {
   echo "Musíte zadat všechny údaje (*)!<br />";
   $this->chyba = 1;
  }

 }
}
$email_kontakt = new Kontakt();

if(isset($_POST["Submit"]))
{
 $email_kontakt->kontrola_emailu();
 if($email_kontakt->chyba == 1)
 {
  $email_kontakt->formular_kontakt();
  $email_kontakt->kontrola_emailu();
 }
 else
 {
  
  $email_kontakt->formular_kontakt();
  echo "Odesláno...";
  $email_kontakt->odeslat_mail();   
   }
  }
  else
  {
   $email_kontakt->formular_kontakt();
  }
?>    
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