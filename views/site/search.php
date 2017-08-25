<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="wrapper">
    <section id="sign-up-content">
    
    <?php
    $i = 0;
    while($i < sizeof($res)){
        $r = $res[$i][1];
        $db = Db::getConnection();
        $sql = "SELECT * FROM `employer` WHERE `employer_id`= $r";
        $result=$db->prepare($sql);
        $result->execute();
        $user = $result->fetch();
        $company_name = $user['company_name'];
        $currency = $user['salary_currency_id'];
        
            
        echo '<div class="vacancy-post">
            <div class="vacancy-postposted">
                <a href="" class="vacancy-title">'.$res[$i][3].'</a>
                <div class="salary"><label>'.$res[$i][4].'</label>
                <label style="margin-left: 5px;">'.$currency.'</label></div>
                <div class="short-description"></div>
                <a href="" class="company-name">'.$company_name.'</a>
                <div> 
                    <span>
                        <label class="city">%city_name%</label>
                        <label class="post-date">%post_date%</label> <br/>
                        <label class="jobid">%job_type%</label>
                    </span>
                </div>
            </div>
        </div>';
        $i++;
    }
    ?>
    
    </section>
</div>


<?php include ROOT . '/views/layouts/footer.php'; ?>