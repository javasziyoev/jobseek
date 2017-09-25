<?php include ROOT . '/views/layouts/header.php'; $i=1;?>



<div id="wrapper" style="margin-top: 25px">
    <section id="sign-up-content">
        <section id="main-content news" style="padding: .5% 2%;">
        <h3 class="dark-gray-text" style="margin-bottom: 1em;">Hello, 
            <?php 
                $userId = User::checkLogged();
                $sql = 'SELECT * FROM `employer` WHERE employer_id='.$userId;
                $result = $db->prepare($sql);
                $result->execute();
                $users = $result->fetch();
                if ($users=='') $koko=$userId;
                else $koko=$users['first_name'];
                echo $koko.'!'; 
            ?>
        </h3>


        <div class="tabs">
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1" title="User Data">Posted Vacancies</label>

            <input id="tab2" type="radio" name="tabs">
            <label for="tab2" title="Sign up 2">Post New Vacancy</label>
            

            <input id="tab3" type="radio" name="tabs" checked>
            <label for="tab3" title="Sign up 2">Settings</label>

            
            <section id="content-tab1">
                тут все вакансии эмплоера, надо сделать еще кнопку удаления вакансии
            </section>

            <section id="content-tab2">
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

            <section id="content-tab3">
            <div>
                <h3>Account information:</h3>
                <br>
                <div>
                
                <form enctype="multipart/form-data" action="#" method ="POST">
                    <label class="info-contact-label block-email margin-right "><strong>Name:</strong></label>
                    <input name ="name" type = "text" value = <?php echo $koko?> class="input-text mob-button-100 wid-100 ">
                   
                </div>
                <div>
                    <label class="info-contact-label block-email margin-right"><strong>Last Name:</strong></label>
                    <input class="input-text mob-button-100 wid-100 " name="lastname" type = "text" value =<?php echo $users['contact_last_name']?>>
                </div>
                <div>
                    <label class="info-contact-label block-email margin-right"><strong>Email:</strong></label>
                    <input class="input-text mob-button-100 wid-100 " name = "email" type = "text" value =<?php  echo $users['contact_email']  ?> >
                </div>
             
                <div>
                    <label class="info-contact-label block-email margin-right"><strong>Cellphone:</strong></label>
                    <input class="input-text mob-button-100 wid-100 " name ="cellphone1" type = "text" value =<?php  echo $users['contact_cellphone']  ?>>
                </div>
                <div>
                    <label class="info-contact-label block-email margin-right"><strong>Cellphone ext:</strong></label>
                    <input class="input-text mob-button-100 wid-100 " name = "cellphone2" type = "text" value =<?php  echo $users['contact_cellphone_ext']  ?>>
                    <input  type="file" value="CV" name="cv" accept=".docx , .rtf , .doc" >  
                </div>
                <input class="post-button wid-100 " type="submit" onclick="window.location.href='549485'" value="Save" name="submit4">  
                
                </form>
                <?php 
                if(isset($_POST['submit4']))
                {
                    $uploads_dir = '/template/img';
                    
                    $tmp_name = $_FILES['cv']['tmp_name'];
                    $name = basename($_FILES['cv']['name']);
                
                    move_uploaded_file($tmp_name, ROOT."/$uploads_dir/$name");
                $sql='UPDATE `employer` SET `first_name`= "'.$_POST['name'].'", `contact_last_name`="'.$_POST['lastname'].'",`contact_email`="'.$_POST['email'].'",`contact_cellphone`="'.$_POST['cellphone1'].'",`contact_cellphone_ext`="'.$_POST['cellphone2'].'" WHERE employer_id='.$userId;
              
                $result = $db->prepare($sql);
                $result->execute();
                echo "<script>window.location.href=''</script>";

            }


                echo '<h5 style="color:#8cb900">Changes saved.</h5>';
                
              ?>
                
                
            
            </div>


        <div style="margin-top: 1em;">  
            <h3>Change password:</h3>
            <h3 id ="correct_passwords" style="color:rgb(239,84,108)"></h3>

<form  action="#" name = "passwordform" method ="POST">

            <div><input type="password" name = "passwordold" class="input-text mob-button-100 wid-100 " placeholder="Current Password"></div>
            <div><input type="password" name = "passwordnew" class="input-text mob-button-100 wid-100 " placeholder="New Password"></div>
            <div><input type="password" name = "passwordconf" class="input-text mob-button-100 wid-100 " placeholder="Confirm New Password"></div>
            <h3 id ="incorrect_passwords" style="color:rgb(239,84,108)"></h3>

            <input type="submit" value="Change" name="submit1" class="post-button mob-button-100 wid-100 " >  
            
             </form>
             <script>
             document.forms.passwordform.onsubmit = function(){
if(document.forms.passwordform.passwordnew.value==document.forms.passwordform.passwordconf.value)
{
if(document.forms.passwordform.passwordnew.value=='')
{
      window.event.preventDefault();
document.getElementById('incorrect_passwords').innerHTML='Please fill the new password field';
}

}
else{

window.event.preventDefault();
  document.getElementById('incorrect_passwords').innerHTML='Passwords do not match. Please correct this';
}}



             </script>

                <?php if(isset($_POST['submit1']))
                {     if($_POST['passwordold']){
                    
                    $password = $_POST['passwordold'];
                     $password = md5($password);
                   
                   
                     if($users==''){

                     }
                     else {
                        $sql='  SELECT `contact_password` FROM `employer` WHERE employer_id='.$userId;
                        $result = $db->prepare($sql);
                        $result->execute();
                        $users = $result->fetch(); 
                        if($password==$users['contact_password']){
                        $sql = 'UPDATE `employer` SET `contact_password`="'.md5($_POST['passwordnew']).'" WHERE employer_id='.$userId;
                        $result = $db->prepare($sql);
                        $result->execute();
                        echo '<h3 style="color:#8cb900"> Password was succesful changed</h3>';
                        }
                        else echo '<div style="color:rgb(239,84,108) ">neverniy password</div>';

                     }
                     // $user=User::checkUserData(,$password);
                  //   $sql="select"
                }
                }    
                ?>
            </div>
    </section>

            <section id="content-tab4">
            </section>

</div>
</section>
</section>
</div>





<?php include ROOT . '/views/layouts/footer.php'; ?>