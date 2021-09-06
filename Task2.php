<?php
// "Function 1"

function example(){
    $char = 'z';
    $nextchar = ++$char; 
     
    if (strlen($nextchar) > 1) 
    {
     $nextchar = $nextchar[0];
     }
    echo $nextchar."\n";
    }
    
    example();



// "Function 2"
function print(){


    $path = 'www.example.com/public_html/index.php';
    $file_name = substr(strrchr($path, "/"), 1);
    echo $file_name."\n"; 
}
    print();


?>




