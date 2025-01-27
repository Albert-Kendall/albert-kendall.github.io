<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<head>

<meta name="description" content="The wedding site for Albert and Kendall's wedding - October 14th, 2007 at College Park First Presbyterian Church." >
<meta name="keywords" content="albert,kendall,albert and kendall wedding,orlando wedding,college park first presbyterian church,dubsdread golf course,october 14th 2007" >
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >

<title>Arriving at Albert Volkman and Kendall Duprees wedding</title>

<link href="_css/main.css" rel="stylesheet" type="text/css" media="screen">
<link href="_css/print.css" rel="stylesheet" type="text/css" media="print">
<link href="_inc/rss.xml" rel="alternate" type="application/rss+xml" >

<script type="text/javascript" src="_inc/slider.js"></script>
<script type="text/javascript" src="_inc/countdown.js"></script>
<script type="text/javascript" src="_inc/prototype.lite.js"></script>
<script type="text/javascript" src="_inc/moo.fx.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=ABQIAAAAo3WovsOMwM0xd_3cVse3xBSPmSYmkbP7yMgZfWn_6-CnCZgEKxS-twyB1ZxBNQzDbrnbC1gsNo2szg"></script>

</head>

<body onunload="GUnload()">

<div id="retainer">

    <div id="container">

        <div id="wrapper">

            <div id="left-column">

                <div id="nav">
                
                <ul>
                    <li><a href="index.php">Welcome</a></li>
                    <li><a href="brideandgroom.php">Bride &amp; Groom</a></li>
                    <li><a href="engagement.php">Engagement</a></li>
                    <li class="highlight"><a href="arriving.php">Arriving</a></li>
                    <li><a href="hotel-information.php">Hotel Information</a></li>
                    <li><a href="registry.php">Registry</a></li>
                    <li><a href="contact.php">Contact &amp; RSVP</a></li>
                    <li><a href="photography.php">Photography</a></li>
                    <li><a href="honeymoon.php">Honeymoon</a></li>
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

                    <div id="map" style="width: 460px; height: 230px;">
                
                    
                </div>

            </div>
            <div id="breadcrumb">
            <p><a href="index.php">Home</a> &#8250; Arriving</p>

            </div>
            
            <div id="see-also">
            <p><span>See Also:</span> <a href="hotel-information.php">Hotel Information</a></p>
            
            </div>

	
            <div id="content">
            <h1>Arriving</h1>
            <h2>To the <a href="hotel-information.php">Embassy Suites Hotel</a></h2>
            <p class="hub"><strong>From the Orlando International Airport</strong><br >
            Take Semoran Blvd (436) north<br >
            Take 408 going west (Toll Rd) toward Downtown Orlando<br >
            Exit onto I-4 and head east toward Daytona Beach<br >
            Take the 436 exit #92 and turn right<br >
            Make U-Turn at S North Lake Blvd<br >
            Turn right at Shorecrest Dr</p>
            <p class="hub"><strong>From the Orlando Sanford International Airport</strong><br >
            Turn right onto E. Lake Mary Blvd. <br >
            Take I-4 westbound toward Downtown Orlando<br >
            Take the 436 exit #92 and turn left<br >
            Make U-Turn at S North Lake Blvd<br >
            Turn right at Shorecrest Dr</p>
            <h2>To <a href="http://collegeparkpres.org" target="_blank">College Park Presbyterian Church</a></h2>
            <p class="hub"><strong>From Altamonte Springs (I-4 West-bound)</strong><br >
            Take Fairbanks exit #87 and turn left<br >
            Turn right at Formosa<br >
            Church will be on the left<br >
            at the intersection of Formosa and Par</p>
            <p class="hub"><strong>From Downtown (I-4 East bound)</strong><br >
            Take Par exit #86 and turn left<br >
            Church will be on the left<br >
            at the intersection of Formosa and Par</p>
            <h2>To <a href="http://www.taproomatdubsdread.com" target="_blank">The Tap Room at Dubsdread</a></h2>
            <p class="hub">From College Park Presbyterian Church<br >
            Turn left onto Par<br >
            Reception site will be about 1 mile on the right</p>
 
            </div>
	
			<div id="footer">	
			<a href="#top">Top of the page </a> | <a href="sitemap.htm">Sitemap</a> | <a href="_inc/rss.xml">RSS</a> |  
            <a href="arriving.php">Only 
            <script type="text/javascript">document.write(daysLeft);</script> days to go!</a>
            <p>Copyright &copy; 2007 Albert Volkman &amp; Kendall Dupree.</p>
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

    <script type="text/javascript">
    //<![CDATA[

    if (GBrowserIsCompatible()) {
		var map = new GMap2(document.getElementById("map"));
		map.setCenter(new GLatLng(28.583221596430377, -81.38287782669067), 15);
		map.addControl(new GSmallMapControl());
		map.addControl(new GMapTypeControl());
		
		var icon = new GIcon();
		icon.image = "http://www.google.com/intl/en_us/mapfiles/kml/shapes/church_maps.png";
		icon.iconAnchor = new GPoint(6, 20);
		icon.infoWindowAnchor = new GPoint(5, 1);
		
		var point = new GLatLng(28.581991, -81.377009);
		map.addOverlay(new GMarker(point, icon));
		
		var icon = new GIcon();
		icon.image = "_img/reception.png";
		icon.iconAnchor = new GPoint(6, 20);
		icon.infoWindowAnchor = new GPoint(5, 1);
		
		var point = new GLatLng(28.582784, -81.387281);
		map.addOverlay(new GMarker(point, icon));
//]]>
}
    else {
      alert("Sorry, the Google Maps API is not compatible with this browser");
    }
    </script>
</html>