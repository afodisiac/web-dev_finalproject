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
    <table class="table">
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <div class="card"style="width: 25rem;">
                            <div class="card-body">
                                <h5>classic suit 1</h5>
                                <div class="card-item">
                                    <img src="images/suit3.jpg" class="d-block w-100" alt="well tailoured suit">
                                </div>
                                <h3>550000</h3>
                                <form method="post" action="add_to_cart.php"> 
                                <input type="hidden" name="product_id" value="4">
                                <input type="hidden" name="product_name" value="classic_suit1">
                                <input type="hidden" name="product_price" value="550000"> 
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
                                    <h5>classic suit 2</h5>
                                    <div class="card-item">
                                        <img src="images/suit2.jpg" class="d-block w-100" alt="well tailoured suit">
                                    </div>
                                    <h3>550000</h3>
                                    <form method="post" action="add_to_cart.php"> 
                                        <input type="hidden" name="product_id" value="5">
                                        <input type="hidden" name="product_name" value="classic_suit2">
                                        <input type="hidden" name="product_price" value="550000"> 
                                        <button type="submit" name="add_to_cart" class="btn btn-warning">Add to Cart</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                </td>
                <td >
                        <div class="col-md-6 mb-3 mx-auto">
                                <div class="card"style="width: 25rem;">
                                    <div class="card-body">
                                        <h5>classic suit 3</h5>
                                        <div class="card-item">
                                            <img src="images/suit1.jpg" class="d-block w-100" alt="well tailoured suit">
                                        </div>
                                        <h3>600000</h3>
                                        <form method="post" action="add_to_cart.php"> 
                                            <input type="hidden" name="product_id" value="6">
                                            <input type="hidden" name="product_name" value="classic_suit3">
                                            <input type="hidden" name="product_price" value="600000"> 
                                            <button type="submit" name="add_to_cart" class="btn btn-warning">Add to Cart</button>
                                    </form>
                                        
                                    </div>
                                </div>
                        </div>
                    </td>
            </tr>
            <tr>
                <div class="container">
                    <th scope="row"></th>
                    
                </div>
                
            </tr>
            <tr>
                <th scope=row></th>
                <td>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <div class="card"style="width: 25rem;">
                            <div class="card-body">
                                <h5>classic suit 4</h5>
                                <div class="card-item">
                                    <img src="images/suit4.jpg" class="d-block w-100" alt="well tailoured suit">
                                </div>
                                <h3>550000</h3>
                                <form method="post" action="add_to_cart.php"> 
                                        <input type="hidden" name="product_id" value="7">
                                        <input type="hidden" name="product_name" value="classic_suit4">
                                        <input type="hidden" name="product_price" value="550000"> 
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
                                <h5>classic suit 5</h5>
                                <div class="card-item">
                                    <img src="images/suit5.jpg" class="d-block w-100" alt="well tailoured suit">
                                </div>
                                <h3>550000</h3>
                                <form method="post" action="add_to_cart.php"> 
                                        <input type="hidden" name="product_id" value="8">
                                        <input type="hidden" name="product_name" value="classic_suit5">
                                        <input type="hidden" name="product_price" value="550000"> 
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