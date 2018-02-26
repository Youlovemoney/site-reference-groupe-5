<?php
session_start()
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Login - Référentiel</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Import font-awesome -->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
</head>

<body>

  <?php
        require('class/db.php');


        $reponse = $db->prepare('SELECT * FROM userss WHERE username = :username');

        $reponse->execute(array(
            'username' => $_POST['username'],
        ));

        $results = $reponse->fetchAll();
        foreach ($results as $item) {
          $password = $item['mdp'];
        }

        if($_POST['password'] === $password) {
          header('Location: references.php');
        } else {
          echo 'Mauvais mot de passe';
        }
        ?>


  <div class="container"> <!-- container -->
    <form class="form-signin" method="POST" action="index.php"> <!-- form -->
        <img class="logo" src="img/logo-linagora.png" alt="logo-linagora.png">
        <div class="input">
            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            <label class="icon-right" for="inputUsername">
                <i class="fa fa-paper-plane"></i>
            </label>
        </div>


        <div class="input">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
            <label class="icon-right" for="inputPassword">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </label>

        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Connection <i class="fa fa-sign-in" aria-hidden="true"></i></button>
        <a href="references.php" class="btn btn-lg btn-primary btn-block">DEMO</a>
    </form> <!-- /form -->
</div> <!-- /container -->
</body>

</html>