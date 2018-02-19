<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/references.css">
    <title>Références - Linagora</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/narrow-jumbotron.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <?php require('class/db.php') ?>
    <div class="container"> <!-- container -->

        <header class="header clearfix"> <!-- header -->
            <h1 class="text-center">Références - Linagora</h1>
        </header> <!-- /header -->

        <main role="main"> <!-- main -->
    <?php require('class/select.php') ?>
        <div class="row">
            <div class="col-lg-12">
                <form action="class/insert.php" method="POST">

                    <h4>Client</h4>
                    <input type="text" class='form-control' id=client name='client' placeholder="Client" value="<?php echo $client; ?>" required>

                    <h4>Status</h4>
                    <select class='form-control' name='status'>
                        <option value="<?php echo $status; ?>publish">Publish</option>
                        <option value="<?php echo $status; ?>unpublished">Unpublished</option>
                        <option value="<?php echo $status; ?>draft">Draft</option>
                    </select>
            </div>

            <div class="col-lg-6">
                <h4>Context :</h4>
                <textarea type="text" class='form-control' id='context' name='context' required><?php echo $context; ?></textarea>

                <h4>Project presentation :</h4>
                <textarea type="text" class='form-control' id='presentation' name='presentation' required><?php echo $presentation; ?></textarea>
            </div>

            <div class="col-lg-6">
                <h4>Objective :</h4>
                <textarea type="text" class='form-control' id='objective' name='objective' required><?php echo $objective; ?></textarea>

                <h4>Output</h4>
                <textarea type="text" class='form-control' id='outputref' name='outputref' required><?php echo $outputref; ?></textarea>
            </div>

            <div class="col-lg-12">
                <input type="submit" class="btn btn-success" value="Add reference">
            </div>
            </form>
        </div>
        <?php require('insert.php') ?>
    </main>

    <footer class="footer"> <!-- footer -->
        <p>&copy; OpenHackademy</p>
    </footer> <!-- /footer -->

</div> <!-- /container -->
</body>
</html>