<?php
print_r($_POST);

if(empty($_POST['wall-1']) ||  empty($_POST['wall-2']) ){
    header('Location: ./calculate_price.php?msg=empty');
}

$wall_1 = $_POST['wall-1'];

if(!empty($_POST['w1-obj-1'])){
    $w1_obj1 = $_POST['w1-obj-1'];
}else{
    $w1_obj1 = 0;
}if(!empty($_POST['w1-obj-1'])){
    $w1_obj2 = $_POST['w1-obj-2'];
}else{
    $w1_obj2 = 0;
}if(!empty($_POST['w1-obj-1'])){
    $w1_obj3 = $_POST['w1-obj-3'];
}else{
    $w1_obj3 = 0;
}

$wall_2 = $_POST['wall-2'];

if(!empty($_POST['w2-obj-1'])){
    $w2_obj1 = $_POST['w1-obj-1'];
}else{
    $w2_obj1 = 0;
}if(!empty($_POST['w2-obj-2'])){
    $w2_obj2 = $_POST['w1-obj-2'];
}else{
    $w2_obj2 = 0;
}if(!empty($_POST['w2-obj-3'])){
    $w2_obj3 = $_POST['w1-obj-3'];
}else{
    $w2_obj3 = 0;
}

$freeSpace = $wall_1 + $wall_2;

$usedSpace = $w1_obj1 + $w1_obj2 +$w1_obj3 + $w2_obj1 + $w2_obj2 + $w2_obj3;

$spaceToRemodel = $freeSpace - $usedSpace;

$finalPrice = $spaceToRemodel * 24;
echo "<br><br>";

echo "$freeSpace <br><br>";
echo "$usedSpace <br><br>";
echo "$spaceToRemodel <br><br>";
echo "$finalPrice <br><br>";





?>