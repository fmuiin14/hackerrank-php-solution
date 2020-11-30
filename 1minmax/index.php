<?php
$arr = array(1,7,5,3,9);

$total = array_sum($arr);

$angkamin = min($arr);

$angkamax = max($arr);

$totalmin = $total - $angkamax;

$totalmax = $total - $angkamin;

echo $totalmin . ' ' . $totalmax;

?>