
<?php
 $x = 2; 
 $y = 3; 

$sum = $x + $y; 
echo $sum; 
 ?>

<?php 
echo 'hello world'
?>

<?php

$odd_nums = [1,3,5,7,9];
$first = $odd_nums[1];

print_r(array_splice($odd_nums, 1, 4))

?>

<?php 

$phone_numbers = [ "Alex" => "555-555-5578",
                    "Jessica" => "444-343-2889"
                ];
print_r($phone_numbers);
echo "Alex's phone number is " . $phone_numbers["Alex"] . "\n";

$phone_numbers["Micheal"] = "342-234-2523"; 

print_r($phone_numbers);
?>


<?php

$name = "Jake";
$last = "Simmons";

$intro = " my name is $name " . $last;

echo $intro; 

?>

<?php

$file = "image.png"; 
$extension = substr($file, strlen($file) - 4);

echo $extension
?>

<?php

$test = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];

for ($i = 0; $i < count($test); $i = $i+1) {
    if ($test[$i] % 15 === 0) {
        print_r("fizzbuzz" . "\n");
    } elseif ($test[$i] % 3 === 0) {
        print_r("fizz" . "\n") ;
    } elseif ($test[$i] % 5 === 0) {
        print_r("buzz" . "\n");
    } else {
        print_r($test[$i] . "\n");
    }
}


?>