<?php include ROOT . '/views/layouts/header.php'; ?>

<section id="banner-content" >
<div id="mob-ban-but" style="display: inline-flex; text-align: center;">
<?php 
        if (User::isGuest()) 
        {
  echo '<form action="/user/signup" method="post" class="mob-button-44">
  
    <input type="submit" class="button-post" name = "Post_a_CV" value="Register" style="margin-left: 0px; margin-right: 0px;">
    <input type="submit" class="button-post no-mob-view" name ="post_a_vacancy" value="Post a vacancy"></form>
    <form action="/user/signin" method="post" class="mob-button-44" >
    <input type="submit" class="button-post  only-mob-view" name = "Post_a_CV" value="Sign In" style="margin-left: 0px;margin-right: 0px;">
  </form>';}
  else {
    echo'
    <div>
    <form action="/employer/post_a_vacancy" method="post" ">
    <input type="submit" class="button-post" name ="post_a_vacancy" value="Post a vacancy">
    </div>
    </form>';
  }
  ?>
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
              <h3 class="dark-gray-text">Jobs At Provinces</h3>
              <div>
                  <ul>
                  <?php
                      <li>
                        <div>
                          <span><a href="" class="dark-gray-text">Microsoft</a></span>
                          <span class="jobs-count">42</span>
                        </div>
                      </li>
                  ?>
                  </ul>
              </div>  
          </section>
           
          <section id="featured-jobs-content">
            <h3 class="dark-gray-text">News</h3>
            <div class="vacancies-of-the-day" id="inner-content" style="padding-left: 0px;">
                      <?php            
              
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