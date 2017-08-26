<?php
$i = 0;
if ($res == true){
while($i < sizeof($res)){
    $r = $res[$i][1];
    $city = $res[$i][7];
    $curr = $res[$i][5];
    $id= $res[$i][10];
    $db = Db::getConnection();
    
    //
    $sql1 = "SELECT * FROM `employer` WHERE `employer_id`= $r";
    $result = $db->prepare($sql1);
    $result->execute();
    $user = $result->fetch();
    $company_name = $user['company_name'];
    //
    $sql2 = "SELECT * FROM `city` WHERE `city_id`= $city";
    $result = $db->prepare($sql2);
    $result->execute();
    $user = $result->fetch();
    $city_name = $user['city_name'];
    
    // 
    $sql3 = "SELECT * FROM `currency` WHERE `currency_id`= $curr";
    $result = $db->prepare($sql3);
    $result->execute();
    $user = $result->fetch();
    $currency = $user['currency_code'];
    //
    $sql4 = "SELECT * FROM `employment_type` WHERE `employment_type_id`= $id";
    $result = $db->prepare($sql4);
    $result->execute();
    $user = $result->fetch();
    $job = $user['employment_type_name'];
    //
    echo '<div class="vacancy-post">
        <div class="vacancy-postposted">
            <a href="/vacancy/details/'.$r.'" class="vacancy-title">'.$res[$i][3].'</a>
            <div class="salary"><label>'.$res[$i][4].'</label>
            <label style="margin-left: 5px;">'.$currency.'</label></div>
            <div class="short-description">'.$res[$i][10].'</div>
            <a href="/vacancy/all/'.$res[$i][0].'" class="company-name">'.$company_name.'</a>
            <div> 
                <span>
                    <label class="city">'.$city_name.'</label><br/>
                    <label class="post-date">'.$res[$i][8].'</label> <br/>
                    <label class="jobid">'.$job.'</label>
                </span>
            </div>
        </div>
    </div>';
    $i++;
}
}
else{
echo "Nothing was found";
}
?>
