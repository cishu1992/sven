<?php 
function getPageUrl(){
	global $_SERVER;
	$array= explode('/',$_SERVER['REQUEST_URI']);
	$page=array_pop($array);
	$page=explode("?",$page);
	return $page[0];
}

function checkActivePage($page,$activator=" active "){
	global $menu;
	//if ($page=="index.php" && getPageUrl()=="") return " active ";
	if ($page==$menu[getPageUrl()]) return $activator;
}

function printMobileOptions(){
	global $mobileMenu;
	foreach ($mobileMenu as $key=>$value){
		echo "<option value='$key' ".checkActivePage($key," selected ")."> $value </option>";
	}
}
function getLanguageVersion($lang){
	return filemtime(dirname(__FILE__)."/../lang/$lang/LC_MESSAGES/messages.mo");
}

function checkProtection(){
	global $_SESSION;
	global $menu;

	if (isset($menu[getPageUrl()])){
		if (!isset($_SESSION['pid']) || !isset($_SESSION['id']) || !isset($_SESSION['level'])) {
			Redirect('enter.php?m=restricted');
			die();
		}
	}
	if (getPageUrl()=="enter.php" &&  (isset($_SESSION['pid']) && isset($_SESSION['id']) && isset($_SESSION['level']))) Redirect("index.php");
}
function Redirect($link,$timeout=0){
	if (!headers_sent()){
		 sleep($timeout/1000);
		 header('Location: '.$link);
   		 exit;
	} else {
		die("<script type='text/javascript'>setTimeout(function(){window.location='$link';},$timeout);</script>");
	}
}
function displayMessage(){
	global $message;
	global $_GET;
	if(isset($_GET['m']))
	if (isset($message[$_GET['m']])) {
		echo "<script> $.jGrowl('".$message[$_GET['m']]."'); </script>";
	}
}
function sendEmail($to,$subject,$template,$language,$array) {
	$getTemplate=file_get_contents(dirname(__FILE__)."/email_templates/$language"."_".$template.".html");
	foreach($array as $search=>$replace)
			$getTemplate = str_replace($search,$replace,$getTemplate);

	$headers = "From: " . "Punchwork <info@punchwork.com>" . "\r\n";
	$headers .= "Reply-To: ". "info@punchwork.com" . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	return mail($to, $subject, $getTemplate, $headers);
}


$mobileMenu['projects.php']= _('Projects');
$mobileMenu['costs.php'] = _('Costs');
$mobileMenu['people.php'] = _('People');
$mobileMenu['levels.php'] = _('Levels');
$mobileMenu['index.php'] = _('Conflicts');
$mobileMenu['reports.php']  =_('Reports');
$mobileMenu['settings.php'] = _('Settings');
$mobileMenu['php/post/log_out.php'] = _('Log out');


$menu [''] 						 = 'index.php';
$menu ['index.php'] 			 = 'index.php';

$menu ['people.php'] 			 = 'people.php';
	$menu['new_person.php'] 	 = 'people.php';
	$menu['person.php'] 		 = 'people.php';

$menu ['levels.php'] 			 = 'levels.php';
	$menu ['new_level.php']		 = 'levels.php';
	$menu ['edit_level.php']	 = 'levels.php';

$menu ['projects.php'] 			 = 'projects.php';
	$menu ['edit_project.php'] 	 = 'projects.php';
	$menu ['addnewproject.php']  = 'projects.php';

$menu ['reports.php'] 			 =	'reports.php';
	$menu['selected_report.php'] ='reports.php';
	$menu['generate_report.php'] ='reports.php';

$menu ['settings.php'] 			 = 'settings.php';
	$menu ['new_admin.php']		 = 'settings.php';
	$menu['admin.php']			 = 'settings.php';

$menu ['costs.php'] 			 = 'costs.php';
	$menu ['new_cost.php'] 			 = 'costs.php';
	$menu ['edit_cost.php'] 			 = 'costs.php';


$message['login_failed'] = _("Your username or password were wrong.");
$message['login_successful'] = _("You have successfully logged in.");
$message['log_out'] = _("You are now logged out.");
$message['restricted'] = _("You need to be logged in to access this page.");
$message['no_recover'] = _("No account associated with the email or the username provided was found. Please check again.");
$message['registered_successful']= _("You have registered successfully.");
$message['recover_instructions_sent'] = _("Instructions on how to recover your account have been sent to the email asociated with it.");
$message['recover_instructions_not_sent'] = _("An error has occured while trying to send you the email, please try again later.");
$message['recover_expired'] = _("The recover code has expired, please use the recovering tool again.");
$message['password_mismatch'] = _("Conirmation password does not match.");
$message['password_changed'] = _("You have successfully changed your password.");
?>