<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_REQUEST['bkid']))
  {
	$bid=intval($_GET['bkid']);
	$email=$_SESSION['login'];
	$sql="SELECT "	