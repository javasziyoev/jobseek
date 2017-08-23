
<?php include ROOT . '/views/layouts/header.php'; 
?>

<div id="wrapper">
      <section id="sign-up-content">
        <div class="tabs">
            <input id="tab1" type="radio" name="tabs" <?php if($i == 0)echo 'checked';  ?> >
            <label for="tab1" title="Sign up 1">Job seeker registration</label>

            <input id="tab2" type="radio" name="tabs" <?php if($i == 1)echo 'checked'; if($k == 1)echo 'checked'; ?> >
            <label for="tab2" title="Sign up 2">Employer registration</label>
            
            <section id="content-tab1">
                <form action="#" method="POST">

                <div>  <div id = "firstname"></div> 
                    <input type="text" name = "firstname" value="<?php echo $firstname; ?>" class="input-text" placeholder="Name">
                </div>
                <div>  <div id = "lastname"></div> 
                    <input type="text" name = "lastname" value="<?php echo $lastname; ?>" class="input-text" placeholder="Last name">
                </div>
                
                <div>  <div id = "email"></div> 
                    <input type="email" name = "email" value="<?php echo $email; ?>" class="input-text" placeholder="Email">
                </div>
                <div>  <div id = "password"></div> 
                    <input type="password" name = "password" value="<?php echo $password; ?>" class="input-text" placeholder="Password">
                </div>
                <div>  <div id = "cellphone"></div> 
                    <input type="text" name = "cellphone" value="<?php echo $cellphone; ?>" class="input-text" placeholder="Phone number">
                </div>
                <p><input type="checkbox" name="agree" onclick="agreeForm(this.form)"> 
    I agree </p>

                <input type="submit" value="Register" name="submit1" class="post-button" disabled>
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
            if(f.cellphone.value!="")
              { f.submit1.disabled=0;
                
              } else   {   f.submit1.disabled=1;            if(f.agree.checked) f.agree.checked=0;
}
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

if(!f.agree.checked) {alert('please fil necessary fields');
checking();
                      }
                      else checking();

                      function checking(){ 
       if (f.firstname.value=="") 
            document.getElementById('firstname').innerHTML="<p>Please feel name</p>";
else document.getElementById('firstname').innerHTML="";
if(f.lastname.value=="")
              document.getElementById('lastname').innerHTML="<p color='red'>Please feel lastname</p>";
        else document.getElementById('lastname').innerHTML="";

    if(f.email.value=="")
     document.getElementById('email').innerHTML="<p color='red'>Please feel email</p>";
     else document.getElementById('email').innerHTML="";

        if(f.password.value=="")
                      document.getElementById('password').innerHTML="<p color='red'>Please feel password</p>";
                else document.getElementById('password').innerHTML="";

            if(f.cellphone.value=="")
                            document.getElementById('cellphone').innerHTML="<p color='red'>Please feel cellphone</p>"; 
                      else document.getElementById('cellphone').innerHTML="";}

   }

</script><style>p
{
color:red;}</style>;

            <div style="width:48%;height:40%;margin:auto;position:relative;top:-292px;float:right;">
            <?php if (isset($a_errors) && is_array($a_errors)): ?>
                        <ul style="list-style-type: none; ">
                            <?php foreach ($a_errors as $error): ?>
                                <li style="color:red;margin:10px;text-decoration:underline;"> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
            <?php endif; ?>
            </div>
            </section>

            <section id="content-tab2">
                    <form action="#" method = "POST">

                        <div>
                            <div>
                                <select name = "selectclass" class="select-category">
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
                                <input name="Company_name" type="text" placeholder="Company name" value="<?php echo $company_name; ?>" class="input-text company-name">
                            </div>
                            <div> <div id = "Website"></div>  
                                <input name="Website" type="text" placeholder="Website" value="<?php echo $website; ?>" class="input-text">
                            </div>
                           
                            <div>
                                <select name = "selectCity" class="select-category select-city">
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
                            <label><strong>Contact person</strong> (confidential)</label>
                            <div>  <div id = "Name"></div>                 
                                <input name ="Name" type="text" placeholder="Name" value="<?php echo $name; ?>" class="input-text">
                            </div>
                            <div> <div id = "Last_name"></div>
                                <input  name = "Last_name"type="text" placeholder="Last name" value = "<?php echo $last_name; ?>" class="input-text">
                            </div>
                            <div><div id = "Email_e"></div>  
                                <input name ="Email_e" type="email" placeholder="Email" value="<?php echo $email_e; ?>" class="input-text">
                            </div>
                            <div> <div id = "password_e"></div>   
                                <input name ="password_e" type="password" placeholder="Password" class="input-text">
                            </div>
                            <div><div id = "Phone_number"></div>   
                                <input name="Phone_number" type="text" placeholder="Phone number" <?php echo $phone_number; ?> class="input-text">
                            </div>
                            <div>
                                <input name="Extension_number" type="text" placeholder="Extension number" value="<?php echo $extension_number; ?>" class="input-text">
                            </div>
                            <small>By clicking "register", you acknowledge that you read and fully agree
                                with the terms of use if the website.
                            </small><br>
                            <p><input type="checkbox" name="agree" onclick="agreeForm1(this.form)"> 
    I agree </p>
                            <input type="submit" name="submit2" value="Register" class="post-button">
                            <div style="width:48%;height:auto;float:right;position:relative;top:-450px;">
                            <?php if (isset($e_errors) && is_array($e_errors)): ?>
                        <ul style="list-style-type: none; ">
                            <?php foreach ($e_errors as $error): ?>
                                <li style="color:red;margin:10px;"> - <?php echo $error; ?></li>
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

if(!f.agree.checked) {alert('please fil necessary fields');
checking1();
                      }
                      else checking1();

function checking1(){ 
       if (f.Company_name.value=="") 
            document.getElementById('Company_name').innerHTML="<p>Please feel Company_name</p>";
else document.getElementById('Company_name').innerHTML="";
   if (f.Website.value=="") 
            document.getElementById('Website').innerHTML="<p>Please feel Website</p>";
else document.getElementById('Website').innerHTML="";
     if (f.Name.value=="") 
            document.getElementById('Name').innerHTML="<p>Please feel name</p>";
else document.getElementById('Name').innerHTML="";
     if (f.Company_name.value=="") 
            document.getElementById('Last_name').innerHTML="<p>Please feel Last_name</p>";
else document.getElementById('Last_name').innerHTML="";
     if (f.Company_name.value=="") 
            document.getElementById('Email_e').innerHTML="<p>Please feel Email_e</p>";
else document.getElementById('Email_e').innerHTML="";
     if (f.Company_name.value=="") 
            document.getElementById('password_e').innerHTML="<p>Please feel password_e</p>";
else document.getElementById('password_e').innerHTML="";
     if (f.Company_name.value=="") 
            document.getElementById('Phone_number').innerHTML="<p>Please feel Phone_number</p>";
else document.getElementById('Phone_number').innerHTML="";
   }
}
</script>
            </section>
        </div>
      </section>

    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>