<?php

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
        
        //sektors



        if(isset($_POST['b'])){
            $a = $_POST['a'];
            Panels::selectAdd($a);
        }
        if(isset($_POST['d'])){
            $c = $_POST['c'];
            Panels::selectDelete($c);
        }


        ///////

        
    if(isset($_POST['ba']))
    {
        $title = $_POST['title'];
        $date1 = $_POST['date'];
        $short = $_POST['short'];
        $content = $_POST['content'];
        //moving file
        $last = News::getAmount();
        $path = 'template/img/';
        $name = $_FILES['preview']['name'];
        $temp = $_FILES['preview']['tmp_name'];
        move_uploaded_file($temp, $path . $last['COUNT(*)'].'.jpeg');
        /////
        //ERRORS
        $err = false;
        if (strlen($title) < 1){$err[] = 'title is empty';}

        if (strlen($short) < 1){$err[] = 'short content is empty'; }
        if (strlen($content) < 1){$err[] = 'content is empty'; }
        if ($_FILES['preview']['error'] != 0){
            $err[] = 'no file selected';
            }
            if(!$err){
                Panels::addNews($title,$date1,$short,$content,$last);
            }
            
            //print errors
        $k = 0;
            while($k < sizeof($err)){
                echo $err[$k].'<br>';
                $k++;
            }
    }
   

    
//////
        require_once(ROOT . '/views/panel/admin.php');
        return true;
        }

    

    public function actionApplicant(){
        self::checkModer();
        $q = Panels::show_applicants();
        print_r($q[0]['applicant_id']);
        require_once(ROOT . '/views/panel/applicant.php');

    }




    public function actionModer(){
        
        self::checkModer();
        $db = Db::getConnection();
        require_once(ROOT . '/views/panel/moder.php');
        
        
    

    
}
public function actionAddNews()
{
   
}



}
?>