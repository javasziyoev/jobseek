<?php include ROOT . '/views/layouts/header.php'; ?>
<!DOCTYPE HTML>
<head>
    <link href="/template/css/style.css" type="text/css" rel="stylesheet">
 </head>
<body>


<div id="wrapper" style="margin-top: 25px;">
    <h1 style="margin-bottom: 25px;">News</h1>
    <ul>
 <?php
        $k = 0;  
        while($k < $cubes){
            if ($res[$k][0] == 1)break;
            echo
            '<div style="margin: 1em;">
            <div style="margin-left: 10px;">
                <a href="view/'.$res[$k][0].'">'.$res[$k][1].'</a>
                <h6>'.$res[$k][2].'</h6>
                <p>'.$res[$k][3].'</p>
            </div>
        </div>';
    
            $k++;
            }
    ?>
   </ul>
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