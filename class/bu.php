 <!-- <?php
    try {
        $user = 'root';
        $password = 'shadow';
        $con= new PDO('mysql:host=localhost;dbname=references', $user, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
        } // end record loop
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        } // end try
?> 


  // Check input errors before inserting in database
    if(empty($client_err) && empty($context_err) && empty($status_err) && empty($objective_err) && empty($presentation_err) && empty($outputref)){
        // Prepare an insert statement
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_client, $param_context, $param_status, $param_objective, $param_presentation, $param_outputref);
            // Set parameters
            $param_client = $client;
            $param_context = $context;
            $param_status = $status;
            $param_objective = $objective;
            $param_presentation = $presentation;
            $param_outputref = $outputref;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: references.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }
    // Close connection
    mysqli_close($link);
}*/
 -->