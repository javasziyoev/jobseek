<?php

include_once(ROOT. '/components/AdminBase.php');
class PanelController extends AdminBase{

    public function actionAdmin(){
    
        //checking admin
        self::checkAdmin();
        $sel = '';
        //show moders
 
  

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
        $preview = $_POST['preview1'];
        /////
        //ERRORS
        $err = false;
        if (strlen($title) < 1){$err[] = 'title is empty';}

        if (strlen($short) < 1){$err[] = 'short content is empty'; }
        if (strlen($content) < 1){$err[] = 'content is empty'; }
        
                Panels::addNews($title,$date1,$short,$content,$preview);
            
            
            //print errors
        $k = 0;
            while($k < sizeof($err)){
                echo $err[$k].'<br>';
                $k++;
            }
    }
   

    
//////
if(isset($_POST['adminex'])){
    $add1 = $_POST['personalname'];
    $add2 = $_POST['personalpassword'];
    $add2 = md5($add2);
    $add3 = $_POST['personal'];
    Panels::registerPersonal($add1,$add2,$add3);
}
//
if(isset($_POST['adminex1'])){
    $del = $_POST['personaldelete'];
    Panels::DeletePersonal($del);
}
//
$i = 0;
$k = 0;
$arr = [];
$get = Panels::getPremiumUsers();

if(isset($_POST['premium'])){
    while($i < sizeof($get)){
        $cool = $get[$i]['employer_id'];
        if($_POST[$cool] == true)
        {
            $arr[$k] = $cool;
            $k++;
          
        }
        $i++;
    }
    $accept = Panels::acceptPremium($arr);
    }
//
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