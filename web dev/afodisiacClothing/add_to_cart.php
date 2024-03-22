<?php 
session_start();

function addToCart($id,$name,$price,$quantity=1){
    if(!isset($_SESSION['cart'])){
        // if cart is empty, we initialize it
        $_SESSION['cart'] = array();
    }
    // If item already exists in cart, update quantity
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] += $quantity;
    } else { // Otherwise, add new item to cart
        $_SESSION['cart'][$id] = array(
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity
        );
    }
}
// Check if add to cart form is submitted
if (isset($_POST['add_to_cart'])) {
    // Get product details from form
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Add product to cart
    addToCart($product_id, $product_name, $product_price);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

$products = array(
    array('id' => 1, 'name' => 'brown-wool-blend', 'price' => 85000),
    array('id' => 2, 'name' => 'cannage-pants', 'price' => 95000),
    array('id' => 3, 'name' => 'diamond-ski-pants', 'price' => 75000),
    // Add more products here as needed
);

// Display products
// echo "<h2>Products</h2>";
// echo "<ul>";
// foreach ($products as $product) {
//     echo "<li>{$product['name']} - \${$product['price']} <form method='post'><input type='hidden' name='product_id' value='{$product['id']}'><input type='hidden' name='product_name' value='{$product['name']}'><input type='hidden' name='product_price' value='{$product['price']}'><input type='submit' name='add_to_cart' value='Add to Cart'></form></li>";
// }
// echo "</ul>";

// Display cart contents
// <div class="card" style="width: 18rem;">
//         <div class="card-header">
//         echo "<h2>Cart</h2>";
//         </div>
//         <ul class="list-group list-group-flush">
//           <li class="list-group-item">An item</li>
//           <li class="list-group-item">A second item</li>
//           <li class="list-group-item">A third item</li>
//         </ul>
//     </div>

// echo "<h2>Cart</h2>";



?>
<div class="card" style="width: 18rem;">
        <div class="card-header">
          cart
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                    echo "<ul>";
                    foreach ($_SESSION['cart'] as $id => $item) {
                        
                        echo "<li>{$item['name']} - \${$item['price']} - Quantity: {$item['quantity']}</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "Your cart is empty";
                } ?>
          </li>
          
        </ul>
    </div>