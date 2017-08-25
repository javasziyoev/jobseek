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
                print_r($res);
                
                require_once(ROOT. '/views/site/search.php');
            }

        }




    }
?>