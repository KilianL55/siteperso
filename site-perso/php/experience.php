<?php
 $content=\file_get_contents('data/experience.yaml');
 $data=yaml_parse($content);


echo '<div class="wrapperexp">';
    echo'<div class="top">';
        echo"<div class='buttonexp'>";
            echo'<h2>Expèrience n°1</h2>';
        echo"</div>";
        echo"<div class='stage1'>";
            echo'<p>'.$data['stage1']['poste'];
            echo'<p>'.$data['stage1']['entreprise'];
            echo'<p>'.$data['stage1']['date'];
            echo'<p>'.$data['stage1']['lieu'];
            echo'<p>'.$data['stage1']['descriptif'];
        echo"</div>";
    echo'</div>';    
    echo'<div class="bottom">';
        echo"<div class='buttonexp'>";
            echo'<h2>Expèrience n°2</h2>';
        echo"</div>";
        echo"<div class='stage1'>";
            echo'<p>'.$data['stage2']['poste'];
            echo'<p>'.$data['stage2']['entreprise'];
            echo'<p>'.$data['stage2']['date'];
            echo'<p>'.$data['stage2']['lieu'];
            echo'<p>'.$data['stage2']['descriptif'];
        echo"</div>";
    echo'</div>';
        echo'<div class="bottom">';
            echo"<div class='buttonexp'>";
            echo'<h2>Expèrience n°3</h2>';
        echo"</div>";
        echo"<div class='stage1'>";
            echo'<p>'.$data['stage3']['poste'];
            echo'<p>'.$data['stage3']['entreprise'];
            echo'<p>'.$data['stage3']['date'];
            echo'<p>'.$data['stage3']['lieu'];
            echo'<p>'.$data['stage3']['descriptif'];
        echo"</div>";
    echo'</div>';
echo'</div>';







