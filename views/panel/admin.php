<!doctype html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Mjolnir</title>
    <link rel="stylesheet" href="/template/css/style.css" />   
  <link rel="stylesheet" media="screen and (min-device-width: 1440px)" href="/template/css/desktop.css" /> 
  <link rel='stylesheet' media='screen and (min-width: 800px) and (max-width: 1440px)' href='/template/css/medium-style.css' />
  <link rel='stylesheet' media='screen and (min-width: 100px) and (max-width: 799px)' href='/template/css/mobile-style.css' />

    <link rel="stylesheet" href="/template/css/mjolnir.css" />   
</head>
<body>
<div id="wrapper">
<div class="tabs">
            <input id="tab1" type="radio" name="tabs">
            <label for="tab1" title="Sign up 1">statistics</label>

            <input id="tab2" type="radio" name="tabs">
            <label for="tab2" title="Sign up 2">news</label>
            
            <input id="tab3" type="radio" name="tabs">
            <label for="tab3" title="Sign up 2">users</label>
            <input id="tab4" type="radio" name="tabs">
            <label for="tab4" title="Sign up 2">roles</label>
            <input id="tab5" type="radio" name="tabs">
            <label for="tab5" title="Sign up 2">vacancies</label>
            <input id="tab6" type="radio" name="tabs">
            <label for="tab6" title="Sign up 2">industries</label>
            <input id="tab7" type="radio" name="tabs">
            <label for="tab7" title="Sign up 2">logs</label>
            <input id="tab8" type="radio" name="tabs">
            <label for="tab8" title="Sign up 2">premium accounts</label>
            <input id="tab9" type="radio" name="tabs">
            <label for="tab9" title="Sign up 2"><a href="/user/logout">sign out</a></label>
            <input id="tab10" type="radio" name="tabs">
            <label for="tab10" title="Sign up 2">premium accounts</label>


            <section id="content-tab1">
            <!--<main id="main-content">-->
                <div class="vacancies-of-the-day-item ">
                    <label><?php print_r($r[0][0]); ?> </label><br>
                    <label>users</label>
                </div>

                <div class="vacancies-of-the-day-item ">
                    <label><?php print_r($r[1][0]); ?></label><br>
                    <label>cv</label>
                </div>

                <div class="vacancies-of-the-day-item ">
                    <label><?php print_r($r[2][0]); ?></label><br>
                    <label>vacancies</label>
                </div>

                <div class="vacancies-of-the-day-item ">
                    <label><?php print_r($r[3][0]); ?></label><br>
                    <label>employers</label>
                </div>
            <!--</main>-->
            </section>

            <section id="content-tab2">
            <form enctype="multipart/form-data" method="POST">
                <input name="title" placeholder="Title" style="width:20%;"><br><br>
                <input  type="date" name="date" placeholder="Date" style="width:20%;"><br><br>
                <textarea name="short" placeholder="Short description"></textarea><br><br>
                <textarea name="content" placeholder="Content"></textarea><br><br>
                <input name="preview1" type="text" placeholder="Image url" ></input><br><br>
                <input type="submit" name = "ba" value="Add" class="post-button" style="margin-top: 1px;">
            </form>
            </section>
            <section id="content-tab3">
                <?PHP
                
                echo 'search users';
                Panels::getPublUsers();                    
                ?>
            </section>
            
            <section id="content-tab4" style="height:500px;">
            <form method="POST">
                <input type = "text" name="personalname" placeholder="name" >
                <div style="display:inline-block;width:25%;float:right;position:relative;right:30px;top:10px;">
                <table cellspacing="30px;" style="margin:auto;">
                <tr>
                    <th>Id</th>
                    <th>Nick</th>
                    <th>Role</th>
                </tr>
                <?php
                $i = 0;
                $pers = Panels::getPersonalName();
                while ($i < sizeof($pers[0])){
                echo
                '<tr>
                <td>'.$pers[2][$i].' </td><td>'.$pers[0][$i].'</td><td>'.$pers[1][$i].'</td>
                </tr>';
                $i++;
                }
                ?>
                </table>
                </div>
                <select name="personal" >
                <option>Admin</option>
                <option>Moder</option>
                </select><br><br>
                <input type = "text" name="personalpassword" placeholder="password"> 
                
                <br><br>
                <input type="submit" name="adminex" value="add"><br><br>
                <input type = "text" name="personaldelete" placeholder="id"> 
                <input type="submit" name="adminex1" value="delete">
                </form>
                
            </section>
            
            
            <section id="content-tab5" style="width:900px;">
                <?php Panels::actionModer(); ?>
                <div>Delete vacancy by id <br/>
                <form action = "#" method="POST">
                <input type ="text" name ="deleteText" placeholder="write id for deleting">
                <input type ="submit" name ="deleteSubmit" value="delete">

                </form >
                <?php
                        $db = Db::getConnection();
                        
                if(isset($_POST['deleteSubmit']))
                {
                    $sql="DELETE FROM `vacancy` WHERE vacancy_id=".$_POST['deleteText'];
                    $result = $db->prepare($sql);
                    return $result->execute();
                    
                }
                ?>
                </div>
            </section>

            <section id="content-tab6">
            <form method="POST">
                <div>
                    <input type="text" name = "a" class="input-text" placeholder="Industry Name">
                    <input type="submit" name = "b" value="Add" class="post-button" style="margin-top: 1px;">
                </div>
                <div>
                    <input type="text" name = "c" class="input-text" placeholder="Industry ID">
                    <input type="submit" name ="d" value="Delete" class="post-button" style="margin-top: 1px; background-color: #ef546c; border-color: #ef546c;">
                </div>
                </form>
                <div style="margin-top: 20px;">
                    <h2>All industries</h2>
                    <table>
                        <tr>
                            <th style="border-right: 1px solid #333">id</th>
                            <th>industry name</th>
                        </tr>
                      
            <?php
            
                $forsectorsId = User::getSectorsId();
                $forsectorsName = User::getSectorsName();  $i=0;         
                
                foreach($forsectorsId as $sectors)
                {
                 echo '<tr>
                 <td style="border-right: 1px solid #333">'.$sectors['industry_id'].'</td>
                 <td>'.$sectors['industry_name'].'</td>
             </tr>';


                  
                 
                }        
            ?>
          
                        
                    </table>

                </div>
            </section>

            <section id="content-tab7">
            <?php //для фьючеред джобс стив джобс
            Panels::getPublVac();
           ?>
                       </section>
            <section id="content-tab8">

           <form method="POST">
                <table>
                <th>employer_id</th>
                <th>company_name</th>
                <th>website</th>
                <th>email</th>
                
                <?php
                
                $i = 0;
                while($i < sizeof($get)){
                echo '<tr><td>'.$get[$i]['employer_id'].'</td>
                <td>'.$get[$i]['company_name'].'</td>
                <td>'.$get[$i]['website_url'].'</td>
                <td>'.$get[$i]['contact_email'].'</td>
                <td><input type="checkbox" value="accept"  name="'.$get[$i]['employer_id'].'">Accept</input></td>
                <td><input type="checkbox" value="accept"  name="'.$get[$i]['employer_id'].'d'.'">Decline</input></td> </tr>';
                $i++;
        }
                ?>
                
                
              </table>
              <?php
              if(sizeof($get)!=0)echo '<input type="submit" name="premium">';
              ?>
                </form>
                

            </section>
            <section id="content-tab9">
                хуй9
            </section>
            



<!--
        <nav id="nav-menu">
            <h1>Admin Panel</h1>
            <ul>
                <li class="active"><a href="">statistics</a></li>
                <li><a href="">news</a></li>
                <li><a href="">users</a></li>
                <li><a href="">roles</a></li>
                <li><a href="">vacancies</a></li>
                <li><a href="">industries</a></li>
                <li><a href="">logs</a></li>
                <li><a href="">feedbacks</a></li>
                <li><a href="/user/logout">sign out</a></li>
            </ul>
        </nav>
-->

    
            

</div>
</body>
</html>






