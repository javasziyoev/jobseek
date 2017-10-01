<?php
require_once(ROOT. '/components/Pagination.php');
class NewsController{

public function actionIndex($page){
  
    // bottom navigator
    $k = News::getAmount();
    $k = $k['COUNT(*)'];
    //get news from BD
    $res = News::getNews($page,10);
    $pagination = new Pagination($k,$page,10,'page-');
    ///
    require_once(ROOT.'/views/news/index.php');
    
}

public function actionView($col){
    $c = News::getView($col);
    require_once(ROOT. '/views/news/newsevent.php');
}




}



?>