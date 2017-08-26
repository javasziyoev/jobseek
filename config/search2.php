<?php
    $i = 0;
    
    $k = 0; 
    while  ($i < sizeof($res)-1){
        $target = $res[$i][0]; 
        $amount = Search::getVacancyCount($target);
        $arr = Search::getVacancyByEmp($target);
        $temp = $arr[$i];
        
       while($k < $amount['COUNT(*)'])
       {
        
        
        
    echo '<div class="vacancy-post">
        <div class="vacancy-postposted">
            <a href="" class="vacancy-title">.'$temp["'position'"]'.</a>
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
$k = 0;
$i++;
}

?>
