<?php
require_once('db.php');

$input_client = $input_status = $input_context = $input_presentation = $input_objective = $input_outputref = "";
$client_err = $status_err = $context_err = $presentation_err = $objective_err = $outputref_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $input_client = $_POST["client"];
    if(empty($input_client)){
        $client_err = "Please enter a name.";
    } elseif(!filter_var(trim($_POST["client"]), FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z'-.\s ]+$/")))){
        $client_err = 'Please enter a valid name.';
    } else{
        $client = $input_client;
    }
}
    
    $input_status = $_POST["status"];
    $input_context = $_POST["context"];
    $input_presentation = $_POST["presentation"];
    $input_objective = $_POST["objective"];
    $input_outputref = $_POST["outputref"];
   
    if(empty($input_client) && empty($input_context) && empty($input_objective) && empty($input_outputref) && empty($input_presentation) && empty($input_status)) {
        echo "<script>alert('Veuillez remplir tout les champs')</script>";
    } else {
    $sql = "INSERT INTO ref (client, context, status, objective, presentation, outputref) VALUES (?, ?, ?, ?, ?, ?)";
    $test1 = $con->prepare($sql);
    $test1->execute([
       $input_client,
       $input_context,
       $input_status,
       $input_objective,
       $input_presentation,
       $input_outputref,
    ]);
    header("Location: ../ref.php");
    die();
}
  
?>