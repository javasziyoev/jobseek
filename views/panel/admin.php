<?php include ROOT . '/views/layouts/header.php'; ?>

<div>
<h1>
You are my Admin
</h1>

<div style="width:30%;height:400px;">
<form action="#" method="POST">
<select style="width:50%;height:auto;font-size:20px;float:right;" name="sel">
<option>PERSONAL</option>
<?php
$i = 0;

while ($i<=sizeof($k[0])-1)
{

    echo '<option style="width:100%;"value='.$i.'>'.'Name:'.ucfirst($k[0][$i]).'   Role:'.$k[1][$i].'</option>';
    $i++;
}

?>
</select>


<div style="width:48%;border:1px solid black;">
<input type="text" name="inp1" placeholder="name" style="margin:5px;width:96%;"></input>
<input type="text" name="inp2" placeholder="password" style="margin:5px;width:96%;"></input>
<select name="sel1">
    <option >admin</option>
    <option >moder</option>
 </select>
 <a><input type="submit" name="add" value="ADD" style="background-color:white;color:black;width:96%;" class="sign-in-button"></a>
 <a><input type="submit" name="delete" value="DELETE" style="background-color:white;color:black;width:96%;" class="sign-in-button"></a>

</div>

</form>
</div>
</div>

</div>  
          </section>
      </section>
    <div style="position:absolute;relative;top:115px;right:0px;">
          <select >
            <?php
            require_once(ROOT.'/models/User.php');
                $forsectorsId = User::getSectorsId();
                $forsectorsName = User::getSectorsName();  $i=0;         
                
                foreach($forsectorsId as $sectors)
                {
                 echo '<option ><a href= /tag/'.$sectors['industry_id'].'>';


                  echo ''.$forsectorsName[$i].'</a></option>';
                  $i++;
                }        
            ?>
          </select>
    </div>

    <a href="/panel/applicant"><input type="submit" value="Applicants" style="background-color:white;color:black;" class="sign-in-button"></a>
<a href="/panel/employeers"><input type="submit" value="Employeers" style="background-color:white;color:black;" class="sign-in-button"></a>       
      
      </div>
