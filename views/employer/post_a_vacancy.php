<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="wrapper">
  <div id="inner-content-thin">
      <section id="post-a-vacancy-content">
        <h3 class="dark-gray-text">Post a vacancy</h3>
        <div>
          <form action="" method="POST">
            <input name ="position" type="text" name="position" placeholder="Position" class="input-text"><br>
            <input name ="salary"   type="text" name="salary" placeholder="Salary" class="input-text">
              <select name ='curency'  class="select-category">
                 <?php 
          
                
               
                 $curr=User::getCurrent();
                 foreach($curr as $current)
                 {
echo'<option value='.$current['currency_id'].'>'.$current['currency_code'].'</option>';
                 }
                 ?>
                  
              </select><br>
            <input name ="required_experience" type="text" name="salary" placeholder="Required experience" class="input-text"><br>
            <p>Select industry: 
            <select name = 'industry'class="select-category">
               
            <?php
            
            
             $curr=User::getIndustry();
             foreach($curr as $current)
             {
echo'<option value='.$current['industry_id'].'>'.$current['industry_name'].'</option>';
             }
             ?>
            </select></p>
            <p>Employment type: 
            <select name ="employment_type" class="select-category">
            <?php
            
           
             $curr=User::getEmployment_type();
             foreach($curr as $current)
             {
echo'<option value='.$current['employment_type_id'].'>'.$current['employment_type_name'].'</option>';
             }
             ?>
            </select></p>
            <p>City: <select name = "city" class="select-category">
            <?php
            
            
             $curr=User::getcity();
             foreach($curr as $current)
             {
echo'<option value='.$current['city_id'].'>'.$current['city_name'].'</option>';
             }
             ?>            </select></p>

            <p>Address:
            
             <input name = "address" type="text" class="input-text"></p>
             <textarea name = "short" placeholder="Short Description" class="input-text short-descr"></textarea><br>

            <textarea name = "info" placeholder="Info" class="input-text descr"></textarea><br>

            <input name  = "submit" type="submit" value="Post a vacancy" class="post-button" style="width: 150px;">
          </form>
        </div>
      </section>
    </div>
            </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
