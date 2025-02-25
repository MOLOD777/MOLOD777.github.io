<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="calc.php" method="GET">
		<input type="number" name="firstNumber">
		<select name="action">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<input type="number" name="secondNumber">
		<input type="submit">
	</form>
	<a href="arrays.php">perexod</a>
</body>
</html>