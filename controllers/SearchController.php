<?php





    class SearchController
    {

        public function actionSearch($b,$a,$page)
        {
            if($b=="all")$b="";
            if($a=="all")$a="";
                
                
                
                
               
                
                require_once(ROOT. '/views/site/search.php');
           
        }

        public function actionDirect()
        {
            if(isset($_POST['search']))
            {   

                $a = $_POST['searchselector'];
                $b = $_POST['content-search'];
                if($b==NULL)$b="all";
                if($a==NULL)$a="all";
                
                header('Location: /search/q='.$b.'/'.$a.'/page-1');
                
                
                
               
                
                
            }
            else
            {
                header('Location: /index');
            }
           // 
        }


    }
?>