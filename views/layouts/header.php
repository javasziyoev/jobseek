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
        <form action="/search" method="POST" style="width: 100%; margin-right: 3px;">
        <div class="nav-search-bar">
            <input type="search" name="content-search" placeholder="I am looking for..." class="search-input">
            <select class="select-category" name="searchselector">
              <option value="1" >Vacancies</option>
              <option value="2">CV</option>
              <option value="3">Companies</option>
              <option value="4">All</option>
            </select>
            <input type="submit" name="search" value="Search" class="search-button">
            <!-- <small>Advanced search</small> -->
        </div>
    </form>
            
        <?php
           
            if (User::isGuest()){
                echo '
                <div>
                    <a href="/user/signin" class="no-mob-view"><input type="submit" value="Sign In" class="sign-in-button"></a>
                </div>
                    </div>';
            }
            else {
                $db = Db::getConnection();  
                                      $userId = User::checkLogged();
                                      
                        $user = User::getUserById($userId);
                        $sql = 'SELECT * FROM `employer` WHERE employer_id='.$userId;
                        $result = $db->prepare($sql);
                        $result->execute();
                        $users = $result->fetch();
                        if($users=='') 
                        { $users=$userId;
            
                       
                echo '
                <div>
                    <ul id="nav" class="nav-bar-ul">
                        <li>
                            <a href="" style="background-color: #333; line-height: 8px; margin-left: 5px;">'.$users.'</a>
                            <ul>
                                <li><a href="/cabinet">Profile</a></li>
                                <li><a href="/cabinet/favorite">Favorites</a></li>
                                <li><a href="/user/logout">Sign out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                ';
            } else {  echo '
                <div>
                    <ul id="nav" class="nav-bar-ul">
                        <li>
                            <a href="" style="background-color: #333; line-height: 8px; margin-left: 5px;">'.$users['first_name'].'</a>
                            <ul>
                                <li><a href="/cabinet">Profile</a></li>
                                <li><a href="/cabinet/favorite">Favorites</a></li>
                                <li><a href="/user/logout">Sign out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                ';

            }
        }
        ?>
    </div>

      <section id="nav-bar-content">
          <ul id="nav" class="nav-bar-ul">
                <li>
                    <a href="/index" title="Home">Home</a>
                </li>
                <li>
                    <a href="/news/page-1" title="News">News</a>
                </li>
                  <!--<li>
                      <a href="#" title="Looking for a job">Looking for a job</a>
                      <ul>
                          <li><a href="#">Create resume</a></li>
                          <li><a href="#">How to improve my CV</a></li>
                      </ul>
                  </li> -->
                  <li >
                      <a href="#" title="Companies" id="no-mob">Companies</a>
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