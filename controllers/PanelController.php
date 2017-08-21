<?php
include_once(ROOT. '/models/Panels.php');
include_once(ROOT. '/components/AdminBase.php');
class PanelController extends AdminBase{

    public function actionAdmin(){
    
        //checking admin
        self::checkAdmin();
        $sel = '';
        //show moders
        $k = Panels::getPersonalName();
  
        if(isset($_POST['delete'])){
            $sel = $_POST['sel'];
            $sel = $sel+1;
            echo $sel;
            Panels::deletePersonal($sel);
            header("Location: /panel/admin");
            
        }
        if(isset($_POST['add'])){
        $name = $_POST['inp1'];
        $password = $_POST['inp2'];
        $role = $_POST['sel1'];
        Panels::registerPersonal($name,$password,$role);
        header("Location: /panel/admin");
        }
        $r = Panels::adminStats();
        
        //view


        require_once(ROOT . '/views/panel/admin.php');
        return true;
        }

    

    public function actionApplicant(){
        self::checkAdmin();
        $q = Panels::show_applicants();
        print_r($q[0]['applicant_id']);
        require_once(ROOT . '/views/panel/applicant.php');

    }




    public function actionModer(){
        
        
        $db = Db::getConnection();
        require_once(ROOT . '/views/panel/moder.php');
        
        require_once('/models/Panels.php');
    

    
}}



?>