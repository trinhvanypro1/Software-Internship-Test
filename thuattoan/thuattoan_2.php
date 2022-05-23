<h2>Bài 1:</h2>
<?php
//Xây dựng function count value:
function count_values($array) {
    $new_arr = array();
    foreach ($array as $key) {
        if (!array_key_exists(strtolower($key), $new_arr)) {
            $new_arr[strtolower($key)] = 0;
        }
        $new_arr[strtolower($key)] += 1;
    }
    return $new_arr;
}

$array = array(3, 7, 3);
$array =count_values($array); 
//sắp xếp key theo giá trị giảm dần
arsort($array);
//dùng hàm array_keys để trả về key:
$res = array_keys($array);
echo "Đầu vào của mảng: [3, 7, 3]. <br><br>";
//lấy giá trị đầu tiên của mảng
echo "Giá trị xuất hiện nhiều nhất là:"." ".$res[0].".";
?>
<br>
<br>
<h2>Bài 2:</h2>
<?php
//Xây dựng function count value:

//Do thuật toán chưa xử lý được các giá trị như: null, true và false nên bài này em xin phép gán nó thành mảng
$array = array("null", "hello", "true", "null");
$array =count_values($array); // Case-insensitive matching
//sắp xếp key theo giá trị giảm dần
arsort($array);
//dùng hàm array_keys để trả về key:
$res = array_keys($array);
echo "Đầu vào của mảng: [null, hello, true, null]. <br><br>";
//lấy giá trị đầu tiên của mảng
echo "Giá trị xuất hiện nhiều nhất là:"." ".$res[0].".";
?>
<br>
<br>
<h2>Bài 3:</h2>
<?php
//Xây dựng function count value:

//Do thuật toán chưa xử lý được các giá trị như: null, true và false nên bài này em xin phép gán nó thành mảng
$array = array("false", "up", "down", "left", "right", "true", "false");
$array =count_values($array); // Case-insensitive matching
//sắp xếp key theo giá trị giảm dần
arsort($array);
//dùng hàm array_keys để trả về key:
$res = array_keys($array);
echo "Đầu vào của mảng: [false, up, down, left, right, true, false]. <br><br>";
//lấy giá trị đầu tiên của mảng
echo "Giá trị xuất hiện nhiều nhất là:"." ".$res[0].".";
?>
