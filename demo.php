<?php

// client ip 
$_SERVER['REMOTE_ADDR'];

// client os and browsers 
$_SERVER['HTTP_USER_AGENT'];

// server ip
$_SERVER['SERVER_ADDR'];

// query string only
$_SERVER['QUERY_STRING'];

// request method
$_SERVER['REQUEST_METHOD'];

// the url only (without the domain)
$_SERVER['REQUEST_URI'];

// when was the request time
$_SERVER['REQUEST_TIME'];

// from where the client came from
if (isset($_SERVER['HTTP_REFERER'])) {
  $_SERVER['HTTP_REFERER'];
}
