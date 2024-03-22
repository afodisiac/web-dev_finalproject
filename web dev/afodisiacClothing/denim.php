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

    

    <?php include('navbar3.php'); ?>
    <table>
        <tbody>
            <tr>
                <th scope="row">
                    <td>
                        <div class="col-sm-4 mb-4 mb-sm-0">
                        <div class="card"style="width: 25rem;">
                            <div class="card-body">
                                <h5>jean jacket</h5>
                                <div class="card-item">
                                    <img src="images/denim1.webp" class="d-block w-100" alt="well tailoured suit">
                                </div>
                                <h3>75000</h3>
                                <form method="post" action="add_to_cart.php"> 
                                        <input type="hidden" name="product_id" value="16">
                                        <input type="hidden" name="product_name" value="jean-jacket">
                                        <input type="hidden" name="product_price" value="75000"> 
                                        <button type="submit" name="add_to_cart" class="btn btn-warning">Add to Cart</button>
                                    </form>
                                
                            </div>
                        </div>
                    </div>
                    </td>
                    <td>
                        <div class="col-sm-4 mb-4 mb-sm-0">
                        <div class="card"style="width: 25rem;">
                            <div class="card-body">
                                <h5>dior jacket</h5>
                                <div class="card-item">
                                    <img src="images/denim2.webp" class="d-block w-100" alt="well tailoured suit">
                                </div>
                                <h3>50000</h3>
                                <form method="post" action="add_to_cart.php"> 
                                        <input type="hidden" name="product_id" value="17">
                                        <input type="hidden" name="product_name" value="dior-jacket">
                                        <input type="hidden" name="product_price" value="50000"> 
                                        <button type="submit" name="add_to_cart" class="btn btn-warning">Add to Cart</button>
                                    </form>
                                
                            </div>
                        </div>
                    </div>
                    </td>
                    <td>
                        <div class="col-sm-4 mb-4 mb-sm-0">
                        <div class="card"style="width: 25rem;">
                            <div class="card-body">
                                <h5>cow boy jacket</h5>
                                <div class="card-item">
                                    <img src="images/denim3.webp" class="d-block w-100" alt="well tailoured suit">
                                </div>
                                <h3>100000</h3>
                                <form method="post" action="add_to_cart.php"> 
                                        <input type="hidden" name="product_id" value="18">
                                        <input type="hidden" name="product_name" value="cow-boy-jacket">
                                        <input type="hidden" name="product_price" value="100000"> 
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