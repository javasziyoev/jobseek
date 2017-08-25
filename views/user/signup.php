
<?php include ROOT . '/views/layouts/header.php'; 
?>

<div id="wrapper">
      <section id="sign-up-content">
        <div class="tabs">
            <input id="tab1" type="radio" name="tabs" <?php if($i == 0)echo 'checked';  ?> >
            <label for="tab1" title="Sign up 1">Job Seeker Sign Up</label>

            <input id="tab2" type="radio" name="tabs" <?php if($i == 1)echo 'checked'; if($k == 1)echo 'checked'; ?> >
            <label for="tab2" title="Sign up 2">Employer Sign Up</label>
            
            <section id="content-tab1">
                <form action="#" method="POST">

                <div>  <div id = "firstname"></div> 
                    <input type="text" name = "firstname" value="<?php echo $firstname; ?>" class="input-text mob-button-100 wid-100 " placeholder="Name">
                </div>
                <div>  <div id = "lastname"></div> 
                    <input type="text" name = "lastname" value="<?php echo $lastname; ?>" class="input-text mob-button-100 wid-100 " placeholder="Last name">
                </div>
                
                <div>  <div id = "email"></div> 
                    <input type="email" name = "email" value="<?php echo $email; ?>" class="input-text mob-button-100 wid-100 " placeholder="Email">
                </div>
                <div>  <div id = "password"></div> 
                    <input type="password" name = "password" value="<?php echo $password; ?>" class="input-text mob-button-100 wid-100 " placeholder="Password">
                </div>
                <div>  <div id = "cellphone"></div> 
                    <input type="text" name = "cellphone" value="<?php echo $cellphone; ?>" class="input-text mob-button-100 wid-100 " placeholder="Phone number">
                </div>
                <small>By clicking "register", you acknowledge that you read and fully agree
                                with the terms of use if the website.
                            </small><br>
                <p><input type="checkbox" name="agree" onclick="agreeForm(this.form)"> 
    I agree with  <a href = "/site/agreement">agreement</a> 
    
    </p>

                <input type="submit" value="Register" name="submit1" class="post-button mob-button-100 wid-100 " disabled>
            </form>
            <script> 
                
function agreeForm(f) {
   
if (f.firstname.value!="")
  {   f.submit1.disabled=0;
if(f.lastname.value!="")
  { f.submit1.disabled=0;
    if(f.email.value!="")
      { f.submit1.disabled=0;
        if(f.password.value!="")
          { f.submit1.disabled=0;
           
          } else   {   f.submit1.disabled=1;            if(f.agree.checked) f.agree.checked=0;
}
      }
    else   {   f.submit1.disabled=1;            if(f.agree.checked) f.agree.checked=0;
}
  }  else   {   f.submit1.disabled=1;            if(f.agree.checked) f.agree.checked=0;
}

  }
  else   {   f.submit1.disabled=1;
            if(f.agree.checked) f.agree.checked=0;
         }

if(!f.agree.checked) { //alert('please fil necessary fields');
checking();
                      }
                      else checking();

                      function checking(){ 
       if (f.firstname.value=="") 
            document.getElementById('firstname').innerHTML='<small class="error">Please fill name</small>';
else document.getElementById('firstname').innerHTML="";
if(f.lastname.value=="")
              document.getElementById('lastname').innerHTML='<small class="error">Please fill lastname</small>';
        else document.getElementById('lastname').innerHTML="";

    if(f.email.value=="")
     document.getElementById('email').innerHTML='<small class="error">Please fill email</small>';
     else document.getElementById('email').innerHTML="";

        if(f.password.value=="")
                      document.getElementById('password').innerHTML='<small class="error">Please fill password</small>';
                else document.getElementById('password').innerHTML="";

          }

   }

</script>

            <div style="width:48%;height:40%;margin:auto;position:relative;top:-292px;float:right;">
            <?php if (isset($a_errors) && is_array($a_errors)): ?>
                        <ul style="list-style-type: none; ">
                            <?php foreach ($a_errors as $error): ?>
                                <li style="color:rgb(239,84,108);margin:10px;text-decoration:underline;"> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
            <?php endif; ?>
            </div>
            </section>

            <section id="content-tab2">
                    <form action="#" method = "POST">

                        <div>
                            <div>
                                <select name = "selectclass" class="select-category mob-button-100 wid-100 ">
                                    <?php
                                   
                                     $fuck = User::getCompany();       
                                            foreach($fuck as $Duck)
                                            {
                                             echo '<option value = '.$Duck['company_class_id'].'>';
   

                                              echo ''.$Duck['class_name'].'</option>';
                                            }
                                    ?>
                                </select>
                            </div>
                            <div>  <div id = "Company_name"></div>     
                                <input name="Company_name" type="text" placeholder="Company name" value="<?php echo $company_name; ?>" class="input-text company-name mob-button-100 wid-100 ">
                            </div>
                            <div> <div id = "Website"></div>  
                                <input name="Website" type="text" placeholder="Website" value="<?php echo $website; ?>" class="input-text mob-button-100 wid-100 ">
                            </div>
                           
                            <div>
                                <select name = "selectCity" class="select-category select-city mob-button-100 wid-100 ">
                                <?php
                                
                                 $fuck = User::getcity();       
                                        foreach($fuck as $Duck)
                                        {
                                         echo '<option value = '.$Duck['city_id'].'>';


                                          echo ''.$Duck['city_name'].'</option>';
                                          $i++;
                                        }



                                ?>                                </select>
                            </div>
                            <label style="margin-top: 1em; margin-bottom: .5em;"><strong>Contact person</strong> (confidential)</label>
                            <div>  <div id = "Name"></div>                 
                                <input name ="Name" type="text" placeholder="Name" value="<?php echo $name; ?>" class="input-text mob-button-100 wid-100 ">
                            </div>
                            <div> <div id = "Last_name"></div>
                                <input  name = "Last_name"type="text" placeholder="Last name" value = "<?php echo $last_name; ?>" class="input-text mob-button-100 wid-100 ">
                            </div>
                            <div><div id = "Email_e"></div>  
                                <input name ="Email_e" type="email" placeholder="Email" value="<?php echo $email_e; ?>" class="input-text mob-button-100 wid-100 ">
                            </div>
                            <div> <div id = "password_e"></div>   
                                <input name ="password_e" type="password" placeholder="Password" class="input-text mob-button-100 wid-100 ">
                            </div>
                            <div><div id = "Phone_number"></div>   
                                <input name="Phone_number" type="text" placeholder="Phone number" <?php echo $phone_number; ?> class="input-text mob-button-100 wid-100 ">
                            </div>
                            <div>
                                <input name="Extension_number" type="text" placeholder="Extension number" value="<?php echo $extension_number; ?>" class="input-text mob-button-100 wid-100 ">
                            </div>
                            <small>By clicking "register", you acknowledge that you read and fully agree
                                with the terms of use if the website.
                            </small><br>
                            <p><input type="checkbox" name="agree" onclick="agreeForm1(this.form)"> 
                            I agree with  <a href = "/site/agreement">agreement</a> 
                            </p>
                            <input type="submit" name="submit2" value="Register" class="post-button mob-button-100 wid-100 ">
                            <div style="width:48%;height:auto;float:right;position:relative;top:-450px;">
                            <?php if (isset($e_errors) && is_array($e_errors)): ?>
                        <ul style="list-style-type: none; ">
                            <?php foreach ($e_errors as $error): ?>
                                <li style="color:rgb(239,84,108);margin:10px;"> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
            <?php endif; ?>
                                    </div>
                        </form>
                        <script> 
                                       
function agreeForm1(f) {
   
if (f.Company_name.value!="")
  {   f.submit2.disabled=0;
if(f.Website.value!="")
  { f.submit2.disabled=0;
    if(f.Name.value!="")
      { f.submit2.disabled=0;
        if(f.Last_name.value!="")
          { f.submit2.disabled=0;
            if(f.Email_e.value!="")
              { f.submit2.disabled=0;
                 if(f.password_e.value!="")
              { 
                
                f.submit2.disabled=0;
                 if(f.Phone_number.value!="")
              { 
                
                f.submit2.disabled=0;
                 
           }
           else   {   f.submit2.disabled=1;            if(f.agree.checked) f.agree.checked=0;}
           }
           else   {   f.submit2.disabled=1;            if(f.agree.checked) f.agree.checked=0;}
           
              }
           else   {   f.submit2.disabled=1;            if(f.agree.checked) f.agree.checked=0;}
           
           
          } else   {   f.submit2.disabled=1;            if(f.agree.checked) f.agree.checked=0;
}
      }
    else   {   f.submit2.disabled=1;            if(f.agree.checked) f.agree.checked=0;
}
  }  else   {   f.submit2.disabled=1;            if(f.agree.checked) f.agree.checked=0;
}

  }
  else   {   f.submit2.disabled=1;
            if(f.agree.checked) f.agree.checked=0;
         }

if(!f.agree.checked) {//alert('please fil necessary fields');
checking1();
                      }
                      else checking1();

function checking1(){ 
       if (f.Company_name.value=="") 
            document.getElementById('Company_name').innerHTML='<small class="error">Please fill Company_name</small>';
else document.getElementById('Company_name').innerHTML="";
   if (f.Website.value=="") 
            document.getElementById('Website').innerHTML='<small class="error">Please fill Website</small>';
else document.getElementById('Website').innerHTML="";
     if (f.Name.value=="") 
            document.getElementById('Name').innerHTML='<small class="error">Please fill name</small>';
else document.getElementById('Name').innerHTML="";
     if (f.Company_name.value=="") 
            document.getElementById('Last_name').innerHTML='<small class="error">Please fill Last_name</small>';
else document.getElementById('Last_name').innerHTML="";
     if (f.Company_name.value=="") 
            document.getElementById('Email_e').innerHTML='<small class="error">Please fill Email_e</small>';
else document.getElementById('Email_e').innerHTML="";
     if (f.Company_name.value=="") 
            document.getElementById('password_e').innerHTML='<small class="error">Please fill password_e</small>';
else document.getElementById('password_e').innerHTML="";
     if (f.Company_name.value=="") 
            document.getElementById('Phone_number').innerHTML='<small class="error">Please fill Phone_number</small>';
else document.getElementById('Phone_number').innerHTML="";
   }
}
</script>
            </section>
        </div>
      </section>

    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>