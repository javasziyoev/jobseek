<?php
include_once(ROOT. '/models/news.php');
class NewsController{

public function actionIndex($page){
   
    // bottom navigator
    $k = News::getAmount();
    $cubes = 8;
    $e = floor($k['COUNT(*)'] / $cubes) + 1;
    //get news from BD
    $res = News::getNews($page,$cubes);
    ///
    require_once(ROOT.'/views/news/index.php');
    return $res;
}

public function actionView($col){
    $cubes = 8;
   
    require_once(ROOT. '/views/news/newsevent.php');
}

public function actionCategory()
{


   
}


}



?>