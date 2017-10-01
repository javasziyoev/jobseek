<?php include ROOT . '/views/layouts/header.php'; ?>




<div id="wrapper">
      <section id="top-jobs-content">
          
          <section id="jobs-at-content">
            <div style="text-align: center; width: 90%; height: 200px; background-color: orange; margin-left: 3%; margin-right: 3%; margin-bottom: 1em;">
              For small add
            </div>
            <?php 
            require_once(ROOT. '/views/site/jobsat.php');
            ?>
          </section>
           
          <section id="featured-jobs-content">
          <h1 class="dark-gray-text">All vacancies by     
          <?php
  echo $province_name = Search::getProvinceById($id); 
?></h1>
<div id="inner-content news-content" style=" margin-left:auto; margin-right:auto;" class="width-900">
        <ul class="all-user-vacancies-ul" style="display: block; margin-top: 1em;">
        <?php        
        
           $i = 0;
           
           while ($i < sizeof($details))
           {
            
            echo '<li id="newsy" style="border-color: #fafafa; width: 100%">
           <a href="/vacancy/details/'.$details[$i][0].'">';
                           echo '<div><strong>';
            echo $details[$i][3].'</strong></div>';
             echo '<div>';
             echo $details[$i][4].' ';

             echo $details[$i][14].'</div> ';
             echo '<div>'.$details[$i][10].'</div>';
            
            echo $details[$i][8];
            
            echo '
            </a>
            </li> <br>';
            $i++;
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

<div class="page">

<?php 
echo $pagination->get();
    ?>

</div>




<?php include ROOT . '/views/layouts/footer.php'; ?>