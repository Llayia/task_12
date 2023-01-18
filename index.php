<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Task 12</title>
    <style> </style>
</head>
<body>
    
<?php
// Массив 
$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];


echo "  Разбиение и объединение ФИО <br/> <br/> ";

$arr = [
    'surname', 
    'name', 
    'patronomyc', 
];

///$getPartsFromFullname 
for ($i=0; ($i<count($example_persons_array)); $i++) {
    $fullname = (explode(' ', $example_persons_array[$i]['fullname']));
    $getPartsFromFullname = (array_combine($arr, $fullname));
    print_r($getPartsFromFullname);
    }; 
          
echo "<br/>  <br/>  <br/>";
         
///$getFullnameFromParts
 for ($i=0; ($i<count($example_persons_array)); $i++) {
    $fullname = (explode(' ', $example_persons_array[$i]['fullname']));
    $surname = $fullname[0];
    $name = $fullname[1];
    $patronomyc = $fullname[2];
    $getFullnameFromParts = print_r("$surname" . " " . "$name" . " " . "$patronomyc") ;
    echo "<br/>" ; 
     }; 
    



echo "  Сокращение ФИО <br/> <br/> ";     
 


for ($i=0; ($i<count($example_persons_array)); $i++) {
    $fullname = (explode(' ', $example_persons_array[$i]['fullname']));
    $getPartsFromFullname = (array_combine($arr, $fullname));
    print_r($getPartsFromFullname['name'] . ' ' . mb_substr($getPartsFromFullname['surname'], 0, 1) . '.');
    echo "<br/>" ; 
      }; 


echo "<br/> <br/>  Функция определения пола по ФИО <br/> <br/> ";

for ($i=0; ($i<count($example_persons_array)); $i++) {
    $fullname = (explode(' ', $example_persons_array[$i]['fullname']));
    $getPartsFromFullname = (array_combine($arr, $fullname));
    $getPartsFromFullname['gender'] = 0;
     
    
    if (mb_substr($getPartsFromFullname['patronomyc'], -3, 3) === 'вна') {
        $getPartsFromFullname['gender'] -= 1;
     }
     if (mb_substr($getPartsFromFullname['name'], -1, 1) === 'а') {
        $getPartsFromFullname['gender'] -= 1;
     }
     if (mb_substr($getPartsFromFullname['surname'], -2, 2) === 'ва') {
        $getPartsFromFullname['gender'] -= 1;

     }
     if (mb_substr($getPartsFromFullname['patronomyc'], -2, 2) === 'ич') {
        $getPartsFromFullname['gender'] += 1;
      }
      if (mb_substr($getPartsFromFullname['name'], -1, 1) === 'й') {
        $getPartsFromFullname['gender'] += 1;
    }
      if (mb_substr($getPartsFromFullname['name'], -1, 1) === 'н') {
        $getPartsFromFullname['gender'] += 1;
     }
     if (mb_substr($getPartsFromFullname['surname'], -1, 1) === 'в') {
        $getPartsFromFullname['gender'] += 1;
     }; 


    
    };










?>


</body>
</html>