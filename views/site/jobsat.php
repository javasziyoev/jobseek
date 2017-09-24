<style>
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>  
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
                          

                         
                        
                        <button class="accordion">Show all</button>
                        <div class="panel">
                        <?php 
                        while ($i < sizeof($d)){
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
                        </div>
                
                       <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script> 


                        </label>
                      </li>

                  </ul>
              </div> 