<?php
    $i = 0;
    $e = $res[0][0];
    $k = 0;
    $target = $res[$i][0]; 
    $amount = Search::getVacancyCount($target);
echo $amount['COUNT(*)'];    
    

    while  ($i < sizeof($res)){
        $target = $res[$i][0]; 
        $amount = Search::getVacancyCount($target);
        $arr = Search::getVacancyByEmp($target);
        echo $arr[0][0];
       while($k < $amount['COUNT(*)'])
       {
        
        
        
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
    $k++;
}
$i++;
}

?>
