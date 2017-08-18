<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="wrapper">
      <section id="post-a-vacancy-content">
        <h3 class="dark-gray-text">Post a vacancy</h3>
        <div>
          <form action="" method="POST">
            <input name ="position" type="text" name="position" placeholder="Position"><br>
            <input name ="salary"   type="text" name="salary" placeholder="Salary">
              <select name ='curency'  class="select-category">
                 <?php
                
                require_once('/models/User.php');
                 $curr=User::getCurrent();
                 foreach($curr as $current)
                 {
echo'<option value='.$current['currency_id'].'>'.$current['currency_code'].'</option>';
                 }
                 ?>
                  
              </select><br>
            <input name ="required_experience" type="text" name="salary" placeholder="Required experience"><br>
            Select industry: 
            <select name = 'industry'class="select-category">
               
            <?php
            
            require_once('/models/User.php');
             $curr=User::getIndustry();
             foreach($curr as $current)
             {
echo'<option value='.$current['industry_id'].'>'.$current['industry_name'].'</option>';
             }
             ?>
            </select><br>
            Employment type: 
            <select name ="employment_type" class="select-category">
            <?php
            
            require_once('/models/User.php');
             $curr=User::getEmployment_type();
             foreach($curr as $current)
             {
echo'<option value='.$current['employment_type_id'].'>'.$current['employment_type_name'].'</option>';
             }
             ?>
            </select><br>
            City: <select name = "city" class="select-category">
            <?php
            
            require_once('/models/User.php');
             $curr=User::getcity();
             foreach($curr as $current)
             {
echo'<option value='.$current['city_id'].'>'.$current['city_name'].'</option>';
             }
             ?>            </select><br>

            Address:
            
             <input name = "address" type="text"><br>
             <textarea name = "short" placeholder="Short Description"></textarea><br>

            <textarea name = "info" placeholder="Info"></textarea><br>

            <input name  = "submit" type="submit" value="Post a vacancy">
          </form>
        </div>
      </section>
    </div>


<?php include ROOT . '/views/layouts/footer.php'; ?>
