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
	
	'admin/stype/delete/([A-Za-z0-9-]+)' => 'adminStype/delete/$1',
	'admin/stype/([A-Za-z0-9-]+)' => 'adminStype/view/$1',
	'admin/add/stype' => 'adminStype/add',
	'admin/stypes' => 'adminStype/get',
	
	'admin/rank/delete/([A-Za-z0-9-]+)' => 'adminRank/delete/$1',
	'admin/rank/([A-Za-z0-9-]+)' => 'adminRank/view/$1',
	'admin/add/rank' => 'adminRank/add',
	'admin/ranks' => 'adminRank/get',
	
	'admin/group/delete/([A-Za-z0-9-]+)' => 'adminGroups/delete/$1',
	'admin/group/([A-Za-z0-9-]+)' => 'adminGroups/view/$1',
	'admin/add/group' => 'adminGroups/add',
	'admin/groups' => 'adminGroups/get',
	
	'admin/stream/delete/([A-Za-z0-9-]+)' => 'adminStreams/delete/$1',
	'admin/stream/([A-Za-z0-9-]+)' => 'adminStreams/view/$1',
	'admin/add/stream' => 'adminStreams/add',
	'admin/streams' => 'adminStreams/get',

	'admin/room/delete/([A-Za-z0-9-]+)' => 'adminRoom/delete/$1',
	'admin/room/([A-Za-z0-9-]+)' => 'adminRoom/view/$1',
	'admin/add/room' => 'adminRoom/add',
	'admin/rooms' => 'adminRoom/get',
	
	'admin/course/delete/([A-Za-z0-9-]+)' => 'adminCourses/delete/$1',
	'admin/course/([A-Za-z0-9-]+)' => 'adminCourses/view/$1',
	'admin/add/course' => 'adminCourses/add',
	'admin/courses' => 'adminCourses/get',
	
	'admin/teacher/delete/([A-Za-z0-9-]+)' => 'adminTeachers/delete/$1',
	'admin/teacher/([A-Za-z0-9-]+)' => 'adminTeachers/view/$1',
	'admin/add/teacher' => 'adminTeachers/add',
	'admin/teachers' => 'adminTeachers/get',
	
	
	'main' => 'main/index',
	'login' => 'user/login',
	'admin' => 'admin/panel',
	'logout' => 'user/logout',

);
?>