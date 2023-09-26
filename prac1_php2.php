<?php

//function for computing the total price//
function total_price(array $items,float $total)
    {
        foreach($items as $item_price)
            {
                $total += $item_price['price'];
            }
            echo "Total price of all items: ".$total."<br>"."<br>";
            
    }


//function for modifying the string//
function string_manipulation(string $input)
    {
        $input = strtolower(str_replace(' ','',$input));

        echo "Modified string: ".$input."<br>"."<br>";
        
    }

//function for checking if the number is odd/even//
function oddEven_checker(float $num)
    {
        if($num % 2== 0)
            {
                echo $num." is an even number."."<br>"."<br>";
               
            }
        else 
            {
                echo $num." is an odd number."."<br>"."<br>";
                
            }
            
    }

//Given for computing the total price
    $items = 
        [
            ['name' => 'Widget A', 'price' => 10],
            ['name' => 'Widget B', 'price' => 15],
            ['name' => 'Widget C', 'price' => 20],
        ];
            $total_price = total_price($items,0);
           

//


//Given for String manipulation/modification
    $strng = "This is a poorly written program with little
    structure and readability.";
        $modified_string = string_manipulation($strng);
       
//


//Given for odd/even checker
    $number_given = 22;
    $odd_or_even=oddEven_checker($number_given);
    
//







?>
