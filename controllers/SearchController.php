<?php





    class SearchController
    {

        public function actionSearch()
        {
            if(isset($_POST['search']))
            {   

                $a = $_POST['searchselector'];
                $b = $_POST['content-search'];
                $res = Search::MainSearch($a,$b);
                
                
                
               
                
                require_once(ROOT. '/views/site/search.php');
            }
            else{
                header("Location: /index");
            }
        }




    }
?>