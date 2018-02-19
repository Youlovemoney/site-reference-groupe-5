<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Login - Référentiel</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
</head>

<body>
<div class="container"> <!-- container -->
    <form class="form-signin" method="post" action="#"> <!-- form -->
        <img class="logo" src="img/logo-linagora.png" alt="logo-linagora.png">
        <div class="input">
            <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Adresse @email" required autofocus>
            <label class="icon-right" for="inputEmail">
                <i class="fa fa-paper-plane"></i>
            </label>
        </div>
        <div class="input">
            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
            <label class="icon-right" for="inputPassword">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Connection <i class="fa fa-sign-in" aria-hidden="true"></i></button>
        <a href="references.php" class="btn btn-lg btn-primary btn-block">DEMO</a>
    </form> 
</div>
</body>

</html>