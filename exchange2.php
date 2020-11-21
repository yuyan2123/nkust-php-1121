<?php
	$money = $_POST["money"];
	$rate_str = $_POST["rate"];
	list($rate, $rate_name) = explode("," , $rate_str)
?>

<html>
<body style="font-family:微軟正黑體">

<form action="exchange2.php" method="post">
要換算的金額 : 台幣
<input type="text" name="money" value=<?php echo $money;?>>元<br>
要換算的匯率 : 
<select name="rate" >
	<option value="28.3,美金">美金</option>
	<option value="36.7,英鎊">英鎊</option>
	<option value="0.2655,日幣">日幣</option>
	<option value="33.02,歐元">歐元</option>
</select>
<input type="submit" value="開始換算">
</form>

<?php
	
	if ($money > 0) {
	$result = $money / $rate;
	echo "新台幣" . $money . "元";
	echo "轉換成" . $rate_name . "的金額是 : " . round($result , 2) . "元";
	}
?>

</body>
</html>