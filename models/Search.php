<?php


class Search
{
    
    public static function MainSearch($selector,$searchinp,$page)
    {   $arr = [];
        $i = 0;
        if($selector==NULL and $searchinp==NULL)$selector='%'.$selector;
        if($selector==NULL and !$searchinp==NULL)$selector='%';
        $page = intval($page);
        $per = ($page - 1) * 8;
        $db = Db::getConnection();
        
            $sql = "select * from vacancy where `position` like '%$searchinp%' and `city_id` like '$selector' ORDER by `post_date` Desc LIMIT 8 OFFSET $per";
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

    public static function getVacancyCountByCity($id,$inp)
    {
        $db = Db::getConnection();
        
            $sql = "SELECT COUNT(*) FROM `vacancy` WHERE `city_id` like '%$id' and `position` like '%$inp%'";
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

          public static function getCityById($id)
          {
            $db = Db::getConnection();
            $sql = "Select `city_name` FROM `city` where `city_id`='$id'";
            $result = $db->prepare($sql);
            $result->execute();
            $rez = $result->fetch();
            return $rez;
          }

          public static function getProvince(){
            $arr = [];
            $i = 0;
            $db = Db::getConnection();
            $sql = "Select b.country_name,count(a.vacancy_id) as amount from vacancy a,country b, city c where a.city_id  = c.city_id and c.country_id = b.country_id  group  by b.country_name 
            order by count(a.vacancy_id) desc";
            $result = $db->prepare($sql);
            $result -> execute();
            while( $rez = $result->fetch()){
                   $arr[$i]= Array($rez['country_name'],$rez['amount']);
                   $i++;
                }
            
   
            $sql = "SELECT d.country_name,'0' from country d
            where  d.country_id not in(select DISTINCT r.country_id from city r where r.city_id not in(SELECT DISTINCT f.city_id from vacancy f))";
            $result = $db->prepare($sql);
            $result -> execute();
            
            while($rez = $result->fetch()){
                $arr[$i] = Array($rez['country_name'],$rez['0']);
                $i++;
            }
            return $arr;
        }
        public static function getProvinceById($id){
            $db = Db::getConnection();
            $sql = "SELECT `country_name` FROM `country` WHERE `country_id`=$id";
            $result = $db->prepare($sql);
            $result -> execute();
            $result = $result -> fetch();
            $result = $result['country_name'];
            return $result;
        }
        public static function getIdByProvince($name){
            $db = Db::getConnection();
            $sql = "SELECT `country_id` FROM `country` WHERE `country_name`='$name'";
            $result = $db->prepare($sql);
            $result -> execute();
            $result = $result -> fetch();
            $result = $result['country_id'];
            return $result;
        }
        public static function getProvinceAmount($id){
            $db = Db::getConnection();
            $sql = "SELECT COUNT(1) from(Select a.*,c.currency_code from vacancy a,city b ,currency c where 
            a.city_id=b.city_id and b.country_id = $id and a.salary_currency_id = c.currency_id  ) as s";
            $result = $db->prepare($sql);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();
            if ($result){
                $result = $result->fetch();
                return $result['COUNT(1)'];
                }
                    
            return false;
    
        }
        public static function getProvinceDetails($id,$page,$cubes){
            $arr = [];
            $i = 0;
            $page = intval($page);
			$per = ($page - 1) * $cubes;
            $db = Db::getConnection();
            $sql = "Select a.*,c.currency_code from vacancy a,city b ,currency c where a.city_id=b.city_id and b.country_id = $id and a.salary_currency_id = c.currency_id limit 12 offset".' '.$per;
            $result = $db->prepare($sql);
            $result -> execute();
            $result -> fetch();
            while ($res = $result ->fetch())
            {
                $arr[$i] = $res;
                $i++;
            }
           return $arr;

        }
}
?>