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
    <form action="registration_process.php" method="post">
        <div class="container">
            <div class="card" style="align-items:center;">
                <label for="">Firstname</label>
                <input type="text" placeholder="firstname" name="firstname"><br>
                <label for="">Secondname</label>
                <input type="text" placeholder="secondnae" name="secondname">
                <br>
                <label for="">Username</label>
                <input type="text" placeholder="username" name="username"> 
                <br>
                <label for="">Email</label>
                <input type="email" placeholder="name@gmail.com" name="email">
                <br>
                <label for="">Phone No.</label>
                <input type="number" placeholder="+256 123456778" name="phoneNo">
               
                <div>
                    <button type="submit" class="btn btn-warning">register</button>
                </div>
            </div>
           
        </div>
    </form>
    <?php include('footer.php');?>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>