<?php
class Pocitadlo extends Pripojeni
{
 function __construct()
 {
  $this->pripojeni();
 }
 function VyberCelkem()
 {    
 $vyber_celkem = mysql_query("SELECT SUM(Pristup) as celkem FROM Pocitadlo",$this->Pripojeni());
 while ($vc = MySQL_Fetch_Object($vyber_celkem))
 {
  echo $vc->celkem; 
 }
 return $vyber_celkem;
 } 
 function VyberAktDen()
 { 
  $datum = date("Y-m-d");
  $vyber_den = mysql_query("SELECT SUM(Pristup) as dnes FROM Pocitadlo WHERE Datum = '$datum'",$this->Pripojeni());
  while ($vd = MySQL_Fetch_Object($vyber_den))
  {
   echo $vd->dnes;
  }
 return $vyber_den;
 }
 function VyberVcerejsiDen()
 { 
  $datumD = date("d"); 
  $datumVcer = $datumD - 1;
  $VcerejsiDatum = date("Y-m-$datumVcer");
  $vyber_vcerej = mysql_query("SELECT * FROM Pocitadlo WHERE Datum = '$VcerejsiDatum'",$this->Pripojeni());
  $pocet_vcer_prist = mysql_num_rows($vyber_vcerej);
  if($pocet_vcer_prist == 0)
  {
   echo "0";
  }
  else
  {
   while ($vd = MySQL_Fetch_Object($vyber_vcerej))
   {
    echo $vd->Pristup;
   }  
  }
  return $vyber_vcerej;
 } 
 function VlozeniPristup()
 {                                                
  $dnes_datum = date("Y-m-d");
  $vyber_data = mysql_query("SELECT * FROM Pocitadlo WHERE Datum = '$dnes_datum'",$this->Pripojeni());
  $radky = mysql_num_rows($vyber_data);
  while($vyb_dat = MySQL_Fetch_Object($vyber_data))
  {
   $pocet_pristupu = $vyb_dat->Pristup;
  }
  $pristup_p_1 = $pocet_pristupu + 1;
  if($radky != 0)
  {
  $update = mysql_query("UPDATE Pocitadlo SET Pristup ='$pristup_p_1' WHERE Datum = '$dnes_datum'",$this->Pripojeni()) or ("Update se nezdařil.");
  }
  else
  {
  $insert = mysql_query("INSERT INTO Pocitadlo VALUE ('','$dnes_datum','1')",$this->Pripojeni()) or ("Insert se nezdařil.");
  }
 } 
}
$pocitadlo_vypis = new Pocitadlo();

if(!isset($_COOKIE["pristup"]))
{
$pocitadlo_vypis->VlozeniPristup();
$cookie = setcookie("pristup","1",time()+86400);
}


print '<table id="t_pocitadlo" align="center">
        <tr><td colspan="2" id="nadpis_poc">Počítadlo</td></tr>
        <tr>
         <th>Dnes: </th>
         <td id="hodnota_poc">'; 
         $pocitadlo_vypis->VyberAktDen();
print   '</td>
        </tr> 
        <tr>
         <th>Včera: </th>
         <td id="hodnota_poc">';
         $pocitadlo_vypis->VyberVcerejsiDen();
print '  </td>
        </tr> 
        <tr>
         <th>Celkem: </th>
         <td id="hodnota_poc">';
         $pocitadlo_vypis->VyberCelkem();
print '  </td>
        </tr> 
        </table>';
     

print '</table>';