<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

$siteKey = "6LdHpPEUAAAAAAUQzdB-E83AUc0HL9Xa3cD0eavx";
$secretKey = "6LdHpPEUAAAAAHbw34zZhgNjCBtyADxneAqxku45";

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);


define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Web Dev Examples by Ameer Kiani";
        $logo = 'fa-bank';
        $PageID = 'Client Questionnaire';
    break;
        
    case 'flexbox.php':
        $title = "Flexbox Research";
        $logo = 'fa-home';
        $PageID = 'Flexbox Research';
    break;
        
    case 'galleries.php':
        $title = "Lightbox Gallery";
        $logo = 'fa-home';
        $PageID = 'Galleries';
    break;
    
    case 'map.php':
        $title = "Map to Seattle Central";
        $logo = 'fa-home';
        $PageID = 'Map to Seattle Central';
    break;

    case 'calendar.php':
        $title = "Calendar";
        $logo = 'fa-home';
        $PageID = 'Calendar';
    break;


    case 'shoppingcarts.php':
        $title = "Shopping Carts";
        $logo = 'fa-home';
        $PageID = 'Shopping Carts';
    break;

    case 'siteapp.php':
        $title = "Site vs. App";
        $logo = 'fa-home';
        $PageID = 'Site vs. App';
    break;

    case 'webcam.php':
        $title = "Webcam";
        $logo = 'fa-home';
        $PageID = 'Webcam';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
   }


//place URL & labels in the array here for navigation:



/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
