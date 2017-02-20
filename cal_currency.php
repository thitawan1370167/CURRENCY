<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">

	<title>Currency Converter</title>

</head>
<body>
	<div class="container">
		<?php 
	function currency_converter($amount, $from, $to){
		
		$url  = "https://www.google.com/finance/converter?a=$amount&from=$from&to=$to";

		$data = file_get_contents($url);
		preg_match("/<span class=bld>(.*)<\/span>/",$data, $converted);
		$converted = preg_replace("/[^0-9.]/", "", $converted[1]);
		return round($converted, 3);
	}
		$amount = ($_POST["amount"]);
		$form = ($_POST["form"]);
		$to  = ($_POST["to"]);
		$result = currency_converter($amount,$form,$to);
	
	?>
	<div class="content">
		<?php echo "Currency Converter ".$form." TO ".$to." ";?><br><br>
		<?php echo "$amount"." "."$form"." =";?>
		<?php echo "$result"." "."$to"; ?>
	</div>
	
</div>
	
</body>
</html>