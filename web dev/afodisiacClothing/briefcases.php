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
    <?php include('nav2.php');?>

    <?php include('navbar3.php');?>
    <table>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <div class="card"style="width: 25rem;">
                            <div class="card-body">
                                <h5>dior hit the road</h5>
                                <div class="card-item">
                                    <img src="images/dior_hit_the_road.webp" class="d-block w-100" alt="well tailoured suit">
                                </div>
                                <h3>250000</h3>
                                <form method="post" action="add_to_cart.php"> 
                                        <input type="hidden" name="product_id" value="13">
                                        <input type="hidden" name="product_name" value="dior_hit_the_road">
                                        <input type="hidden" name="product_price" value="250000"> 
                                        <button type="submit" name="add_to_cart" class="btn btn-warning">Add to Cart</button>
                                    </form>
                                
                            </div>
                        </div>
                    </div>
                </td>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <div class="card"style="width: 25rem;">
                            <div class="card-body">
                                <h5>lingo</h5>
                                <div class="card-item">
                                    <img src="images/dior_lingo1.webp" class="d-block w-100" alt="well tailoured suit">
                                </div>
                                <h3>300000</h3>
                                <form method="post" action="add_to_cart.php"> 
                                        <input type="hidden" name="product_id" value="14">
                                        <input type="hidden" name="product_name" value="lingo">
                                        <input type="hidden" name="product_price" value="300000"> 
                                        <button type="submit" name="add_to_cart" class="btn btn-warning">Add to Cart</button>
                                    </form>
                                
                            </div>
                        </div>
                    </div>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <div class="card"style="width: 25rem;">
                            <div class="card-body">
                                <h5>lingot</h5>
                                <div class="card-item">
                                    <img src="images/dior_lingot.webp" class="d-block w-100" alt="well tailoured suit">
                                </div>
                                <h3>240000</h3>
                                <form method="post" action="add_to_cart.php"> 
                                        <input type="hidden" name="product_id" value="15">
                                        <input type="hidden" name="product_name" value="lingot">
                                        <input type="hidden" name="product_price" value="240000"> 
                                        <button type="submit" name="add_to_cart" class="btn btn-warning">Add to Cart</button>
                                    </form>
                                
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <?php include('footer.php');?>
    <script type="text/javascript" src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>