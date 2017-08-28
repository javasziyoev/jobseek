<?php 
//Finding a vacancy by city id $res[0]
$vacancy = Search::getVacancyByCity($res[0]);


//


$i = 0;
while($i < sizeof($vacancy))
{
    $currency = Search::getCurrency($vacancy[$i]['salary_currency_id']);
    $employer = Search::getEmployerById($vacancy[$i]['employer_id']);
    $job = Search::getEmployerType($vacancy[$i]['employment_type_id']);
echo '<div class="vacancy-post">
<div class="vacancy-postposted">
    <a href="/vacancy/details/'.$vacancy[$i]['vacancy_id'].'" class="vacancy-title">'.$vacancy[$i]['position'].'</a>
    <div class="salary"><label>'.$vacancy[$i]['salary'].'</label>
    <label style="margin-left: 5px;">'.$currency[0].'</label></div>
    <div class="short-description">'.$vacancy[$i]['short_descr'].'</div>
    <a href="/vacancy/all/'.$employer[0].'" class="company-name">'.$employer[2].'</a>
    <div> 
        <span>
            <label class="city" style="text-decoration:underline;">'.$res[1].'</label><br/>
            <label class="post-date">'.$vacancy[$i]['post_date'].'</label> <br/>
            <label class="jobid">'.$job[0].'</label>
        </span>
    </div>
</div>
</div>';
$i++;
}



?>