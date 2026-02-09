<?php 
  session_start();
  require("config/db.php");
  if(!isset($_SESSION["user_id"])) {
    header("Location: auth/login.php");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
      crossorigin="anonymous">
    <title>GrabBoss</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">GrabBoss</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="products.php" class="nav-link">Products</a></li>
            <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
            <li class="nav-item"><a href="index.php#" class="nav-link">Settings</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Hero -->
    <section class="bg-light py-5 text-center">
      <div class="container">
        <h1 class="fw-bold">Welcome to GrabBoss <?php echo htmlspecialchars($_SESSION["user_name"]); ?> </h1>
        <p class="text-muted">Your one-stop online shopping platform</p>
        <a href="products.php" class="btn btn-primary">Shop Now</a>
      </div>
    </section>

    <!-- Products -->
    <section class="container py-5">
      <h3 class="mb-4 text-center">Featured Products</h3>
      <div class="row g-4">
        <div class="col-12 col-sm-6 col-md-4">
          <div class="card h-100">
            <img src="" alt="">
            <div class="card-body">
              <h5 class="card-title">Product name</h5>
              <p class="card-text">N10,000</p>
              <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div> 

      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
      crossorigin="anonymous"></script>
  </body>
</html>


