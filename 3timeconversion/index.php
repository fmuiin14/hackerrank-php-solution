<?php

$s = '03:01:00 PM';

function timeConversion($s) {


$hasil = date("H:i:s", strtotime($s));

return $hasil;

}

timeConversion($s);

echo timeConversion($s);

?>