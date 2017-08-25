<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="wrapper">
<section id="sign-up-content">
  <div id="inner-content-thin">
      <section id="post-a-vacancy-content">
        <h3 class="dark-gray-text" style="text-align: center; margin-bottom: 1em;">Post a vacancy</h3>
        <div>
          <form action="" method="POST">
            <input name ="position" type="text" name="position" placeholder="Position" class="input-text mob-button-100 wid-100"><br>
            <input name ="salary"   type="text" name="salary" placeholder="Salary" class="input-text mob-button-100 wid-100">
              <select name ='curency'  class="select-category mob-button-100 wid-100">
                 <?php 
          
                
               
                 $curr=User::getCurrent();
                 foreach($curr as $current)
                 {
echo'<option value='.$current['currency_id'].'>'.$current['currency_code'].'</option>';
                 }
                 ?>
                  
              </select><br>
            <input name ="required_experience" type="text" name="salary" placeholder="Required experience" class="input-text mob-button-100 wid-100"><br>
            <label style="margin-left: .3em;"><strong>Select industry:</strong></label>
            <select name = 'industry'class="select-category wid-100">
               
            <?php
            
            
             $curr=User::getIndustry();
             foreach($curr as $current)
             {
echo'<option value='.$current['industry_id'].'>'.$current['industry_name'].'</option>';
             }
             ?>
            </select>
            <label style="margin-left: .3em;"><strong>Employment type:</strong></label>
            <select name ="employment_type" class="select-category mob-button-100 wid-100">
            <?php
            
           
             $curr=User::getEmployment_type();
             foreach($curr as $current)
             {
echo'<option value='.$current['employment_type_id'].'>'.$current['employment_type_name'].'</option>';
             }
             ?>
            </select>
            <label style="margin-left: .3em;"><strong>City:</strong></label><select name = "city" class="select-category mob-button-100 wid-100">
            <?php
            
            
             $curr=User::getcity();
             foreach($curr as $current)
             {
echo'<option value='.$current['city_id'].'>'.$current['city_name'].'</option>';
             }
             ?>            </select>

             <input name = "address" type="text" class="input-text mob-button-100 wid-100" placeholder="Address">
             <textarea name = "short" placeholder="Short Description" class="input-text short-descr mob-button-100 wid-100"></textarea><br>

            <textarea name = "info" placeholder="Info" class="input-text descr mob-button-100 wid-100"></textarea><br>

            <input name  = "submit" type="submit" value="Post a vacancy" class="post-button mob-button-100 wid-100" >
          </form>
        </div>
      </section>
    </div>
            </section>
            </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
