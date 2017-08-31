<?php include ROOT . '/views/layouts/header.php'; ?>

<head>
    <link href="/template/css/style.css" type="text/css" rel="stylesheet">
 </head>

<div id="wrapper">

<section id="top-jobs-content">
          
          <section id="jobs-at-content">
            <div style="text-align: center; width: 90%; height: 200px; background-color: orange; margin-left: 3%; margin-right: 3%; margin-bottom: 1em;">
              For small add
            </div>
              <h3 class="dark-gray-text">Jobs at</h3>
              <div>
                  <ul>
                      <li>
                        <div>
                          <span><a href="" class="dark-gray-text">Microsoft</a></span>
                          <span class="jobs-count">42</span>
                        </div>
                      </li>
                      <li>
                        <div>
                          <span><a href="" class="dark-gray-text">Google</a></span>
                          <span class="jobs-count">5</span>
                        </div>
                      </li>
                      <li>
                        <div>
                          <span><a href="" class="dark-gray-text">China Bank</a></span>
                          <span class="jobs-count">7</span>
                        </div>
                      </li>
                      <li>
                        <div>
                          <span><a href="" class="dark-gray-text">Union Pay</a></span>
                          <span class="jobs-count">2</span>
                        </div>
                      </li>
                      <li>
                        <div>
                          <span><a href="" class="dark-gray-text">NVIDIA</a></span>
                          <span class="jobs-count">10</span>
                        </div>
                      </li>
                      <li>
                        <div>
                          <span><a href="" class="dark-gray-text">Xiaomi</a></span>
                          <span class="jobs-count">36</span>
                        </div>
                      </li>
                      <li>
                        <div>
                          <span><a href="" class="dark-gray-text">Meizu</a></span>
                          <span class="jobs-count">15</span>
                        </div>
                      </li>
                  </ul>
              </div>  
          </section>
           
          <section id="vacancy-details-content" style="margin-left: 1em;">

    <?php 

//city id
    $city_id = Search::getIdByCity($a);
    $city_id = $city_id[0];
//count for page nav

    $count = Search::getVacancyCountByCity($city_id);
    $count = $count['COUNT(*)'];
    $e = floor($count / 8) + 1;
    
//
//vacancy
    $res = Search::MainSearch($city_id,$b,$page);
    
    
//
if($res){
    $i = 0;
    while($i < 8 and $i < sizeof($res))
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
    }
    else echo '<h3>0 results found</h3>';
    ?>
   </section>


          <section id="reklama-bleat">
          Отключите блокировщик рекламы плес.
          </section>
      </section>
</div>

<div class="page">
    <?php 
    if($res){
    $i = 1;
    while($i < $e ){
        if ($i == 9)break;
        if($b=="")$b="all";
        if($a=="")$a="all";
        echo '<li class="active" style="display:inline-block;list-style:none;"><a class="active" href="/search/q='.$b.'/'.$a.'/page-'.$i.'" >'.$i.'</a></li>';
       
        
        $i++;
    }
    if($e > 9){
        
        echo '<a href="" style="width:6%;">...</a>
        <a href>'.$e.'</a>';
    }
}
        ?>

</div>
</form>

<?php include ROOT . '/views/layouts/footer.php'; ?>