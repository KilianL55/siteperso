<?php
 $content=\file_get_contents('data/propos.yaml');
 $data=yaml_parse($content);

echo "<main class='prop3'>";
    foreach($data as $index=>$propos){
        if ($index=='nom'){
            echo "<div class='prop1'>";
                echo '<h1>'.$data['nom'].'</h1>';
            echo "</div>";  
        }
        if ($index=='photo'){
            echo "<div class='prop1'>";
                echo '<img src='.$data['photo'].'>';
            echo "</div>"; 
        } else {
            echo "<div class='prop1'>";
                echo '<p>'.$propos.'</p>';
            echo "</div>";
        }   
    }
    echo '<a href="data/CV.pdf">Mon CV</a>';
echo "</main>";