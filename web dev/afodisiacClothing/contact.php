<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body class="body margin">
    <?php include("nav2.php");?>

    <?php include('navbar.html');?> 

    <?php include('navbar3.php');?>
    
    
    <p>in case of anything do not hesitate to contact us</p>
    <form action="">
        <div class="container">
            <div class="container-fluid">
                <label for="">first name</label>
                <input type="text" placeholder="firstname">
            </div>
            
            <br>
            <div class="container-fluid">
                <label for="">second name</label>
                <input type="text" placeholder="secondname">
            </div>
            
            <br>
            <div class="container-fluid">
                <label for="">email</label>
                <input type="email" placeholder="name@email.com">
            </div>
            <br>
            <div class="card">
                <label for="">your message</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <button type="button" class="btn btn-danger">submit</button>
            </div>
        </div>
       
        
    </form>
<?php include('footer.php');?>
<script type="text/javascript" src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>