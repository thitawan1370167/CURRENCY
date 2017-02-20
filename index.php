<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
<script>
	function check(){
		var checkdata = true; 
		var msg= "Please enter"
    if(document.getElementById("one").value==""){
    	checkdata = false;
    	msg+= " money";
    	}
   	if(!checkdata){
   		alert(msg);
   	}
   	return checkdata;
	}

</script>
	<title>Currency Converter</title>
</head>
<body>
<div class="container">

	<h1 class="currency">CURRENCY CONVERTER</h1>
 	<form class="center" action="cal_currency.php" method="post">
 			<label >Input Amount</label>
 		<input type="text" name="amount" class="input-amount" placeholder="Amount"><br>
	 	<select class="monetary" name="form">		
	 		<option value="THB">Thai Baht(THB)</option> 
	 		<option value="USD">US Dollar(USD)</option>
	 		<option value="KRW">Korean Won(KRW)</option>
	 		<option value="SGD">Singapore Dollar(SGD)</option>
	 	</select>
	 		<label>To</label>
 		<select class="monetary2" name="to">
 			<option value="THB">Thai Baht (THB)</option> 
 			<option value="USD">US Dollar (USD)</option>
 			<option value="KRW">Korean Won(KRW)</option>
 			<option value="SGD">Singapore Dollar(SGD)</option>
 		</select>
 		<br>
 		<button type="submit" name="convert" class="btn-con"onclick="return check();">CONVERT</button>	
	
 	 </form>
</div>
</body>
</html>