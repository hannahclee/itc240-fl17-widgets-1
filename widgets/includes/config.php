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

//START NEW THEME STUFF
$sub_folder = 'widgets';//change to 'widgets' or 'sprockets' etc.

//add subfolder, in this case 'fidgets' if not loaded to root:
$config->physical_path = $_SERVER["DOCUMENT_ROOT"] . '/' . $sub_folder;
$config->virtual_path = 'http://' . $_SERVER["HTTP_HOST"] . '/' . $sub_folder;
$config->theme = 'BusinessCasual';//sub folder to themes

//END NEW THEME STUFF
//web page defaults
$config->title = THIS_PAGE;
$config->banner = 'Widgets';


switch(THIS_PAGE)
{
    case 'index.php':
        $config->title = "Home Page";
        $config->banner = "Widgets Home Page";
    break;
        
    case 'appointment.php':
        $config->title = "Appointment Page";
    break;
        
    case 'contact.php':
        $config->title = "Contact Page";
    break; 
    
    case 'books_list.php':
        $config->title = "Books Page";
    break;    
    
    case 'books_view.php':
        $config->title = "Books View Page";
    break;  
        
    case 'daily.php':
        $config->title = "Daily Page";
    break; 
        
        
}
if(isset($_GET['day']))
{//from the querystring
    $day = $_GET['day'];
    
    
    
}else{//from the system clock
    $day = date('l');
}

//$day = date('l');


switch($day){
    case 'Sunday':
        $song = 'Yer So Bad by Tom Petty';
        $image = 'yer-so-bad.jpg';
        $color = '#E82C0C';
        $description = '
        Perfect to listen to while cooking up something delicious!
        
        ';
        $alt = 'Tom Petty';
        
     break;
       
        
    case 'Monday':
        $song = 'Blue by Joni Mitchell';
        $image = 'blue.jpg';
        $color = '#203F57';
        $description = '
        A great song to lament starting the work week!
        
        ';
        $alt = 'Joni Mitchell';
    
     break;
        
    case 'Tuesday':
        $song = 'Locomotive Breath by Jethro Tull!';
        $image = 'jethro.jpg';
        $color = '#8B280E';
        $description = '
        A classic track to practice your air piano!
        
        ';
        $alt = 'Jethro Tull';
    
        
     break;
          
    case 'Wednesday':
        $song = 'Hounds of Love by Kate Bush';
        $image = 'kate-bush.jpg';
        $color = '#DCA7C8'; 
        $description = '
        Great for a night of making art or interpretive dancing!
        
        ';
        $alt = 'Kate Bush';
        
     break;
        
    case 'Thursday':
        $song = 'Kathy\'s Song by Simon and Garfunkle';
        $image = 'simon.jpg';
        $color = '#D4DBD4';
        $description = '
        A beautiful song for a calm evening with a puzzel and a cup of tea!
        
        ';
        $alt = 'Simon and Garfunkle';

       
     break;
        
    case 'Friday':
        $song = 'Let the Good Times Roll by The Cars';
        $image = 'cars.jpg';
        $color = '#47488C';
        $description = '
        A dynamite track to get geared up for the weekend!
        
        ';
        $alt = 'The Cars';
    
        break;
        
    case 'Saturday':
        $song = 'Today by Jefferson Airplane';
        $image = 'today.jpg';
        $color = '#F4C7CC';
        $description = '
        A sultry track to help you move about your kitchen to make coffee!
        
        ';
        $alt = 'Jefferson Airplane';

    break;
        
    default:
        $song = 'Yer So Bad by Tom Petty';
        $image = 'yer-so-bad.jpg';
        $color = '#E82C0C';
        $description = '
        Perfect to listen to while cooking up something delicious!
        
        ';
        $alt = 'Tom Petty';
}




//START NEW THEME STUFF
//creates theme virtual path for theme assets, JS, CSS, images
$config->theme_virtual = $config->virtual_path . '/themes/' . $config->theme . '/';
//END NEW THEME STUFF

?>


