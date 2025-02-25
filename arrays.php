<?php
$arr=[2,4,65,43,3,8];
foreach ($arr as $key => $elem) {
	echo "Индекс: $key | Значение: $elem <br>";
}
echo "<hr>";

$a = sizeof($arr);
$b = count($arr);

echo $a."<br>".$b;
echo "<hr>";

//$arr[]=88;
$i = 0;
while ($i<sizeof($arr)) {
	echo $arr[$i]." ";
	$i++;
}
echo "<hr>";

$arr1=[];
$k = 0;
while ($k<25) {
	$arr1[]=7;
	echo $arr1[$k]." ";
	$k++;
}


echo "<hr>";

$k = 0;
while ($k<sizeof($arr1)) {
	$arr1[$k]++;
	echo $arr1[$k]." ";
	$k++;
}

echo "<hr>";
$k=0;
$max=$arr[0];
while ($k<sizeof($arr)) {
	if ($max<$arr[$k]) {
		$max=$arr[$k];
	}
	$k++;
}
echo $max;

echo "<hr>";

$i=0;
$deep=0;
$randArr=[];
while ($deep<>50) {
	$deep=rand(0, 100);
	$randArr[]=$deep;
	$i++;
}
echo "Количество иттераций = ".$i."<br>";
print_r($randArr);
echo "<hr>";

$fndArr=[];
for ($i=0; $i < sizeof($randArr); $i++) { 
	if ($randArr[$i]==42) {
		$fndArr[]=$randArr[$i];
	}
}
print_r($fndArr);

?>