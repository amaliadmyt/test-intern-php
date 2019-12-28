<?php
include "Department.php";

    class Employee extends Department{

        private $name;
        private $title;
        private $salary;

        public function __construct($nameOfEmployee, $titleOfEmployee, $salaryOfEmployee){
            $this -> name = $nameOfEmployee;
            $this -> title = $titleOfEmployee;
            $this -> salary = $salaryOfEmployee;
        }

        public function setEmployeeName($nameOfEmployee) {
            $this -> name = $nameOfEmployee;
        }
    
        public function getEmployeeName() {
            return $this -> name;
        }

        public function getEmployeeTitle() {
            return $this -> title;
        }
    
        public function getEmployeeMonthlySalary($day) {
            $this -> salary = $this -> salary * $day;
            return $this -> salary;
        } 
    }

?>