<?php
 $content=\file_get_contents('data/experience.yaml');
 $data=yaml_parse($content);

echo '<div class="wrapperexp">';
    foreach($data as $index=>$stage){
        echo'<div class="top">';
            echo"<div class='buttonexp'><h2>Expèrience n°".$index."</h2></div>";
            echo"<div class='stage1'>";
        foreach($stage as $cle=>$valeur){
            echo "<p>".$valeur."</p>";
        }
            echo'</div>';
        echo'</div>';
    }
echo '</div>';







