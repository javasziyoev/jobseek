<?php


class Panels
{

    public static function actionModerator()
    {
       echo 'huy';
    }
    public static function getVacansies()
    {
          $someArr=[];$i=0; 
            $db=Db::getConnection();
            $sql = 'Select * from `vacancy` where published = 0';
            $result=$db->prepare($sql);
            $result->execute();
    
            while( $user = $result->fetch()){
                if($user)
                {
                   $someArr[$i]= $user;
                   $i++;
                }}
                return $someArr;
    }
    
}
?>