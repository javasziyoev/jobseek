<?php





    class SearchController
    {

        public function actionSearch($page)
        {
            if(isset($_POST['search']))
            {   

                $a = $_POST['searchselector'];
                $b = $_POST['content-search'];
                
                
                
                
               
                
                require_once(ROOT. '/views/site/search.php');
            }
            else{
                header("Location: /index");
            }
        }




    }
?>