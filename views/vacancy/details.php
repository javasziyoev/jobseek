<?php include ROOT . '/views/layouts/header.php'; ?>



<div id="wrapper">
    <section id="vacancy-details-content">
    <?php require_once(ROOT.'/models/Details.php') ;
                 $details =  Details::tagSearch();
                 
    ?>
        <h1 class="vacancy-name"><?php  echo $details[0]['position'];?></h1>
        <h2> <a href="" class="company-name">  <?php 
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
        </div>

        <div class="vacancy-info">
        <?php  echo $details[0]['info'];?>
           
        </div>

        <div>
            <label class="info-label block-emp">Employment type:</label>
            <span style="display: block; margin-bottom: 1em;"><?php  echo $details[4]['employment_type_name'];?></span>
        </div>
        <div>
            <label class="info-label block-cont">Contact information:</label>
            <span style="display: block; margin-bottom: .8em;"><?php 
        echo $details[1]['contact_first_name'].'  '.$details[1]['contact_last_name'];
        
        ?></span>
            <div>
                
                
                <span><?php 
        echo $details[1]['contact_cellphone'];
        echo '<br/>'.$details[1]['contact_cellphone_ext'];
        
        ?></span>
            </div>
            <div>
                <label class="info-contact-label block-email">Email:</label>
                <span><?php 
        echo $details[1]['contact_email'];
        
        ?></span>
            </div>
        </div>
        <a href = "/vacancy/all/<?php echo $details[1]['employer_id']; ?>">Look to all vacancies of this employer </a>

        <!-- <input type="submit" value="Respond" class="post-button respond-button"> -->
    </section>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>