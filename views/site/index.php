<?php include ROOT . '/views/layouts/header.php'; ?>

<section id="banner-content">
<div >
<?php 
        if (User::isGuest()) 
        {
  echo '<form action="/user/signup" method="post">
  
    <input type="submit" class="button-post" name = "Post_a_CV" value="Register">
    <input type="submit" class="button-post" name ="post_a_vacancy" value="Post a vacancy">
  </form>';}
  else {
    echo'
    <div>
    <form action="/employer/post_a_vacancy" method="post">
    <input type="submit" class="button-post" name ="post_a_vacancy" value="Post a vacancy">
    </div>
    </form>';
  }
  ?>
</div>
</section>


<section id="main-content news" style="padding: .5% 2%; background-color: #fafafa;">
        <div id="inner-content news-content" style=" margin-left:auto; margin-right:auto; text-align: center;" class="width-900">
          <ul class="work-in-industry-ul" style="display: inline-flex; margin-top: 0;">
            <div id="newsy">
            <?php 
            $c = News::getAmount();
            $c = $c['COUNT(*)'];
            $q = News::getView($c);
            $w = News::getView($c-1);
            $e = News::getView($c-2);
            $r = News::getView($c-3);
            echo
             ' <div><strong><a href="news/view/'.$c.'">'.$q[0][1].'</a></strong></div>
              <div>'.$q[0][2].'</div>
            </div>
            
            <div id="newsy">
              <div><strong><a href="news/view/'.($c-1).'">'.$w[0][1].'а</a></strong></div>
              <div>'.$w[0][2].'</div>
            </div>
            
            <div id="newsy">
              <div><strong><a href="news/view/'.($c-2).'">'.$e[0][1].'</a></strong></div>
              <div>'.$e[0][2].'</div>
            </div>
            
            <div id="newsy" style="border-color: #fafafa;">
              <div><strong><a href="news/view/'.($c-3).'">'.$r[0][1].'</a></strong></div>
              <div>'.$r[0][2].'</div>
            </div>';
            ?>
          </ul>
          
          <br style="clear:both" />
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
            <div class="vacancies-of-the-day" id="inner-content" style="padding-left: 0px;">
                      <?php            
               
                $getFJobId = User::getFJobId();
                $db = Db::getConnection();
                
                foreach($getFJobId as $getJobs)
                {
                 
                 echo '              <div class="vacancies-of-the-day-item ">
                <a href="/vacancy/details/'.$getJobs['vacancy_id'].'">
';                echo ' <span class="vacancy-of-the-day-title">';
                 echo $getJobs['position'].'</span>';
                  echo '   <span class="vacancy-of-the-day-salary">';
                  echo $getJobs['salary'].' ';
                  $sql = 'SELECT * FROM `currency` WHERE currency_id='.$getJobs['salary_currency_id'];
                  $result=$db->prepare($sql);
                  $result->execute();
                  $user = $result->fetch();
     
                  echo $user['currency_code'].'</span>';           
                     
                 $sql = 'SELECT * FROM `employer` WHERE employer_id ='.$getJobs['employer_id'];
                 $result = $db->prepare($sql);
                 $result->execute();
                 $job=$result->fetch();
                 echo '<a href="/vacancy/all/'.$getJobs['employer_id'].'"><span class="vacancy-of-the-day-company">';
                 echo $job['company_name'];
                 echo '</span></a></a>
                 </div>';
                }        
                   ?>
                
              
            </div>  
          </section>


          <section id="reklama-bleat"
            style="
                border: 10px solid orange;
                background: orange;
                width: 250px;
                height: 350px;
                position: relative;
                right: -4%;
            "
          >
          Отключите блокировщик рекламы плес.
          </section>
      </section>

      <section id="main-content">
        <div id="inner-content">
          <h3 class="dark-gray-text">Work in sectors</h3>
          <ul class="work-in-industry-ul">
            <?php
            
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