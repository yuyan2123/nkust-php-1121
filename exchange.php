<?php
$rate = 28.3;
$data = array(50000 , 40000 , 30000 , 20000 , 10000);
for ($i=0; $i<count($data); $i++) {
	echo "新台幣" . $data[$i] . "元換算成美金是" . round($data[$i] / $rate , 2) . "元<br>";
}
?>

