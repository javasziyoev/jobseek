<h3 class="dark-gray-text">Jobs at</h3>
              <div>
                  <ul>
                  <?php $d = Search::getProvince();
                        $i = 0;
                        while ($i < 10){
                          $c_id = Search::getIdByProvince($d[$i][0]);
                         
                        echo
                      '<li>
                        <div>
                          <span><a href="/province/'.$c_id.'/page-1" class="dark-gray-text">'.$d[$i][0].'</a></span>
                          <span class="jobs-count">'.$d[$i][1].'</span>
                        </div>
                      </li>';
                      $i++;
                        }
                      ?>
                      
                      <li>
                        <label class="text-chkbox-show-more">
                          <div class="label-text-show-more">
                              Show more >
                          </div>
                          <input type="checkbox" />
                          <div class="hidden-text">
                              Раз<br/>
                              Два<br/>
                              Три
                          </div>
                        </label>
                      </li>

                  </ul>
              </div> 