<nav class="navbar navbar-expand-lg  ">
    <div class="container-fluid">
        <button class="btn btn-outline-primary">
            <a class="navbar-brand " href="home3.php">afodisiac</a>
        </button>
        
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <div>
            <?php include('login_check.php');?>
        </div>
        
        
    </div>
</nav>