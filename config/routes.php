<?php 
return array(
	
	'admin/course/delete/([A-Za-z0-9-]+)' => 'adminCourses/delete/$1',
	'admin/course/([A-Za-z0-9-]+)' => 'adminCourses/view/$1',
	'admin/add/course' => 'adminCourses/add',
	'admin/courses' => 'adminCourses/get',
	
	'main' => 'main/index',
	'login' => 'user/login',
	'admin' => 'admin/panel',
	'logout' => 'user/logout',

);
?>