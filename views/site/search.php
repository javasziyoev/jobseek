<?php include ROOT . '/views/layouts/header.php'; ?>

<head>
    <link href="/template/css/style.css" type="text/css" rel="stylesheet">
 </head>

<div id="wrapper">
    <section id="sign-up-content">
    <?php 

//city id
    $city_id = Search::getIdByCity($a);
    $city_id = $city_id[0];
//count for page nav

    $count = Search::getVacancyCountByCity($city_id);
    $count = $count['COUNT(*)'];
    $e = floor($count / 8) + 1;
    echo $e;
//
//vacancy
    $res = Search::MainSearch($city_id,$b,$page);

    
//
    $i = 0;
    while($i < 8)
    {
        //employer
        $employer = Search::getEmployerById($res[$i][1]);
        //
        //salary currency
        $currency = Search::getCurrency($res[$i][5]);
        $currency = $currency[0];
        //
        //employment type
        $job = Search::getEmployerType($res[$i][11]);
        $job = $job[0];
        //

        echo '<div class="vacancy-post">
        <div class="vacancy-postposted">
            <a href="/vacancy/details/'.$res[$i][0].'" class="vacancy-title">'.$res[$i][3].'</a>
            <div class="salary"><label>'.$res[$i][4].'</label>
            <label style="margin-left: 5px;">'.$currency.'</label></div>
            <div class="short-description">'.$res[$i][10].'</div>
            <a href="/vacancy/all/'.$employer[$i][0].'" class="company-name">'.$employer[2].'</a>
            <div> 
                <span>
                    <label class="city">'.$a.'</label><br/>
                    <label class="post-date">'.$res[$i][8].'</label> <br/>
                    <label class="jobid">'.$job.'</label>
                </span>
            </div>
        </div>
    </div>';
        $i++;
    }
    ?>
    </section>
</div>
<div class="page">
    <?php 
    $i = 1;
    while($i < $e ){
        if ($i == 9)break;
        echo '<a href="/search/page-'.$i.'" >'.$i.'</a>';
       
        
        $i++;
    }
    if($e > 9){
        echo '<a href="" style="width:6%;">...</a>
        <a href>'.$e.'</a>';
    }
        ?>

</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>