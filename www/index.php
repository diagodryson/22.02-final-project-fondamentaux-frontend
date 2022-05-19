<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap CSS-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
        <div class="container">
            <div class="col-8"></div>
                <form action="contact.php" method="POST">
                    <div class="form-group">
                        <div class="text">
                            <h1>Connexion</h1>
                        </div>
                     <div class="d-flex">
                            <input type="text" name="lastname" placeholder="Nom" autocomplete="off"class="form-control"/>
                            <input type="text" name="firstname" placeholder="Prénom" autocomplete="off" class="form-control"/>
                        </div>
                        <br/>
                        <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control"/>
                        <div class="form-group">
                            <!-- <label label for="InputPassword"></label> -->
                            <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="username">
                        </div>
                        <br/>
                        <button type="submit" name="submit" class="btn btn-lg btn-primary">Envoyer</button>
                    </div>
                </form>
        </div>
    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>