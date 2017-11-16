<?php
/*
config.php

stores configuration for our web application

*/

//prevents header already sent errors
ob_start();

define('DEBUG',TRUE); #we want to see all errors

//prevents date errors
date_default_timezone_set('America/Los_Angeles');

//add include file references here:
include'credentials.php'; //database credentials
include'common.php';//favorite functions here

//create config object
$config = new stdClass;

//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));


//web page defaults
$config->title = THIS_PAGE;
$config->banner = 'Widgets';

switch(THIS_PAGE)
{
    case 'index.php':
        $config->title = "Home Page";
        $config->banner = "Sprockets Home Page";
    break;
        
    case 'appointment.php':
        $config->title = "Appointment Page";
    break;
        
    case 'contact.php':
        $config->title = "Contact Page";
    break;
        
}


