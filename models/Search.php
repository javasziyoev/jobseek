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
        if($selector == 3){
        
            $sql = "SELECT * FROM `city` WHERE `city_name`='$searchinp'";
            $result = $db->prepare($sql);
            $result->execute();
           $rez = $result->fetch();
               
           return $rez;
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

    public static function getVacancyCount($id)
    {
        
        $db = Db::getConnection();
        
            $sql = "SELECT COUNT(*) FROM `vacancy`WHERE `employer_id` like '%$id%'";
            $result = $db->prepare($sql);
            $result->execute();
           $rez = $result->fetch();
               
           return $rez;
       }

       public static function getEmployerById($id)
       {
           
           $db = Db::getConnection();
           
               $sql = "SELECT * FROM `employer` WHERE `employer_id` = $id";
               $result = $db->prepare($sql);
               $result->execute();
              $rez = $result->fetch();
                  
              return $rez;
          }
          public static function getEmployerType($id)
          {
              
              $db = Db::getConnection();
              
                  $sql = "SELECT `employment_type_name` FROM `employment_type` WHERE `employment_type_id` = $id";
                  $result = $db->prepare($sql);
                  $result->execute();
                 $rez = $result->fetch();
                     
                 return $rez;
             }
    
       public static function getCurrency($id)
       {
           
           $db = Db::getConnection();
           
               $sql = "SELECT `currency_code` FROM `currency` WHERE `currency_id`=$id";
               $result = $db->prepare($sql);
               $result->execute();
              $rez = $result->fetch();
                  
              return $rez;
          }
          

          public static function getVacancyByCity($id)
          {
              $arr = [];
              $i = 0;
              $db = Db::getConnection();
              
                  $sql = "SELECT * FROM `vacancy` WHERE `city_id` = $id";
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
    
}   


?>