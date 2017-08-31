<?php
return array(

	//user
	
    'user/signup' => 'user/signup',
	'user/signin' => 'user/signin',
	'employer/post_a_vacancy' =>'vacancy/vacancy',
	'vacancy/details' => 'vacancy/details', 
	'vacancy/details/([0-9]+)' => 'vacancy/details', 
	'vacancy/all'=>'vacancy/all',
	'vacancy/all/([0-9]+)'=>'vacancy/all',	
	'tag' => 'tag/index',
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
	'index.php' => 'site/index', // actionIndex в SiteController
	'index' => 'site/index',
	'site/agreement'=>'site/agreement',
	'' => 'site/index',
	'search/q=([a-zA-Z]+)/([a-zA-Z]+)/page-([0-9]+)' => 'search/search/$1/$2/$3',
	'search/direct' => 'search/direct',
	'companies/([0-9]+)'=>'company/AllComp',
	);
?>