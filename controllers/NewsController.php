<?php
class NewsController{

public function actionIndex(){
    require_once(ROOT.'/views/news/index.php');
}

public function actionView($category){
    echo $category;
}

}



?>