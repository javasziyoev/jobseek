<?php
$i = 0;
$k = 0;
//
$db = Db::getConnection();
$sql = "SELECT COUNT(*) from `vacancy`";
$result = $db->prepare($sql);
$result->execute();
$user = $result->fetch();
$ass = $user['COUNT(*)'];
echo $ass;
//
if ($res == true){
while(true){

    
    $db = Db::getConnection();
    
    //
    while($k < sizeof($res)){
        $e = $res[$k][0];
    $sql1 = "SELECT * FROM `vacancy` WHERE `employer_id`= $e";
    $result = $db->prepare($sql1);
    $result->execute();
    echo $sql1;
    echon $e;
    if($result == true)break;
    $k++;
    }
    $k = 0;
    $user = $result->fetch();
    $position = $user['position'];
    $salary = $user['salary'];
    $curr = $user['salary_currency_id'];
    $short = $user['short_descr'];
    $date = $user['post_date'];
    $er = $user['employment_type_id'];
    $city = $user['city_id'];
    
 //
     $sql3 = "SELECT * FROM `currency` WHERE `currency_id`= $curr";
    $result = $db->prepare($sql3);
    $result->execute();
    $user = $result->fetch();
    $currency = $user['currency_code'];

 //
   $sql4 = "SELECT * FROM `employment_type` WHERE `employment_type_id`= $er";
   $result = $db->prepare($sql4);
   $result->execute();
   $user = $result->fetch();
   $job = $user['employment_type_name'];
  
 //
 $sql2 = "SELECT * FROM `city` WHERE `city_id`= $city";
 $result = $db->prepare($sql2);
 $result->execute();
 $user = $result->fetch();
 $city_name = $user['city_name'];
 //
    echo '<div class="vacancy-post">
        <div class="vacancy-postposted">
            <a href="" class="vacancy-title">'.$position.'</a>
            <div class="salary"><label>'.$salary.'</label>
            <label style="margin-left: 5px;">'.$currency.'</label></div>
            <div class="short-description">'.$short.'</div>
            <a href="" class="company-name">'.$res[$i][2].'</a>
            <div> 
                <span>
                    <label class="city">'.$city_name.'</label><br/>
                    <label class="post-date">'.$date.'</label> <br/>
                    <label class="jobid">'.$job.'</label>
                </span>
            </div>
        </div>
    </div>';
    $i++;
    if($i >= $ass)break;
}
}
else{
echo "Nothing was found";
}
?>
