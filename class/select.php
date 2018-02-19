<?php
require_once('db.php');
$query = "SELECT * FROM ref";

//Parcours et affiches les noms des colonnes
print "<table class='table table-responsive'> ";
$result = $con->query($query);
//recupère uniquement la 1ere ligne (on a besoin uniquement des nom de champs)
$row = $result->fetch(PDO::FETCH_ASSOC);
print "<thead> ";
print " <tr> ";
foreach ($row as $field => $value){
    print " <th scope='col'>$field</th> ";
} // end foreach
print " </tr> ";
print "</thead> ";
//deuxieme demande pour récup la data
$data = $con->query($query);
$data->setFetchMode(PDO::FETCH_ASSOC);
foreach($data as $row){
    print " <tbody> ";
    foreach ($row as $name=>$value){
        print " <td>$value</td> ";
    } // end field loop
    print "<td><a href='?view=' class='btn btn-primary'>View</a></td>";
    print "<td><a href='?edit=' class='btn btn-success'>Edit</a></td>";
    
    $del = '?delete=' . $row['id'];
    $_GET['delete'] = $del;
    print "<td><a href=$del class='btn btn-danger' onclick='return confirm('Are you sure you want to delete this reference ?')'>Delete</a></td>";

} // end record loop
print "</tbody>";
print "</table>";
// end try
?>