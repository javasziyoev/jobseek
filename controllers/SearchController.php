<?php





    class SearchController
    {

        public function actionSearch()
        {
            if(isset($_POST['search']))
            {   
                require_once '/components/Core.php';
               
                
                
                $a = $_POST['searchselector'];
                $b = $_POST['content-search'];

                echo $a,$b;
                require_once(ROOT. '/views/site/search.php');
            }

        }




    }
?>