<?php
$section = '-1'; $sub = '-1';
if(isset($_GET['section'])){$section = $_GET['section'];}
if(isset($_GET['sub'])){$sub = $_GET['sub'];}


switch($section){
	
	case 'golden_section': $sec_title = 'Golden Section'; break;
	case 'le_modular': $sec_title = 'Le Modular'; break;
	case 'the_ken': $sec_title = 'The Ken'; break;
	case 'conclusion': $sec_title = 'Conclusion'; break;
	case 'contact': $sec_title = 'Contact'; break;
	default: $sec_title = 'Introduction'; break;
}

$site_title = 'Proportioning Systems';
$title_separator = ': ';

echo $site_title . $title_separator . $sec_title;

if(isset($_GET['sub'])){
	
	echo $title_separator . $sub;

}

?>


