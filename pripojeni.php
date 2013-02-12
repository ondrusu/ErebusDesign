<?php
class Pripojeni
{
  public $server;
  public $uziv_jmeno; 
  public $uziv_heslo;
  public $spojeni;    
 public function __construct()
 {
  return $this->spojeni; 
 }
 public function pripojeni()
 {
  $this -> uziv_jmeno = "mysql37047";
  $this -> uziv_heslo = "hubertjanota";
  $this -> server = "h90-mysql8";
  $this->spojeni = mysql_connect($this->server, $this->uziv_jmeno, $this->uziv_heslo) or die ("spojeni s databazi selhalo");
  mysql_select_db("mysql44963")or die("vyber databaze selhal");
  return $this->spojeni;
 }
}
?>
