<?php
include "Company.php";

    class Department extends Company{

        private $name;

        // public function __construct($nameOfDepartment){
        //     parent::__construct($nameOfCompany);
        //     $this -> name = $nameOfDepartment;
        // }
    
        public function setDepartmentName($nameOfDepartment){
            $this -> name = $nameOfDepartment;
        }
    
        public function getDepartmentName(){
            return $this -> name;
        }
    }

    
?>