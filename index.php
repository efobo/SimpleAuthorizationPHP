<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/logo.jpg" type="image/jpg">
        <title>Registration</title>
    </head>
    <body>
        <div class="container mt-4">
            <?php
            if ($_COOKIE['user'] == ''):
            
            ?>
            <div class="row">
                <div class="col">
                    <h1>Registration</h1><br>
                    <form action="check.php" method="post">
                        <input type="text" class="form-control" name="login" 
                            id="login" placeholder="Enter your login"><br>
                        <input type="text" class="form-control" name="name" 
                            id="name" placeholder="Enter your name"><br>
                        <input type="password" class="form-control" name="password" 
                            id="password" placeholder="Enter password"><br>
                        <button type="submit" class="btn btn-success">
                            Register
                        </button>
                    </form>
                </div>
                <div class="col">
                <h1>Authorization</h1><br>
                    <form action="auth.php" method="post">
                        <input type="text" class="form-control" name="login" 
                            id="login" placeholder="Enter your login"><br>
                        
                        <input type="password" class="form-control" name="password" 
                            id="password" placeholder="Enter password"><br>
                        <button type="submit" class="btn btn-success">
                            Log in
                        </button>
                    </form>
                </div>
            </div>
            <?php else: ?>
                <p>
                    Hi <?=$_COOKIE['user']?>!
                    <br><br>
                    <img src="img/4.jpg" width="500px">
                    <br><br>
                    To log out, <a href="/exit.php">click here</a>.
                </p>


            <?php endif; ?>
            
        </div>
    </body>
</html>