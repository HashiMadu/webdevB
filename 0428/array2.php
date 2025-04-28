<?php
$name [
    'sato'=>'suki',
    'suzuki'=>'saki',
'takahashi'=>'taka'

];
var_dump($name);

echo $name['takashima'];

foreach($name as $value){
    echo $value ."<br>";
};

foreach ($name as key =>$value){
    echo 'キーは'。$key
}