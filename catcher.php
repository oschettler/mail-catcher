#!/usr/bin/php
<?php

ini_set('date.timezone', 'Europe/Berlin');

# create a filename for the emlx file
list($ms, $time) = explode(' ', microtime());
$filename = dirname(__FILE__).'/'.date('Y-m-d h.i.s,', $time).substr($ms,2,3).'.emlx';

# write the email contents to the file
$email_contents = fopen('php://stdin', 'r');
$fstat = fstat($email_contents);
file_put_contents($filename, $fstat['size']."\n");
file_put_contents($filename, $email_contents, FILE_APPEND);

# open up the emlx file (using Apple Mail)
exec('open '.escapeshellarg($filename));
