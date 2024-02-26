<?php
include "../Model/employe.php";
include "../Controller/EmployeC.php";
$employe1=new Employe("Doe","Jane","123456789","23167260","Jane.Doe@gmail.com","1/1/2000");
$employeC=new EmployeC();
$employeC->show($employe1);
?>