<?php include ROOT . '/views/layouts/header.php'; ?>

<section id="banner-content">
<div >
<?php require_once(ROOT. '/models/user.php');
        if (User::isGuest()) 
        {
  echo '<form action="/user/signup" method="post">
  
    <input type="submit" class="button-post" name = "Post_a_CV" value="Post a CV">
    <input type="submit" class="button-post" name ="post_a_vacancy" value="Post a vacancy">
  </form>';}
  else {
    echo'
    <form action="/employer/post_a_vacancy" method="post">
    <div>
    <input type="submit" class="button-post" name = "Post_a_CV" value="Post a CV">
    </div>
    </form>
    <div>
    <form action="/employer/post_a_vacancy" method="post">
    <input type="submit" class="button-post" name ="post_a_vacancy" value="Post a vacancy">
    </div>
    </form>';
  }
  ?>
</div>
</section>

  <div id="wrapper">
      <section id="top-jobs-content">
          <section id="jobs-at-content">
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
            <h3 class="dark-gray-text">Featured jobs</h3>
            <div class="vacancies-of-the-day" id="inner-content">
                      <?php            
                require_once(ROOT.'/models/User.php');
                $getFJobId = User::getFJobId();
                $db = Db::getConnection();
                
                foreach($getFJobId as $getJobs)
                {
                 
                 echo '              <div class="vacancies-of-the-day-item ">
                <a href="/vacancy/details/'.$getJobs['vacancy_id'].'">
';                echo ' <span class="vacancy-of-the-day-title">';
                 echo $getJobs['position'].'</span>';
                  echo '   <span class="vacancy-of-the-day-salary">';
                  echo $getJobs['salary'].'</span>';

                 echo $getJobs['salary_currency_id'];
                 $sql = 'SELECT * FROM `employer` WHERE employer_id ='.$getJobs['employer_id'];
                 $result = $db->prepare($sql);
                 $result->execute();
                 $job=$result->fetch();
                 echo '<a href=""><span class="vacancy-of-the-day-company">';
                 echo $job['company_name'];
                 echo '</span></a></a>
                 </div>';
                }        
                   ?>
                
              
            </div>  
          </section>
      </section>

      <section id="main-content">
        <div id="inner-content">
          <h3 class="dark-gray-text">Work in sectors</h3>
          <ul class="work-in-industry-ul">
            <?php
            require_once(ROOT.'/models/User.php');
                $forsectorsId = User::getSectorsId();
                $forsectorsName = User::getSectorsName();  $i=0;         
                
                foreach($forsectorsId as $sectors)
                {
                 echo '<li><a href= /tag/'.$sectors['industry_id'].'>';


                  echo ''.$forsectorsName[$i].'</a></li>';
                  $i++;
                }        
            ?>
          </ul>
          
          <br style="clear:both" />
        </div>    
          
      </section>
      </div>

     
<?php include ROOT . '/views/layouts/footer.php'; ?>