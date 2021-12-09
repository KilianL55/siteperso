<?php
 $content=\file_get_contents('data/acceuil.yaml');
 $data=yaml_parse($content);

echo "<main>";
    echo "<div class='ac'>";
        echo '<h1>'.$data['nom'].'</h1>';
    echo "</div>";
echo "</main>"

?>
