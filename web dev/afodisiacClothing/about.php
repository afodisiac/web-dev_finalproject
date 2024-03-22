<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body id="bd">
    <?php include("nav2.php");?>
    
    <?php include('navbar3.php');?> 

    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card" style="width: 30rem;">>
            <div class="card-body">
              <h5 class="card-title">about the emperor</h5>
              <div class="card-item">
                    <img src="images/bossman.jpg" class="d-block w-100" alt="bossman">
            </div>
            <P style="color: red;">afodisiac clothing is a brand that was created in 2024 by the king himself Afod with the aim of
                providing well tailored attires, unique designs with elegant material all with the aim of making
                you look your absolute best
                <!-- <button class="read-more-btn">Read More</button> -->
                <p>hate to blow his trumphet but the guy was God sent, am sure in his hands God did add a touch ob_flush
                    sparkle because everything he touches is literally a work of art and he definately knows how to make you
                your absolute best. </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body" style="width: 30rem;">
              <h5 class="card-title">some of our work</h5>
             
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="7000">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/zendeya.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/zendeye2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/bossman.jpg" class="d-block w-100" alt="...">
                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button >
              
            </div>
          </div>
        </div>
      </div>
      
    
    <p>we are a brand that  takes pride in serving our clients with off the shelf  customer care 
        that comes with a spinkle of reccord time delievery and a tables spoon of fulfilment of your expectation.
    </p>
    <?php include('footer.php');?>
    <script type="text/javascript" src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>