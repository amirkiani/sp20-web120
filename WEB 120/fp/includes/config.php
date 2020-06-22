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
        $title = "FP- Raja Executive Fitness";
        $logo = 'fa-bank';
        $PageID = 'Raja Executive Fitness';
    break;
        
    case 'contact.php':
        $title = "Contact Us";
        $logo = 'fa-home';
        $PageID = 'Contact Us';
    break;
        
    case 'learnmore.php':
        $title = "Learn More";
        $logo = 'fa-home';
        $PageID = 'Learn More';
    break;
    
    case 'blog.php':
        $title = "Blog";
        $logo = 'fa-home';
        $PageID = 'Blog';
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
