<?php include ROOT . '/views/layouts/header.php'; ?>
<!DOCTYPE HTML>
<head>
    <link href="/template/css/style.css" type="text/css" rel="stylesheet">
 </head>
<body>



<div id="wrapper">
      <section id="top-jobs-content">
          
          <section id="jobs-at-content">
            <div style="text-align: center; width: 90%; height: 200px; background-color: orange; margin-left: 3%; margin-right: 3%; margin-bottom: 1em;">
              For small add
            </div>
            <?php include ROOT . '/views/site/jobsat.php'; ?>
          </section>
           
          <section id="featured-jobs-content">
          <h1 style="margin-bottom: 25px;">News</h1>
    <ul>
 <?php
        $k = 0;  
        while($k < $cubes){
            if ($res[$k][0] == 1)break;
            echo
            '<div class="" style="display: flex; margin-bottom: 2em;">
                <img style="max-width: 150px; max-height: 120px; margin-right: 1em;" src="'.$res[$k][6].'" >
            
                <div margin: 1em;">
                    <div margin-left: 10px;">
                        <a href="view/'.$res[$k][0].'">'.$res[$k][1].'</a>
                        <h6>'.$res[$k][2].'</h6>
                        <p>'.$res[$k][3].'</p>
                    </div>
                </div>
                </div>';
    
            $k++;
            }
    ?>
   </ul>
          </section>


          <section id="reklama-bleat">
          Отключите блокировщик рекламы плес.
          </section>
      </section>


</div>


<div class="page">
    <?php 
    $i = 1;
    while($i < $e ){
        if ($i == 9)break;
        echo '<a href="/news/page-'.$i.'" >'.$i.'</a>';
       
        
        $i++;
    }
    if($e > 9){
        echo '<a href="" style="width:6%;">...</a>
        <a href>'.$e.'</a>';
    }
        ?>

</div>



<?php include ROOT . '/views/layouts/footer.php'; ?>
</body>

</html>