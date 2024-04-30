<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
 

$programmingLanguage = ['C++', 'Java', 'Python', 'PHP'];

//avabeu array_push kora jai
$programmingLanguage[] = 'GO';
var_dump($programmingLanguage) ;

//2nd way teu aivabe array_push kora jay(w3shool)
array_push($programmingLanguage,'C', 'Jango', 'Laravel');



var_dump($programmingLanguage) ;

//count(name) aita use kore total koto gula element ache aita ber kora jay.
echo 'Total data in the array is: '.count($programmingLanguage).'</br>' ;


//array er vitor element gular valu set kora jonno 
$programmingLanguage =['PHP' => '8.0','Python' =>'3.9'];

print_r($programmingLanguage).'</br>';

$getArray = ['hello', 'how are you', 'kmn acho'];

print_r($getArray);
var_dump($getArray);

$getArray [] = 'ami valo achi';
var_dump($getArray);
array_push($getArray, 'doramon', 'ninja', 'Ben 10',);
var_dump($getArray);


  ?>



</body>
</html>