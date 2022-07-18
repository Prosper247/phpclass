<?php
// > 1 to 7 == you are an infact
// > 7 to 17 == you are a Teenager
// > 18 to 49 == you are an adult
// > 50 to 99 == you are old
// else you are Methussella

// $age = 5; 
// if($age <= 7)
// {
//     $result = 'You are an infact';
// }
// else if($age > 7 && $age <= 17)
// {
//     $result = 'You are a teenager';
// }
// else if ($age > 17 && $age <= 49)
// {
//     $result = 'You are an adult';
// }
// else if($age > 49 && $age <= 99)
// {
//     $result = 'You are old';
// }
// else{
//     $result = 'You are a Metusellah';
// }
// echo "$result"

// $firstname = 'John';
// $lastname = 'James';
// $age = 20;
// $salary = 20000000.00;

// SWITCH: it is used to test for actual value not range
// switch($age){
//     case 10:
//         echo "Welcome";
//         break;
//         case 20:
//             echo "Thank you";
//             break;
//             default:
//             echo "Try again";
//             break;
// }
//ITERATION: It is also called "LOOP"
// There are different type of Loop; we have while loop,for loop,for loop, foreach loop
// loop: it continously carry out a particular condition until the condition is no more true.



// if($age <= 10)
// {
//     $salary = 2500;
// }
// if($age >= 10 && $age <= 20)
// {
//     $salary = 3500;
// }
// $fullname = $lastname. " ". $firstname; 
// echo "<h1>Hello world</h1>";
// echo "$salary"

// $a = 1;
// $b = 101;
// WHILE LOOP
// while($a < $b){
//     echo "$a <br>";
// $a++;
// }
//Generate odd numbers only

// while($a < $b){
//     echo "$a <br>";
//     $a += 2;
// }
// FOR LOOP
// $d = 10;
// for((initial value; condition; increment or decrement value)){
//     echo
// }
// for ($c = 0; $c < $d; $c++){
//     echo "Hello ";
// }
//DATA STRUCTURE: It is a form of which a data comes.
// Example are:
//     Array
//     Object

// $fullname = $lastname . " " . $firstname;
// $name = ["John", "James", "Jack", "Juliet"];
// $y = 0; b
// $n = count($name);
// while($y < $n){
//     echo "$name[$y] <br>";
//     $y++;
// }
// echo "<h1> For loop</h1>";
// //Here we use loop
// for($x = 0; $x < $n; $x++){
//     echo $name[$x]."<br>";
// }

// echo "<h1> Foreach loop </h1>";
// foreach($name as $v){
//     echo "$v <br>";
// }
// Associative array
// $person = array('firstname'=> 'tayo', 'lastname' => 'James');
// firstname is the key while tayo is the value
// $m = count($person);
//echo $person["firstname"];

// foreach($person as $p => $value){
//     echo "$p = $value <br>";
// } 
// $data = "foo:*:1023:1000: :/home/foo:/bin/sh";
// list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
// echo "$user <br>";
// echo "$pass <br>";
// echo "$uid <br>";
// echo "$uid <br>";
// echo "$gecos <br>";
// echo "$home <br>";
// echo "$shell <br>";
// echo json_encode($person)
//PHP FUNCTIONS
// 1.Built-in
// 2. User designed function
//It means grouping of codes together in a single name

function welcome(){
    echo ("welcome"). "<br>";
    
}
welcome();
//function that returns
function Thanks(){
    return ("Thank you"). "<br>";
}
$greeting = Thanks();
echo $greeting;

function sumvalue($a, $b){
    echo $c =($a + $b). "<br>";
}

sumvalue(5, 2);
function sumdefault($a = 1, $b = 3){
    echo $c = ($a + $b). "<br>";
}
sumdefault();
sumdefault(5);
sumdefault(5, 2);
//  CLASS: grouping of related functions together. An object that has Characteristics
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
   <!-- <h1>Hello <?php echo $n; ?></h1>  
   <h1>Age<?php echo $age; ?></h1>
   <h1>salary<?php echo $salary; ?></h1>     -->

   <!-- 
       Json<Javascript Object notation> Object
   It is used in the context of APpplication Interface <API> -->
 </body>
 </html>
 



