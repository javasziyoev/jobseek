<?php
    $i = 0;
    $e = $res[0][0];
    $amount = Search::getVacancyCount();
    print_r($arr);
    while  ($i < sizeof($res)){
       $target = $res[$i][0]; 
       while($k < $amount['COUNT(*)'])
       {
        $arr = Search::getVacancyByEmp($target);
        $k++;
        echo $k;
    echo '<div class="vacancy-post">
        <div class="vacancy-postposted">
            <a href="" class="vacancy-title"></a>
            <div class="salary"><label></label>
            <label style="margin-left: 5px;"></label></div>
            <div class="short-description"></div>
            <a href="" class="company-name"></a>
            <div> 
                <span>
                    <label class="city"></label><br/>
                    <label class="post-date"></label> <br/>
                    <label class="jobid"></label>
                </span>
            </div>
        </div>
    </div>';
}
}

?>
