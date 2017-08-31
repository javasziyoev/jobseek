<?php


class Search
{
    
    public static function MainSearch($selector,$searchinp,$page)
    {   $arr = [];
        $i = 0;
        $page = intval($page);
        $per = ($page - 1) * 8;
        $db = Db::getConnection();
        
            $sql = "select * from vacancy where `position` like '%$searchinp%' and `city_id` like '%$selector' ORDER by `post_date` Desc LIMIT 8 OFFSET $per";
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

    public static function getVacancyCountByCity($id)
    {
        
        $db = Db::getConnection();
        
            $sql = "SELECT COUNT(*) FROM `vacancy` WHERE `city_id` like '%$id'";
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
          
          public static function getIdByCity($name)
          {
            $db = Db::getConnection();
            $sql = "Select `city_id` FROM `city` where `city_name`='$name'";
            $result = $db->prepare($sql);
            $result->execute();
            $rez = $result->fetch();
            return $rez;
          }
          
}   


?>