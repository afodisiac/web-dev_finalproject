<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.rtl.min.css">
    <style>
        .background {
            background-color: darkolivegreen;
        }
        .center-card {
      position: absolute;
      top: 90%;
      left: 50%;
      transform: translate(-50%, -50%);
        }
        @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
        }

        /* Apply the animation to a specific element */
        .fade-in {
        animation: fadeIn 1s ease-in-out;
        }
        .card {
            box-shadow: 5px;
            border-radius: 35%;
        }
    </style>
</head>
<body class="background">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid ">
            <ul class="nav nav-underline">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="home3.php">Afodisiac</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="home3.php">home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about4.php">about</a>
                  </li>
                <li class="nav-item">
    
                  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
              </ul>
        </div>
       
    </nav>

    <div class="fadein">
        <div class="card center-card" style="width: 30rem;">
            <div class="cardbody">
                <h4>about the creator</h4>
                <div class="card-item">
                    <img src="images/bossman.jpg" class="d-block w-100" alt="afodmat">
                    afodisiac clothing is a brand that was created in 2024 by the king himself Afod with the aim of
                    providing well tailored attires, unique designs with elegant material all with the aim of making
                    you look your absolute best
                    <!-- <button class="read-more-btn">Read More</button> -->
                    <p>hate to blow his trumphet but the guy was God sent, am sure in his hands God did add a touch ob_flush
                        sparkle because everything he touches is literally a work of art and he definately knows how to make you
                    your absolute best.
                </div>
            </div>
        </div>
    </div>
    
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>