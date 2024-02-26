<?php
class Employe{
    private $lastName;
    private $firstName;
    private $password;
    private $phone;
    private $email;
    private $dob;
    public function __construct($lastName,$firstName,$password,$phone,$email,$dob)
    {
        $this->lastName=$lastName;
        $this->firstName=$firstName;
        $this->password=$password;
        $this->phone=$phone;
        $this->email=$email;
        $this->dob=$dob;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function setLastName(string $ln){
        $this->lastName=$ln;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function setFirstName(string $fn){
        $this->firstName=$fn;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword(string $pwd){
        $this->password=$pwd;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function setPhone(string $p){
        $this->phone=$p;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail(string $e){
        $this->email=$e;
    }
    public function getDob(){
        return $this->dob;
    }
    public function setDob(string $d){
        $this->dob=$d;
    }
}
?>