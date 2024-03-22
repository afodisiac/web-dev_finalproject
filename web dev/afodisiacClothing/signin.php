<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body>
    <?php include('navbar.html');?>
    <form action="login_process.php" method="post">
        <div class="card" style="width: 30rem;">
            <h5 class="card-title">sign in</h5>
            <div class="card-body"></div>
                <label for="">username:</label>
                <input type="text" placeholder="username" name="username">
                <label for="">email:</label>
                <input type="email" placeholder="name@gmail.com" name="email">
                <div>
                    <button type="submit" class="btn btn-warning">signin</button>
                </div>
                
                <h6>
                    <u>
                        <a href="#">forgot password</a>
                    </u>
                </h6>
        </div>
    </form>
    
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>