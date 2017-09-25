<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Jobland</title>
    
  <link rel="stylesheet" href="/template/css/style.css" />   
  <link rel="stylesheet" media="screen and (min-device-width: 1440px)" href="/template/css/desktop.css" /> 
  <link rel='stylesheet' media='screen and (min-width: 800px) and (max-width: 1440px)' href='/template/css/medium-style.css' />
  <link rel='stylesheet' media='screen and (min-width: 100px) and (max-width: 799px)' href='/template/css/mobile-style.css' />
</head>
<body>
    <div id="header-content">
        <h3 class="logo"><a href="/index" class="dark-gray-text">Jobland</a></h3>

        <div class="nav-search-bar">
        <script>
  (function() {
    var cx = '004419154018501825177:86dbjocyniu';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchbox-only></gcse:searchbox-only>
        </div>
 
            
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
            
                            $userId = User::checkLogged();
                            
                                    //info about user
                                    $user = User::getUserByIdAd($userId);
                                    
                echo '
                <div>
                    <ul id="nav" class="nav-bar-ul">
                        <li>
                            <a href="#" style="background-color: #333; line-height: 8px; margin-left: 5px;">'.$users.'</a>
                            <ul>
                                <li><a href="/cabinet/0">Profile</a></li>
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
                                <li><a href="/cabinet/1">Profile</a></li>
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
                  <a href="/companies/page-1">Catalog of companies</a>
                      
                  </li>
                  <li>
                    <a href="/about" title="About us">About us</a>
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