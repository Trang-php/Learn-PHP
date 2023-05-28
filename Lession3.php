<?php 
//Câu 1: Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function checkNumber($number) {
    if ($number % 2 == 0) {
        echo " $number is even:";
    } else {
        echo " $number is not even";
    }
}
$number = 29; 
checkNumber($number);
echo "<br>";
//Câu 2: Viết chương trình PHP để tính tổng của các số từ 1 đến n
function total($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 12; 
$tong = total($n);
echo "Total from 1 to $n là: $tong";
echo "<br>";
//Câu 3:Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10
function multiplicationTable($n) {
    echo "<br>"." Multiplication table $n:";
    for ($i = 1; $i <= 10; $i++) {
        $result = $n * $i;
        echo "$n x $i = $result\n";
    }
    echo "\n";
}
for ($j = 1; $j <= 10; $j++) {
    multiplicationTable($j);
}
echo "<br>";
//Câu 4: Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function checkString($string1, $string2) {
    $check = strpos($string1, $string2);
    if ($check !== false) {
        echo "'$string1' contains '$string2'.";
    } else {
        echo "'$string1' does not contain '$string2'.";
    }
}
$string1 = "Hello php!"; 
$string2= "php"; 
checkString($string1, $string2);
echo "<br>";
//Câu 5: Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function maxMinValue($word, $word2, $word3){
    $arr = array($word, $word2, $word3);
    echo "Max value is: ".max($arr); 
    echo "<br>";
    echo "Min value is: ".min($arr);
}
echo "bai5: ";
echo maxMinValue("1", "6", "9");
echo "<br>";
//Câu 6: Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần
function arrange($word, $word2, $word3){
    $arr = array($word, $word2, $word3);
    sort($arr);
    foreach ( $arr as $row) {
        echo $row;
        echo "; ";
    }
}
echo "bai6: ";
echo arrange("1", "7", "5");
echo "<br>";
//Câu 7:Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function factorial($word){
    if( is_int($word )!= "1") return "$word isn't an integer";
        else if ($word < 0) return "$word isn't a positive integer";
        else 
        $x = $word;
            for($i=1; $i < $word; $i++) {
                $x = $x * ($word - $i);
            } 
    echo "factorial is: $x";
}
echo "bai7: ";
echo factorial(4);
echo "<br>";
//Câu 8: Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function checkPrimes($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

function checkPrimes1($start, $end) {
    echo "Các số nguyên tố trong khoảng từ $start đến $end là: ";
    for ($i = $start; $i <= $end; $i++) {
        if (checkPrimes($i)) {
            echo $i . " ";
        }
    }
}
echo "bai8: ";
echo checkPrimes1(2, 20);
echo "<br>";
//Câu 9:Viết chương trình PHP để tính tổng của các số trong một mảng
function totalArr($word, $word2, $word3){
    $arr = array($word, $word2, $word3);
    echo array_sum($arr);
}
echo "bai9: ";
echo totalArr(2, 9, 22);
echo "<br>";
//Câu 10: Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function printFibonacci ($start, $end) {
    $fib1 = 0;
    $fib2 = 1;
    $fib = $fib1 + $fib2;
    echo " Fibonacci from $start to $end: ";
    while ($fib <= $end) {
        if ($fib >= $start) {
            echo $fib . " ";
        }
        $fib1 = $fib2;
        $fib2 = $fib;
        $fib = $fib1 + $fib2;
    }
}
$start = 1; 
$end = 100; 
printFibonacci($start, $end);
echo "<br>";
//Câu 11: Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function Armstrong($word){
    $num = strlen($word);
    $sum = 0;
    while($word > 0){
        $var = $word % 10;
        $sum += $var ** $num;
        $word /= 10;
    } 
    if ($word == $sum) echo "true";
    else echo "false";
}
echo "bai11: ";
echo Armstrong(229);
echo "<br>";
//Câu 12: Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($arr, $element, $position)
{
   array_splice($arr, $position, 0, $element); 
   return $arr;
}
echo "bai12: ";
$array = [3,4,5,6,7];
$element = 4;  
$position = 3;  
$resultArray = insertElement($array, $element, $position); 
print_r($resultArray);
echo "<br>";
//Câu 13: Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDuplicates($arr)
{
    $counts = array_count_values($arr);
    $result = array_filter($arr, function ($value) use ($counts) {  
        return $counts[$value] === 1;
    });
    return array_values($result); 
}
echo "bai13: ";
$originalArray = [2,3,5,6,2,7,5,4];    
$filteredArray = removeDuplicates($originalArray);
print_r($filteredArray);
echo "<br>";
//Câu 14: Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng
function findInArr($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3);
    for($i = 0; $i <3; $i++){
        if($word4 == $arr[$i]) return "position is: ". ($i+1);
    }
}
echo "bai14: ";
echo findInArr("1", "2", "3", "3");
echo "<br>";
//Câu 15: Viết chương trình PHP để đảo ngược một chuỗi.
function reverseString($string)
{
 $n = strlen($string);
 if($n == 1)
   {
    return $string;
   }
 else
   {
   $n--;
   return reverseString(substr($string,1, $n)) . substr($string, 0, 1);
   }
}
echo "bai15: ";
echo reverseString("hello php");
echo "<br>";
//Câu 16: Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countNumber($array) {
    $number = count($array);
    return $number;
}
$array = [1,3,5,7,9]; 
$number = countNumber($array);
echo "bai16: ";
echo "the number of elements is: $number";
echo "<br>";
//Câu 17: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function palindrome($word){
    if($word == strrev($word)) return "true";
    else return "false";
}
echo "bai17: ";
echo palindrome("paap");
echo "<br>";
//Câu 18: Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng
function countVar($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3, $word4);
    print_r (array_count_values($arr));
}
echo "bai18: ";
echo countVar("3", "2", "4", "4");
echo "<br>";
//Câu 19: Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function arrDecrease($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3, $word4);
    rsort($arr);
    foreach ( $arr as $row) {
        echo $row;
        echo "; ";
    }
}
echo "bai19: ";
echo arrDecrease("9", "2", "3", "4");
echo "<br>";
//Câu 20: Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng
function addElement($arr, $element, $position)
{
    if ($position === 'beginning') {    
        array_unshift($arr, $element);
    } else if ($position === 'end') {
        $arr[] = $element;            
    }
    return $arr;
}
$array = [ 3, 4, 5,6];
$element = 7;
$position = 'end';
$resultArray = addElement($array, $element, $position);
print_r($resultArray);
echo "<br>";
//Câu 21: Viết chương trình PHP để tìm số lớn thứ hai trong một mảng
function findSecond($arr)
{
    $count = count($arr);    
    if ($count < 2) {        
        return "Không có số lớn thứ hai trong mảng.";
    }
    rsort($arr);
    return $arr[1];  
}
$array = [3,10,15,9,7];
$secondLargest = findSecond($array);
echo "bai 21:";
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
echo "<br>";
//Câu 22: Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function findDivisor($a, $b)
{
    // Sử dụng thuật toán Euclid để tìm ước số chung lớn nhất (USCLN)
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function findMultiples($a, $b)
{
    // Tìm bội số chung nhỏ nhất (BSCNN) dựa trên USCLN
    $gcd = findDivisor($a, $b);
    $lcm = ($a * $b) / $gcd;
    return $lcm;
}
$num1 = 4;   
$num2 = 50;  
$gcd = findDivisor($num1, $num2);   
$lcm = findMultiples($num1, $num2);  
echo "bai22:";
echo "Greatest common divisor $num1 and $num2 is: " . $gcd . "<br>";
echo "Least common multiple $num1 and $num2 is: " . $lcm;
echo "<br>";
//Câu 23: Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không
function perfectNumber($word){
    $x = 0;
    for($i=1; $i < $word; $i++) {
        if($word % $i == 0)
        $x = $x + $i;
    }
        if($x == $word) return "$word is a perfect number";
        else return "$word is not a perfect number";
    
}
echo "bai23: ";
echo perfectNumber(10);
echo "<br>";
//Câu 24: Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng
function findLargestOddNumber($arr)
{
    $largestOddNumber = null;   
    foreach ($arr as $number) {
        if ($number % 2 != 0 && ($largestOddNumber === null || $number > $largestOddNumber)) {
            $largestOddNumber = $number;
        }
    }  
    return $largestOddNumber;  
}
$array = [1,2,3,4,5,6,7,8,9];
$largestOdd = findLargestOddNumber($array);
if ($largestOdd !== null) {
    echo "bai24:";
    echo "Số lẻ lớn nhất trong mảng là: " . $largestOdd;
} else {
    echo "Không có số lẻ trong mảng.";
}
echo "<br>";
//Câu 25: Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không
function checkPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
$number = 20;
echo "bai25:";
if (checkPrime($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không phải là số nguyên tố.";
}
echo "<br>";
//Câu 26: Viết chương trình PHP để tìm số dương lớn nhất trong một mảng
function findLargestPositiveNumber($arr)
{
    $largestPositiveNumber = null;   
    foreach ($arr as $number) {
        if ($number > 0 && ($largestPositiveNumber === null || $number > $largestPositiveNumber)) {
            $largestPositiveNumber = $number;
        }
    }
    return $largestPositiveNumber;
}
$array = [-2,1,-6,9,8,15];
$largestPositive = findLargestPositiveNumber($array);
echo "bai26:";
if ($largestPositive !== null) {
    echo "Số dương lớn nhất trong mảng là: " . $largestPositive;
} else {
    echo "Không có số dương trong mảng.";
}
echo "<br>";
//Câu 27: Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegativeNumber($arr)
{
    $largestNegativeNumber = null;  // Khởi tạo biến tạm thời để lưu trữ số âm lớn nhất
    foreach ($arr as $number) {
        // Kiểm tra nếu số là số âm và lớn hơn số âm lớn nhất hiện tại
        if ($number < 0 && ($largestNegativeNumber === null || $number > $largestNegativeNumber)) {
            $largestNegativeNumber = $number;
        }
    }
    return $largestNegativeNumber;
}
$array =  [-2,1,-6,9,8,15];
$largestNegative = findLargestNegativeNumber($array);
echo "bai27:";
if ($largestNegative !== null) {
    echo "Số âm lớn nhất trong mảng là: " . $largestNegative;
} else {
    echo "Không có số âm trong mảng.";
}
echo "<br>";
//Câu 28: Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function oddTotals($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        // Kiểm tra nếu số là số lẻ
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }
    return $sum;
}
$n = 20;
$sum = oddTotals($n);
echo "bai28:";
echo "Tổng các số lẻ từ 1 đến $n là: " . $sum;
echo "<br>";
//Câu 29: Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước
function findPerfectSquares($start, $end)
{
    $perfectSquares = [];
    for ($i = $start; $i <= $end; $i++) {
        // Kiểm tra nếu số là số chính phương
        if (sqrt($i) == (int)sqrt($i)) {
            $perfectSquares[] = $i;
        }
    }
    return $perfectSquares;
}
$start = 1;
$end = 50;
$perfectSquares = findPerfectSquares($start, $end);
echo "bai29:";
echo "Các số chính phương trong khoảng $start đến $end là: " . implode(', ', $perfectSquares);
echo "<br>";
//Câu 30: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function CheckString2($string, $substring)
{
    $position = strpos($string, $substring); 
    if ($position !== false) {
        return true;
    } else {
        return false;
    }
}
$mainString = "Hello Trang";
$subString = "Trang";
$CheckString2 = CheckString2($mainString, $subString);
echo "bai30:";
if ($CheckString2) {
    echo "'$subString' is substring of '$mainString'.";
} else {
    echo "'$subString' is not substring of '$mainString'.";
}

?>