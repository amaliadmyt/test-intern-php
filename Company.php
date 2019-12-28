<?php
    class Company{

        private $name;

        // public function __construct($ameOfCompany){
        //     $this -> name = $ameOfCompany;
        // }

        public function setCompanyName($nameOfCompany){
            $this -> name = $nameOfCompany;
        }

        public function getCompanyName(){
            return $this -> name;
        }
    }

?>