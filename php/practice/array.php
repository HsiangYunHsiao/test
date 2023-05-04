<pre><?php
// 索引式
$ar1 = array(2,4,6,8);
$ar2 = [2,4,6,8];

//關聯式
$ar3 = array(
    'name' => 'AA',
    'age' => 30,
);
$ar4 = [
    'name' => 'AA',
    'age' => 30,
];

print_r($ar2);
print_r($ar4);

echo count($ar1);
echo '<br>';
echo count($ar3);