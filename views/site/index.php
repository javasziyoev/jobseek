<?php include ROOT . '/views/layouts/header.php'; ?>

<section id="banner-content" >
  <div id="mob-ban-but" style="display: inline-flex; text-align: center;">
  <?php 
  
 
 
          if (User::isGuest()) 
          {
    echo '<form action="/user/signup" method="post" class="mob-button-44">
    
      <input type="submit" class="button-post no-mob-view" name = "Post_a_CV" value="Register" style="margin-left: 0px; margin-right: 0px;">
      <input type="submit" class="button-post no-mob-view" name ="post_a_vacancy" value="Post a vacancy"></form>
      <form action="/user/signin" method="post" class="mob-button-44" >
      <!-- <input type="submit" class="button-post  only-mob-view no-mob-view" name = "Post_a_CV" value="Sign In" style="margin-left: 0px;margin-right: 0px;"> -->
    </form>';}
    
    elseif (!User::isGuest() and $app="" ){
      echo'
      <div>
      <form action="/employer/post_a_vacancy" method="post" ">
      <input type="submit" class="button-post" name ="post_a_vacancy" value="Post a vacancy">
      </div>
      </form>';
    }
    ?>
  </div>
  <?php
      if (User::isGuest()){
        echo '
  <div class="substrate">
  <div class="tabs login-tabs">
      <input id="tab1" type="radio" name="tabs" checked>
      <label for="tab1" title="Sign In">Sign In</label>
      

      <input id="tab2" type="radio" name="tabs">
      <label for="tab2" title="Sign Up">Register</label>
      

      <section id="content-tab1">
        <div>
            <form   action="/user/signin" method="POST" style="width: 100%;">
              <input type="text" placeholder="Email" name="loginem" class="input-text mob-button-100" style="width: 100%;"><br>
              <input type="password" placeholder="Password" name="loginpass" class="input-text mob-button-100" style="width: 100%;"><br><br>
              <input type="submit" name="loginsub" value="Sign in" class="sign-in-button mob-button-100" style="width: 100%; margin-left:0;">
            </form>
            
        </div>
      </section>
      
      <section id="content-tab2">';}
      ?>
      <?php 
          if (User::isGuest()) 
          {
    echo '<form action="/user/signup" method="post" class="mob-button-44">
    
      <input type="submit" class="button-post mob-button-100" name = "Post_a_CV" value="For Applicants" style="margin-top: 3.5em; margin-left: 0px; margin-right: 0px; margin-bottom: 1em; width: 100%;"><br />
      <input type="submit" class="button-post mob-button-100" name ="post_a_vacancy" value="For Employers" style="margin-left: 0px; margin-right: 0px; width: 100%;"></form>';}
    ?>
      </section>
    </div>
  </div>
</section>


<section id="main-content news" style="padding: .5% 2%; background-color: #fafafa;">
        <div id="inner-content news-content" style=" margin-left:auto; margin-right:auto; text-align: center; margin: 0 auto;
    width: 100%;" class="width-900">
          <ul class="work-in-industry-ul" style="display: inline-flex; margin-top: 0;">
            <div id="newsy" class="desnewsy mobnewsy">
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
            
            <div id="newsy" class="desnewsy mobnewsy">
              <div><strong><a href="news/view/'.($c-1).'">'.$w[0][1].'а</a></strong></div>
              <div>'.$w[0][2].'</div>
            </div>
            
            <div id="newsy" class="desnewsy mobnewsy">
              <div><strong><a href="news/view/'.($c-2).'">'.$e[0][1].'</a></strong></div>
              <div>'.$e[0][2].'</div>
            </div>
            
            <div id="newsy" class="desnewsy mobnewsy" style="border-color: #fafafa;">
              <div><strong><a href="news/view/'.($c-3).'">'.$r[0][1].'</a></strong></div>
              <div>'.$r[0][2].'</div>
            </div>';
            ?>
          </ul>
          
          <br style="clear:both" />
        </div>    
          
      </section>

      <section id="mobad" style="padding: .5% 2%; background-color: orange;">
        <div id="inner-content news-content" style=" margin-left:auto; margin-right:auto; text-align: center;" class="width-900">
          <p>For mobile ad</p>
          <br style="clear:both" />
        </div>    
          
      </section>



  <div id="wrapper">
      <section id="top-jobs-content">
          
          <section id="jobs-at-content">
            <div style="text-align: center; width: 90%; height: 200px; background-color: orange; margin-left: 3%; margin-right: 3%; margin-bottom: 1em;">
              For small add
            </div>
            <?php include ROOT . '/views/site/jobsat.php'; ?> 
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


          <section id="reklama-bleat">
          Отключите блокировщик рекламы плес.
          </section>
      </section>

      <section id="mobad" style="padding: .5% 2%; background-color: orange; height: 200px;">
        <div id="inner-content news-content" style=" margin-left:auto; margin-right:auto; text-align: center;" class="width-900">
          <p>For mobile ad2</p>
          <br style="clear:both" />
        </div>    
          
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