<h2>Bài 1:</h2>
<?php
    // Cho mảng với giả trị như sau:
    $arr = array (3,4,5,3,2,3,10,11);
    //Sắp xếp mảng theo thứ tự giảm dần
    rsort($arr);
    //Sau đó ta cắt mảng lấy 5 giá trị đầu tiên
    $findMax5 = array_slice($arr, 0, 5);
    echo "Đầu vào [3,4,5,3,2,3,10,11] <br><br>";
    echo "Đầu ra 5 số lớn nhất: ";
    foreach ($findMax5 as $key => $value){
        echo($value.", ");
        
    }
?>
<br>
<br>
<h2>Bài 2:</h2>
<?php
    // Cho mảng với giả trị như sau:
    $arr = array (14,12,38,17,10,36,12,29,45,34,48,22);
    //Sắp xếp mảng theo thứ tự giảm dần
    rsort($arr);
    //Sau đó ta cắt mảng lấy 5 giá trị đầu tiên
    $findMax5 = array_slice($arr, 0, 5);
    echo "Đầu vào [14,12,38,17,10,36,12,29,45,34,48,22] <br><br>";
    echo "Đầu ra 5 số lớn nhất: ";
    foreach ($findMax5 as $key => $value){
        echo($value.", ");
        
    }
?>
<br>
<br>
<h2>Bài 3:</h2>
<?php
    // Cho mảng với giả trị như sau:
    $arr = array (10,11,2,30,22,6,8,9,11,12,22);
    //Sắp xếp mảng theo thứ tự giảm dần
    rsort($arr);
    //Sau đó ta cắt mảng lấy 5 giá trị đầu tiên
    $findMax5 = array_slice($arr, 0, 5);
    echo "Đầu vào [10,11,2,30,22,6,8,9,11,12,22] <br><br>";
    echo "Đầu ra 5 số lớn nhất: ";
    foreach ($findMax5 as $key => $value){
        echo($value.", ");
        
    }
?>