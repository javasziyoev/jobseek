<?php
    $i = 0;
    $e = $res[0][0];
    $arr = Search::getVacancyByEmp($e);
    print_r($arr);
    while  ($i < sizeof($res)){
       echo $res[$i][2]; $i++;}
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

?>
