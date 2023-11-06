<?php

function ispalindrome()
{
    $text="ala";
   $text=strtolower($text);
   for($i=0;$i<strlen($text);$i++)
   {

    $k=strlen($text);
    $k--;
    if($text[$i]==$text[$k])
        {
        
        }
        else{print(`is not a palindrome`);
            return false;
        }
        print(`is a palindrome`);
        return true;
}

}

ispalindrome();

