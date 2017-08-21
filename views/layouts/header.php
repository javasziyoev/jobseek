<!doctype html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Job Seeker</title>
    
  <link rel="stylesheet" href="/template/css/style.css" />   
  <link rel="stylesheet" media="screen and (min-device-width: 1440px)" href="/template/css/desktop.css" /> 
  <link rel='stylesheet' media='screen and (min-width: 800px) and (max-width: 1440px)' href='/template/css/medium-style.css' />
  <link rel='stylesheet' media='screen and (min-width: 100px) and (max-width: 799px)' href='/template/css/mobile-style.css' />
</head>
<body>
    <div id="header-content">
        <h3 class="logo"><a href="/index" class="dark-gray-text">Job Seeker</a></h3>
        <div class="nav-search-bar">
            <input type="search" placeholder="I am looking for..." class="search-input">
            <select class="select-category">
              <option value="searchVacancy" selected="">Vacancies</option>
              <option value="resumeSearch">CV</option>
              <option value="employerList">Companies</option>
            </select>
            <input type="submit" value="Search" class="search-button">
            <!-- <small>Advanced search</small> -->
            
            
                <?php
                require_once(ROOT .'/models/user.php');
                if (User::isGuest()){
                    echo '
                    <a href="/user/signin"><input type="submit" value="Sign In" class="sign-in-button"></a>
                    
        
        
                    <!-- Модальное окно -->
                    
                    
                    </div>
                    </div>
                    </div>';
                }
                    else {
                        echo '
                        <a href="/user/logout"><input type="submit" value="Sign Out" class="sign-in-button"></a>
                        <a href="/cabinet"><input type="submit" value="Profile" style="background-color:red;" class="sign-in-button"></a>
                        <section >
                        </section>
                        </div>
                        </div>
                        ';
                    }
                
            
                ?>
                

      <section id="nav-bar-content">
          <ul id="nav" class="nav-bar-ul">
                  <li>
                      <a href="#" title="Looking for a job">Looking for a job</a>
                      <ul>
                          <li><a href="#">Create resume</a></li>
                          <li><a href="#">How to improve my CV</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="#" title="Looking for employee">Looking for employees</a>
                      <ul>
                          <li><a href="#">Post a vacancy</a></li>
                          <li><a href="#">Price list</a></li>
                          <li><a href="#">Services description</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="#" title="Companies">Companies</a>
                      <ul>
                          <li><a href="#">Catalog of companies</a></li>
                          <li><a href="#">Jobs by industry</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="#" title="Help">Help</a>
                      <ul>
                          <li><a href="#">Support community</a></li>
                          <li><a href="/help/writeus">Write to us</a></li>
                      </ul>
                  </li>
              </ul>
              
          <!--
        <ul class="nav-bar-ul">
          <li class="nav-bar-li"><a href="" class="white-text">Looking for a job</a></li>
          <li class="nav-bar-li"><a href="" class="white-text">Looking for employees</a></li>
          <li class="nav-bar-li"><a href="" class="white-text">Companies</a></li>
          <li class="nav-bar-li"><a href="" class="white-text">Help</a></li>
        </ul>-->
      </section>