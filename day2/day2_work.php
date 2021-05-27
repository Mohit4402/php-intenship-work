<?php
$number = 212;
$remainder = $number % 2;
if($remainder == 0){
    echo $number . ' is even!';
}else{
    echo $number . ' is odd!';
}

echo '</br>';

function isPalindrome($number){
 
     $inpt = $number;
     $sum = 0;
 
    /*
      Logic to reverse a number
     */
    while(floor($inpt)) {
 
        $newnum = $inpt % 10;
        $sum = $sum * 10 + $newnum;
  
        $inpt = $inpt/10;
    }
 
    /* 
       If input number and reverse of this number is same
       then it's a Palindrome. 
     */
 
    if($number == $sum){
        return true;
     } else {
        return false;
     }
 
}
 
  
 
  if(isPalindrome($number)) {
    echo $number ." is Palindrome number";
  } else {
    echo $number ." is Not a palindrome number";
  }
?>