<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.css');?>">
    <title>Login</title>
</head>
<body>
    <h1 class="text-center">Connexion</h1>
    <?php if($err == 1){ ?>
        <center>
        <div class="alert alert-danger" role="alert">
            Veuiller vérifier vos identifiants!
        </div>
    </center>
    <?php } ?>
    <br>
        <center>
            <div class="col-md-3">
                <form action="<?php echo site_url('acceuil') ?>" method="post">
                    <p><input type="text" name="pseudo" class="form-control" placeholder="Pseudo"></p>
                    <p><input type="password" name="mdp" class="form-control" placeholder="Votre mot de passe"></p><hr>
                    <center><p><input type="submit" value="Connexion" class="btn btn-primary"></p>
                </form>
            </div>
        </center>
        
            
</body>
</html>