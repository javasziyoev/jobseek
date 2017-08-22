<?php


class News
{



	public static function getAmount(){
		$db = Db::getConnection();
        $sql = 'SELECT COUNT(*) FROM `news`';
        $result = $db->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        if ($result){
            return $result->fetch();
            }
                
        return false;

	}

	public static function getNews($page,$cubes){
		{
			$Arr = [];
			$i = 0; 
			$page = intval($page);
			$per = ($page - 1) * $cubes;
			$db=Db::getConnection();
			$sql = "SELECT * FROM `news` WHERE 1 order by `id` limit 12 OFFSET".' '.$per;
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
		}
	}
	
}


?>