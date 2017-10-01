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

        public static function getCompanyAmount(){
            $db = Db::getConnection();
            $sql = 'SELECT COUNT(*) FROM `employer`';
            $result = $db->prepare($sql);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();
            if ($result){
                $result = $result->fetch();
                return $result['COUNT(*)'];
                }
                    
            return false;
    
        }
        public static function getCompany($page,$cubes){
            {
                $Arr = [];
                $i = 0; 
                $page = intval($page);
                $per = ($page - 1) * $cubes;
                $db=Db::getConnection();
                $sql = "SELECT * FROM `employer` WHERE 1 ORDER BY  employer_id limit 12 OFFSET".' '.$per;
                $result=$db->prepare($sql);
                $result->bindParam(':per', $per,PDO::PARAM_STR);
                $result->execute();
            
                while( $user = $result->fetch()){
                    if($user)
                    {
                       $Arr[$i]= $user;
                       $i++;
                    }}
                    return $Arr;
            }}
    public static function getVacByEmp($id){
        $arr = [];
        $i = 0;
        $db = Db::getConnection();
        $sql = 'SELECT *,city.city_name from vacancy,city where employer_id='.$id.' and city.city_id = vacancy.city_id';
        $result = $db->prepare($sql);
        $result->execute();
        while ($ss = $result->fetch()){
            if($ss)
            {
                $arr[$i] = $ss;
                $i++;
            }
        }
        return $arr;
    }
    
}
?>