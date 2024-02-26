<?php
class EmployeC{
    public function show($employe){
        var_dump($employe->getLastName(),$employe->getFirstName(),$employe->getPassword(),$employe->getPhone(),$employe->getEmail(),$employe->getDob());
    }
}
?>