<?php
    $i = 0;
    while  ($i < sizeof($res)){
       echo $res[$i][2]; $i++;}
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

?>
