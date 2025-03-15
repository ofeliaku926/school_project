 <?php
$num = array(1234567890);
$str = 'The quick brown fox jumps over the lazy dog';
$mix = array('a'=>'apple', 2=>'banana', 'c'=>'carrot');
$bool = true;
$null = null;
$array = array(1, 2, 3);
echo $num[0].",".$str."\n";
for ($i=0; $i<count($mix); $i++) {
echo $mix[$i]."\n";
}
if ($bool) {
echo 'true';
} else {
echo 'false';
}
if (isset($null)) {
echo 'null value exists';
} else {
echo 'no null values';
}
for ($i=0; $i<count($array); $i++) {
echo $array[$i]."\n";
}
?>