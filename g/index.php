<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<head>

<meta name="description" content="The wedding site for Albert and Kendall's wedding - October 14th, 2007 at College Park First Presbyterian Church." >
<meta name="keywords" content="albert,kendall,albert and kendall wedding,orlando wedding,college park first presbyterian church,dubsdread golf course,october 14th 2007" >
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" >

<title>Guest Book for Albert Volkman and Kendall Dupree</title>

<link href="../_css/guest.css" rel="stylesheet" type="text/css" media="screen">
<link href="../_css/main.css" rel="stylesheet" type="text/css" media="screen">
<link href="../_css/print.css" rel="stylesheet" type="text/css" media="print">
<link href="../_inc/rss.xml" rel="alternate" type="application/rss+xml" >

<script type="text/javascript" src="../_inc/slider.js"></script>
<script type="text/javascript" src="../_inc/countdown.js"></script>
<script type="text/javascript" src="../_inc/prototype.lite.js"></script>
<script type="text/javascript" src="../_inc/moo.fx.js"></script>

<?php
include("gb_config.php");
//Check for banned IP
if (!(file_exists($ip_file))){ 
fopen($ip_file,"w") or die("Can't open the file $ip_file");;
$data=file($ip_file);	
}else{
fopen($ip_file,"r");
$data=file($ip_file);	
}
$userIP=$_SERVER['REMOTE_ADDR']; 
for ($i=0; $i<sizeof($data); $i++){
$bannedIP = trim($data[$i]);
if ($bannedIP == $userIP){
echo("<h3>$la34</h3>");
return 0;
}
} //end for
	 
?>
<script language="javascript" type="text/javascript">var loadtext = '<? echo $la32; ?>';</script>
<script language="javascript" src="gb_ajax.js" type="text/javascript"></script>
<?
$token = md5(uniqid(rand(), true));
$pcode = md5($spam_protection_code);
if($disable_gb=="1"){
echo ("<center><br><br><br><br><br><br><b>$la33</b><br><br><br><br><br><br></center>");
exit;
}
?>

</head>

<body>

<div id="retainer">

	<div id="container">

		<div id="wrapper">

			<div id="left-column">

				<div id="nav">
                <ul>
                    <li><a href="../index.php">Welcome</a></li>
                    <li><a href="../brideandgroom.php">Bride &amp; Groom</a></li>
                    <li><a href="../engagement.php">Engagement</a></li>
                    <li><a href="../arriving.php">Arriving</a></li>
                    <li><a href="../hotel-information.php">Hotel Information</a></li>
                    <li><a href="../registry.php">Registry</a></li>
                    <li class="highlight"><a href="../contact.php">Contact &amp; RSVP</a></li>
                    <li><a href="../photography.php">Photography</a></li>
                    <li><a href="../honeymoon.php">Honeymoon</a></li>
                </ul>
                
                </div>

			</div>

			<div id="middle-column">

				<div id="update">
                <h3>Recent Updates</h3>
                <?php include("../_inc/updates.php"); ?>

                </div>
                
                <div id="update-control">
                <a href="javascript:void(0);"  onclick="ul.toggle();" name="top" >Updates</a>
                        
                </div>

                <div id="centerimage">
                <img src="../_img/savethedate.jpg" alt="" width="460" height="230" title="">
                
                </div>
    
                <div id="breadcrumb">
                <p><a href="../index.php">Home</a> &#8250; <a href="../contact.php">Contact &amp; RSVP</a> &#8250; Guest Book
                
                </div>
                
                <div id="see-also">
                <p><span>See Also:</span> <a href="../contactlist.php">Contact List</a>
                
                </div>
                
                <div id="content">
                <h1>Guest Book</h1>
                <h2>Please feel free to read the comments below.</h2>
                <p><a href="gb_admin.php">Login</a>
<div id="signform" style="display:none;">
<font size="1"><? echo $la17; ?>.</font>
<br>

<form name="signgb" action="gb_sign.php">
<table border="0" cellpadding="0" cellspacing="2" width="400px" id="table1">
<tr>
<td valign="top"><? echo $la11; ?>: *</td>
<td valign="top"><input type="text" name="name" size="60"></td>
</tr>
<tr>
<td valign="top"><? echo $la12; ?>:</td>
<td valign="top"><input type="text" name="email" size="60"></td>
</tr>
<tr>
<td valign="top"><? echo $la13; ?>:</td>
<td valign="top"><input type="text" name="homepage" size="60" value="http://"></td>
</tr>
<tr>
<td valign="top"><? echo $la14; ?>: *</td>
<td valign="top"><textarea rows="5" name="message" cols="35" style="width:301px"></textarea><br>
</tr>
<tr>
<td valign="top">&nbsp;</td>
<td valign="top">&nbsp;</td>
</tr>
<tr>
<td valign="top">&nbsp;</td>
<td valign="top"><input type="button" value="<? echo $la18; ?>" name="signbutton" onClick="javascript:ajax('POST','gb_sign.php','action','signgb');"> <input type="reset" value="<? echo $la19; ?>" name="B2"> <input type="button" value="<? echo $la20; ?>" name="" onClick="javascript:hidediv('signform');"></td>
</tr>
</table>
</form>

<br><div id="signdiv">
</div>

<br>	

</div> <!-- end hiddend sign form -->

<div id="entries"> 
</div>

<script language="Javascript" type="text/javascript">
var pcode = '<? echo $pcode; ?>';
ajax('POST','gb_view.php','page','1','<? echo $token; ?>');
</script>



    
                </div>
    
                <div id="footer">
                <a href="#top">Top of the page </a> | <a href="../sitemap.htm">Sitemap</a> | <a href="../_inc/rss.xml">RSS</a> |
                <a href="../arriving.php">Only
                <script type="text/javascript">document.write(daysLeft);</script> days to go!</a>
                <p>Copyright &copy; 2007 Albert Volkman &amp; Kendall Dupree.
                </div>
    
            </div>
    
        </div>

    </div>

</div>

</body>

</html>