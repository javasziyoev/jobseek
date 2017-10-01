<?php include ROOT . '/views/layouts/header.php'; ?>




<div id="wrapper">
      <section id="top-jobs-content">
          
          <section id="jobs-at-content">
            <div style="text-align: center; width: 90%; height: 200px; background-color: orange; margin-left: 3%; margin-right: 3%; margin-bottom: 1em;">
              For small add
            </div>
              
              <div>
                  <ul>
                  <?php
                  include (ROOT. '/views/site/jobsat.php');
                  ?>
                  </ul>
              </div>  
          </section>
           
          <section id="featured-jobs-content">
          <h1 class="dark-gray-text">All vacancies by     <?php
  
           $db = Db::getConnection();
           
$getFJobId = UserVacancs::getEmployer();

$sql = 'SELECT * FROM `employer` WHERE employer_id='.$getFJobId[0]['employer_id'];
$result=$db->prepare($sql);
$res = $result->execute();
print_r($res);
if($res == true){
$user = $result->fetch();
echo $user['company_name'];  
?></h1>
<div id="inner-content news-content" style=" margin-left:auto; margin-right:auto;" class="width-900">
        <ul class="all-user-vacancies-ul" style="display: block; margin-top: 1em;">
        <?php            
        
           $details =  Details::tagSearch();
           
           foreach($getFJobId as $getJobs)
           {
            
            echo '<li id="newsy" style="border-color: #fafafa; width: 100%">
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
            </li><br>';
           }  
          }
          else echo '<h3>No Vacancies</h3>'      
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