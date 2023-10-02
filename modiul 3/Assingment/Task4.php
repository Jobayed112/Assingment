<?php

// Create a multidimensional array to student grades

$studentGrades=[
    ['Math'=>85, 'English'=>78, 'Science'=>92],
    ['Math'=>100, 'English'=>100, 'Science'=>100],
    ['Math'=>32, 'English'=>100, 'Science'=>32],
];
// Create
foreach($studentGrades as $keys=> $value){
    $newkeys=$keys+1;
    $sumvalue=array_sum($value);
    $avarege.=$sumvalue / count($value);
    if ($avarege>=80 && $avarege<=100 ) {
        echo "Student : $newkeys Average Greads $sumvalue Greads :A+ \n\n";

    }elseif($avarege>=70 && $avarege<=80){
        echo "Student : $newkeys Average Greads $sumvalue Greads :A \n\n";
    }elseif($avarege>=60 && $avarege<=70){
        echo "Student : $newkeys Average Greads $sumvalue Greads :B+ \n\n";
    }elseif($avarege>=50 && $avarege<=60){
        echo "Student : $newkeys Average Greads $sumvalue Greads :B \n\n";
    }elseif($avarege>=40 && $avarege<=50){
        echo "Student : $newkeys Average Greads $sumvalue Greads :C \n\n";
    }elseif($avarege>=33 && $avarege<=40){
        echo "Student : $newkeys Average Greads $sumvalue Greads :D \n\n";
    }elseif($avarege>=0 && $avarege<=32){
        echo "Student : $newkeys Average Greads $sumvalue Greads :F \n\n";
    }else{
        echo "Not A Intger Number \n\n";
    }
    
}



echo "hoia";




?>