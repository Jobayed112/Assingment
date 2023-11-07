<?php

// $filePointer=fopen("./ReadFile.txt","r");
// while($line=fgets($filePointer)){
//     echo $line;
// }
// fclose($filePointer);
// $filePointer=file_get_contents("./ReadFile.txt");
$newData="Jobayed";
file_put_contents("./ReadFile.txt",$newData."\n",FILE_APPEND);
$data=file_get_contents("ReadFile.txt");
echo nl2br($data);



?>