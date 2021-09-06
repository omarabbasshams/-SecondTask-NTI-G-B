<?php




$path_parts = pathinfo( 'www.example.com/public_html/index.php');
echo $path_parts['filename'].'.'.$path_parts['extension'];

?>