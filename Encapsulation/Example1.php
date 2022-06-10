<?php
class Student {
    private $firstname;
    private $gender;

    public function getFirstName(){
        return $this->firstname;
    }

    public function setFirstNmae($firstname) {
        $this->firstname = $firstname;
        echo ("First name is set to \n" .$firstname);
        
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        if ('Male' !== $gender and 'Female' !== $gender) {

        }

        $this->gender = $gender;
        echo ('Gender is set to \n ' .$gender);
        
    }
}

$student = new Student();
$student->setFirstNmae('prem');
$student-> setGender('Male');
?>
