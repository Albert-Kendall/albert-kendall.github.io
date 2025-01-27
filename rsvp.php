<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<head>

<meta name="description" content="The wedding site for Albert and Kendall's wedding - October 14th, 2007 at College Park First Presbyterian Church." >
<meta name="keywords" content="albert,kendall,albert and kendall wedding,orlando wedding,college park first presbyterian church,dubsdread golf course,october 14th 2007" >
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >

<title>Respond to your invitation for the wedding of Albert Volkman and Kendall Dupree</title>

<link href="_css/main.css" rel="stylesheet" type="text/css" media="screen">
<link href="_css/print.css" rel="stylesheet" type="text/css" media="print">
<link href="_inc/rss.xml" rel="alternate" type="application/rss+xml" >

<script type="text/javascript" src="_inc/slider.js"></script>
<script type="text/javascript" src="_inc/countdown.js"></script>
<script type="text/javascript" src="_inc/prototype.lite.js"></script>
<script type="text/javascript" src="_inc/moo.fx.js"></script>

</head>

<body>

<div id="retainer">

	<div id="container">

		<div id="wrapper">

			<div id="left-column">

				<div id="nav">
                <ul>
                    <li><a href="index.php">Welcome</a></li>
                    <li><a href="brideandgroom.php">Bride &amp; Groom</a></li>
                    <li><a href="engagement.php">Engagement</a></li>
                    <li><a href="arriving.php">Arriving</a></li>
                    <li><a href="hotel-information.php">Hotel Information</a></li>
                    <li><a href="registry.php">Registry</a></li>
                    <li class="highlight"><a href="contact.php">Contact &amp; RSVP</a></li>
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
                <img src="_img/rsvp.jpg" alt="" width="460" height="230" title="Albert Volkman and Kendall Dupree wedding">
                
                </div>

			    <div id="breadcrumb">
                <p><a href="index.php">Home</a> &#8250; <a href="contact.php">Contact &amp; RSVP</a> &#8250; RSVP</p>
                
                </div>
	
                <div id="content">
                
                <h1>RSVP</h1>
                <h2>Reply online to your invitation</h2>
				<form action="insert.php" method="post" name="rsvp">
					<table>
						<tr>
							<td>Your Name:</td>
							<td><input name="name" type="text" size="25" maxlength="90" value="" ></td>
						</tr>
						<tr>
							<td>Your E-mail:</td>
							<td><input name="email" type="text" size="25" maxlength="90" value="" ></td>
						</tr>
						<tr>
							<td>Will you be attending?</td>
							<td>
                            <input name="status" type="radio" value="Yes" checked="checked" >Yes
                            <input name="status" type="radio" value="No" >No
                            </td>
						</tr>
                        <tr>
                            <td>Number of guests:</td>
                            <td>
                            <select name="guests">
                                <option value="-1">Select number of guests</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            </td>
                        </tr>

						<tr>
							<td>Guest's Names:</td>
							<td><input name="guest1" type="text" size="25" maxlength="90" value="" ></td>
                        </tr>
						<tr>
							<td>&nbsp;</td>
							<td><input name="guest2" type="text" size="25" maxlength="90" value="" ></td>
                        </tr>
						<tr>
							<td>&nbsp;</td>
							<td><input name="guest3" type="text" size="25" maxlength="90" value="" ></td>
                        </tr>
						<tr>
							<td>&nbsp;</td>
							<td><input name="guest4" type="text" size="25" maxlength="90" value="" ></td>
                        </tr>
                        <tr>
							<td>&nbsp;</td>
							<td><input name="process_rsvp" type="submit" value="Submit RSVP" ></td>
						</tr>
						</table>
					</form>
	
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

</div>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-319559-5";
urchinTracker();
</script>

</body>

</html>