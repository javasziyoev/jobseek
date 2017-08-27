


<?php include ROOT . '/views/layouts/header.php'; ?>


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
           
          <section id="featured-jobs-content">
          <h1 style="margin-bottom: 25px;">Companies</h1>
    
            
<?php

$db=Db::getConnection();

$sql = 'SELECT * FROM `vacancy` ';
$result = $db->prepare($sql);
                       $result->execute();
                       echo '<div class="vacancy-post"><ul style="list-style: none;">';
                       while($count=$result->fetch())
                       {$sql1 = 'SELECT * FROM `employer` WHERE employer_id='.$count['employer_id'];
                        $result1 = $db->prepare($sql1);
                                               $result1->execute();
                        $comp=$result1->fetch();              
                        echo '<li>
                        <div class="vacancy-postposted">
                         <a href  ="'.$count['employer_id'].'" >  '.$comp['company_name'].'</a>
                        </div></li>
                    ';
            }echo '</ul></div>'

?>


          </section>


          <section id="reklama-bleat">
          Отключите блокировщик рекламы плес.
          </section>
      </section>


</div>





<?php include ROOT . '/views/layouts/footer.php'; ?>