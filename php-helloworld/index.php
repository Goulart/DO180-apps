<?php
print "<h1>Hello, World!</h1>";
print "<p>php version is " . PHP_VERSION . "</p>\n";
$svrip = $_SERVER['REMOTE_ADDR'];
print "<p>Server IP=" . $srvip . "</p>\n";

print "<p>User agent (browser) IP=" . $_SERVER['HTTP_USER_AGENT'] . "</p>\n";

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
print "<p>Client IP=" . $ip . "</p>\n";

?>
