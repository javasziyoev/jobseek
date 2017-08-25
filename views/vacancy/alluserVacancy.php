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
          <h1 class="dark-gray-text">All vacancies by     <?php
  
           $db = Db::getConnection();
           
$getFJobId = UserVacancs::getEmployer();

$sql = 'SELECT * FROM `employer` WHERE employer_id='.$getFJobId[0]['employer_id'];
$result=$db->prepare($sql);
$result->execute();
$user = $result->fetch();
echo $user['company_name'];  
?></h1>
<div id="inner-content news-content" style=" margin-left:auto; margin-right:auto;" class="width-900">
        <ul class="all-user-vacancies-ul" style="display: block; margin-top: 1em;">
        <?php            
        
           $details =  Details::tagSearch();
           
           foreach($getFJobId as $getJobs)
           {
            
            echo '<li id="newsy" style="border-color: #fafafa;">
           <a href="/vacancy/details/'.$getJobs['vacancy_id'].'">';
                           echo '<div><strong>';
            echo $getJobs['position'].'</strong></div>';
             echo '<div>';
             echo $getJobs['salary'].' ';
             $sql = 'SELECT * FROM `currency` WHERE currency_id='.$getJobs['salary_currency_id'];
             $result=$db->prepare($sql);
             $result->execute();
             $user = $result->fetch();
 
             echo $user['currency_code'].'</div> ';
             echo '<div>'.$getJobs['short_descr'].'</div>';
            $sql = 'SELECT * FROM `employer` WHERE employer_id ='.$getJobs['employer_id'];
            $result = $db->prepare($sql);
            $result->execute();
            $job=$result->fetch();
            echo $getJobs['post_date'];
            
            echo '
            </a>
            </li>';
           }        
              ?>
         
        </ul>
        
        <br style="clear:both">
      </div>    
          




          </section>


          <section id="reklama-bleat">
          Отключите блокировщик рекламы плес.
          </section>
      </section>


</div>






<?php include ROOT . '/views/layouts/footer.php'; ?>