<?php include ROOT . '/views/layouts/header.php'; ?>



<div id="wrapper" style="margin-top: 25px">
    <section id="main-content news" style="padding: .5% 2%; background-color: #fafafa;">
    <h3 class="dark-gray-text" style="margin-bottom: 1em;">Hello, <?php $userId = User::checkLogged();
                            $sql = 'SELECT * FROM `employer` WHERE employer_id='.$userId;
                            $result = $db->prepare($sql);
                            $result->execute();
                            $users = $result->fetch();
                            if($users=='') $koko=$userId;
                            
                            else $koko=$users['first_name'];
    
    echo $koko.'!'; ?></h3>
    
    <div class="tabs">
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1" title="User Data">CV</label>

            <input id="tab2" type="radio" name="tabs">
            <label for="tab2" title="Sign up 2">Favorites</label>
            
            <input id="tab3" type="radio" name="tabs">
            <label for="tab3" title="Sign up 2">Settings</label>

            
            <section id="content-tab1">
                Заполнение CV
            </section>
            <section id="content-tab2">
                Your favorites:
            </section>
            <section id="content-tab3">
                <div>
                    <h3>Account information:</h3>
                    <br>
                    <div>
                    
                    <form action="#" method ="POST">
                        <label class="info-contact-label block-email margin-right"><strong>Name:</strong></label>
                        <input type = "text" value = <?php echo $koko?>>
                       
                    </div>
                    <div>
                        <label class="info-contact-label block-email margin-right"><strong>Last Name:</strong></label>
                        <input type = "text" value =<?php echo $users['contact_last_name']?>>
                    </div>
                    <div>
                        <label class="info-contact-label block-email margin-right"><strong>Email:</strong></label>
                        <input type = "text" value =<?php  echo $users['contact_email']  ?>>
                    </div>
                 
                    <div>
                        <label class="info-contact-label block-email margin-right"><strong>Cellphone:</strong></label>
                        <input type = "text" value =<?php  echo $users['contact_cellphone']  ?>>
                    </div>
                    <div>
                        <label class="info-contact-label block-email margin-right"><strong>Cellphone ext:</strong></label>
                        <input type = "text" value =<?php  echo $users['contact_cellphone_ext']  ?>>
                    </div>
                    <input type="submit" value="Save" name="submit4" class="post-button" >  
                    
                    </form>
                </div>


            <div style="margin-top: 1em;">  
                <h3>Change password:</h3>
                <h3 id ="correct_passwords" style="color:rgb(239,84,108)"></h3>

<form action="#" name = "passwordform" method ="POST">

                <div><input type="password" name = "passwordold" class="input-text" placeholder="Current Password"></div>
                <div><input type="password" name = "passwordnew" class="input-text" placeholder="New Password"></div>
                <div><input type="password" name = "passwordconf" class="input-text" placeholder="Confirm New Password"></div>
                <h3 id ="incorrect_passwords" style="color:rgb(239,84,108)"></h3>

                <input type="submit" value="Change" name="submit1" class="post-button" >  
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
                        $password=$_POST['passwordold'];
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
    </div>

</section>
</div>




















<div>
<h1>









</h1>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>