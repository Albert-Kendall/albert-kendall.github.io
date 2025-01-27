<?php
session_start(); 
include("gb_config.php"); 
?>

<html>
<head>
<title><? echo $la27; ?></title>
<script language="javascript" type="text/javascript">var loadtext = '<? echo $la32; ?>';</script>
<script language="javascript" src="gb_ajax.js" type="text/javascript"></script>
<link href="gb_style.css" rel="stylesheet" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=<? echo $encoding; ?>">
</head>

<body>
<div align="center">
<div class="container">

<?
$token = md5(uniqid(rand(), true));
$username = scheck($_POST['username']);
$password = scheck($_POST['password']);

$page = $_REQUEST['page'];
$action = $_REQUEST['action'];
$delentry = $_POST['delentry'];

if (!isset($_SESSION['admin'])) {

?>
<div align="center">
<form method="POST" action="<? echo $_SERVER['SCRIPT_NAME']; ?>">
<table border="0" cellpadding="0" cellspacing="2" width="400" id="table1">
<tr>
<td colspan="2">
<p align="center"><b><? echo $la27; ?></b><br>&nbsp;</td>
</tr>
<tr>
<td><? echo $la28; ?>:</td>
<td><input type="text" name="username" size="20"></td>
</tr>
<tr>
<td><? echo $la29; ?>: </td>
<td><input type="password" name="password" size="20"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><br><input type="submit" value="<? echo $la30; ?>" name="B1"></td>
</tr>
</table>
</form>
</div>

<?
} else {
/////Admin panel    
if ($page == ''){
$page = 1;
}
?>

<div class="content">
<h3><? echo $la27; ?> </h3> <br> 

<div id="entries">
</div>

<script language="Javascript" type="text/javascript">
ajax('POST','gb_adminview.php','page','1','<? echo $token; ?>');
</script>

<?
/////End Admin panel
}

if($username && $password){

if($username == $ausername && $password == $apassword){

$token = md5(uniqid(rand(), true));
$_SESSION['admin'] = $token;

?>
<meta http-equiv="refresh" content="0; url=gb_admin.php">
<script language="javascript">
window.location = "gb_admin.php";
</script>
<?

}else{
echo("<center>$la31 </center><br><br>");
}

}

if($action=="logout"){
session_destroy();
?>
<meta http-equiv="refresh" content="0; url=gb_admin.php">
<script language="javascript">
window.location = "gb_admin.php";
</script>
<?
///////////////////////////// Delete entries
}else if($action=="delmul"){

if($delentry != ''){
foreach ($delentry as $entry){
cutline($data_file,$entry);
}

?>
<meta http-equiv="refresh" content="1; url=gb_admin.php?page=<? echo $page; ?>">
<?
}
}

function scheck($value){
$value = strip_tags($value);
$value =  stripslashes($value);
$value = trim($value);

return $value;
}

function cutline($filename,$line_no=-1) {  
$strip_return=FALSE;  
$data=file($filename);  
$pipe=fopen($filename,'w');  
$size=count($data);  

if($line_no==-1) $skip=$size-1;  
else $skip=$line_no-1;  

for($line=0;$line<$size;$line++)
 
if($line!=$skip) { 
flock($pipe, LOCK_EX);
fputs($pipe,$data[$line]);  
flock($pipe, LOCK_UN);
}else{  
$strip_return=TRUE;
}  

fclose($pipe);
return $strip_return;

  
}  

?>
<br></div> </div>