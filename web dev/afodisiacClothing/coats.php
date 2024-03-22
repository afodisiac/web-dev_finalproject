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
    <?php include('nav2.html');?>

    <?php include('navbar3.php'); ?>
    <table>
        <tbody>
            <tr scope="col"></tr>
            <td>
                <div class="card"style="width:25rem;">
                    <div class="card-body">
                <h5>trench coat</h5>
                <div class="card-items">
                    <img src="images/coat1.webp" class="d-block w-100" alt="well tailoured suit">
                </div>
                <h3>150000</h3>
                <form method="post" action="add_to_cart.php"> 
                    <input type="hidden" name="product_id" value="22">
                    <input type="hidden" name="product_name" value="trench-coat">
                    <input type="hidden" name="product_price" value="150000"> 
                    <button type="submit" name="add_to_cart" class="btn btn-warning">Add to Cart</button>
                </form>
                </div>
                </div>
            </td>
            <!-- <td>
            <div class="card"style="width:25rem;">
        <div class="card-body">
            <h5>loius vuitton coat</h5>
            <div class="card-items">
                <img src="images/louis_vuitton_coat.jpg" class="d-block w-100" alt="well tailoured suit">
            </div>
            <h3>250000</h3>
            <form method="post" action="add_to_cart.php"> 
                <input type="hidden" name="product_id" value="28">
                <input type="hidden" name="product_name" value="louis_vuitton_coat">
                <input type="hidden" name="product_price" value="250000"> 
                <button type="submit" name="add_to_cart" class="btn btn-warning">Add to Cart</button>
            </form>
        </div>
    </div>
            </td> -->
        </tbody>
    </table>
    
    <?php include('footer.php'); ?>
    <script type="text/javascript" src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>