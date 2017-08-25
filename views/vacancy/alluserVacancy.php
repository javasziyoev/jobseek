<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="wrapper" style="margin-top: 25px">


          <!-- ТИмур запили нормальный вывод здесь , спасибо -->
  <section id="main-content news" style="padding: .5% 2%; background-color: #fafafa;">
  <h3 class="dark-gray-text">All vacancies by     <?php
  
           $db = Db::getConnection();
           
$getFJobId = UserVacancs::getEmployer();

$sql = 'SELECT * FROM `employer` WHERE employer_id='.$getFJobId[0]['employer_id'];
$result=$db->prepare($sql);
$result->execute();
$user = $result->fetch();
echo $user['company_name'];  
?></h3>
<div id="inner-content news-content" style=" margin-left:auto; margin-right:auto;" class="width-900">
        <ul class="all-user-vacancies-ul" style="display: block; margin-top: 2em;">
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




 </div>




<?php include ROOT . '/views/layouts/footer.php'; ?>