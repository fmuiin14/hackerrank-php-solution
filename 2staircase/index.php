<?php

// work well in Hackerrank Project
$n = 6;

function staircase($n) {
for($i=1; $i<=$n; $i++) { 
    for($spasi=1; $spasi <=($n-$i); $spasi++) { 
        echo " " ; 
    } 
    for($hash=1; $hash <=$i; $hash++) {
    echo "#" ; 
} 
echo "\n"; 
}
}

staircase($n);




?>