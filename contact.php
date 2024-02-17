<?php
$nom=$_GET["nom"];
$prenom=$_GET["prenom"];
$email=$_GET["email"];
$tel=$_GET["tel"];
$adresse=$_GET["adresse"];
$cp=$_GET["cp"];
?>
<html>
    <body>
        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Code Postal</th>
            </tr>
            <tr>
                <td><?php echo $nom; ?></td>
                <td><?php echo $prenom; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $tel; ?></td>
                <td><?php echo $adresse; ?></td>
                <td><?php echo $cp; ?></td>
            </tr>
        </table>
    </body>
</html>