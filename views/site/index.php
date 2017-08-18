<?php include ROOT . '/views/layouts/header.php'; ?>

<section id="banner-content">
<div >
  <form action="/user/signup" method="post">
    <input type="submit" class="button-post" name = "Post_a_CV" value="Post a CV">
    <input type="submit" class="button-post" name ="post_a_vacancy" value="Post a vacancy">
  </form>
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
                <a href="">
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
                 echo '<li><a href= '.$sectors['industry_id'].'>';


                  echo ''.$forsectorsName[$i].'</a></li>';
                  $i++;
                }        
            ?>
          </ul>
          <!--
          <p>Donec sed urna lectus, vel viverra tellus. Nullam molestie tortor eu erat aliquet fermentum. Suspendisse commodo purus aliquam mi tempor pulvinar.  Pellentesque bibendum suscipit dui, id vehicula leo aliquet at. Duis sem diam, pharetra sed posuere sed, iaculis vitae leo.</p> 
          
          <div class="box"><h2>Senior Huesos in Microsoft</h2><img class="image-box" src="" />Curabitur pulvinar odio ut magna aliquet consequat. Etiam id euismod justo. Praesent vel lectus ipsum, ac placerat urna. Quisque a leo nibh.  Curabitur bibendum accumsan orci eget euismod. Pellentesque mattis gravida imperdiet.</div>  
          <div class="box"><h2>Vodolaz in RCIT</h2><img class="image-box" src="" />Vestibulum luctus augue at arcu eleifend ac convallis massa bibendum. Proin ut odio quam, eu feugiat risus. Curabitur bibendum accumsan orci eget euismod. Aliquam porttitor faucibus orci, vitae semper dui varius eu.</div> 
          <div class="box"><h2>Restorator</h2><img class="image-box" src="" />Vivamus ut enim eu leo euismod semper. Cras sagittis auctor ante, sagittis scelerisque diam iaculis at. Pellentesque mattis gravida imperdiet. Praesent vestibulum volutpat vestibulum. </div> 
          <div class="box"><h2>Jiguli-master</h2><img class="image-box" src="" />Quisque eget leo eget magna ultrices tincidunt. Vestibulum luctus elementum sollicitudin. Sed at mi sit amet nisl semper tincidunt non in lorem. Donec semper commodo interdum.</div> 
          -->
          <br style="clear:both" />
        </div>    
          
      </section>
      </div>

     
<?php include ROOT . '/views/layouts/footer.php'; ?>