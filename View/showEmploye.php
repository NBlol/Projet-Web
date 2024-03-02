<?php
include '../Controller/EmployeC.php';
$employeC = new EmployeC();


if (isset($_POST['add_employee'])) {
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];

    $employeC->addEmploye($lastName, $firstName, $email, $dob);
   
}


if (isset($_POST['delete_employee'])) {
    $employeeIdToDelete = $_POST['employee_id'];
    $employeC->deleteEmploye($employeeIdToDelete);
    
}

$list = $employeC->listEmployes();
?>

<html>
<head></head>
<body>
    <form method="post" action="showEmploye.php">
       
        <h2>Ajouter un employé</h2>
        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" required>
        <br>
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="dob">DoB:</label>
        <input type="date" name="dob" required>
        <br>
        <button type="submit" name="add_employee">Ajouter Employé</button>
    </form>

    <form method="post" action="showEmploye.php">
        <table border=1>
            <tr>
                <th>Id</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Email</th>
                <th>DoB</th>
                <th>Action</th>
            </tr>
            <?php
            foreach ($list as $employe) {
            ?>
            <tr>
                <td><?php echo $employe['id']; ?></td>
                <td><?php echo $employe['lastName']; ?></td>
                <td><?php echo $employe['firstName']; ?></td>
                <td><?php echo $employe['email']; ?></td>
                <td><?php echo $employe['dob']; ?></td>
                <td>
                    <input type="hidden" name="employee_id" value="<?php echo $employe['id']; ?>">
                    <button type="submit" name="delete_employee">Supprimer</button>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </form>
</body>
</html>