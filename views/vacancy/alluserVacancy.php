<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="wrapper" style="margin-top: 25px">


          <!-- ТИмур запили нормальный вывод здесь , спасибо -->
  <section id="main-content news" style="padding: .5% 2%; background-color: #fafafa;">
    <h3 class="dark-gray-text">All vacancies by  ХуйКомпани</h3>
      <div id="inner-content news-content" style=" margin-left:auto; margin-right:auto;" class="width-900">
        <ul class="work-in-industry-ul" style="display: block; margin-top: 2em;">
          <li id="newsy" style="border-color: #fafafa;">
            <div><strong><a href="">Название вакансии 1</a></strong></div>
            <div>Название отрасли</div>
            <div>Date</div>
          </li>
          <li id="newsy" style="border-color: #fafafa;">
            <div><strong><a href="">Название вакансии 2</a></strong></div>
            <div>Название отрасли</div>
            <div>Date</div>
          </li>
          <li id="newsy" style="border-color: #fafafa;">
            <div><strong><a href="">Название вакансии 3</a></strong></div>
            <div>Название отрасли</div>
            <div>Date</div>
          </li>
          <li id="newsy" style="border-color: #fafafa;">
            <div><strong><a href="">Название вакансии 4</a></strong></div>
            <div>Название отрасли</div>
            <div>Date</div>
          </li>
          <li id="newsy" style="border-color: #fafafa;">
            <div><strong><a href="">Название вакансии 5</a></strong></div>
            <div>Название отрасли</div>
            <div>Date</div>
          </li>
          <li id="newsy" style="border-color: #fafafa;">
            <div><strong><a href="">Название вакансии 6</a></strong></div>
            <div>Название отрасли</div>
            <div>Date</div>
          </li>
          <li id="newsy" style="border-color: #fafafa;">
            <div><strong><a href="">Название вакансии 7</a></strong></div>
            <div>Название отрасли</div>
            <div>Date</div>
          </li>
          <li id="newsy" style="border-color: #fafafa;">
            <div><strong><a href="">Название вакансии 8</a></strong></div>
            <div>Название отрасли</div>
            <div>Date</div>
          </li>
          <li id="newsy" style="border-color: #fafafa;">
            <div><strong><a href="">Название вакансии 9</a></strong></div>
            <div>Название отрасли</div>
            <div>Date</div>
          </li>
          <li id="newsy" style="border-color: #fafafa;">
            <div><strong><a href="">Название вакансии 10</a></strong></div>
            <div>Название отрасли</div>
            <div>Date</div>
          </li>
        </ul>
        
        <br style="clear:both">
      </div>    
</section>




 
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




<?php include ROOT . '/views/layouts/footer.php'; ?>