<?php 

function getnextcahr($x){

    echo 'Before convert : '.$x . '<br>';
    $nextchar= ord($x);
   return chr($nextchar+1);
    
}

echo 'After convert : '.getnextcahr('a');

echo '<br>';

echo 'After convert : '.getnextcahr('d');

?>