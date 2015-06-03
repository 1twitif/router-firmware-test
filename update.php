<?php
error_reporting(0);
if($_REQUEST['admin']!='yesIam') die();
error_reporting(E_ALL);
echo 'Begin Update...';
if(!file_exists('WNDR3700')) exec('ln -s ./ WNDR3700');

echo exec('cvs -f -d :pserver:nobody@gamma.nu:/root checkout WNDR3700/  2> ./logErr.txt 1> ./log.txt')
	.'<table width="100%"><tr><td width="50%" valign="top"><pre>'.file_get_contents('log.txt')
	.'</pre></td><td width="50%" valign="top"><pre>'.file_get_contents('logErr.txt')
	.'</pre></td></tr></table>';
phpinfo();