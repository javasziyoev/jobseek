<?php


class Search
{
    
    public static function MainSearch($selector,$searchinp)
    {   $arr = [];
        $i = 0;
        $db = Db::getConnection();
        if($selector == 1){
            $sql = "SELECT * FROM `vacancy` WHERE `position` like '%$searchinp%'";
            $result = $db->prepare($sql);
            $result->execute();
            while( $rez = $result->fetch()){
                if($rez)
                {
                $arr[$i] = $rez;
                $i++;
                }
            }
        }
        
        if($selector == 2){
            $sql = "SELECT * FROM `employer` WHERE `company_name` like '%$searchinp%'";
            $result = $db->prepare($sql);
            $result->execute();
            while( $rez = $result->fetch()){
                if($rez)
                {
                $arr[$i] = $rez;
                $i++;
                }
            }
        }
            return $arr;
    }

    public static function getVacancyByEmp($id)
    {
        $arr = [];
        $i = 0;
        $db = Db::getConnection();
        
            $sql = "SELECT * FROM `vacancy` WHERE `employer_id` like '%$id%'";
            $result = $db->prepare($sql);
            $result->execute();
            while( $rez = $result->fetch()){
                if($rez)
                {
                $arr[$i] = $rez;
                $i++;
                
            }

       }

    return $arr;
    }

    public static function getVacancyCount()
    {
        
        $db = Db::getConnection();
        
            $sql = "SELECT COUNT(*) FROM `vacancy`WHERE `employer_id` like '%$id%'";
            $result = $db->prepare($sql);
            $result->execute();
           $rez = $result->fetch();
               
           return $rez;
       }
        
    
}   


?>