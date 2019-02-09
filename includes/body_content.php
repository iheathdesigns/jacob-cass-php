<?php

// URL Parameter Check


$section = '-1'; //Set default value for $section

if(isset($_GET['section'])){
	$section = $_GET['section'];
}



/*

If > else if > else script



*/


if($section == '-1'){
//Include Home Page Content Here
	
	include('content/intro.php');
	
}else if($section == 'golden_section'){
//include golden_section intro page content here

	include('content/golden_section/golden_section_intro.php');

}else if($section == 'le_modular'){
//include le_modular intro page content here

	include('content/le_modular/le_modular_intro.php');

}else if($section == 'the_ken'){
//include the_ken intro page content here

	include('content/the_ken/the_ken_intro.php');

}else if($section == 'conclusion'){
//include conclusion page content here

	include('content/conclusion.php');

}else if($section == 'contact'){
//include contact page content here

	include('content/contact.php');

}else{
//include default page content here

	include('content/intro.php');
	
}



?>