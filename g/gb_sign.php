<?
#####################################
# hnGuestbook version 1.0.6
# http://www.hnscripts.com
#####################################
session_start();
include("gb_config.php"); 
$dosign = $_REQUEST['dosign'];
$pcode = md5($spam_protection_code);
$scheck = $pcode{0}.$pcode{2}.$pcode{4}.$pcode{1}.$pcode{5};

if($dosign == $scheck){

$page = $_REQUEST['page'];
$name = $_POST['name'];
$homepage = $_POST['homepage'];
$email = $_POST['email'];
$message = $_POST['message'];

$ip = $_SERVER['REMOTE_ADDR'];
$browser = getBrowser($_SERVER['HTTP_USER_AGENT']);
$stime = time();



if (trim($name) && trim($message)){

if ($flood_protection=="1"){
if (!isset($_SESSION['check'])) {
    $token = md5(uniqid(rand(), true));
	$_SESSION['check'] = $token;

} else {
    echo("$la21");
	exit;
}
}


if (!(file_exists($data_file))){ 
		fopen($data_file,"w");	
}


$message = scheck($message);
$name = scheck(trim($name));
$email = scheck(trim($email));
$homepage = scheck(trim($homepage));

$message = ereg_replace("\r", "", $message);
$message = ereg_replace("\n", "<br> ", $message);

$new_entry = $name."|".$homepage."|".$email."|".$message."|".$ip."|".$stime."|".$browser."\n";

$data=fopen($data_file,"a+");
flock($data, LOCK_EX);
fwrite($data,$new_entry);
flock($data, LOCK_UN);
fclose($data);
?>
<meta http-equiv="refresh" content="0; url=gb_redirect.swf?rurl=<? echo $script; ?>">

<SCRIPT LANGUAGE="JavaScript">
window.location="gb_redirect.swf?rurl=<? echo $script; ?>";
</script>

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=4,0,2,0" width="1"
height="1">
<param name="scale" value="exactfit">
<param name="loop" value="true">
<param name="movie" value="gb_redirect.swf?rurl=<? echo $script; ?>">
<param name="quality" value="best">
<param name="play" value="true">
<embed src="gb_redirect.swf?rurl=<? echo $script; ?>" type="application/x-shockwave-flash" width="1" height="1"
pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"
quality="best" play="true" loop="true" scale="exactfit">
</object>

<?
}else{
echo("$la22");
}


}else{//end dosign
echo("$la23");
}



function scheck($value){
global $bad_words;
$value = strip_tags($value);
$value =  stripslashes($value);
$value = ereg_replace("\|", "", $value);

if(trim($bad_words) != ''){
$filter = explode(',',$bad_words);
foreach ($filter as $badword){
$value = ereg_replace($badword," **** ",$value);
}
}

return $value;
}

//Get Browser Type Function by Daniel.
function getBrowser($userAgent) {
	$browsers = array(
		'Opera' => 'Opera',
		'Mozilla Firefox'=> '(Firebird)|(Firefox)', 
		'Galeon' => 'Galeon',
		'Mozilla'=>'Gecko',
		'MyIE'=>'MyIE',
		'Lynx' => 'Lynx',
		'Netscape' => '(Mozilla/4\.75)|(Netscape6)|(Mozilla/4\.08)|(Mozilla/4\.5)|(Mozilla/4\.6)|(Mozilla/4\.79)',
		'Konqueror'=>'Konqueror',
		'SearchBot' => '(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp/cat)|(msnbot)|(ia_archiver)',
		'Internet Explorer 7' => '(MSIE 7\.[0-9]+)',
		'Internet Explorer 6' => '(MSIE 6\.[0-9]+)',
		'Internet Explorer 5' => '(MSIE 5\.[0-9]+)',
		'Internet Explorer 4' => '(MSIE 4\.[0-9]+)',
	);

	foreach($browsers as $browser=>$pattern) { 
		if(eregi($pattern, $userAgent)) { 
			return $browser; 
		}
	}
	return 'Unknown'; 
}

?>