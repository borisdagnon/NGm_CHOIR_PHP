<?php
include_once 'class/autoload.php';
session_start();
$_SESSION['paypal']='0';
$controleur=null;
$site=null;


if(isset($_SESSION['type']) && isset($_SESSION['id']))
{
	
}else 
{
	$controleur=new controleur();
	$site=new page_base('Histoire du Gospel');
	$site->__set('corps',$controleur->histoire_gospel());
}
$site->afficher();

?>

