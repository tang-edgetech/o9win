<?php
$localhost = array('127,0,0,1', 'localhost', '::1');
if ( !in_array( $_SERVER['REMOTE_ADDR'], $localhost ) ) {
    $site_base_url = 'https://o9win.org/';
}
else {
    $site_base_url = 'http://localhost/o9win/';
}
$site_title = 'LPK777';
if( !empty($page_name) ) {
    $page_prefix = $page_name . ' | ';
}
else {
    $page_prefix = '';
}
$page_title = $page_prefix.' '.$site_title;
$page_url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$version = '1.0.'.time();
?>