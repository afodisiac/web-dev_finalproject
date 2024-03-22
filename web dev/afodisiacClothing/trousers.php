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
                <th scope ="row">
                    <td>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                        <div class="card"style="width: 25rem;">
                            <div class="card-body">
                                <h5>brown wool blend</h5>
                                <div class="card-item">
                                    <img src="images/brown_wool_blend.jpg" class="d-block w-100" alt="well tailoured suit">
                                </div>
                                <h3>85000</h3>
                                <div class="row">
                                <form method="post" action="add_to_cart.php"> 
                                <input type="hidden" name="product_id" value="1">
                                <input type="hidden" name="product_name" value="brown_wool_blend">
                                <input type="hidden" name="product_price" value="85000"> 
                                <button type="submit" name="add_to_cart" class="btn btn-warning">Add to Cart</button>
                            </form>
                                </div>
                                <!-- <a href="#" class="btn btn-warning">add to cart</a> -->
                                
                            </div>
                        </div>
                    </div>
                    </td>
                    <td>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                        <div class="card"style="width: 25rem;">
                            <div class="card-body">
                                <h5 >cannage pants</h5>
                                <div class="card-item">
                                    <img src="images/cannage_pants.webp" class="d-block w-100" alt="well tailoured suit">
                                </div>
                                <h3>95000</h3>
                                <!-- <a href="#" class="btn btn-warning">add to cart</a> -->
                                <form method="post" action="add_to_cart.php"> 
                                <input type="hidden" name="product_id" value="2">
                                <input type="hidden" name="product_name" value="cannage pants">
                                <input type="hidden" name="product_price" value="95000"> 
                                <button type="submit" name="add_to_cart" class="btn btn-warning">Add to Cart</button>
                            </form>
                            </div>
                        </div>
                    </div>
                    </td>
                    <td>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                        <div class="card"style="width: 25rem;">
                            <div class="card-body">
                                <h5>diamond ski pants</h5>
                                <div class="card-item">
                                    <img src="images/diamond_ski_pants.webp" class="d-block w-100" alt="well tailoured suit">
                                </div>
                                <h3>75000</h3>
                                <!-- <a href="#" class="btn btn-warning">add to cart</a> -->
                                <form method="post" action="add_to_cart.php"> 
                                <input type="hidden" name="product_id" value="3">
                                <input type="hidden" name="product_name" value="diamond_ski_pants">
                                <input type="hidden" name="product_price" value="75000"> 
                                <button type="submit" name="add_to_cart" class="btn btn-warning">Add to Cart</button>
                            </form>
                            </div>
                        </div>
                    </div>
                    </td>
                </th>
            </tr>
        </tbody>
    </table>
    <?php include('footer.php'); ?>
    <script type="text/javascript" src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>