<?php
return array(

	//user
	'index' => 'site/index',
    'user/signup' => 'user/signup',
	'user/signin' => 'user/signin',
	'employer/post_a_vacancy' =>'vacancy/vacancy',
	'vacancy/details' => 'vacancy/details', 
	'vacancy/details/([0-9]+)' => 'vacancy/details', 
	
	'tag'=>'tag/index',
	'tag/([0-9]+)' => 'tag/index',
	'cabinet' => 'cabinet/index',
	'cabinet/favorite' => 'cabinet/favorite',
	'user/logout' => 'user/logout',
	'help/writeus' => 'help/writeus',
	'panel/moder' => 'panel/moder',
	'panel/admin' => 'panel/admin',
	'panel/applicant' => 'panel/applicant',
	'news/page-([0-9]+)' => 'news/index/$1',
	'news/view/([0-9]+)' => 'news/view/$1',
	
	);