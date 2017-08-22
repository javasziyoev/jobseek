<?php


class UserVacancsController
{

    public static function tagSearch()
    {
        $uri = Router::getURI();
        $internalRoute=preg_replace('~vacancy/details/~','',$uri);
        $someArr=[];
            $db=Db::getConnection();
            $sql = 'SELECT * FROM `vacancy` WHERE vacancy_id='.$internalRoute;
            $result=$db->prepare($sql);
            $result->execute();
        
             $user = $result->fetch();
             $someArr[0] = $user;
                   
             $sql = 'SELECT * FROM `employer` WHERE employer_id='.$someArr[0]['employer_id'];
             $result=$db->prepare($sql);
             $result->execute();
             $user = $result->fetch();
             $someArr[1]=$user;          
             $sql = 'SELECT * FROM `city` WHERE city_id='.$someArr[0]['city_id'];
             $result=$db->prepare($sql);
             $result->execute();
             $user = $result->fetch();
             $someArr[2]=$user;          
             $sql = 'SELECT * FROM `currency` WHERE currency_id='.$someArr[0]['salary_currency_id'];
             $result=$db->prepare($sql);
             $result->execute();
             $user = $result->fetch();
             $someArr[3]=$user;          
             $sql = 'SELECT * FROM `employment_type` WHERE employment_type_id='.$someArr[0]['employment_type_id'];
             $result=$db->prepare($sql);
             $result->execute();
             $user = $result->fetch();
             $someArr[4]=$user;   
                return $someArr;

    }
}
?>