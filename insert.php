<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<head>

<meta name="description" content="The wedding site for Albert and Kendall's wedding - October 14th, 2007 at College Park First Presbyterian Church." >
<meta name="keywords" content="albert,kendall,albert and kendall wedding,orlando wedding,college park first presbyterian church,dubsdread golf course,october 14th 2007" >
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >

<title>Respond to your invitation for the wedding of Albert Volkman and Kendall Dupree</title>

<link href="/css/main.css" rel="stylesheet" type="text/css" media="screen">
<link href="/css/print.css" rel="stylesheet" type="text/css" media="print">
<link href="_inc/rss.xml" rel="alternate" type="application/rss+xml" >

<script type="text/javascript" src="_inc/slider.js"></script>
<script type="text/javascript" src="_inc/countdown.js"></script>
<script type="text/javascript" src="_inc/prototype.lite.js"></script>
<script type="text/javascript" src="_inc/moo.fx.js"></script>

<script type="text/javascript" src="_inc/guests.js"></script>

</head>

<body>

<div id="retainer">

	<div id="container">

		<div id="wrapper">

			<div id="left-column">

				<div id="nav">
                <ul>
                    <li><a href="/">Welcome</a></li>
                    <li><a href="/brideandgroom/">Bride &amp; Groom</a></li>
                    <li><a href="/engagement/">Engagement</a></li>
                    <li><a href="/arriving/">Arriving</a></li>
                    <li><a href="/hotel-information/">Hotel Information</a></li>
                    <li><a href="/registry/">Registry</a></li>
                    <li class="highlight"><a href="/contact/">Contact &amp; RSVP</a></li>
                    <li><a href="/photography/">Photography</a></li>
                    <li><a href="/honeymoon/">Honeymoon</a></li>
                </ul>
                
                </div>

			</div>

			<div id="middle-column">

				<div id="update">
                <h3>Recent Updates</h3>
                <?php include("_inc/updates.php"); ?>

                </div>

                <div id="update-control">
                <a href="javascript:void(0);"  onclick="ul.toggle();" name="top" >Updates</a>
                        
                </div>

				<div id="centerimage">	
                <img src="/img/rsvp.jpg" alt="" width="460" height="230" title="Albert Volkman and Kendall Dupree wedding">
                
                </div>

			    <div id="breadcrumb">
                <p><a href="/">Home</a> &#8250; <a href="/contact/">Contact &amp; RSVP</a> &#8250; RSVP</p>
                
                </div>
	
                <div id="content">
                
                <h1>RSVP</h1>
                <h2>Reply online to your invitation</h2>
                <p>
                <?php
include("rsvp/connect.php");

$name=$_POST['name'];
$email=$_POST['email'];
$status=$_POST['status'];
$guests=$_POST['guests'];
$guest1=$_POST['guest1'];
$guest2=$_POST['guest2'];
$guest3=$_POST['guest3'];
$guest4=$_POST['guest4'];

if (mysql_query("INSERT INTO rsvp VALUES('','$name','$email','$status', '$guests', '$guest1', '$guest2', '$guest3', '$guest4', NULL)")) {
  print "Thank you for your RSVP!";
}
else {
	  print "Failed to add";
}

?> 
				</p>
	
                </div>
	
                <div id="footer">	
                <a href="#top">Top of the page </a> | <a href="/sitemap.xml">Sitemap</a> | <a href="_inc/rss.xml">RSS</a> |  
                <a href="/arriving/">Only 
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
