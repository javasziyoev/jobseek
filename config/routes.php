<?php
return array(

	//user
	
    'user/signup' => 'user/signup',
	'user/signin' => 'user/signin',
	'user/details' => 'user/details',
	'user/details/[0-9]+)'=>'user/details',
	'employer/post_a_vacancy' =>'vacancy/vacancy',
	'vacancy/details' => 'vacancy/details', 
	'vacancy/details/([0-9]+)' => 'vacancy/details', 
	'vacancy/all'=>'vacancy/all',
	'vacancy/all/([0-9]+)'=>'vacancy/all',	
	'tag/([0-9]+)' => 'tag/index/$1',
	'cabinet/([0-1])' => 'cabinet/index/$1',
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
	'companies/page-([0-9]+)'=>'company/AllComp/$1',
	'province/([0-9]+)/page-([0-9]+)'=>'vacancy/province/$1/$2',
	'tag/all'=>'tag/all',
	'employer/cv' => 'user/premium',
	);
?>