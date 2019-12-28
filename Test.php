<?php
('Content-Type: text/plain');

    include "Employee.php";

        $employee = new Employee("Rini Kusuma", "Lead HR", 50000);
        $name_company = $employee -> setCompanyName("PT Makmur Jaya");
        $name_department = $employee -> setDepartmentName("Human Resource");

        $get_name_company = $employee -> getCompanyName();
        $get_name_department = $employee -> getDepartmentName();
        $get_name_employee = $employee -> getEmployeeName();
        $get_title_employee = $employee -> getEmployeeTitle();

        echo "===============================================<br>";
        echo "==================== HASIL ====================<br>";
        echo "===============================================<br>";

        echo "<br><br>";
        echo "<b>Nama Company : <b>".$get_name_company."<br>";
        echo "<b>Nama Department : <b>".$get_name_department."<br>";
        echo "<b>Nama Pegawai : <b>".$get_name_employee."<br>";
        echo "<b>Title Pegawai : <b>".$get_title_employee."<br>";
        echo "<b>Salary Pegawai : <b>".$employee -> getEmployeeMonthlySalary(30)."<br>";         
?>