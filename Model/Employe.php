<?php
    class Employe{
        private $id=null;
        private $lastName=null;
        private $firstName=null;
        private $email=null;
        private $dob=null;
        public function __construct($id=null,$l,$f,$em,$d)
        {
            $this->id=$id;
            $this->lastName=$l;
            $this->firstName=$f;
            $this->email=$em;
            $this->dob=$d;

        }
        public function getId(){
            return $this->id;
        }
        public function getLastName(){
            return $this->lastName;
        }
        public function getFirstName(){
            return $this->firstName;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getDob(){
            return $this->dob;
        }
        public function setLastName($lastName){
            $this->lastName=$lastName;
        }
        public function setFirstName($firstName){
            $this->firstName=$firstName;
        }
        public function setEmail($email){
            $this->email=$email;
        }
        public function setDob($dob){
            $this->dob=$dob;
        }

    }
?>