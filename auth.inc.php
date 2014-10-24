<?php
// There must be always an authentification, require this file in every public entrance

// Check if someone has already an active Session
// In this case we just use his User_id and Sessioninformation
session_start();
if(isset($_SESSION['user_id']) && preg_match('/^[0-9]+$/',$_SESSION['user_id']) {
	$_SESSION['webaccess'] = true;
} else {
	$_SESSION['webaccess'] = false;
}

// If there is no Session, check if he come with a Login-Hash
// Its not thaaaat secure, but fcking easy to use. 
// If someone come with a login-Hash remove all Permissions for this session but Player-Role, no Trainer, no Manager!

// Ok, u made it here? Already logged in with a valid user_id? Then make Database Connection
require_once('class/db.class.php');
$db = new db();

?>

