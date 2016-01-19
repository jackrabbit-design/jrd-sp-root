<?php
ini_set('display_errors', 'On');

$subject = $_GET['title'];
$desc = $_GET['excerpt'];
$start = $_GET['date'];
$loc = $_GET['loc'];

/**
 * This example shows you the basic was to use the invite feature
 * where you create and download the invite at the sametime.
 * 
 * Look at example2.php for a more advance usage method. 
 */

require "settings.php";

use IcsGenerator\Invite;

$invite = new Invite();
$invite
/*
	->setSubject($subject)
	->setDescription($desc)
	->setStart(new DateTime($start . ' 12:00 PM EST'))
	->setEnd(new DateTime($start))
	->setLocation($loc)
	->setOrganizer('','')
	->addAttendee('','');
*/

        ->setSubject("Test Demo Invite")
        ->setDescription("The is a test invite for you to see how this thing actually works") 
        ->setStart(new DateTime('2013-03-16 12:00AM EST'))
        ->setEnd(new DateTime('2013-03-16 11:59PM EST'))
        ->setLocation("Queens, New York")
        ->setOrganizer("john@doe.com", "John Doe")
        ->addAttendee("ahmad@ahmadamin.com", "Ahmad Amin");

$invite->download();

?>