<?php
session_start();

if (isset($_SESSION['username'])) {
    // User is logged in, display their name
    echo '<button class="nav-item">Welcome, ' . $_SESSION['username'] . '!</button>'; // Assuming 'username' is the session variable storing the user's name
} else {
    // User is not logged in, display the registration link
    echo include('registerbutton.php') ;
}
?>