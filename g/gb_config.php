<?php
$script = "index.php";	//the filename of the guestbook
$data_file = "data.txt"; //The data file
$ip_file = "ip.txt";  //The IP file

$ausername = "albert"; 	//Your admin username
$apassword = "trebla"; 	//Your admin password

$messages_per_page = 10; //The number of entries display per page

$newest_on_top = 1; //1 = display the newest entries on top, 0 = oldest entries on top

$bad_words = "fuck, shit, bitch"; //filter out the bad words

$lang_file = "gb_english.php"; //Your language file

$flood_protection = "0";  //Flood protection, On = 1, Off = 0

$word_wrap = "70";  //The number of characters displaying per line

$disable_gb = "0"; //Disable the guestbook. 0 = No, 1 = Yes

$spam_protection_code = "please_change_this"; //This code will make it harder for spammers to spam your guestbook. You can change it to anything

//End Configuration
#######################################
include ($lang_file);
?>

