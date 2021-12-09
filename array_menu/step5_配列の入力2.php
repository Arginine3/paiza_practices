<?php
    $input_line = fgets(STDIN);
    
    //explode(区切る文字, ターゲット)
    $splite = explode(" ", $input_line);
    
    foreach($splite as $value){
      echo $value. "\n";
}

