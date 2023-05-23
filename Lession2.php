<?php
// Câu 1: Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen()
             function countCharacter($string){
    return strlen($string);
 }
echo strlen("Hello php");

// Câu 2: Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count()
            function wordCount($string){
            return str_word_count($string);
}
           echo str_word_count("Hello php");
// Câu 3: Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev()
             function reverseString($string){
             return strrev($string);
}
             echo strrev("Hello php");
// Câu 4: Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos()
             function stringSearch($string) {
             return strpos($string);
}
             echo strpos("Hello php","php");
//Câu 5: Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace()

             function replaceString($string) {
             return str_replace($string);
    }
            echo str_replace("Do","Thi","Do Nguyen Thuy Trang");
//Câu 6 Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
                function testString($string){
                return strpos($string);
                         }
                 $str = "DoTrang";
                 $sub = "Do";
                 if (strpos($str, $sub) !== false) {
                     echo 'Ton tai';
                     } else {
                     echo 'Khong ton tai';
                     }
//Câu 7:  Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
             function convertString($string){
                 return convertString($string);
             }
             echo strtoupper("Hello php");
//Câu 8 Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
                 function convertTolower($string){
                     return strtolower($string);
                 }
                 echo strtolower("HELLO PHP");

//Câu 9 Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
                 function convertUcword($string){
                 return ucword($string);
                 }
                 echo ucwords("hello php");
//Câu 10 Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
                 function removeWhitespace($string){
                 return trim($string);
                 }
                 echo trim(" Khoảng trắng ");
//Câu 11 Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
                 function removeInitials($string){
                  return ltrim($string);
                }
                  echo ltrim("Bỏ ký tự đầu","B");

//Câu 12 Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
                 function removeLast($string){
                 return rtrim($string);
                }
                  echo rtrim("Bỏ ký tự cuối","i");      
 //Câu 13 Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode()
                 function splitString($string){
                             return explode($string);
                              }
                 print_r(explode(" ","Do Trang")); 
// Câu 14 Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode()                          
                 function mergeArr($array){
                    return implode($array);
                                     }
                 $arr = array('Ha','Diep');
                 echo implode(" ",$arr)."<br>";
 //Câu 15 Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad()
                function addString($string){
                     return str_pad($string);
                     }
                 $str = "Do Trang";
                 echo str_pad($str,20,"Thuy");
//Câu 16 Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr()
                  function testString($string){
                 return strpos($string);
                 }
                 $str = "DoTrang";
         $sub = "Do";
         if (strpos($str, $sub) !== false) {
             echo 'Ton tai';
             } else {
             echo 'Khong ton tai';
             } 
 //Câu 17 Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr() 
                  function testString($string){
                         return strpos($string);
                         }
                 $str = "DoTrang";
                $sub = "Do";
                 if (strpos($str, $sub) !== false) {
                     echo 'Ton tai';
                     } else {
                     echo 'Khong ton tai';
                     }
 //Câu 18  Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
                    function replace($string){
                         return preg_replace($string);
                 }
                 $str = 'Hello World!';
                 $pattern = '/World/i';
                 echo preg_replace($pattern, '!!!!', $str);
//Câu 19 Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int()
function checkVar($var){  
   return is_int($var);  
}
if (is_int(20)) { 
echo "True"; 
} 
else { 
echo "False"; 
} 
//Câu 20 Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var()
function checkString($email){  
   return filter_var($email);  
}
if (filter_var("thuytrang02092002@gmail.com", FILTER_VALIDATE_EMAIL)) { 
echo "Valid Email"; 
} 
else { 

echo "Invalid Email"; 
} 

