<?php


class UserVacancs
{

   
        public static function getEmployer()
        {$someArr=[];$i=0; 
            $uri = Router::getURI();
            $internalRoute=preg_replace('~vacancy/all/~','',$uri);
            $someArr2=[];
            $db=Db::getConnection();
            $sql = 'SELECT * FROM `vacancy` where employer_id='.$internalRoute;
            $result=$db->prepare($sql);
            $result->execute();
        
            while( $user = $result->fetch()){
                
                   $someArr[$i]= $user;
                   $i++;
                }
    return   $someArr;
        }
    
}
?>