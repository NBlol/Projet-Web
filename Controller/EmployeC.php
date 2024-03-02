<?php
include '../config.php';
class EmployeC{
    public function listEmployes(){
        $sql="SELECT* FROM employe";
        $db=config::getConnexion();
        try{
            $list=$db->query($sql);
            return $list;
        }catch(Exception $e){
            die('Error' . $e->getMessage());    
        }
    }
    public function deleteEmploye($id) {
        $sql = "DELETE FROM employe WHERE id = :id";
        $db = config::getconnexion();

        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function addEmploye($lastname, $firstname, $email, $dob) {
        $sql = "INSERT INTO employe (lastname, firstname, email, DoB) VALUES (:lastname, :firstname, :email, :dob)";
        $db = config::getconnexion();

        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':dob', $dob);
            $stmt->execute();
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}

?>