<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Ameer's WEB120 Portal Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'aia.php':
        $title = "Ameer's AIA Page";
        $logo = 'fa-home';
        $PageID = 'Audience Issues and Approach';
    break;
        
    case 'flowchart.php':
        $title = "Ameer's Flowchart Page";
        $logo = 'fa-home';
        $PageID = 'Flowcharts';
    break;
    
    
    case 'contactme.php':
        $title = "Ameer's WEB120 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Ameer';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
   }

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Ameer";



/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}


?>