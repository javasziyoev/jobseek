
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
                
                <div>
                    <select name = "selectclass" class="select-category mob-button-100 wid-100 ">
                        <option value = "">Человек</option>
                        <option value = "">Женщина</option>
                        <option value = "">Жавас</option>
                    </select>
                </div>

                <div>
                    <input type="text" name = "nationality" class="input-text mob-button-100 wid-100 " placeholder="Nationality">
                </div>

                <div>
                    <label for="dateofbirth" style="margin-left: .2em;"><strong>Date Of Birth</strong></label>
                    <input type="date" name="dateofbirth" id="dateofbirth" class="input-text mob-button-100 wid-100">
                </div>
                <br /><br />
                <textarea name = "exp" placeholder="Previous Experience" class="input-text short-descr mob-button-100 wid-100"></textarea><br>
                <textarea name = "skills" placeholder="Skills" class="input-text short-descr mob-button-100 wid-100"></textarea><br>
                <div>
                    <label for="currentvisa" style="margin-left: .2em;"><strong>Current Visa</strong></label>
                    <select name = "selectclass" class="select-category mob-button-100 wid-100 ">
                        <option value = "">None</option>
                        <option value = "">C</option>
                        <option value = "">D</option>
                        <option value = "">F</option>
                        <option value = "">G</option>
                        <option value = "">J1 or J2</option>
                        <option value = "">L</option>
                        <option value = "">M</option>
                        <option value = "">Q1 or Q2</option>
                        <option value = "">R</option>
                        <option value = "">S1 or S2</option>
                        <option value = "">X1 or X2</option>
                        <option value = "">Z</option>
                    </select>
                </div>
                <form   method="POST">
                <div>
                    <label   for="attachCV" style="margin-left: .2em;"><strong>Please attach CV (.doc, .docx, .pdf)</strong></label>
                    <input name="cv" type="file" style="margin-left: .2em;">
                </div>
                </form>
                <?php if(isset($_POST['cv']))
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
                ?>
                <br /><br />
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
                <p><input type="checkbox" name="agree" > 
    I agree with  <a href = "/site/agreement">agreement</a> 
    
    </p>

                <input type="submit" onclick="agreeForm(this.form)" value="Register" name="submit1" class="post-button mob-button-100 wid-100 ">
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
           
          } else   {window.event.preventDefault();
           if(f.agree.checked) f.agree.checked=0;
}
      }
    else   {   window.event.preventDefault();          if(f.agree.checked) f.agree.checked=0;
}
  }  else   {   window.event.preventDefault();;            if(f.agree.checked) f.agree.checked=0;
}

  }
  else   {   window.event.preventDefault();
            if(f.agree.checked) f.agree.checked=0;
         }

 //alert('please fil necessary fields');
checking();
                      

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
                            <p><input type="checkbox" name="agree" > 
                            I agree with  <a href = "/site/agreement">agreement</a> 
                            </p>
                            <input onclick="agreeForm1(this.form)" type="submit" name="submit2" value="Register" class="post-button mob-button-100 wid-100 ">
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
           else   {   window.event.preventDefault();            if(f.agree.checked) f.agree.checked=0;}
           }
           else   {   window.event.preventDefault();            if(f.agree.checked) f.agree.checked=0;}
           
              }
           else   {   window.event.preventDefault();           if(f.agree.checked) f.agree.checked=0;}
           
           
          } else   {   window.event.preventDefault();            if(f.agree.checked) f.agree.checked=0;
}
      }
    else   {   window.event.preventDefault();            if(f.agree.checked) f.agree.checked=0;
}
  }  else   {   window.event.preventDefault();            if(f.agree.checked) f.agree.checked=0;
}

  }
  else   {   window.event.preventDefault();
            if(f.agree.checked) f.agree.checked=0;
         }

//alert('please fil necessary fields');
checking1();

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
     if (f.Email_e.value=="") 
            document.getElementById('Email_e').innerHTML='<small class="error">Please fill Email</small>';
else document.getElementById('Email_e').innerHTML="";
     if (f.password_e.value=="") 
            document.getElementById('password_e').innerHTML='<small class="error">Please fill password</small>';
else document.getElementById('password_e').innerHTML="";
     if (f.Phone_number.value=="") 
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