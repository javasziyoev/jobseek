<?php


class Tags
{

    public static function tagSearch()
    {
        $uri = Router::getURI();
        $internalRoute=preg_replace('~tag/~','',$uri);
        $someArr=[];$i=0; 
            $db=Db::getConnection();
            $sql = 'SELECT * FROM `vacancy` WHERE industry_id='.$internalRoute;
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