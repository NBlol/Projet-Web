<?php
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$date=$_POST["date"];
$pass=$_POST["pass"];
$cpass=$_POST["cpass"];
?>
<html>
    <body>
        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Password</th>
                <th>Confirm Password</th>
            </tr>
            <tr>
                <td><?php var_dump($nom); ?></td>
                <td><?php var_dump($prenom); ?></td>
                <td><?php var_dump($phone); ?></td>
                <td><?php var_dump($email); ?></td>
                <td><?php var_dump($date); ?></td>
                <td><?php var_dump($pass); ?></td>
                <td><?php var_dump($cpass); ?></td>
            </tr>
        </table>
    </body>
</html>