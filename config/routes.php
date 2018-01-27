<?php 
return array(
	'admin/specialty/delete/([A-Za-z0-9-]+)' => 'adminSpecialty/delete/$1',
	'admin/specialty/([A-Za-z0-9-]+)' => 'adminSpecialty/view/$1',
	'admin/add/specialty' => 'adminSpecialty/add',
	'admin/specialties' => 'adminSpecialty/get',
	
	'admin/subject/delete/([A-Za-z0-9-]+)' => 'adminSubject/delete/$1',
	'admin/subject/([A-Za-z0-9-]+)' => 'adminSubject/view/$1',
	'admin/add/subject' => 'adminSubject/add',
	'admin/subjects' => 'adminSubject/get',
	
	'admin/group/delete/([A-Za-z0-9-]+)' => 'adminGroups/delete/$1',
	'admin/group/([A-Za-z0-9-]+)' => 'adminGroups/view/$1',
	'admin/add/group' => 'adminGroups/add',
	'admin/groups' => 'adminGroups/get',
	
	'admin/stream/delete/([A-Za-z0-9-]+)' => 'adminStreams/delete/$1',
	'admin/stream/([A-Za-z0-9-]+)' => 'adminStreams/view/$1',
	'admin/add/stream' => 'adminStreams/add',
	'admin/streams' => 'adminStreams/get',
	
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