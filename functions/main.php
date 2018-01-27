<?php 
foreach(glob(DIRNAME.'model/*.php') as $file) {require_once($file);}
foreach(glob(DIRNAME.'components/*.php') as $file) {require_once($file);}

function uri(){
	echo 'http://hackanight/';
}
function page404(){
	include_once(DIRNAME.'view/page404.php');
	exit;
}
?>