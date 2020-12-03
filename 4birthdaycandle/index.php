<?php

// work well in Hackerrank Project
// example code
$candles = [3,2,1,3];
function birthdayCakeCandles($candles) {

// Write your code here

return array_count_values($candles)[max($candles)];
}

echo birthdayCakeCandles($candles);

?>