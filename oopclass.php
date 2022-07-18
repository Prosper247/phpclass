<?php
class Person{
    public $name = "Johnson";
    public $age = 25;
function getPerson(){
    echo'Welcome to persom function';
}
}
$p = new Person();
//$p->getPerson();
echo $p->name;

class Student{
    public $name = 'Johnson';
    public $age = '25';
    public $department = 'Physics';
    public $course = 'Mech Engr';
    
    function addstudent($name, $age, $department, $course){
        echo "Student added successfully";
    }
    function editstudent($name, $age, $department, $course){
        echo "Student edited successfully";
    }
    function Deletestudent($name, $age, $department, $course){
        echo "Student deleted successfully";
    }
    function selectstudent($name, $age, $department, $course){
        echo "Student selected successfully";
    }
    $std = new Student();

    $std->addStudent('','','','');

}
?>
