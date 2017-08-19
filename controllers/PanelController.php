<?php
include_once(ROOT. '/components/AdminBase.php');
class PanelController extends AdminBase{

    public function actionAdmin(){
    
        //checking admin
        self::checkAdmin();

        //show moders
        
        //view
        require_once(ROOT . '/views/panel/admin.php');
        return true;
        }

    


    public function actionModer(){




        
    }
}




?>