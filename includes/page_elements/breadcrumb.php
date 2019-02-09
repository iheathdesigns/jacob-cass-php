<?php

$section = '-1'; $sub = '-1';
if(isset($_GET['section'])){$section = $_GET['section'];}
if(isset($_GET['sub'])){$sub = $_GET['sub'];}

$base_url = '<a href="index.php">Proportioning Systems: Introduction</a>';
$separator = ' > ';

echo $base_url; //1st breadcrumb link

if($sub != '-1'){
	
	echo $separator;
	
	echo '<a href="index.php?section='.$section.'&amp;sub=intro">'.$section.'</a>';//2nd breadcrumb link
	
	if($sub !='intro'){//3rd breadcrumb link
	
	echo $separator;
	
	echo '<a href="index.php?section='.$section.'&amp;sub='.$sub.'">'.$sub.'</a>';
	
	}
	
}


if($section == 'conclusion' || $section == 'contact'){// 2nd link w/o a sub URL param
	echo $separator;
	echo '<a href="index.php?section='.$section.'">'.$section.'</a>';
}

if($section == 'conclusion' || $section == 'contact'){
	echo $separator;
	echo '<a href="index.php?section='.$section.'">'.$section.'</a>';
}















?>