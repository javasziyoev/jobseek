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
            return $arr;
    }

}


?>