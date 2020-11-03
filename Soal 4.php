<?php
    class Company {
        public $name;

        function setCompanyName($name){
            $this->name = $name;
        }

        function getCompanyName(){
            return this->name;
        }
    }

    class Department {
        public $name;

        function setDepartmentName($name){
            $this->name = $name;
        }

        function getDepartmentName(){
            return $this->name;
        }
    }

    class Employee {
        public $name;
        public $title;
        public $salary;

        function setEmployeeName($name){
            $this->name = $name;
        }
        
        function getEmployeeTitle(){
            return $this->title;
        }

        function getEmployeeProfile(){
            return $this->name;
            getEmployeeProfile();
        }

        function getEmployeeMonthlySalary($day){
            return $day * $salary;
        }
    }
?>
