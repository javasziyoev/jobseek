<?php





    class SearchController
    {

        public function actionSearch()
        {
            if(isset($_POST['search']))
            {   
                require_once '/components/Core.php';
               
                $connection = new Firewind();
                
                $a = $_POST['searchselector'];
                echo $a;
                require_once(ROOT. '/views/site/search.php');
            }

        }




    }
?>