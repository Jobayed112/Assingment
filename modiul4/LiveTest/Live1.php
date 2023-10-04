<?php
// // //Task 1

class Person{
    public $name;
    public $age;
    function __construct($n="Jobayed",$a=23){
        $this->name=$n;
        $this->age=$a;
    }
    public function introduce(){
        echo "My name is {$this->name} is .{$this->age} years old";
    }
}
$person=new Person("Johan",30);
$person->introduce();






// // // Task2

// class Person{
//     public $name;
//     public $age;
//     public function __construct($name,$age){
//         $this->name=$name;
//         $this->age=$age;
//     }
//     public function introduce(){
//         echo "My name is {$this->name} is.{$this->age} years old \n";
//     }
// }
// class Student  extends Person{
//     public $grade;
//     public function __construct($name,$age,$grade){
//         parent::__construct($name,$age);
//         $this->grade=$grade;
//     }
//     public function calculate_grade_percentage(){
//         $percentage=$this->grade/100*100;
//         return  $percentage."% \n";
//     }
// }

// $student=new Student("Robert", 18, 85);
// echo PHP_EOL;
// $student->introduce();
// $gradePercentage =$student->calculate_grade_percentage();
// echo "My grade percentage is {$gradePercentage}";




?>