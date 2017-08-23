<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="wrapper" style="margin-top: 25px">
<section id="featured-jobs-content">
            <h3 class="dark-gray-text">All vacancies by     <?php
                   
                            $db = Db::getConnection();
                            
                $getFJobId = UserVacancs::getEmployer();

            $sql = 'SELECT * FROM `employer` WHERE employer_id='.$getFJobId[0]['employer_id'];
            $result=$db->prepare($sql);
            $result->execute();
            $user = $result->fetch();
           echo $user['company_name'];  
            ?></h3>
            <div class="vacancies-of-the-day" id="inner-content" style="padding-left: 0px;">
                      <?php            
             
                $details =  Details::tagSearch();
                
                foreach($getFJobId as $getJobs)
                {
                 
                 echo '<div class="vacancies-of-the-day-item ">
                <a href="/vacancy/details/'.$getJobs['vacancy_id'].'">';
                                echo ' <span class="vacancy-of-the-day-title">';
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
                 echo '<a href=""><span class="vacancy-of-the-day-company">';
                 echo $job['company_name'];
                 echo '</span></a></a>
                 </div>';
                }        
                   ?>
                
              
            </div>  
          </section></div>

          <!-- ТИмур запили нормальный вывод здесь , спасибо -->
          <section id="main-content news" style="padding: .5% 2%; background-color: #fafafa;">
        <div id="inner-content news-content" style=" margin-left:auto; margin-right:auto;" class="width-900">
          <ul class="work-in-industry-ul" style="display: inline-flex; margin-top: 0;">
            <div id="newsy" style="border-color: #fafafa;">
              <div><strong><a href="">Название вакансии 1</a></strong></div>
              <div>Название отрасли</div>
              <div>Date</div>
            </div>
            <div id="newsy" style="border-color: #fafafa;">
              <div><strong><a href="">Название вакансии 1</a></strong></div>
              <div>Название отрасли</div>
              <div>Date</div>
            </div>
            <div id="newsy" style="border-color: #fafafa;">
              <div><strong><a href="">Название вакансии 1</a></strong></div>
              <div>Название отрасли</div>
              <div>Date</div>
            </div>
            <div id="newsy" style="border-color: #fafafa;">
              <div><strong><a href="">Название вакансии 1</a></strong></div>
              <div>Название отрасли</div>
              <div>Date</div>
            </div>
            <div id="newsy" style="border-color: #fafafa;">
              <div><strong><a href="">Название вакансии 1</a></strong></div>
              <div>Название отрасли</div>
              <div>Date</div>
            </div>
            <div id="newsy" style="border-color: #fafafa;">
              <div><strong><a href="">Название вакансии 1</a></strong></div>
              <div>Название отрасли</div>
              <div>Date</div>
            </div>
            <div id="newsy" style="border-color: #fafafa;">
              <div><strong><a href="">Название вакансии 1</a></strong></div>
              <div>Название отрасли</div>
              <div>Date</div>
            </div>
            <div id="newsy" style="border-color: #fafafa;">
              <div><strong><a href="">Название вакансии 1</a></strong></div>
              <div>Название отрасли</div>
              <div>Date</div>
            </div>
            <div id="newsy" style="border-color: #fafafa;">
              <div><strong><a href="">Название вакансии 1</a></strong></div>
              <div>Название отрасли</div>
              <div>Date</div>
            </div>
            <div id="newsy" style="border-color: #fafafa;">
              <div><strong><a href="">Название вакансии 1</a></strong></div>
              <div>Название отрасли</div>
              <div>Date</div>
            </div>
          </ul>
          
          <br style="clear:both">
        </div>    
          
      </section>



<?php include ROOT . '/views/layouts/footer.php'; ?>