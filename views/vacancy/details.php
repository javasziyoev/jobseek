<?php include ROOT . '/views/layouts/header.php'; ?>


<div id="wrapper">
      <section id="top-jobs-content">
          
          <section id="jobs-at-content">
            <div style="text-align: center; width: 90%; height: 200px; background-color: orange; margin-left: 3%; margin-right: 3%; margin-bottom: 1em;">
              For small add
            </div>
    
              <?php 
                include (ROOT. '/views/site/jobsat.php');
              ?>
          </section>
           
          <section id="vacancy-details-content" style="margin-left: 1em;">
          <?php 
                 $details =  Details::tagSearch();
                 
    ?>
        <h2 class="vacancy-name"><?php  echo $details[0]['position'];?></h2>
        <h2>  <a href = "/vacancy/all/<?php echo $details[1]['employer_id']; ?>" class="company-name">  <?php 
        echo $details[1]['company_name'];
        
        ?></a></h2>

        <div class="vacancy-properties">
            <div class="salary-content">
                <label class="salary-level">Salary</label>
                <span class="salary-value"><?php  echo $details[0]['salary'].'  '.$details[3]['currency_code'];?></span>
            </div>

            <div class="salary-content">
                <label class="salary-level">City</label>
                <span class="salary-value"><?php  echo $details[2]['city_name'];?></span>
            </div>

             <div class="salary-content">
                <label class="salary-level">Required experience</label>
                <span class="salary-value"><?php  echo $details[0]['required_experience'];?></span>
            </div> 
            <div class="salary-content">
                <label class="salary-level">Post date</label>    
                <span class="salary-value"><?php  echo $details[0]['post_date'];?></span>
            </div> 

        </div>

        <div class="vacancy-info">
        <?php  echo $details[0]['info'];?>
           
        </div>

        <div>
            <label class="info-label block-emp"><strong>Employment type:</strong></label>
            <span style="display: block; margin-bottom: 1em;"><?php  echo $details[4]['employment_type_name'];?></span>
        </div>
        <div>
            <label class="info-label block-cont"><strong>Contact information:</strong></label>
            <span style="display: block; margin-bottom: .8em;"><?php 
        echo $details[1]['first_name'].'  '.$details[1]['contact_last_name'];
        
        ?></span>
            <div>
                
                
                <span><?php 
        echo $details[1]['contact_cellphone'];
        echo '<br/>'.$details[1]['contact_cellphone_ext'];
        
        ?></span>
            </div>
            <div>
                <label class="info-contact-label block-email"><strong>Email:</strong></label>
                <span><?php 
        echo $details[1]['contact_email'];
        
        ?></span>
            </div>
        </div>
        <a href = "/vacancy/all/<?php echo $details[1]['employer_id']; ?>">Look to all vacancies of this employer </a>

        <!-- <input type="submit" value="Respond" class="post-button respond-button"> -->
          </section>


          <section id="reklama-bleat">
          Отключите блокировщик рекламы плес.
          </section>
      </section>


</div>



<?php include ROOT . '/views/layouts/footer.php'; ?>