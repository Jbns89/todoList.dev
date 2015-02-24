<?php  
function IsPrime($n)  
{  
 for($i=2; $i<$n; $i++)  
   {  
        if($n % $i == 0) {  
           return "$n is not a prime number" . PHP_EOL;  
        }  
    }  
    
    if($n == $i) {  
           return "$n is a prime number" . PHP_EOL;  
        } 
    
}  
echo IsPrime(12);  
echo IsPrime(13);  
echo IsPrime(15);  
