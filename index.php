<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php $arr=[1,2,5]?>
<script>
	var array1 = [1 , 2 , 5] ?>
	var array2 = [<?php echo implode(",", array_values($arr)) ?>];
	var is_same = (array1.length == array2.length) && array1.every(function(element,index){
		return element === array2[index];
	});
	console.log(is_same);
</script>	