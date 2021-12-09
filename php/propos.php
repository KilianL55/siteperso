<?php
 $content=\file_get_contents('data/propos.yaml');
 $data=yaml_parse($content);


 foreach($data as $cle=>$val){
    if($cle == 'accroche'){
        echo"<div class='prop1'>";
        echo"<h2>".$val."</h2>";
        echo'<img src="images/pppp.png"/>';
        echo"</div>";
    }
    if($cle == 'presentation'){
        echo"<div class='prop2'>";
        echo"<p>".$val;
        echo"</div>";
    }
 }
 