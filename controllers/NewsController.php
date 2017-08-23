<?php

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
    
}

public function actionView($col){
    $c = News::getView($col);
    print_r($c[0][1]);
    require_once(ROOT. '/views/news/newsevent.php');
}




}



?>