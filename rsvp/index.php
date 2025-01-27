<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<head>

<meta name="description" content="The wedding site for Albert and Kendall's wedding - October 14th, 2007 at College Park First Presbyterian Church." >
<meta name="keywords" content="albert,kendall,albert and kendall wedding,orlando wedding,college park first presbyterian church,dubsdread golf course,october 14th 2007" >
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >

<title>RSVP Manager for Albert Volkman and Kendall Dupree</title>

<link href="../_css/main.css" rel="stylesheet" type="text/css" media="screen" >
<link href="../_css/print.css" rel="stylesheet" type="text/css" media="print" >
<link href="../_inc/rss.xml" rel="alternate" type="application/rss+xml" >

<script type="text/javascript" src="../_inc/slider.js"></script>
<script type="text/javascript" src="../_inc/countdown.js"></script>
<script type="text/javascript" src="../_inc/prototype.lite.js"></script>
<script type="text/javascript" src="../_inc/moo.fx.js"></script>

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
                <img src="../_img/rsvp.jpg" alt="" width="460" height="230" title="">
                
                </div>

                <div id="breadcrumb">
                <p><a href="../index.php">Home</a> &#8250; <a href="../contact.php">Contact &amp; RSVP</a> &#8250; <a href="../rsvp.php">RSVP</a> &#8250; RSVP Manager</p>
            
                </div>
	
                <div id="content">
                
                <h1>RSVP Manager</h1>
                <h2>See who's coming.</h2>
                <a href="index.php">View RSVPs</a> | <a href="regrets.php">View Regrets</a>
<table id="list" cellspacing="0">

	<tr>
		<th>Date</th>
        <th>Name</th>
		<th>E-Mail</th>
        <th>Guests</th>
		<th>Manage</th>
	</tr>
<?php

include('connect.php');

$query = "SELECT * FROM rsvp WHERE status='Yes'";
$result = mysql_query($query);

$num = mysql_numrows($result);


$i = 0;
while ($i < $num) {
	$id = mysql_result($result,$i, "id");
	$name = mysql_result($result,$i, "name");
	$email = mysql_result($result,$i, "email");
	$status = mysql_result($result,$i, "status");
	$guests = mysql_result($result,$i, "guests");
	$date = mysql_result($result,$i, "date");

	$date2 = strtotime($date);
	$date3 = date('n-d-Y',$date2);

	echo "<tr><td>$date3</td><td>$name</td><td>$email</td><td>$guests</td><td nowrap=\"nowrap\"><a href=\"view.php?id=$id\">View</a></td></tr>";
	$i++;
}

?>

</table>                
	

                </div>
	
				<div id="footer">	
                <a href="#top">Top of the page </a> | <a href="../sitemap.htm">Sitemap</a> | <a href="../_inc/rss.xml">RSS</a> |  
                <a href="day.php">Only 
                <script type="text/javascript">document.write(daysLeft);</script> days to go!</a>
                <p>Copyright &copy; 2007 Albert Volkman &amp; Kendall Dupree.</p>

                </div>
	
			</div>

		</div>

	</div>

</div>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-319559-5";
urchinTracker();
</script>

</body>

</html>