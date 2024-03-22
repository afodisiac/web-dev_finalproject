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
                                <h5>dress1</h5>
                                <div class="card-item">
                                    <img src="images/dress1.webp" class="d-block w-100" alt="well tailoured suit">
                                </div>
                                <h3>120000</h3>
                                <form method="post" action="add_to_cart.php"> 
                                        <input type="hidden" name="product_id" value="9">
                                        <input type="hidden" name="product_name" value="dress1">
                                        <input type="hidden" name="product_price" value="120000"> 
                                        <button type="submit" name="add_to_cart" class="btn btn-warning">Add to Cart</button>
                                    </form>
                                
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                            <div class="card"style="width: 25rem; justify-content:center;">
                                <div class="card-body">
                                    <h5>dress 2</h5>
                                    <div class="card-item">
                                        <img src="images/dress2.webp" class="d-block w-100" alt="well tailoured suit">
                                    </div>
                                    <h3>150000</h3>
                                    <form method="post" action="add_to_cart.php"> 
                                        <input type="hidden" name="product_id" value="10">
                                        <input type="hidden" name="product_name" value="dress2">
                                        <input type="hidden" name="product_price" value="150000"> 
                                        <button type="submit" name="add_to_cart" class="btn btn-warning">Add to Cart</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                </td>
                <td class="">
                        <div class="col-md-6 mb-3 mx-auto">
                                <div class="card"style="width: 25rem;">
                                    <div class="card-body">
                                        <h5>dress 3</h5>
                                        <div class="card-item">
                                            <img src="images/dress3.webp" class="d-block w-100" alt="well tailoured suit">
                                        </div>
                                        <h3>100000</h3>
                                        <form method="post" action="add_to_cart.php"> 
                                        <input type="hidden" name="product_id" value="11">
                                        <input type="hidden" name="product_name" value="dress3">
                                        <input type="hidden" name="product_price" value="100000"> 
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
                                <h5>dress 4</h5>
                                <div class="card-item">
                                    <img src="images/dress4.webp" class="d-block w-100" alt="well tailoured suit">
                                </div>
                                <h3>150000</h3>
                                <form method="post" action="add_to_cart.php"> 
                                        <input type="hidden" name="product_id" value="12">
                                        <input type="hidden" name="product_name" value="dress4">
                                        <input type="hidden" name="product_price" value="150000"> 
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
                                <h5>dress 5</h5>
                                <div class="card-item">
                                    <img src="images/dress5.webp" class="d-block w-100" alt="well tailoured suit">
                                </div>
                                <h3>145000</h3>
                                <form method="post" action="add_to_cart.php"> 
                                        <input type="hidden" name="product_id" value="9">
                                        <input type="hidden" name="product_name" value="dress5">
                                        <input type="hidden" name="product_price" value="145000"> 
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